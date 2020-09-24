@extends('frontendtemplate')
@section('content')
<h3 align="center" style="text-decoration: underline;color:blue;">Ketogenic Diet Plan For You</h3>
	<div class="row">
		<div>
			<img src="{{asset('front/img/f1.jpg')}}" alt="f3" width="100%" height="450px">
		</div>
		<div align="center">
			<h4 style="color: blue;text-decoration: underline;">Ketogenic Diet Meal Plan</h4>
			<p style="color: navy;">What is a keto diet!? -Eating keto means limiting your net carb intake so that your body metabolizes fat creating energy and ketones. For many, this requires restricting net carbs to 20 grams per day.1 If you’re looking to maximize benefits like reversing type 2 diabetes or if you have a lot of weight to lose, the keto diet may be right for you.<br>
			If you want more carbs in your diet, and if don’t have type 2 diabetes or much weight to lose, then a more moderate low-carb diet might be a better choice for you. Moderate low carb may be easier to follow, but it also may be less effective than keto, meaning you may get more moderate results.</p><br>
			</div>
			<div align="center">
			<h4 style="color: blue; text-align: center;">Top 3 keto cooking tips</h4>
			<p style="color: navy;">1.Automate breakfast: Choose one keto breakfast to eat every day, like scrambled eggs.3 Not hungry? Skip breakfast and sip a coffee instead.4 This saves time and money.<br>
			2.Simplify with meal prep: Cook two servings for dinner and refrigerate the second serving for tomorrow’s lunch. Freeze other portions for later.<br>
			3.Try no-cook plates: Sliced deli meats, cheeses, and veggies make an easy lunch.</p>
	</div>
	<fieldset>
	<div align="center">
		<h3 style="color: blue;text-decoration: underline;" >Beauty Fitness -1 Day Keto Meal Plan Sample</h3>
		<center>
		<table>
			<thead>
			<tr>
				<th>DAY</th>
				<th>Kind</th>
				<th>Food Name</th>
				<th>Kalorie</th>
				<th>Vitamin</th>
			</tr>
		</thead>
		<tbody>
			@foreach($packages->foods as $package)
			<tr>
				<td>1 Day</td>
				<td>{{$package->pivot->kind}}</td>
				<td>{{$package->name}}</td>
				<td>{{$package->kalorie}}</td>
				<td>{{$package->vitamin}}</td>
				
				
			</tr>
			@endforeach
		</tbody>
		</table>
	</center>
	</div><br>
	<div align="center">
		@if(Auth::check())

		<a href="{{route('morepackage',$packages->id)}}">
		<button class="btn">More Package</button></a>
		@else
		<a href="{{route('loginpage')}}">
		<button class="btn">More Package</button></a>
		@endif
	</div>
	</fieldset></div>
@endsection