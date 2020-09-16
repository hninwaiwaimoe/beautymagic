@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-brands-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Packagedetail</h1>
	</div>
</div>
<form action="{{route('package.store')}}" method="post" enctype="multipart/form-data">

	@csrf	

	<div class="form-group row">
		<label for="name" class="col-sm-2 col-form-label">Food_id</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="food_id" name="food_id">
			{{-- <span class="text-danger">{{$error->first('name')}}</span> --}}
		</div>
	</div>
	<div class="form-group row">
		<label for="file" class="col-sm-2 col-form-label">Package_id</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="" name="package_id">
			{{-- <span class="text-danger">{{$error->first('photo')}}</span> --}}
		</div>
	</div>

	<div class="form-group row">
		<label for="name" class="col-sm-2 col-form-label">Kind</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="kind" name="kind">
			{{-- <span class="text-danger">{{$error->first('name')}}</span> --}}
		</div>
	</div>
	<div class="form-group row">
		<label for="name" class="col-sm-2 col-form-label">Quantity</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="quantity" name="quantity">
			{{-- <span class="text-danger">{{$error->first('name')}}</span> --}}
		</div>
	</div>
	<div class="form-group row">
		<label for="name" class="col-sm-2 col-form-label">BMI</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="bmi" name="bmi">
			{{-- <span class="text-danger">{{$error->first('name')}}</span> --}}
		</div>
	</div>
	
	<div>
		<div class="col-sm-6">

			<input type="submit" name="btnsubmit" value="Create" class="btn btn-success">
		</div>
	</div>


</form>
@endsection