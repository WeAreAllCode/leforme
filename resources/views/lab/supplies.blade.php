@extends ('layouts.master')

@section ('meta-title')
Supplies Form | The Lab | LeForme: How you get your merde.
@endsection

@section ('content')
<div class="col-md-12 mt-20">
    
    <div class="header">
        <h2 class="title mb-20">Order Supplies</h2>
    </div>

	<form>
		<div class="row">
			<div class="col-xs-12">
				
				<div class="card color-tab-left">
			        <div class="content">
		                <div class="row">
		                    <div class="form-group">
		                    	<div class="col-xs-8">
		                        	<label>30mL Bottles-Clear</label>
		                        </div>
		                        <div class="col-xs-4 text-right">
		                            <label class="radio-inline">
		                                <input type="radio" name="30mL Bottles-Clear" value="1" checked="checked">No
		                            </label>
		                            <label class="radio-inline">
		                                <input type="radio" name="30mL Bottles-Clear" value="2">Yes
		                            </label>
		                        </div>
		                    </div>
		                </div>
			        </div>
			    </div>

			    <div class="card color-tab-left">
			        <div class="content">
		                <div class="row">
		                    <div class="form-group">
		                    	<div class="col-xs-8">
		                        	<label>30mL Bottles-Smoke</label>
		                        </div>
		                        <div class="col-xs-4 text-right">
		                            <label class="radio-inline">
		                                <input type="radio" name="30mL Bottles-Smoke" value="1" checked="checked">No
		                            </label>
		                            <label class="radio-inline">
		                                <input type="radio" name="30mL Bottles-Smoke" value="2">Yes
		                            </label>
		                        </div>
		                    </div>
		                </div>
			        </div>
			    </div>

			    <div class="card color-tab-left">
			        <div class="content">
		                <div class="row">
		                    <div class="form-group">
		                    	<div class="col-xs-8">
		                        	<label>120mL Bottles-Clear</label>
		                        </div>
		                        <div class="col-xs-4 text-right">
		                            <label class="radio-inline">
		                                <input type="radio" name="120mL Bottles-Clear" value="1" checked="checked">No
		                            </label>
		                            <label class="radio-inline">
		                                <input type="radio" name="120mL Bottles-Clear" value="2">Yes
		                            </label>
		                        </div>
		                    </div>
		                </div>
			        </div>
			    </div>
			    <div class="card color-tab-left">
			        <div class="content">
		                <div class="row">
		                    <div class="form-group">
		                    	<div class="col-xs-8">
		                        	<label>120mL Bottles-Smoke</label>
		                        </div>
		                        <div class="col-xs-4 text-right">
		                            <label class="radio-inline">
		                                <input type="radio" name="120mL Bottles-Smoke" value="1" checked="checked">No
		                            </label>
		                            <label class="radio-inline">
		                                <input type="radio" name="120mL Bottles-Smoke" value="2">Yes
		                            </label>
		                        </div>
		                    </div>
		                </div>
			        </div>
			    </div>
			    <div class="card color-tab-left">
			        <div class="content">
		                <div class="row">
		                    <div class="form-group">
		                    	<div class="col-xs-8">
		                        	<label>Caps-White</label>
		                        </div>
		                        <div class="col-xs-4 text-right">
		                            <label class="radio-inline">
		                                <input type="radio" name="Caps-White" value="1" checked="checked">No
		                            </label>
		                            <label class="radio-inline">
		                                <input type="radio" name="Caps-White" value="2">Yes
		                            </label>
		                        </div>
		                    </div>
		                </div>
			        </div>
			    </div>
			    <div class="card color-tab-left">
			        <div class="content">
		                <div class="row">
		                    <div class="form-group">
		                    	<div class="col-xs-8">
		                        	<label>Caps-Green</label>
		                        </div>
		                        <div class="col-xs-4 text-right">
		                            <label class="radio-inline">
		                                <input type="radio" name="Caps-Green" value="1" checked="checked">No
		                            </label>
		                            <label class="radio-inline">
		                                <input type="radio" name="Caps-Green" value="2">Yes
		                            </label>
		                        </div>
		                    </div>
		                </div>
			        </div>
			    </div>
			    <div class="card color-tab-left">
			        <div class="content">
		                <div class="row">
		                    <div class="form-group">
		                    	<div class="col-xs-8">
		                        	<label>Caps-Blue</label>
		                        </div>
		                        <div class="col-xs-4 text-right">
		                            <label class="radio-inline">
		                                <input type="radio" name="Caps-Blue" value="1" checked="checked">No
		                            </label>
		                            <label class="radio-inline">
		                                <input type="radio" name="Caps-Blue" value="2">Yes
		                            </label>
		                        </div>
		                    </div>
		                </div>
			        </div>
			    </div>
			    <div class="card color-tab-left">
			        <div class="content">
		                <div class="row">
		                    <div class="form-group">
		                    	<div class="col-xs-8">
		                        	<label>Caps-Red</label>
		                        </div>
		                        <div class="col-xs-4 text-right">
		                            <label class="radio-inline">
		                                <input type="radio" name="Caps-Red" value="1" checked="checked">No
		                            </label>
		                            <label class="radio-inline">
		                                <input type="radio" name="Caps-Red" value="2">Yes
		                            </label>
		                        </div>
		                    </div>
		                </div>
			        </div>
			    </div>
			    <div class="card">
			        <div class="content">
		                <div class="text-right mt-10 mb-10">
		                    <a href="/lab" class="btn btn-wd mr-10">Cancel</a>
		                    <button type="submit" class="btn btn-info btn-fill btn-wd">Send Order</button>
		                </div>
		                <div class="clearfix"></div>
			        </div>
			    </div>
			</div>
		</div>
	</form>
</div>
@endsection
