<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<title>Restaurant.com</title>
    <head>
  </head>
	  @include('menubar')
		</br>
</br>
</br>
</br>
</br>
</br>

<body>

<div style="float:right" class="container-fluid">
<div class="row">
  <div class="container" >
  <div  class="col-md-5">
<form>
<fieldset class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control input-lg"  placeholder="Your full name">
    
  </fieldset>
  <fieldset class="form-group">
    <label for="Email">Email address</label>
    <input type="email" class="form-control input-lg"  placeholder="Enter email">
    <small class="text-muted">We'll never share your email with anyone else.</small>
  </fieldset>
   <fieldset class="form-group">
    <label for="party">Party size</label>
    <input type="number" class="form-control input-lg"  placeholder="Total person">
    <small class="text-muted">Once you select can't be changed</small>
  </fieldset>
  <fieldset class="form-group">
    <label for="party">Mobile Number</label>
    <input type="text" class="form-control input-lg"  placeholder="Your personal number">
    </fieldset>



    <label for="dt">Date and Time</label>
            <fieldset class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control input-lg" />
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

        <header>


            <ul>
                <li></li>
              </ul>

        </header>

@include('foot')