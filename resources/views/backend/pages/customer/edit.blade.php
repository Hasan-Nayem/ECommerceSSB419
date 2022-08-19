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
					<li class="breadcrumb-item active" aria-current="page">Update Customer Information</li>
				</ol>
				</nav>
			</div>
			</div>
			<!--end breadcrumb-->
			<div class="card-body">
				<div class="row g-3">
				<div class="col-12 col-lg-12">
					<div class="card shadow-none bg-light border">
						<form action="{{ route('customer.update', $customer->id) }}" method="post" class="form-control" enctype="multipart/form-data">
							@csrf
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
											<input type="text" class="form-control" placeholder="Proprietor Name" name="name" value="{{ $customer->name }}">
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
											<input type="email" class="form-control" placeholder="Email Address" name="email" value="{{ $customer->email }}">
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
											<input type="password" class="form-control" placeholder="Account Password" name="password" value="">
										</div>

										<div class="col-12">
											<label class="form-label">Re-Type Password</label>
											<input type="password" class="form-control" placeholder="Re-Type Password" name="password_confirmation" value="">
										</div>

										<div class="col-12">
											<label class="form-label">Images</label>
											<input class="form-control" type="file" name="image">
										</div>

										<div class="col-12">
											<label class="form-label">Status</label>
											<select class="form-control" name="status">
												<option>Please Select the Status</option>
												<option value="1" @if($customer->status == 1) SELECTED @endif >Active</option>
												<option value="0" @if($customer->status == 0) SELECTED @endif>Inactive</option>
											</select>
										</div>

										<div class="col-12 my-2">
											<input type="submit" value="Update" class="form-control btn btn-success">
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
											<input type="text" class="form-control" placeholder="Phone No" name="phone" value="{{ $customer->phone }}">
										</div>
										
										<div class="col-12">
											<label class="form-label">Primary Contact Address</label>
											<input type="text" class="form-control" placeholder="Primary Contact Address" name="address" value="{{ $customer->address }}">
										</div>

										<div class="col-12">
											<label class="form-label">Division</label>
											<select class="form-control" name="division">
												<option>Please Select the Division</option>
											@foreach($divisions as $division)
												<option value="{{ $division->name == $customer->division }}" @if($division->name == $customer->division) selected @endif>{{ $division->name }}</option>
											@endforeach
											</select>
										</div>

										<div class="col-12">
											<label class="form-label">District</label>
											<select class="form-control" name="district">
												<option>Please Select the District</option>
											@foreach($districts as $district)
												<option value="{{ $district->name }}"  @if($district->name == $customer->district) selected @endif>{{ $district->name }}</option>
											@endforeach
											</select>
										</div>

										<div class="col-12">
											<label class="form-label">Zip Code</label>
											<input type="text" class="form-control" placeholder="Area / Zip Code" name="zcode" value="{{ $customer->zipcode }}">
										</div>

										<div class="col-12">
											<label class="form-label">User Role</label>
											<select class="form-control" name="role" Disabled="disabled">
												<option>Please Select the User Role</option>
												<option value="2">Vendor</option>
												<option value="3" SELECTED>Customer</option>
											</select>
										</div>
										<div class="col-12 my-2">
											<a href="{{ route('customer.manage') }}" class="form-control btn btn-secondary">Cancel</a>
										</div>
									</div>

								</div>
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!--end row-->


	</main>
	<!--end page main-->
@endsection