@extends ('layouts.master')

@section ('meta-title')
Add Company | Companies | LeForme: How you get your merde.
@endsection

@section ('content')
<div class="col-lg-12 mt-20">
    <div class="card">
        <div class="header">
            <h4 class="title">Add Company</h4>
        </div>

        <div class="content">
            <form>
                <hr class="mt-0">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control border-input" name="name" placeholder="Name" value="Capella">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Short Name</label>
                            <input type="text" class="form-control border-input" name="short_name" placeholder="Short Name" value="CAP">
                        </div>
                    </div>
                </div>
                <hr class="lf-hr-mt-36">
                <div class="text-right mb-10">
                    <a href="/admin/companies" class="btn btn-wd mr-10">Cancel</a>
                    <button type="submit" class="btn btn-info btn-fill btn-wd">Add Company</button>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
@endsection
