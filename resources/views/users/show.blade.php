@extends ('layouts.master')

@section ('meta-title')
Chet Faker | Users | LeForme: How you get your merde.
@endsection

@section ('content')
<div class="col-lg-4 col-md-5 mt-20 pr-0">
    <div class="card card-user">
        <div class="image">
            <img src="/img/background.jpg" alt="..."/>
        </div>
        <div class="content">
            <div class="author">
              <img class="avatar border-white" src="/img/faces/face-2.jpg" alt="..."/>
              <h4 class="title">Chet Faker<br />
                 <a href="mailto:chet@moticorp.com"><small>chet@moticorp.com</small></a>
              </h4>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <div class="row">
                <h5 class="mb-0">Users Order Statistics</h5>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                    <h5>1<br /><small>Week</small></h5>
                </div>
                <div class="col-md-4">
                    <h5>2<br /><small>Month</small></h5>
                </div>
                <div class="col-md-3">
                    <h5>34<br /><small>Life Time</small></h5>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <div class="row">
                <div class="col-md-12">
                    <h5>Sept. 27, 2017<br /><small>Last Order</small></h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-7 mt-20">
    <div class="card">
        <div class="header">
            <h4 class="title">Edit User</h4>
        </div>

        <div class="content">
            <form>
                <hr class="mt-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control border-input" placeholder="First Name" value="Chet">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control border-input" placeholder="Last Name" value="Faker">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" class="form-control border-input" placeholder="Email Address" value="chet@moticorp.com">
                        </div>
                    </div>
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
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Role</label>
                            <div class="form-control border-input">
                                <label class="radio-inline">
                                    <input type="radio" name="name" value="1" checked="checked">Admin
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="name" value="2">Manager
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="name" value="3">Lab
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="name" value="4">Vava
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="name" value="5">Purple
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="name" value="6">Columbia
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="name" value="7">Chuck
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="lf-hr-mt-36">
                <div class="text-right mb-10">
                    <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
@endsection
