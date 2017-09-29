@extends ('layouts.master')

@section ('meta-title')
Orders | LeForme: How you get your merde.
@endsection

@section ('content')
<div class="col-md-12 mt-20">
    <div class="card">
        <div class="header">
            <h4 class="title"><strong>Orders</strong></h4>
            <p class="category">A list of all orders. Click to edit. (hopefully)</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-striped pl-0 pr-0 mb-0">
                <thead class="lf-thead">
                    <th><strong>ID</strong></th>
                	<th><strong>Date</strong></th>
                	<th><strong>User</strong></th>
                	<th><strong>Items</strong></th>
                	<th class="text-right"><strong>Active</strong></th>
                </thead>
                <tbody>
                    <tr>
                    	<td>1</td>
                    	<td>Dakota Rice</td>
                    	<td>$36,738</td>
                    	<td>Tiger</td>
                    	<td class="text-right"><input type="checkbox" checked data-toggle="toggle" data-size="mini"></td>
                    </tr>
                    <tr>
                    	<td>2</td>
                    	<td>Minerva Hooper</td>
                    	<td>$23,789</td>
                    	<td>Curaçao</td>
                    	<td class="text-right"><input type="checkbox" checked data-toggle="toggle" data-size="mini"></td>
                    </tr>
                    <tr>
                    	<td>3</td>
                    	<td>Sage Rodriguez</td>
                    	<td>$56,142</td>
                    	<td>Netherlands</td>
                    	<td class="text-right"><input type="checkbox" checked data-toggle="toggle" data-size="mini"></td>
                    </tr>
                    <tr>
                    	<td>4</td>
                    	<td>Philip Chaney</td>
                    	<td>$38,735</td>
                    	<td>Korea, South</td>
                    	<td class="text-right"><input type="checkbox" checked data-toggle="toggle" data-size="mini"></td>
                    </tr>
                    <tr>
                    	<td>5</td>
                    	<td>Doris Greene</td>
                    	<td>$63,542</td>
                    	<td>Malawi</td>
                    	<td class="text-right"><input type="checkbox" checked data-toggle="toggle" data-size="mini"></td>
                    </tr>
                    <tr>
                    	<td>6</td>
                    	<td>Mason Porter</td>
                    	<td>$78,615</td>
                    	<td>Chile</td>
                    	<td class="text-right"><input type="checkbox" checked data-toggle="toggle" data-size="mini"></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection