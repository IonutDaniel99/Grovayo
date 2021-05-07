<div>
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">Latest Members</h3>

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
                                <th>Username</th>
                                <th>Email / Verified / Platform</th>
                                <th>Created At</th>
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
                                <td>{{$user['username']}}</td>
                                <td>{{$user['email']}}
                                    @if($user['email_verified_at'])
                                    <img style="color:green" src="https://icons-for-free.com/iconfiles/png/16/verified+user+24px-131985194345437477.png" alt="" srcset="">
                                    @else
                                    <img style="color:red" src="https://icons-for-free.com/iconfiles/png/16/x+fill-1324438799936220404.png" alt="" srcset="">
                                    @ENDIF
                                    @if($user['fb_id'])
                                    <img src="https://icons-for-free.com/iconfiles/png/16/fb+icon+icon-1320194800710174105.png" alt="" srcset="">
                                    @elseif($user['google_id'])
                                    <img src="https://icons-for-free.com/iconfiles/png/16/google+plus-131994968067035383.png" alt="" srcset="">
                                    @endif
                                </td>
                                <td>{{$user['created_at']->diffForHumans()}}</td>
                                <td class="d-flex align-items-center justify-content-center">
                                    <a target="_blank" href="/user/{{$user['username']}}" style="color:black;" type="button" data-toggle="tooltip" title="" class="btn btn-outline-success btn-simple-primary" data-original-title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-outline-primary btn-simple-primary" data-original-title="Edit Task">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    @can('Moderator')
                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-outline-danger btn-simple-danger" data-original-title="Remove">
                                        <i class="fa fa-close"></i>
                                    </button>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $latest_users->links() }}
            </ul>
        </div>
    </div>
</div>