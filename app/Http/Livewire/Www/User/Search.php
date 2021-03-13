<?php

namespace App\Http\Livewire\Www\User;

use App\Models\Country;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Search extends Component
{

    public $query;
    public $users;

    public function mount()
    {
        $this->resetQuery();
    }

    public function resetQuery()
    {
        $this->query = '';
        $this->contacts = [];
    }

    /**
     * Main search of users. It get input from web and search for users with 'like' parameter
     * @return json $user_list List of users.
     */
    public function updatedQuery()
    {
        sleep(1);
        $list = User::query()->with('about_model', 'follower')
            ->where(function ($query) {
                $query->where('name', 'like', '%' . $this->query . '%')
                    ->orWhere('username', 'like', '%' . $this->query . '%');
            })->whereHas('roles', function ($q) {
                $q->where('name', "User");
            })->whereHas('notifications', function ($q) {
                $q->where('hide_profile', 0);
            })
            ->where('id', '!=', Auth::id())
            ->take(20)->get()->toArray();
        $user_list = [];
        foreach ($list as $x) {
            $x['about_model']['user_state'] = State::where('id', $x['about_model']['user_state'])->value('name');
            $x['about_model']['user_country'] = Country::where('id', $x['about_model']['user_country'])->value('name');
            array_push($user_list, $x);
        }
        $this->users = $user_list;
    }

    /**
     * Get user actual State as number then search in State table for State name.
     * @param Request $request
     * @return Json State name.
     */
    public function getState(Request $request)
    {
        $data['states'] = State::where("country_id", $request->country_id)
            ->get(["name", "id"]);
        return response()->json($data);
    }
    /**
     * Livewire render() function
     */
    public function render()
    {
        $data['countries'] = Country::get(["name", "id"]);
        return view('livewire.www.user.search', compact('data'));
    }
}
