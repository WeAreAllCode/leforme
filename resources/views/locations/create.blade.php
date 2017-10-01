@extends ('layouts.master')

@section ('meta-title')
Add Location | Locations | LeForme: How you get your merde.
@endsection

@section ('content')
<div class="col-md-12 mt-20">
    <div class="card">
        <div class="header">
            <h4 class="title">Add Location</h4>
        </div>

        <div class="content">
            <form>
                <hr class="mt-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Location Name</label>
                            <input type="text" class="form-control border-input" placeholder="Location Name" name="name">
                        </div>
                    </div>
                </div>
                
                <hr class="lf-hr-mt-36">
                <div class="text-right mb-10">
                    <a href="/admin/locations" class="btn btn-wd mr-10">Cancel</a>
                    <button type="submit" class="btn btn-info btn-fill btn-wd">Add Location</button>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
@endsection
