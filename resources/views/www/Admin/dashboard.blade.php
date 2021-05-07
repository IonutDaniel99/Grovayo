<x-admin-layout>
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="ion ion-ios-person-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Users Today</span>
                        <span class="info-box-number">{{$dashboard_data['users_today']}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-paper-plane"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Posts Today</span>
                        <span class="info-box-number">{{$dashboard_data['posts_today']}}</span>

                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-heart"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Likes Today</span>
                        <span class="info-box-number">{{$dashboard_data['likes_today']}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Accounts</span>
                        <span class="info-box-number">{{$dashboard_data['total_accounts']}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <div class="row">
            <div class="col-md-4">
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
                            @foreach($dashboard_data["latest_users"] as $user)
                            <li>
                                @if($user['profile_photo_path'])
                                <img src="/{{$user['profile_photo_path']}}" alt="{{$user['profile_photo_path']}}">
                                @else
                                <img style="width:-webkit-fill-available;" src="https://ui-avatars.com/api/?name={{$user['name']}}&color=7F9CF5&background=EBF4FF" alt="{{$user['profile_photo_path']}}">
                                @endif
                                <a class="users-list-name" href="/user/{{$user['username']}}">{{$user["name"]}}</a>
                                <span class="users-list-date">{{$user['created_at']->diffForHumans()}}</span>
                            </li>
                            @endforeach
                        </ul>
                        <!-- /.users-list -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="{{route('Users_Dashboard_Index')}}" class="uppercase">View All Users</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div>
            <div class="col-md-8">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Latest Posts</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th width="20%">User</th>
                                        <th width="70%">Content</th>
                                        <th width="10%">Likes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dashboard_data["latest_posts"] as $post)
                                    <tr>
                                        <td>{{$post['id']}}</td>
                                        <td width="20%"><a target="_blank" href="/user/{{App\Models\User::where('id',$post['author_id'])->pluck('username')->first()}}">{{App\Models\User::where('id',$post['author_id'])->pluck('name')->first()}}</a> </td>
                                        <td width="70%" style="max-width: 65%; position:absolute;" class="text-truncate">{{$post['post_description']}}</td>
                                        <td width="10%">{{$post['post_likes']}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{ $dashboard_data["latest_posts"]->links() }}
            </div>
        </div>
    </section>
</x-admin-layout>