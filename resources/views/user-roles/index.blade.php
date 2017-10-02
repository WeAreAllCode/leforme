@extends ('layouts.master')

@section ('meta-title')
User Roles | LeForme: How you get your merde.
@endsection

@section ('content')
<div class="col-md-12 mt-20">
    <div class="card">
        <div class="header">
            <div class="pull-left">
                <h4 class="title"><strong>User Roles</strong></h4>
                <p class="category">A list of all user roles. Click the pencil to edit.</p>
            </div>
            <div class="pull-right mb-20">
                <a href="/admin/user-roles/create" class="btn btn-default btn-fill btn-wd">ADD USER ROLE</a>
            </div>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-striped pl-0 pr-0 mb-0">
                <thead class="lf-thead">
                    <th class="col-sm-1"><strong>ID</strong></th>
                	<th class="col-sm-10"><strong>Name</strong></th>
                	<th class="text-center col-sm-1"><strong>Edit</strong></th>
                </thead>
                <tbody>
                    @foreach ($userRoles as $role)
                        <tr>
                        	<td>{{ $role->id }}</td>
                        	<td class="text-capitalize">{{ $role->role}}</td>
                        	<td class="text-center"><a href="/admin/user-roles/1"><i class="ti-pencil"></i></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection