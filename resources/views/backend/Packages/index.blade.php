@extends('backendtemplate')
@section('content')
<div class="container-fluid">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Package List</h1>
		<a href="{{route('packages.create')}}"class="btn btn-secondary my-3">Add New</a>
		
		</div>	
		

	</div>
	<div class="container-fluid">
		<div class="row">
			<table class="table table-bordered  justify-content-center text-lg-center">
				<thead class="thead-dark ">
					<th>No</th>
					<th>Name</th>
					<th>Duration</th>
					<th>Price</th>
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
						<td>{{$package->price}}</td>
						<td>
							<a href="{{route('packages.edit',$package->id)}}" class="btn btn-warning">Edit</a>
							<a href="" class="btn btn-danger">Delete</a>
							<form action="{{route('packages.destroy',$package->id)}}" method="post" class="d-inline-block">
							   <a href="{{route('packagedetail',$package->id)}}" class="btn btn-primary">Detail</a>

							  
								@csrf
								@method('DELETE')
							
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
	</div>


</div>
@endsection