@extends('frontendtemplate')
@section('content')
<div>
	<h1 style="color: tomato;">How many Calories Do I need to Eat?</h1>
			<h3>"How many calories should I eat?" <br>-There is no one-size fit all the answer to this question.People come in all shapes and sizes and have different kinds of levels activity, therefore calories recommendations must be customized to each person.Our calculator is based on the results of peer reviewed scientific studies and is broken up into 3 sections which helps you to provide with most accurate number of calories required to achieve your weight loss with our meal plan and yoga exercise which include in our fitness website.<br>
			!!lets try together!!<br></h3>
			<h3>So first of all, I would like to ask you to fill in the following information in order to lets us know about your BMI.</h3>
	</div><br><br>
	<div style="background-image: url('image/m3.jpg');">
	<h1 align="center" style="text-decoration: underline;">BMI Calculator For You</h1>
	<form method="post" action="apply-now.php">
		<fieldset><legend><strong><h3>**Hello** Please!
			complete the following form to estimate the amount of calories you should be consuming daily to meet your personal goals.</h3></strong>
		</legend>
		<h2>Your Height<br><br>
		<label for="ft">feet:</label>
		<input type="text" name="tt" id="ft"><br>
		<label for="in">inches:</label>
		<input type="text" name="i" id="in"><br></h2>
		<h2>Your Weight<br><br>
		<label for="pd">pound:</label>
		<input type="text" name="p" id="pd"><br><br>
		<input type="button" name="bt" id="cal" value="Calculate">
		<input type="text" id="ccc"><br><br><br></h2>	
	</form>
	<div class="c">
		<div style="background-color: violet" >Under</div>
		<div style="background-color: pink">Normal</div>
		<div style="background-color: aqua">Overweight</div>
		<div style="background-color: white">Obesity</div>
	</div><br><br><br>
	<h3>Underweight=<18.5</h3>
	<h3>Normal weight=18.5-24.9</h3>
	<h3>Over weight=25-29.9</h3>
	<h3>Obesity=BMI of 30 or greater</h3>
</fieldset>
</div>
@endsection