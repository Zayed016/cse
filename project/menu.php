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

   
        
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="js/npm.js"></script>
        
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
<script type="text/javascript">

    var foodcart = [];

    
    function displayfoodcart(){
        var orderedProductsTblBody=document.getElementById("orderedProductsTblBody");
        
        while(orderedProductsTblBody.rows.length>0) {
            orderedProductsTblBody.deleteRow(0);
        }

      
        var cart_total_price=0;
       
        for(var product in foodcart){
               
            var row=orderedProductsTblBody.insertRow();
             
            var cellName = row.insertCell(0);
            var celltype = row.insertCell(1);
            var cellPrice = row.insertCell(2);
            cellPrice.align="right";
            
            cellName.innerHTML = foodcart[product].Name;
            celltype.innerHTML = foodcart[product].type;
            cellPrice.innerHTML = foodcart[product].Price;
            cart_total_price+=foodcart[product].Price;
        }
       
        document.getElementById("cart_total").innerHTML="Total Price:   "+cart_total_price;
    }


    function AddtoCart(name,type,price){
      
       var singleProduct = {};
       
       singleProduct.Name=name;
       singleProduct.type=type;
       singleProduct.Price=price;
       
       foodcart.push(singleProduct);
       
       displayfoodcart();

    }  
    function removefromcart(name,type,price){

    	var pro={};

    	pro.Name=name;
    	pro.type=type;
    	pro.price=price;

    	foodcart.pop(pro);

    	displayfoodcart();
    }

    //Add some products to our shopping cart via code or you can create a button with onclick event
    //AddtoCart("Table","Big red table",50);
    //AddtoCart("Door","Big yellow door",150);
    //AddtoCart("Car","Ferrari S23",150000);



</script>
<div class="container-fluid">
<div class="row">
  <div class="container" >
  <div class="col-lg-11">
<div class="table-responsive">
<table style="font-size: 18px" class="table table-bordered" >
    <tr>
        <td valign="top">
            <table class="table table-condensed" class="table table-bordered">
                <thead>
                    <tr><td>#</td>
                        <td >
                            Food for sale
                        </td>
                        <td>Price</td>
                    </tr>
                </thead>
                <tbody><?php
                          for ($i=1; $i <10 ; $i++) { 
                            ?>
                    <tr> 
                    <td><?php echo $i;?></td>
                        <td>
                         
                            Table
                         
                        </td>
                        <td>
                            <?php 
                            $r=rand(30,500);
                            echo $r;?>
                        </td>
                        <td>
                        
                      <input type="button" class="btn btn-primary" value="Add to cart" onclick="AddtoCart('Table','rice',<?php echo $r?>)"/>
                         
                        </td>
                    </tr>
                    <?php
                         }
                            
                            ?>
                </tbody>

            </table>
        </td>
        <td valign="top">
        <h3>Ordered Food <input style="float: right;" type="button" class="btn btn-danger" value="Remove" onclick="removefromcart()" /></h3>
            <table class="table table-bordered" class="table table-condensed" id="orderedProductsTbl">
                <thead>
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            Type
                        </td>
                        <td>
                            Price
                            
                        </td>
                    </tr>
                </thead>
                <tbody id="orderedProductsTblBody">

                </tbody>
                <tfoot>
                    <tr>
                       <td colspan="3" align="right" value="Total Price" id="cart_total">

                        </td>
                    </tr>
                </tfoot>
            </table>
        </td>
    </tr>
</table>
<a href="#"><button class="btn btn-success" style=" float:right"> Buy</button></a>
</div>
</div>
</div>
</div>
<div style="padding-top: 30px;">
 <div class="panel-footer">
      
      
        <p style="text-align: center; color:black;" class="muted credit">Zayed@2016</p>
     
    </div>
    </div>
