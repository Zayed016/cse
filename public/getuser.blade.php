<?php 
$q = intval($_GET['q']);
$con = mysqli_connect('localhost','root','','resdata');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
$sql="SELECT * FROM food WHERE type_id = $q";
$result = mysqli_query($con,$sql);
?>
<!-- <form action="buying" method="POST" accept-charset="utf-8">
	
<input type="button" class="btn btn-primary" value="Add to cart" 
                      onclick="AddtoCart('{!!$user->id!!}','{!!$user->name!!}','{!!$user->type!!}',<?php echo $p;?>)"/> -->
<b>
<table style='font-size: 16px ;background-color: #EDF1F2;'  class='table table-bordered'>
<tr>
<th>Name</th>
<th>Price</th>
</tr>
<?php
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
        echo "</tr>";
}
echo "</table>";
echo "</b>"
?>
</form>