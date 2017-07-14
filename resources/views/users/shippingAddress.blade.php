@extends('layouts.app')


@section('content')
<!--//header-->
<div class="contact">
			<div class="container">
				<h1>Shipping Address</h1>
				
			<div class="contact-grids">
					<div class="contact-form">
					<div class="row">
					  <div class="col-sm-8 col-sm-offset-2">
							<form class="form-horizontal">
							  <div class="form-group">
							    <label for="name" class="col-sm-2 control-label">Full Name</label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" id="name" placeholder="Full Name">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="address" class="col-sm-2 control-label">Address </label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" id="address" placeholder="Shipping address">
							    </div>
							  </div>
							  <div class="form-group">
							     <label for="mobile1" class="col-sm-2 control-label">Mobile </label>
							    <div class="col-sm-10">
							      <input type="number" class="form-control" id="city" placeholder="Mobile 1">
							    </div>
							  </div><div class="form-group">
							     <label for="mobile2" class="col-sm-2 control-label">Mobile 2 </label>
							    <div class="col-sm-10">
							      <input type="number" class="form-control" id="mobile2" placeholder="Mobile 2 (optional)">
							    </div>
							  </div>
							  <div class="form-group">
							     <label for="city" class="col-sm-2 control-label">City </label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" id="city" placeholder="City">
							    </div>
							  </div>
							  <div class="form-group">
							     <label for="city" class="col-sm-2 control-label">Zip Code </label>
							    <div class="col-sm-10">
							      <input type="number" class="form-control" id="city" placeholder="zip">
							    </div>
							  </div>
							  <div class="form-group">
							     <label for="country" class="col-sm-2 control-label">Country </label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" id="country" placeholder="Country">
							    </div>
							  </div>
							  <div class="form-group">
							    <div class="col-sm-offset-6 col-sm-2">
							      <a type="button" class="btn btn-lg btn-primary">Add Address</a>
							    </div>
							  </div>
							</form>
								</div>
						</div>
				</div>
				</div>
							
						
						
					
				</div>
		
		
	</div>
<!--//content-->

@endsection