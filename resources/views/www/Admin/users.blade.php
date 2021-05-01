<x-admin-layout>
    <section class="content-header">
        <h1>
            Users Management
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Users Management</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-4">
                <livewire:www.admin.grovayo-members />
            </div>
            <div class="col-md-8">
                <livewire:www.admin.latest-members />
            </div>
        </div>
    </section>
</x-admin-layout>