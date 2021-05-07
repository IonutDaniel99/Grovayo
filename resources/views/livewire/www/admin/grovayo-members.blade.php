<div>
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">Grovayo Members</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <ul class="users-list clearfix">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Roles</th>
                                <th class="d-flex align-items-center justify-content-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($latest_users as $user)
                            <tr>
                                <td>{{$user['id']}}</td>
                                <td>
                                    @if($user['profile_photo_path'])
                                    <img style="width:48px;" src="/{{$user['profile_photo_path']}}" alt="{{$user['profile_photo_path']}}">
                                    @else
                                    <img style="width:48px;" src="https://ui-avatars.com/api/?name={{$user['name']}}&color=7F9CF5&background=EBF4FF" alt="{{$user['profile_photo_path']}}">
                                    @endif
                                </td>
                                <td>{{$user['name']}}</td>
                                <td>{{$user['roles']->pluck('name')->first()}}</td>
                                <td class="d-flex align-items-center justify-content-center">
                                    @if($user['id'] !== 1 && $user['id'] !== Auth::id())
                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-outline-danger btn-simple-danger" wire:click="delete_user({{$user['id']}})" data-original-title="Remove">
                                        <i class="fa fa-close"></i>
                                    </button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </ul>
        </div>
    </div>

    @can('Owner')
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">Add User</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                </button>
            </div>
        </div>

        <div class="box-body py-2 ">
            <form wire:submit.prevent="add_new_member">
                <input style="margin: 5px 0px;" wire:model.lazy="first_name" placeholder="Name" class="form-control" type="text">
                @error('first_name') <span class="error">{{ $message }}</span> @enderror
                <input style="margin: 5px 0px;" wire:model.lazy="username" placeholder="Username" class="form-control" type="text">
                @error('username') <span class="error">{{ $message }}</span> @enderror
                <input style="margin: 5px 0px;" wire:model.lazy="email" placeholder="Email" class="form-control" type="text">
                @error('email') <span class="error">{{ $message }}</span> @enderror
                <input style="margin: 5px 0px;" wire:model.lazy="password" placeholder="Password" class="form-control" type="text">
                @error('password') <span class="error">{{ $message }}</span> @enderror
                <select id="role" wire:model="role" style="margin: 5px 0px;" class="form-control">
                    @foreach($roles as $role)
                    <option value="{{ $role->name }}" {{ $user->roles->contains($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
    </div>
    @endcan
</div>