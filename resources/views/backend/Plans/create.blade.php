@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-brands-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Plan</h1>
	</div>
</div>
<form action="{{route('plans.store')}}" method="post" enctype="multipart/form-data">

	@csrf	

	
	<div class="form-group row">
		<label for="name" class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="name" name="name">
			{{-- <span class="text-danger">{{$error->first('name')}}</span> --}}
		</div>
	</div>
	<div class="form-group row">
		<label for="description" class="col-sm-2 col-form-label">Description</label>
		<div class="col-sm-8">
			<textarea name="description" class="form-control"></textarea>
			{{-- <span class="text-danger">{{$error->first('name')}}</span> --}}
		</div>
	</div>
	
		<div class="col-sm-6">

			<input type="submit" name="btnsubmit" value="Create" class="btn btn-success">
		</div>
	</div>


</form>
@endsection