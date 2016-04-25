<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<title>Restaurant.com</title>
    <head>
  </head>
	  @include('menubar');
		</br>
</br>
</br>
</br>
</br>
</br>
 <?php print_r($last); ?>
 >
<br/>
<div class="row">
  <div class="container" >
  <div  class="col-md-5">

  <h4>Your Address is {{$last['add']}}</h4>
  <h4>Your Mobile number is {{$last['mobile']}}</h4>
  <h3>Total price {{$last['pir']}}</h3>
  <h3>Your Referance id is {{$last['ref']}}</h3>
    <a href="#">
      <img class="media-object" src="bkash.png" alt="...">
    </a>
  
  
     </div>
  </div>
</div>


