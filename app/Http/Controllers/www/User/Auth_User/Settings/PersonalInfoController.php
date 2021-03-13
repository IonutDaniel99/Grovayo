<?php

namespace App\Http\Controllers\www\User\Auth_User\Settings;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\User_About;
use DateTime;

class PersonalInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['countries'] = Country::get(["name", "id"]);
        $user_about = User_About::all()->where('user_id', Auth::id())->first();
        return view("www.user.auth_user.settings.personal-info", compact('user_about', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user_about_model = User_About::where('user_id', Auth::id());
        $this->validate($request, [
            "full_name" => 'required|max:250|string|filled|min:8',
            "birthday" => 'date|nullable',
            "contact_email" => 'email|nullable',
            "phone_number" => array(
                'nullable',
                'regex:/^(([+][(]?[0-9]{1,3}[)]?)|([(]?[0-9]{4}[)]?))\s*[)]?[-\s\.]?[(]?[0-9]{1,3}[)]?([-\s\.]?[0-9]{3})([-\s\.]?[0-9]{3,4})/'
            ),
            "gender" => "required|string",
            "status" => "required|string",
            "country" => "required|string",
            "state" => "string|nullable",
            "city" => "string|nullable",
            "description" => 'nullable',

            "favourite_music_genre" => 'nullable|string|max:250',
            "favourite_books" => 'nullable|string|max:250',
            "favourite_music" => 'nullable|string|max:250',
            "favourite_movies" => 'nullable|string|max:250',
            "favourite_games" => 'nullable|string|max:250',
            "favourite_brands" => 'nullable|string|max:250',
            "favourite_artists" => 'nullable|string|max:250',
            "favourite_interests" => 'nullable|string|max:250',

            'education_title' => 'nullable|string',
            'education_date_start' => 'nullable|date_format:m-Y',
            'education_date_end' => 'nullable',
            'education_institute' => 'nullable|url',
            'employment_title' => 'nullable|string',
            'employment_date_start' => 'nullable|date_format:m-Y',
            'employment_date_end' => 'nullable',
            'employment_company' => 'nullable|url',
        ]);

        if (is_null($request['state']) || $request['state'] == "Select State First") {
            $request['state'] == NULL;
        }
        if (is_null($request['city']) || $request['city'] == "Select City") {
            $request['city'] == NULL;
        }

        if ($this->validateDate($request['education_date_end']) || $request['education_date_end'] == "Present") {
            $this->validate($request, [
                'education_date_end' => 'nullable'
            ]);
        } else {
            $this->validate($request, [
                'education_date_end' => 'nullable|date_format:m-Y'
            ]);
        }

        if ($this->validateDate($request['employment_date_end']) || $request['employment_date_end'] == "Present") {
            $this->validate($request, [
                'employment_date_end' => 'nullable'
            ]);
        } else {
            $this->validate($request, [
                'employment_date_end' => 'nullable|date_format:m-Y'
            ]);
        }

        User::where('id', Auth::id())->update([
            'name' => $request['full_name']
        ]);

        $user_about_model->update([
            'birthday' => $request['birthday'],
            'contact_email' => $request['contact_email'],
            'phone_number' => $request['phone_number'],
            'gender' => $request['gender'],
            'status' => $request['status'],
            'user_country' => $request['country'],
            'user_state' => $request['state'],
            'user_city' => $request['city'],
            'about' => $request['description'],

            "favourite_music_genre" => $request['favourite_music_genre'],
            "favourite_books" => $request['favourite_books'],
            "favourite_music" => $request['favourite_music'],
            "favourite_movies" => $request['favourite_movies'],
            "favourite_games" => $request['favourite_games'],
            "favourite_brands" => $request['favourite_brands'],
            "favourite_artists" => $request['favourite_artists'],
            "favourite_interests" => $request['favourite_interests'],

            'education_title' => $request['education_title'],
            'education_date_start' => $request['education_date_start'],
            'education_date_end' => $request['education_date_end'],
            'education_institute' => $request['education_institute'],
            'employment_title' => $request['employment_title'],
            'employment_date_start' => $request['employment_date_start'],
            'employment_date_end' => $request['employment_date_end'],
            'employment_company' => $request['employment_company'],
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @return json State country
     */
    public function getState(Request $request)
    {
        $data['states'] = State::where("country_id", $request->country_id)
            ->get(["name", "id"]);
        return response()->json($data);
    }
    /**
     * @return json Country cities
     */
    public function getCity(Request $request)
    {
        $data['cities'] = City::where("state_id", $request->state_id)
            ->get(["name", "id"]);
        return response()->json($data);
    }

    /**
     * Verify if its a date or "present" string
     * @param Data $date input data
     * @param string $format format of data
     * @return Data
     */

    public function validateDate($date, $format = 'm-Y')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) === $date;
    }
}
