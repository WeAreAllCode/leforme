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
                    <th class="col-sm-6"><strong>Name</strong></th>
                    <th class="col-sm-2"><strong>Categories</strong></th>
                    <th class="col-sm-1 text-center"><strong>Drip</strong></th>
                    <th class="col-sm-1 text-center"><strong>Active</strong></th>
                    <th class="col-sm-1 text-center"><strong>Edit</strong></th>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td class="text-capitalize">{{$item->name}}</td>
                            <td class="text-capitalize">
                                @foreach($item->categories as $key => $category)
                                    @if($key)
                                        ,&nbsp;
                                    @endif
                                    {{$category->name}}
                                @endforeach
                            </td>
                            <td class="text-center">{{ $item->is_drip == 1 ? 'Yes' : 'No' }}</td>
                            <td class="text-center">{{ $item->is_active == 1 ? 'Yes' : 'No' }}</td>
                            <td class="text-center"><a href="/admin/items/{{$item->id}}"><i class="ti-pencil"></i></td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection