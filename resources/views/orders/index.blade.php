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
                    <th><strong>Category</strong></th>
                	<th class="text-center"><strong>Items</strong></th>
                	<th class="text-center"><strong>Active</strong></th>
                </thead>
                <tbody>
                    <tr>
                    	<td>1</td>
                    	<td>Sep 29, 2017</td>
                    	<td>Joey B.</td>
                        <td>Supplies</td>
                    	<td class="text-center">12</td>
                    	<td class="text-center"><a href="/orders/id"><i class="ti-eye"></i></td>
                    </tr>
                    <tr>
                    	<td>2</td>
                        <td>Sep 26, 2017</td>
                        <td>Todd</td>
                        <td>Products</td>
                        <td class="text-center">4</td>
                        <td class="text-center"><a href="/orders/id"><i class="ti-eye"></i></td>
                    </tr>
                    <tr>
                    	<td>3</td>
                        <td>Sep 19, 2017</td>
                        <td>John J.</td>
                        <td>Flavors</td>
                        <td class="text-center">26</td>
                        <td class="text-center"><a href="/orders/id"><i class="ti-eye"></i></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Sep 03, 2017</td>
                        <td>John J.</td>
                        <td>Supplies</td>
                        <td class="text-center">1</td>
                        <td class="text-center"><a href="/orders/id"><i class="ti-eye"></i></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Aug 21, 2017</td>
                        <td>Sammy</td>
                        <td>Juices</td>
                        <td class="text-center">12</td>
                        <td class="text-center"><a href="/orders/id"><i class="ti-eye"></i></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Aug 20, 2017</td>
                        <td>John J.</td>
                        <td>Labels</td>
                        <td class="text-center">8</td>
                        <td class="text-center"><a href="/orders/id"><i class="ti-eye"></i></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection