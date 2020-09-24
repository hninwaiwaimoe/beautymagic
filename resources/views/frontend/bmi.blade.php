@extends('frontendtemplate')
@section('content')
<h1 align="center">BMI CALCULATOR</h1>
	<div style="color:red" align="center"><P>Measurment of body fat base on height and weight.Applicable for people,age 18 or older.</P></div>
	<br><br>
	<div class="form-row">
	<div class="row">
	<div class="col-md-6">
           <div class="form-group">
           	Your Height
             <label class="small mb-1" for="heightf">Feet:</label>
              <input class="form-control py-4" id="heightf" type="text" placeholder="Enter your feet" name="feet" />
              <font id="error" color="red"></font>
               </div></div>
               <div class="col-md-6">
                <div class="form-group">
                 <label class="small mb-1" for="heighti">Inches</label>
                  <input class="form-control py-4" id="heighti" type="text" placeholder="Enter your feet" name="inches" />
                 <font id="error" color="red"></font>
                       </div> </div>
                   </div>
     			</div>
     			<div class="form-row">
     			<div class="row">
                <div class="col-md-6">
                <div class="form-group">
                	Your Weight
                 <label class="small mb-1" for="weightp">Pounds:</label>
                  <input class="form-control py-4" id="weightp" type="text" placeholder="Enter your weight" name="pounds" />
                 <font id="error" color="red"></font>
                       </div> </div>
                   <div class="col-md-6">
                <div class="form-group my-5">
                <input type="button" style="background-color: teal" name="bt" id="cal" value="Calculate" >
            </div></div>
           
 <div class="col-md-6">
                <div class="form-group">
<div class="tt">
	<div style="background-color: skyblue">Under</div>
	<div style="background-color: olive">Normal</div>
	<div style="background-color: orange">Over weight</div>
	<div style="background-color: red">Obses</div>
</div><br><br></div></div></div>
     			</div>
<h2>BMI Healthy Weight</h2>
<table border="1" cellpadding="5" cellspacing="1">
	<thead>
		<tr>
			<th>BMI</th>
			<th>Weight Status</th>
		</tr>
	</thead>
	<tbody id="tbody">
		
	</tbody>

</table> 	
@endsection