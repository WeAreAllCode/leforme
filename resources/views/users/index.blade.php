@extends ('layouts.master')

@section ('meta-title')
Users | LeForme: How you get your merde.
@endsection

@section ('content')
<div class="col-md-12 mt-20">
    <div class="card">
        <div class="header">
            <h4 class="title"><strong>Users</strong></h4>
            <p class="category">A list of all users. Click to edit. (hopefully)</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-striped pl-0 pr-0 mb-0">
                <thead class="lf-thead">
                    <th><strong>ID</strong></th>
                	<th><strong>Name</strong></th>
                	<th><strong>Email</strong></th>
                    <th><strong>Role</strong></th>
                	<th><strong>Active</strong></th>
                	<th><strong>Actions</strong></th>
                </thead>
                <tbody>
                    <tr>
                    	<td>1</td>
                    	<td>Dakota Rice</td>
                    	<td>joey@moticorp.com</td>
                        <td>Admin</td>
                    	<td>Yes</td>
                    	<td>X</td>
                    </tr>
                    <tr>
                    	<td>2</td>
                    	<td>Minerva Hooper</td>
                    	<td>emily@moticorp.com</td>
                        <td>Manager</td>
                    	<td>Yes</td>
                    	<td>X</td>
                    </tr>
                    <tr>
                    	<td>3</td>
                    	<td>Sage Rodriguez</td>
                    	<td>john@moticorp.com</td>
                        <td>Lab</td>
                    	<td>Yes</td>
                    	<td>X</td>
                    </tr>
                    <tr>
                    	<td>4</td>
                    	<td>Philip Chaney</td>
                    	<td>steve@moticorp.com</td>
                        <td>Chuck</td>
                    	<td>Yes</td>
                    	<td>X</td>
                    </tr>
                    <tr>
                    	<td>5</td>
                    	<td>Doris Greene</td>
                    	<td>rich@moticorp.com</td>
                        <td>Columbia</td>
                    	<td>Yes</td>
                    	<td>X</td>
                    </tr>
                    <tr>
                    	<td>6</td>
                    	<td>Mason Porter</td>
                    	<td>mason@gmail.com</td>
                        <td>Purple</td>
                    	<td>No</td>
                    	<td>X</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection