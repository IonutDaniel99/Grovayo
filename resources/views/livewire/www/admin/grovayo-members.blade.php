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
                                    @if($user['id'] !== 1)
                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-outline-primary btn-simple-primary" data-original-title="Edit Task">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-outline-danger btn-simple-danger" data-original-title="Remove">
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

        <div class="box-body no-padding">
            <form wire:submit.prevent="add_new_member">
                <input type="button" value="name">
                <input type="button" value="username">
                <input type="button" value="email">
                <input type="button" value="password">
                <input type="button" value="role">
                <input type="submit" value="Send">
            </form>
        </div>
    </div>
</div>