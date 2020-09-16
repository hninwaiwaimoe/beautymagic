@extends('backendtemplate')
@section('content')
<div class="container-fluid">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Plan List</h1>
		

	</div>
	<div class="container-fluid">
		<div class="row">
			<table class="table table-bordered  justify-content-center text-lg-center">
				<thead class="thead-dark ">
					<th>No</th>
					<th>Name</th>
					<th>Description</th>
					<th>Action</th>
					
				</thead>
				<tbody class="text-info">

					@php
					$i=1;
					@endphp

					@foreach($plans as $plan) 
					<tr>
						<td>{{$i++}}</td>
						<td>{{$plan->name}}</td>
						<td>{{$plan->description}}</td>
						<td>
							<a href="" class="btn btn-primary">Detail</a>
							<a href="{{route('plans.edit',$plan->id)}}" class="btn btn-warning">Edit</a>
							<a href="" class="btn btn-danger">Delete</a>

						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<a href="{{route('plans.create')}}"class="btn btn-secondary my-3">Add New</a>
		
		</div>
	</div>


</div>
@endsection