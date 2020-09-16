@extends('backendtemplate')
@section('content')
<div class="container-fluid">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Foods List</h1>
		

	</div>
	<div class="container-fluid">
		<div class="row">
			<table class="table table-bordered  justify-content-center text-lg-center">
				<thead class="thead-dark ">
					<th>No</th>
					<th>Name</th>
					<th>Kalories</th>
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
						<td>{{$food->kalorie}}</td>
						<td>{{$food->vitamin}}</td>
						<td>
							<a href="" class="btn btn-primary">Detail</a>

							<a href="{{route('foods.edit',$food->id)}}" class="btn btn-warning">Edit</a>
							<a href="" class="btn btn-danger">Delete</a>

						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<a href="{{route('foods.create')}}"class="btn btn-secondary my-3">Add New</a>
		
		</div>
	</div>


</div>
@endsection