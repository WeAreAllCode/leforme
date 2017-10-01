@extends ('layouts.master')

@section ('meta-title')
Users | LeForme: How you get your merde.
@endsection

@section ('content')
<div class="col-md-12 mt-20">
    <div class="card">
        <div class="header">
            <div class="pull-left">
                <h4 class="title"><strong>Users</strong></h4>
                <p class="category">A list of all users. Click the pencil to edit.</p>
            </div>
            <div class="pull-right mb-20">
                <a href="/admin/users/create" class="btn btn-default btn-fill btn-wd">ADD USER</a>
            </div>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-striped pl-0 pr-0 mb-0">
                <thead class="lf-thead">
                    <th><strong>ID</strong></th>
                	<th><strong>Name</strong></th>
                	<th><strong>Email</strong></th>
                    <th><strong>Role</strong></th>
                	<th class="text-center"><strong>Active</strong></th>
                	<th class="text-center"><strong>Edit</strong></th>
                </thead>
                <tbody>
                    <tr>
                    	<td>1</td>
                    	<td>Dakota Rice</td>
                    	<td>joey@moticorp.com</td>
                        <td>Admin</td>
                    	<td class="text-center">Yes</td>
                    	<td class="text-center"><a href="/admin/users/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                    	<td>2</td>
                    	<td>Minerva Hooper</td>
                    	<td>emily@moticorp.com</td>
                        <td>Manager</td>
                    	<td class="text-center">Yes</td>
                    	<td class="text-center"><a href="/admin/users/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                    	<td>3</td>
                    	<td>Sage Rodriguez</td>
                    	<td>john@moticorp.com</td>
                        <td>Lab</td>
                    	<td class="text-center">Yes</td>
                    	<td class="text-center"><a href="/admin/users/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                    	<td>4</td>
                    	<td>Philip Chaney</td>
                    	<td>steve@moticorp.com</td>
                        <td>Chuck</td>
                    	<td class="text-center">Yes</td>
                    	<td class="text-center"><a href="/admin/users/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                    	<td>5</td>
                    	<td>Doris Greene</td>
                    	<td>rich@moticorp.com</td>
                        <td>Columbia</td>
                    	<td class="text-center">Yes</td>
                    	<td class="text-center"><a href="/admin/users/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                    	<td>6</td>
                    	<td>Mason Porter</td>
                    	<td>mason@gmail.com</td>
                        <td>Purple</td>
                    	<td class="text-center">No</td>
                    	<td class="text-center"><a href="/admin/users/1"><i class="ti-pencil"></i></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection