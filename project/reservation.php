<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<title>Restaurant.com</title>
    <head>
  
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/datepicker.css" rel="stylesheet">
        <link href="css/bootstrap-datepicker.css" rel="stylesheet">
        <link href="css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="css/bootstrap-datepicker.standalone.css" rel="stylesheet">
        <link href="css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">
        <link href="css/bootstrap-datepicker3.css" rel="stylesheet">
        <link href="css/bootstrap-datepicker3.min.css" rel="stylesheet">
        <link href="css/bootstrap-datepicker3.standalone.css" rel="stylesheet">
        <link href="css/bootstrap-datepicker3.standalone.min.css" rel="stylesheet">
        <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
        
        
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="js/npm.js"></script>
        <script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
		<script type="text/javascript" src="js/moment.js"></script>
		<script type="text/javascript" src="js/transition.js"></script>
		<script type="text/javascript" src="js/collapse.js"></script>
		<script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
		<script type="text/javascript" src="js/moment-with-locales.js"></script>
       
		
		</head>
<body>
<nav  style="padding: 10px 10px 10px 30px; "class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">


    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Restaurant</a>
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul style= "font-size:28px;"class="nav navbar-nav">
        
         <li><a href="home.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="reservation.php">Table book</a></li>
      	<li><a href="#">About Us</a></li>
      	<li><a href="#">Contact Us</a></li>
      </ul>
      <div style="float: right"><form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      </div>
      </div>
      
</div>
</nav>
</br>
</br>
</br>
</br>
</br>
</br>
<div style="float:right" class="container-fluid">
<div class="row">
  <div class="container" >
  <div  class="col-md-5">
<form>
<fieldset class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control"  placeholder="Your full name">
    
  </fieldset>
  <fieldset class="form-group">
    <label for="Email">Email address</label>
    <input type="email" class="form-control"  placeholder="Enter email">
    <small class="text-muted">We'll never share your email with anyone else.</small>
  </fieldset>
   <fieldset class="form-group">
    <label for="party">Party size</label>
    <input type="number" class="form-control"  placeholder="Total person">
    <small class="text-muted">Once you select can't be changed</small>
  </fieldset>
  <fieldset class="form-group">
    <label for="party">Mobile Number</label>
    <input type="text" class="form-control"  placeholder="Your personal number">
    </fieldset>



    <label for="dt">Date and Time</label>
            <fieldset class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </fieldset> 
        
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>
</div>
</div>
