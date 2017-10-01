@extends ('layouts.master')

@section ('meta-title')
Sizes | LeForme: How you get your merde.
@endsection

@section ('content')
<div class="col-md-12 mt-20">
    <div class="card">
        <div class="header">
            <div class="pull-left">
                <h4 class="title"><strong>Sizes</strong></h4>
                <p class="category">A list of all sizes. Click the pencil to edit.</p>
            </div>
            <div class="pull-right mb-20">
                <a href="/admin/sizes/create" class="btn btn-default btn-fill btn-wd">ADD SIZE</a>
            </div>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-striped pl-0 pr-0 mb-0">
                <thead class="lf-thead">
                    <th class="col-sm-1"><strong>ID</strong></th>
                    <th class="col-sm-7"><strong>Name</strong></th>
                    <th class="col-sm-2 text-center"><strong>Active</strong></th>
                    <th class="col-sm-2 text-center"><strong>Edit</strong></th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>16 oz</td>
                        <td class="text-center">Yes</td>
                        <td class="text-center"><a href="/admin/sizes/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>32 oz</td>
                        <td class="text-center">Yes</td>
                        <td class="text-center"><a href="/admin/sizes/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>64 oz</td>
                        <td class="text-center">Yes</td>
                        <td class="text-center"><a href="/admin/sizes/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>1 gal</td>
                        <td class="text-center">Yes</td>
                        <td class="text-center"><a href="/admin/sizes/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>2 gal</td>
                        <td class="text-center">Yes</td>
                        <td class="text-center"><a href="/admin/sizes/1"><i class="ti-pencil"></i></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection