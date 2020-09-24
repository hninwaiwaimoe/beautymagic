@extends('frontendtemplate')
@section('content')
<div class="site-section site-hero inner">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-10">
				<span class="d-block mb-3 caption">More Package</span>
				<h1 class="d-block mb-4">Packages</h1>
			</div>
		</div>
	</div>
</div>

<div class="site-section">
	<div class="container">
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>Day</th>
						<th>Kind</th>
						<th>Food Name</th>
						<th>Kalorie</th>
						<th>Vitamin</th>
					</tr>
				</thead>
				<tbody>
					@php $j=2; @endphp
					
						@foreach($pid->foods->shuffle()->slice(0,$pid->duration) as $food)
					<tr>

						<td>{{$j++}} Day</td>

						<td>{{$food->pivot->kind}}</td>
						<td>{{$food->name}}</td>
						<td>{{$food->kalorie}}</td>
						<td>{{$food->vitamin}}</td>
					</tr>
					@endforeach
					
					
				</tbody>
			</table>
			

		</div>
	</div>
</div>
@endsection