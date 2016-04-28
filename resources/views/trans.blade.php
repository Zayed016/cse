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
 
<div class="row">
  <div class="container" >
  <div  class="col-md-5">

  <h4>Your Address is {{$last['add']}}</h4>
  <h4>Your Mobile number is {{$last['mobile']}}</h4>
  <h3>Total price {{$last['pir']}}</h3>
  <h3>Your Referance id is {{$last['ref']}}</h3>
    <a href="#">
      <img class="img-rounded" alt="Cinque Terre" width="804" height="536" src="bkash.png" alt="...">
    </a>
  
  
     </div>
  </div>
</div>


