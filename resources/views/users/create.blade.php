@extends ('layouts.master')

@section ('meta-title')
Add User | Users | LeForme: How you get your merde.
@endsection

@section ('content')
<div class="col-md-12 mt-20">
    <div class="card">
        <div class="header">
            <h4 class="title">Add User</h4>
        </div>

        <div class="content">
            <form>
                <hr class="mt-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control border-input" placeholder="First Name" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control border-input" placeholder="Last Name" value="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" class="form-control border-input" placeholder="Email Address" value="">
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
                                    <input type="radio" name="name" value="1">Admin
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
                    <button type="submit" class="btn btn-info btn-fill btn-wd">Add User</button>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
@endsection
