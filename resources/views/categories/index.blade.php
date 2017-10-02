@extends ('layouts.master')

@section ('meta-title')
Categories | LeForme: How you get your merde.
@endsection

@section ('content')
<div class="col-md-12 mt-20">
    <div class="card">
        <div class="header">
            <div class="pull-left">
                <h4 class="title"><strong>Categories</strong></h4>
                <p class="category">A list of all categories. Click the pencil to edit.</p>
            </div>
            <div class="pull-right mb-20">
                <a href="/admin/categories/create" class="btn btn-default btn-fill btn-wd">ADD CATEGORY</a>
            </div>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-striped pl-0 pr-0 mb-0">
                <thead class="lf-thead">
                    <th class="col-sm-1"><strong>ID</strong></th>
                    <th class="col-sm-9"><strong>Name</strong></th>
                    <th class="col-sm-1 text-center"><strong>Active</strong></th>
                    <th class="col-sm-1 text-center"><strong>Edit</strong></th>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td class="text-capitalize">{{$category->name}}</td>
                            <td class="text-center">{{ $category->is_active == 1 ? 'Yes' : 'No' }}</td>
                            <td class="text-center"><a href="/admin/categories/{{$category->id}}"><i class="ti-pencil"></i></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection