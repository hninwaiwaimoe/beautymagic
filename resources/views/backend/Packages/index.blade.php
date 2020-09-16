@extends('backendtemplate')
@section('content')
<div class="container-fluid">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Package List</h1>
		

	</div>
	<div class="container-fluid">
		<div class="row">
			<table class="table table-bordered  justify-content-center text-lg-center">
				<thead class="thead-dark ">
					<th>No</th>
					<th>Name</th>
					<th>Duration</th>
					<th>Plan_id</th>
					<th>Action</th>
				</thead>
				<tbody class="text-info">

					@php
					$i=1;
					@endphp

					@foreach($packages as $package) 
					<tr>
						<td>{{$i++}}</td>
						<td>{{$package->name}}</td>
						<td>{{$package->duration}}</td>
						<td>{{$package->plan_id}}</td>
						<td>
							<a href="" class="btn btn-primary">Detail</a>
							<a href="{{route('packages.edit',$package->id)}}" class="btn btn-warning">Edit</a>
							<a href="" class="btn btn-danger">Delete</a>

						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<a href="{{route('packages.create')}}"class="btn btn-secondary my-3">Add New</a>
		
		</div>
	</div>


</div>
@endsection