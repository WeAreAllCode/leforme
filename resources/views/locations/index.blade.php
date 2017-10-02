@extends ('layouts.master')

@section ('meta-title')
Locations | LeForme: How you get your merde.
@endsection

@section ('content')
<div class="col-md-12 mt-20">
    <div class="card">
        <div class="header">
            <div class="pull-left">
                <h4 class="title"><strong>Locations</strong></h4>
                <p class="category">A list of all locations. Click the pencil to edit.</p>
            </div>
            <div class="pull-right mb-20">
                <a href="/admin/locations/create" class="btn btn-default btn-fill btn-wd">ADD LOCATION</a>
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
                    @foreach ($locations as $location)
                        <tr>
                            <td>{{$location->id}}</td>
                            <td class="text-capitalize">{{$location->name}}</td>
                            <td class="text-center">{{ $location->is_active == 1 ? 'Yes' : 'No' }}</td>
                            <td class="text-center"><a href="/admin/locations/{{$location->id}}"><i class="ti-pencil"></i></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection