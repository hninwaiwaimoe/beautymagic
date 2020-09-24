@extends('frontendtemplate')
@section('content')
<div class="site-section site-hero inner">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-10">
				<span class="d-block mb-3 caption">Buy Package</span>
				<h1 class="d-block mb-4">Packages</h1>
			</div>
		</div>
	</div>
</div>

<div class="site-section">
	<div class="container">
		<div class="row">
			@foreach($packages as $package)

			<div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
				<div class="pricing border-secondary text-center">
					<h2>{{$package->name}}</h2>
					<h2>{{$package->durition}}</h2>
					<div class="amount"><span class="number">{{$package->price}}</span><sup>Ks</sup></div>
					<div>
						@if(Auth::check())
						<a href="{{route('planpackage',$package->id)}}" class="btn btn-secondary px-4 py-2 buy" data-id="{{$package->id}}"data-name="{{$package->name}}" dTa-durition="{{$package->durition}}" data-price="{{$package->price}}">Buy Package</a>
						@else
						<a href="{{route('loginform')}}" class="btn btn-secondary btn-block mainfullbu=tncolor buy">Please login</a>
						@endif

					</div>

				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection