@extends('backend.layout.template')

@section('body-content')
	<!--start content-->
	<main class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		  <div class="breadcrumb-title pe-3">eCommerce</div>
		  <div class="ps-3">
		    <nav aria-label="breadcrumb">
		      <ol class="breadcrumb mb-0 p-0">
		        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
		        </li>
		        <li class="breadcrumb-item active" aria-current="page">Add New Customer</li>
		      </ol>
		    </nav>
		  </div>
		</div>
		<!--end breadcrumb-->

		<div class="row">
			<div class="col-lg-12 mx-auto">
				<form class="row g-3" action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="card">
						<div class="card-header py-3 bg-transparent"> 
						  <div class="d-sm-flex align-items-center">
						    <h5 class="mb-2 mb-sm-0">Add New Customer</h5>
							    <div class="ms-auto">
							      <button type="button" class="btn btn-secondary">Save to Draft</button>
							      <button type="submit" class="btn btn-primary">Publish Now</button>
							    </div>
						  	</div>
						</div>

						<div class="card-body">
						   	<div class="row g-3">
						     	
						     	<div class="col-12 col-lg-12">
							        <div class="card shadow-none bg-light border">
							          <div class="card-body">
							            
							          	<div class="row">
							          		<div class="col-lg-6">
												@error('name')
													<br>
													<div class="alert alert-warning alert-dismissible fade show" role="alert">
														<strong>{{ $message }}</strong>
														<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
													</div>
												@enderror
							          			<div class="col-12">
									                <label class="form-label">Customer Name</label>
									                <input type="text" class="form-control" placeholder="Proprietor Name" name="name" value="{{ old('name') }}">
									            </div>

												@error('email')
													<br>
													<div class="alert alert-warning alert-dismissible fade show" role="alert">
														<strong>{{ $message }}</strong>
														<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
													</div>
												@enderror
									            <div class="col-12">
									                <label class="form-label">Email Address</label>
									                <input type="email" class="form-control" placeholder="Email Address" name="email" value="{{ old('email') }}">
								              	</div>

												@error('password')
												  <br>
												  <div class="alert alert-warning alert-dismissible fade show" role="alert">
													  <strong>{{ $message }}</strong>
													  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
												  </div>
											  	@enderror
								              	<div class="col-12">
									                <label class="form-label">Password</label>
									                <input type="password" class="form-control" placeholder="Account Password" name="password" value="{{ old('password') }}">
								              	</div>

								              	<div class="col-12">
									                <label class="form-label">Re-Type Password</label>
									                <input type="password" class="form-control" placeholder="Re-Type Password" name="password_confirmation" value="{{ old('password_confirmation') }}">
								              	</div>

												  <div class="col-12">
													<label class="form-label">Images</label>
													<input class="form-control" type="file" name="image">
												</div>

								              	<div class="col-12">
									                <label class="form-label">Status</label>
									                <select class="form-control" name="status">
									                	<option>Please Select the Status</option>
									                	<option value="1">Active</option>
									                	<option value="0">Inactive</option>
									                </select>
									            </div>

							          		</div>

							          		<div class="col-lg-6">

												@error('phone')
												  <br>
												  <div class="alert alert-warning alert-dismissible fade show" role="alert">
													  <strong>{{ $message }}</strong>
													  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
												  </div>
											  	@enderror
												<div class="col-12">
									                <label class="form-label">Phone No</label>
									                <input type="text" class="form-control" placeholder="Phone No" name="phone" value="{{ old('phone') }}">
									            </div>
												
									            <div class="col-12">
									                <label class="form-label">Primary Contact Address</label>
									                <input type="text" class="form-control" placeholder="Primary Contact Address" name="address" value="{{ old('address') }}">
									            </div>

									            <div class="col-12">
									                <label class="form-label">Division</label>
									                <select class="form-control" name="division">
									                	<option>Please Select the Division</option>
													@foreach($divisions as $division)
									                	<option value="{{ $division->name }}">{{ $division->name }}</option>
													@endforeach
									                </select>
									            </div>

									            <div class="col-12">
									                <label class="form-label">District</label>
									                <select class="form-control" name="district">
									                	<option>Please Select the District</option>
													@foreach($districts as $district)
									                	<option value="{{ $district->name }}">{{ $district->name }}</option>
													@endforeach
									                </select>
									            </div>

									            <div class="col-12">
									                <label class="form-label">Zip Code</label>
									                <input type="text" class="form-control" placeholder="Area / Zip Code" name="zcode" value="{{ old('zcode') }}">
									            </div>

									            <div class="col-12">
									                <label class="form-label">User Role</label>
									                <select class="form-control" name="role" Disabled="disabled">
									                	<option>Please Select the User Role</option>
									                	<option value="2">Vendor</option>
									                	<option value="3" SELECTED>Customer</option>
									                </select>
									            </div>
							          		</div>

							          	</div>
							            
							          </div>
							        </div>
						     	</div>
						    </div>
					   </div><!--end row-->
					 </div>
					</div>
				</form>
			</div>
		</div><!--end row-->

	</main>
	<!--end page main-->
@endsection