@extends('backendtemplate')
@section('content')
<div class="container-fluid">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Foods List</h1>
		<a href="{{route('foods.create')}}"class="btn btn-secondary my-3">Add New</a>
		

	</div></div>
	<div class="container-fluid">

		<div class="row">
			<table class="table table-bordered  justify-content-center text-lg-center">
				<thead class="thead-dark ">
					<th>No</th>
					<th>Name</th>
					<th>Foodtype Name</th>
					<th>Calories</th>
					<th>Vitamin</th>
					<th>Action</th>
				</thead>
				<tbody class="text-info">

					@php
					$i=1;
					@endphp

					@foreach($foods as $food) 
					<tr>
						<td>{{$i++}}</td>
						<td>{{$food->name}}</td>
						<td>{{$food->foodtype->name}}</td>
						<td>{{$food->kalorie}}</td>
						<td>{{$food->vitamin}}</td>
						<td>
							<a href="" class="btn btn-primary">Detail</a>

							<a href="{{route('foods.edit',$food->id)}}" class="btn btn-warning">Edit</a>
							<form action="{{route('foods.destroy',$food->id)}}" method="post" class="d-inline-block">
								@csrf
								@method('DELETE')
							<input type="submit" class="btn btn-danger" value="Delete">
							</form>

						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		
		</div>
	</div>



@endsection