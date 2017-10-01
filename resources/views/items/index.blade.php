@extends ('layouts.master')

@section ('meta-title')
Items | LeForme: How you get your merde.
@endsection

@section ('content')
<div class="col-md-12 mt-20">
    <div class="card">
        <div class="header">
            <div class="pull-left">
                <h4 class="title"><strong>Items</strong></h4>
                <p class="category">A list of all items. Click the pencil to edit.</p>
            </div>
            <div class="pull-right mb-20">
                <a href="/admin/items/create" class="btn btn-default btn-fill btn-wd">ADD ITEM</a>
            </div>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-striped pl-0 pr-0 mb-0">
                <thead class="lf-thead">
                    <th class="col-sm-1"><strong>ID</strong></th>
                    <th class="col-sm-5"><strong>Name</strong></th>
                    <th class="col-sm-2"><strong>Categories</strong></th>
                    <th class="col-sm-1"><strong>Company</strong></th>
                    <th class="col-sm-1 text-center"><strong>Drip</strong></th>
                    <th class="col-sm-1 text-center"><strong>Active</strong></th>
                    <th class="col-sm-1 text-center"><strong>Edit</strong></th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Cake Batter</td>
                        <td>Flavors</td>
                        <td>CAP</td>
                        <td class="text-center"></td>
                        <td class="text-center">Yes</td>
                        <td class="text-center"><a href="/admin/items/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bad Ass Blueberry</td>
                        <td>Juices, Labels</td>
                        <td></td>
                        <td class="text-center">Yes</td>
                        <td class="text-center">Yes</td>
                        <td class="text-center"><a href="/admin/items/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>30mL Bottles - Clear</td>
                        <td>Supplies</td>
                        <td></td>
                        <td class="text-center"></td>
                        <td class="text-center">Yes</td>
                        <td class="text-center"><a href="/admin/items/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Windex</td>
                        <td>Supplies</td>
                        <td></td>
                        <td class="text-center"></td>
                        <td class="text-center">Yes</td>
                        <td class="text-center"><a href="/admin/items/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Vanilla Custard</td>
                        <td>Flavors</td>
                        <td>TFA</td>
                        <td class="text-center"></td>
                        <td class="text-center">Yes</td>
                        <td class="text-center"><a href="/admin/items/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>650 Starter Kit - Black</td>
                        <td>Products</td>
                        <td></td>
                        <td class="text-center"></td>
                        <td class="text-center">Yes</td>
                        <td class="text-center"><a href="/admin/items/1"><i class="ti-pencil"></i></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection