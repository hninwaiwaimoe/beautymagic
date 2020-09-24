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
					<th>Package_id</th>
					<th>Kind</th>
					</thead>
				<tbody class="text-info">

					@php
					$i=1;
					@endphp

					@foreach($packagedetails->package as $packagedetail) 
					<tr>
						<td>{{$i++}}</td>
						<td>{{$packagedetail->package->id}}</td>
						<td>{{$packagedetail->kind}}</td>
						<td>
							<a href="{{route('packages.show',$package->id)}}" class="btn btn-primary">Detail</a>
							<a href="{{route('packages.edit',$package->id)}}" class="btn btn-warning">Edit</a>
							<form action="{{route('packages.destory',$package->id)}}" method="post" class="d-inline-block">
								@csrf
								@method('DELETE')
							<input type="submit" class="btn btn-danger" value="Delete">
							</form>

						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<a href="{{route('packagedetail.create')}}"class="btn btn-secondary my-3">Add New</a>
		
		</div>
	</div>


</div>
@endsection