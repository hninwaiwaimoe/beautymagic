@extends('backendtemplate')
@section('content')
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Packages Edit Form</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="{{route('packages.update',$packages->id)}}" method="POST" enctype="multipart/form-data">
					{{-- to update , need id  --}}
					@csrf
					@method('PUT')
					

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-5">

							<input type="text" name="name" class="form-control" value="{{$category->name}}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Duration</label>
						<div class="col-sm-5">

							<input type="text" name="duration" class="form-control" value="{{$package->duration}}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Project_id</label>
						<div class="col-sm-5">

							<input type="text" name="duration" class="form-control" value="">
						</div>
					</div>


					

					
					<div class="form-group row">
						<input type="submit" value="Update" class="btn btn-success" name="btnsubmit">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection