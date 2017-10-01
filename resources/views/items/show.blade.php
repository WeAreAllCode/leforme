@extends ('layouts.master')

@section ('meta-title')
Cake Batter | Items | LeForme: How you get your merde.
@endsection

@section ('content')
<div class="col-lg-4 col-md-5 mt-20">
    <div class="card card-user">
        <div class="image">
            <img src="/img/background.jpg" alt="User Graphic"/>
        </div>
        <div class="content">
            <div class="author">
              <img class="avatar border-white" src="/img/faces/face-2.jpg" alt="..."/>
              <h4 class="title">Cake Batter<br />
                 <a href="mailto:chet@moticorp.com"><small>Flavor</small></a>
              </h4>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <div class="row">
                <h5 class="mb-0">Item Order Statistics</h5>
            </div>
            <div class="row">
                <div class="col-sm-3 col-md-3 col-sm-offset-1 col-md-offset-1">
                    <h5>1<br /><small>Month</small></h5>
                </div>
                <div class="col-sm-4 col-md-4">
                    <h5>2<br /><small>6 Months</small></h5>
                </div>
                <div class="col-sm-3 col-md-3">
                    <h5>34<br /><small>Life</small></h5>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <div class="row">
                <div class="col-md-12">
                    <h5>Mar. 6, 2017<br /><small>Last Ordered</small></h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-7 mt-20">
    <div class="card">
        <div class="header">
            <h4 class="title">Edit Item</h4>
        </div>

        <div class="content">
            <form>
                <hr class="mt-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control border-input" name="name" placeholder="Name" value="Cake Batter">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Status</label>
                            <div class="form-control border-input">
                                <label class="radio-inline">
                                    <input type="radio" name="is_active" value="1" checked="checked">Active
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="is_active" value="2">Inactive
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>On Drip (Juices Only)</label>
                            <div class="form-control border-input">
                                <label class="radio-inline">
                                    <input type="radio" name="is_drip" value="1" checked="checked">Yes
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
                                    <input type="radio" name="company_id" value="1" checked="checked">CAP
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
                                    <input type="radio" name="location_id" value="1" checked="checked">Lab
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
                                    <input type="radio" name="category_id" value="1" checked="checked">Flavors
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
