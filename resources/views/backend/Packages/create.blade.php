@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-brands-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Package</h1>
	</div>
</div>
<form action="{{route('packages.store')}}" method="post" enctype="multipart/form-data">

	@csrf	

	<div class="form-group row">
		<label for="name" class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="name" name="name">
			{{-- <span class="text-danger">{{$error->first('name')}}</span> --}}
		</div>
	</div>
	<div class="form-group row">
		<label for="file" class="col-sm-2 col-form-label">Duration</label>
		<div class="col-sm-8">
			<input type="text" id="duration" name="duration" class="form-control">
			{{-- <span class="text-danger">{{$error->first('photo')}}</span> --}}
		</div>
	</div>

	<div class="form-group row">
		<label for="name" class="col-sm-2 col-form-label">Price</label>
		<div class="col-sm-8">
			<input type="text" id="price" name="price" class="form-control">
			
			{{-- <span class="text-danger">{{$error->first('name')}}</span> --}}
		</div>
	</div>

	<div class="form-group row">
		<label for="food" class="col-sm-2 col-form-label">Plan</label>
		<div class="col-sm-8">
			
			<select name="plan" class="form-control">
				
				@foreach($plans as $plan)
				<option value="{{$plan->id}}">{{$plan->name}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label for="food" class="col-sm-2 col-form-label">Foods</label>
		<div class="col-sm-8">
			@php
                              $cou = count($foods);
                            @endphp
			<select name="food[]" class="form-control selectpicker" data-header="Select Your Food" data-t="{{$cou}}" multiple>
				
				@foreach($foods as $food)
				<option value="{{$food->id}}">{{$food->name}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="form-group row" id="p">
                      
                    </div>
	<div>
		<div class="col-sm-6">

			<input type="submit" name="btnsubmit" value="Create" class="btn btn-success">
		</div>
	</div>


</form>
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $('#p').hide();
    var data = $('.selectpicker').data('t');

    //console.log(data);
    $('.selectpicker').change(function(){
      var count = $('.selectpicker :selected').length;
     // $('#count').val(count);
    console.log(count);
      if(count>0){
        var html='';
        for(var i=1; i<=count;i++){
          html+=`<label for="kmd" class="col-sm-2 col-form-label">kmd</label>
          <div class="col-sm-8">
                        <input type="text" name="kmd[`+i+`]" class="form-control form-control-lg" id="kmd"></div><div class="col-sm-2"></div><br>`;
         
        }
         $('#p').show();
          $('#p').html(html);
      }else{
        $('#p').hide();
      }
    })
    
  })
</script>
@endsection