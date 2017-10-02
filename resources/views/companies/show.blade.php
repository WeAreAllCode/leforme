@extends ('layouts.master')

@section ('meta-title')
{{$company->name}} | Companies | LeForme: How you get your merde.
@endsection

@section ('content')
<div class="col-lg-12 mt-20">
    <div class="card">
        <div class="header">
            <h4 class="title">Edit Company</h4>
        </div>

        <div class="content">
            <form>
                <hr class="mt-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control border-input" name="name" placeholder="Name" value="{{$company->name}}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Short Name</label>
                            <input type="text" class="form-control border-input" name="short_name" placeholder="Short Name" value="{{$company->short_name}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Status</label>
                            <div class="form-control border-input">
                                <label class="radio-inline">
                                    <input type="radio" name="is_active" value="1" 
                                    {{ $company->is_active == 1 ? 'checked="checked"' : '' }}
                                    >Active
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="is_active" value="2"
                                    {{ $company->is_active != 1 ? 'checked="checked"' : '' }}
                                    >Inactive
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="lf-hr-mt-36">
                <div class="text-right mb-10">
                    <a href="/admin/companies" class="btn btn-wd mr-10">Cancel</a>
                    <button type="submit" class="btn btn-info btn-fill btn-wd">Save</button>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
@endsection
