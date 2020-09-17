@extends('frontendtemplate')
@section('content')
<div style="background-image: url('image/mm1.jpg');">
	<div class="user">
		<h3 align="center" style="color: purple">How about Our Plan Program</h3>
		<h5 align="center"><strong>How about our plan!?</strong>--We have weight loss programs that focus on chicken ,pork and vegetables.People who do not eat meat can lose weight with vegetables, and also those who do not eat pork can choose chicken and vegetables.There are two types of weight loss:<br>(1)Short-term &<br>(2)Long-term<br>Short-term should be chosen when there is an urgent need to go to a party.Long-term should be chosen if you want to do it in a healthy way.<br>
		Furthermore, we also have yoga plan for those who want to take exercise and diet at the same time.So you can reach your goal in a short time.</h5>
	</div><br><br>
	<div>
		<h3 align="center" style="color:purple">What can healthy diet prevents?</h3>
		<h5 align="center"><div style="color:purple">Here we go!!!</div><br>A healthy diet prevents malnutrition and protects from diseases like obesity, heart disease, diabetes, cancer, and stroke.Today, many people's diets consist of more saturated fat, trans fats, sugars, and more sodium than fruits,vegetables and dietary fiber.Your body's health reflects what you put into it.</h5>
	</div>
	<div align="center">
	<input type="button" id="button" value="Click Here for Diet plan" style="color: black" onclick="setColor('button','#101010')";/>
	<input type="button" id="button" value="Click Here for Yoga Plan" style="color: black" onclick="setColor('button','#101010')";/>
	</div><br><br>
</div>
@endsection