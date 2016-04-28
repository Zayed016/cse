<!DOCTYPE html>
<html>

	<meta charset="utf-8">
		<title>Restaurant.com</title>
		   @include('menubar')
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
             
            //var cellno=row.insertCell(0) 
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

    function AddtoCart(id,name,type,price){
      
       var singleProduct = {};
       
       singleProduct.Id=id;
       singleProduct.Name=name;
       singleProduct.type=type;
       singleProduct.Price=price;
       
       foodcart.push(singleProduct);
       
       displayfoodcart();
    }  
    function removefromcart(id,name,type,price){

        var pro={};

        pro.Id=id;
        pro.Name=name;
        pro.type=type;
        pro.price=price;

        foodcart.pop(pro);

        displayfoodcart();
    }

    function passData() {

    var id="";
    var name = "";
    var type = "";
    var price = "";

    for(var product in foodcart){
        id += foodcart[product].Id+",";
        name += foodcart[product].Name + ",";
        type += foodcart[product].type + ",";
        price += foodcart[product].Price + ",";    
    }
    document.getElementById("hidId").value = id;
    document.getElementById("hidName").value = name;
    document.getElementById("hidType").value = type;
    document.getElementById("hidPrice").value = price;
    }

    //Add some products to our shopping cart via code or you can create a button with onclick event
    //AddtoCart("Table","Big red table",50);
    //AddtoCart("Door","Big yellow door",150);
    //AddtoCart("Car","Ferrari S23",150000);


</script>

    
<div class="container-fluid">
<div class="row">
  <div class="container" >
 
<b>
<table style="font-size: 14px ; background-color: #EDF1F2;"  class="table table-bordered" >
    <tr>
        <td valign="top">

            <table style="background-color: #EDF1F2;" class="table table-condensed" class="table-responsive" class="table table-bordered">
                <thead>
                    <tr><td>#</td>
                        <td >
                            Food for sale
                        </td>
                        <td>Type</td>
                        <td>Price</td>
                    </tr>
                </thead>
                <tbody>
                                     @foreach ($all as $user)   
                    <tr> 
                    <td> {!!$user->id!!}</td>
                        <td>
                         
                {!!$user->name!!}

                        </td>
                              <td>
                     {!!$user->type!!}    
                

                        </td>
                        <td>
                          {!!

                        $p=$user->price;
                          $user->price!!}
                        </td>
                        <td>
                        
                      <input type="button" class="btn btn-primary" value="Add to cart" 
                      onclick="AddtoCart('{!!$user->id!!}','{!!$user->name!!}','{!!$user->type!!}',<?php echo $p;?>)"/>
                         
                        </td>
                    </tr>
                    @endforeach
                        
                </tbody>

            </table>
        </td>
        <td width="43%" valign="top" >

        <h3>Ordered Food <input style="float: right;" type="button" class="btn btn-danger" value="Remove" onclick="removefromcart()" /></h3>
            <table style="background-color: #EDF1F2;" class="table table-bordered" class="table table-condensed" id="orderedProductsTbl">
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
                      {!!  Form::open(array('url' => 'buying'));!!}
                       <td colspan="3" align="right" value="Total Price" id="cart_total">

                        </td>

                    </tr>

                </tfoot>
            </table>
             
            <input type="hidden" id="hidId" name="hidId" value="">
            <input type="hidden" id="hidName" name="hidName" value="">
            <input type="hidden" id="hidType" name="hidType" value="">
            <input type="hidden" id="hidPrice" name="hidPrice" value="">
            <input type="submit" class="btn btn-success" onclick="passData()" style=" float:right" value="Buy" />
             {!!  Form::close(); !!}
       
        @if (count($errors) > 0)
        <div class="alert alert-danger" style="clear :right">
        
        @foreach ($errors->all() as $error)
                {{ $errors->first('hidId') }}
            @endforeach
        
    </div>
@endif
        </td>
    </tr>
</table>

</b>


</div>
</div>
</div>
@include('foot')
