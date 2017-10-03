@extends ('layouts.master')

@section ('meta-title')
Add Category | Categories | LeForme: How you get your merde.
@endsection

@section ('content')
<div class="col-md-12 mt-20">
    <div class="card">
        <div class="header">
            <h4 class="title">Add Category</h4>
        </div>

        <div class="content">
            <form>
                <hr class="mt-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" class="form-control border-input" placeholder="Category Name" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                </div>
                
                <hr class="lf-hr-mt-36">
                <div class="text-right mb-10">
                    <a href="/admin/categories" class="btn btn-wd mr-10">Cancel</a>
                    <button type="submit" class="btn btn-info btn-fill btn-wd">Add Category</button>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
@endsection
