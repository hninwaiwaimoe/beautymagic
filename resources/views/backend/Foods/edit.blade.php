@extends('backendtemplate')
@section('content')
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Foods Edit Form</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="{{route('foods.update',$food->id)}}" method="POST" enctype="multipart/form-data">
					{{-- to update , need id  --}}
					@csrf
					@method('PUT')
					

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-5">

							<input type="text" name="name" class="form-control" value="{{$food->name}}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label" for="food_id">Foodtype_id</label>
						<div class="col-sm-5">

							<select name="foodtype" class="form-control">
								<option selected disabled>Choose Food Type</option>
								@foreach($foodtypes as $foodtype)
								<option value="{{$foodtype->id}}" <?php if($foodtype->id == $food->foodtype_id) echo "selected";?>>{{$foodtype->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
						<div class="form-group row">
						<label class="col-sm-2 col-form-label" for="kalorie">Calorie</label>
						<div class="col-sm-5">

							<input type="number" name="kalorie" class="form-control" value="{{$food->kalorie}}">
						</div>
					</div>
										<div class="form-group row">
						<label class="col-sm-2 col-form-label" for="vitamin">Vitamin</label>
						<div class="col-sm-5">

							<input type="number" name="vitamin" class="form-control" value="{{$food->vitamin}}">
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