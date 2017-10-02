@extends ('layouts.master')

@section ('meta-title')
Companies | LeForme: How you get your merde.
@endsection

@section ('content')
<div class="col-md-12 mt-20">
    <div class="card">
        <div class="header">
            <div class="pull-left">
                <h4 class="title"><strong>Companies</strong></h4>
                <p class="category">A list of all companies. Click the pencil to edit.</p>
            </div>
            <div class="pull-right mb-20">
                <a href="/admin/companies/create" class="btn btn-default btn-fill btn-wd">ADD COMPANY</a>
            </div>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-striped pl-0 pr-0 mb-0">
                <thead class="lf-thead">
                    <th class="col-sm-1"><strong>ID</strong></th>
                    <th class="col-sm-8"><strong>Name</strong></th>
                    <th class="col-sm-1"><strong>Short</strong></th>
                    <th class="col-sm-1 text-center"><strong>Active</strong></th>
                    <th class="col-sm-1 text-center"><strong>Edit</strong></th>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <td>{{$company->id}}</td>
                            <td class="text-capitalize">{{$company->name}}</td>
                            <td class="text-uppercase">{{$company->short_name}}</td>
                            <td class="text-center">{{ $company->is_active == 1 ? 'Yes' : 'No' }}</td>
                            <td class="text-center"><a href="/admin/companies/{{$company->id}}"><i class="ti-pencil"></i></td>
                        </tr>
                    @endforeach
                    {{-- <tr>
                        <td>2</td>
                        <td>Flavor Art</td>
                        <td>FA</td>
                        <td class="text-center">Yes</td>
                        <td class="text-center"><a href="/admin/companies/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Flavor West</td>
                        <td>FW</td>
                        <td class="text-center">Yes</td>
                        <td class="text-center"><a href="/admin/companies/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>The Flavor Apprentice</td>
                        <td>TFA</td>
                        <td class="text-center">Yes</td>
                        <td class="text-center"><a href="/admin/companies/1"><i class="ti-pencil"></i></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Lorann</td>
                        <td>LA</td>
                        <td class="text-center">Yes</td>
                        <td class="text-center"><a href="/admin/companies/1"><i class="ti-pencil"></i></td>
                    </tr> --}}
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection