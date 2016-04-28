<?php

$k=0;
$i=1;
$plus=explode(",", $ok['p']);
foreach ($plus as $key ) {
	$k=$key+$k;
}?>
@include('menubar');
</br>
</br>
</br>
</br>
</br>
</br>

<div style="float:right" class="container-fluid">
<div class="row">
  <div class="container" >
  <div  class="col-md-10">
<ul style="font-size: 15px;" class="list-group">
@foreach ($out as $out) 
@foreach ($out as $user) 
 

<label ><li class="list-group-item"><span >Name:</span> {!! $user->name; !!}</li><li class="list-group-item">  <span >Price:</span>    {!! $user->price; !!}</li></label>


@endforeach
@endforeach
	
 </ul>
 <div  class="col-md-8">
<h3 >Total Price:&nbsp{!! $k; !!} Tk</h3><br/>

 {!!  Form::open(array('url' => 'final'));!!}
 	
 	<label style="font-size: 16px;">Delivery type: </label>
   <label style="font-size: 16px;" class="radio">
	<input type="radio"  name="de" value="home" >
	<b>Home delivery <small class="text-muted">(Extra 30 taka will be charged after receiving item)</small></b></label>
	<label style="font-size: 16px;" class="radio">
	<input type="radio"  name="de" value="pickup" checked>
	<b>Pickup delivery</b></label>
	<br/><br/>
	<input type="hidden" name="pir" value="{!! $k; !!}">
	<input type="hidden" name="ref" value="{!! $ok['r'] !!}">

	<fieldset class="form-group">
	<label for="address"> Address </label>
	<input type="text" class="form-control" name="add" required value="">
	<small class="text-muted">Please make sure your address is ok (limited to rajshahi)</small>
	</fieldset>
	<fieldset class="form-group">
	<label for="mb"> Mobile number </label>
	<input type="text" class="form-control" name="mobile" required value="" >
	<small class="text-muted">You will be notify throgh this mobile once you paid and also before delivery</small>
 	</fieldset>
	<input type="submit" class="btn btn-success" value="Confirm" />
 	{!!  Form::close(); !!}
<!-- @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->


 </div>
</div>
 </div>
 </div>
 </div>

@include('foot')
