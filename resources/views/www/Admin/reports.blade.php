<x-admin-layout>
    <div class="col-md-6 py-3">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Latest Reports</h3>
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
                                <th>Reported Content</th>
                                <th>Reported By</th>
                                <th>Date</th>
                                <th class="d-flex align-items-center justify-content-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dashboard_data as $report)
                            <tr>
                                <td><a href="/users/">{{$report['id']}}</a></td>
                                <td style="max-width: 20%; position:absolute;" class="text-truncate">{{App\Models\User_Posts::where('id',$report['post_id'])->pluck('post_description')->first()}}</td>
                                <td>{{App\Models\User::where('id',$report['user_id'])->pluck('name')->first()}}</td>
                                <td>{{{$report['created_at']->diffForHumans()}}}</td>
                                <td class="d-flex align-items-center justify-content-center">
                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-outline-success btn-simple-primary" data-original-title="View">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-outline-primary btn-simple-primary" data-original-title="Edit Task">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-outline-danger btn-simple-danger" data-original-title="Remove">
                                        <i class="fa fa-close"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
        </div>
    </div>
</x-admin-layout>