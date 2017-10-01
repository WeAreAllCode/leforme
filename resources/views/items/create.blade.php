@extends ('layouts.master')

@section ('meta-title')
Add Item | Items | LeForme: How you get your merde.
@endsection

@section ('content')
<div class="col-lg-12 mt-20">
    <div class="card">
        <div class="header">
            <h4 class="title">Add Item</h4>
        </div>

        <div class="content">
            <form>
                <hr class="mt-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control border-input" name="name" placeholder="Name" value="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>On Drip (Juices Only)</label>
                            <div class="form-control border-input">
                                <label class="radio-inline">
                                    <input type="radio" name="is_drip" value="1">Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="is_drip" value="2">No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Company (Flavors Only)</label>
                            <div class="form-control border-input">
                                <label class="radio-inline">
                                    <input type="radio" name="company_id" value="1">CAP
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="company_id" value="2">FA
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="company_id" value="3">FW
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="company_id" value="4">LA
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="company_id" value="5">MBV
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="company_id" value="6">TFA
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Available To (Select all that apply)</label>
                            <div class="form-control border-input">
                                <label class="radio-inline">
                                    <input type="radio" name="location_id" value="1">Lab
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="location_id" value="2">Vava
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="location_id" value="3">Purple
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="location_id" value="4">Columbia
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="location_id" value="5">Charelston
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Categories (Select all that apply)</label>
                            <div class="form-control border-input">
                                <label class="radio-inline">
                                    <input type="radio" name="category_id" value="1">Flavors
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="category_id" value="2">Labels
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="category_id" value="3">Juices
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="category_id" value="4">Products
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="category_id" value="5">Supplies
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="lf-hr-mt-36">
                <div class="text-right mb-10">
                    <a href="/admin/items" class="btn btn-wd mr-10">Cancel</a>
                    <button type="submit" class="btn btn-info btn-fill btn-wd">Save</button>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
@endsection
