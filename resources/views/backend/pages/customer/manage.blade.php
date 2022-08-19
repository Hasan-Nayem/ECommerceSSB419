@extends('backend.layout.template')

@section('body-content')
	<main class="page-content">

		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">eCommerce</div>
			<div class="ps-3">
			  <nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
				  <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
				  </li>
				  <li class="breadcrumb-item active" aria-current="page">Manage All Customer</li>
				</ol>
			  </nav>
			</div>
		  </div>
		  <!--end breadcrumb-->

		<div class="row">
			<div class="col-lg-12">
				<!--Start content -->
				<div class="card radius-10 w-100">
				    <div class="card-body" style="position: relative;">
				        

						<div class="card">
							<div class="card-body">
							  <div class="d-flex align-items-center">
								 <h5 class="mb-0">Customer Details</h5>
								  <form class="ms-auto position-relative">
									<div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
									<input class="form-control ps-5" type="text" placeholder="search">
								  </form>
							  </div>
							  <div class="table-responsive mt-3">
								<table class="table align-middle">
								  <thead class="table-secondary">
									<tr>
									 <th>#</th>
									 <th>Name</th>
									 <th>Email</th>
									 <th>Phone</th>
									 <th>Address</th>
									 <th>Actions</th>
									</tr>
								  </thead>
								  <tbody>
									
									@php $s = 1; @endphp
									@foreach($customers as $customer)
									<tr>
									 <td>{{ $s }}</td>
									  <td>
										<div class="d-flex align-items-center gap-3 cursor-pointer">
											@if( !is_null( $customer->image ) )
		                         				<img src="{{ asset('backend/assets/images/users/' . $customer->image ) }}" class="br-img">
		                         			@else
		                         				Not Uploaded
		                         			@endif
										   <div class="">
											 <p class="mb-0">{{ $customer->name }}</p>
										   </div>
										</div>
									  </td>
									  <td>{{ $customer->email }}</td>
									  <td>{{ $customer->phone }}</td>
									  <td>{{ $customer->address }}</td>
									  <td>
										<div class="table-actions d-flex align-items-center gap-3 fs-6">
										  <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Views" aria-label="Views"><i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#viewCustomer{{ $customer->id }}"></i></a>
										  <a href="{{ route('customer.edit', $customer->id) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
										  <a href="{{ route('customer.destroy', $customer->id) }}" onclick="return confirm('Are you sure you want to delete this customer ?')" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
										</div>
									  </td>	
									</tr>
									@php $s++; @endphp
									@endforeach

								  </tbody>
								</table>
							  </div>
							</div>
						  </div>

                   		@if ( $customer->count() == 0 )
                   			<div class="alert alert-warning">
                   				Opps!!! No Data found in the Database...
                   			</div>
                   		@endif

				        
			        </div>
			    </div>
				<!--End content -->
			</div>			
		</div>
		

  <!-- Modal For View -->
  <div class="modal fade" id="viewCustomer{{ $customer->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		  
			<div class="table-responsive mt-3">
				<table class="table align-middle text-center">
				  <thead class="table-secondary">
					<tr>
					 <th>Name</th>
					 <th>Email</th>
					 <th>Phone</th>
					 <th>Address</th>
					 <th>Division</th>
					 <th>District</th>
					 <th>Zip Code</th>
					 <th>Join Date</th>
					 <th>Last Info Updateted At</th>
					 <th>Status</th>
					</tr>
				  </thead>
				  <tbody>					
					<tr>
					  <td>
						<div class="d-flex align-items-center gap-3 cursor-pointer">
							@if( !is_null( $customer->image ) )
								 <img src="{{ asset('backend/assets/images/users/' . $customer->image ) }}" class="br-img">
							 @else
								 Not Uploaded
							 @endif
						   <div class="">
							 <p class="mb-0">{{ $customer->name }}</p>
						   </div>
						</div>
					  </td>
					  <td>{{ $customer->email }}</td>
					  <td>{{ $customer->phone }}</td>
					  <td>{{ $customer->address }}</td>
					  <td>{{ $customer->division }}</td>
					  <td>{{ $customer->district }}</td>
					  <td>{{ $customer->zipcode }}</td>
					  <td>{{ $customer->created_at }}</td>
					  <td>{{ $customer->updated_at }}</td>
					  <td>
						@if ( $customer->status == 0 )
								 <span class="badge bg-light-warning text-warning w-100">Inactive</span>
							 @elseif ( $customer->status == 1 )
								 <span class="badge bg-light-success text-success w-100">Active</span>
							 @endif
					  </td>
					</tr>
				
				  </tbody>
				</table>
			  </div>
		</div>

		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		</div>

	  </div>
	</div>
  </div>

	<!-- Modal For View  END-->

	</main>
@endsection