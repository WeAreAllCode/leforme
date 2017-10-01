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
                <a href="/admin/user-roles/create" class="btn btn-default btn-fill btn-wd">ADD USER</a>
            </div>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-striped pl-0 pr-0 mb-0">
                <thead class="lf-thead">
                    <th class="col-sm-1"><strong>ID</strong></th>
                	<th class="col-sm-9"><strong>Name</strong></th>
                	<th class="text-center col-sm-2"><strong>Edit</strong></th>
                </thead>
                <tbody>
                    <tr>
                    	<td>1</td>
                    	<td>Admin</td>
                    	<td class="text-center"><a href="/admin/user-roles/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                    	<td>2</td>
                    	<td>Manager</td>
                    	<td class="text-center"><a href="/admin/user-roles/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                    	<td>3</td>
                    	<td>Staff-Lab</td>
                    	<td class="text-center"><a href="/admin/user-roles/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                    	<td>4</td>
                    	<td>Staff-Vava</td>
                    	<td class="text-center"><a href="/admin/user-roles/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                    	<td>5</td>
                    	<td>Staff-Purple</td>
                    	<td class="text-center"><a href="/admin/user-roles/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                    	<td>6</td>
                    	<td>Staff-Columbia</td>
                    	<td class="text-center"><a href="/admin/user-roles/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Staff-Charleston</td>
                        <td class="text-center"><a href="/admin/user-roles/1"><i class="ti-pencil"></i></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection