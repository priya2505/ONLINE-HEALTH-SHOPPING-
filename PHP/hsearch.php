<?php

$connect = mysqli_connect("localhost", "root", "", "test");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM h2 
  WHERE hname LIKE '%".$search."%'
  OR hdisease LIKE '%".$search."%'  
 ";
}
else
{
 $query = "
  SELECT * FROM h2 ORDER BY hname
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Name</th>
     <th>Disease</th>
     <th>Price</th>
     <th></th>
     <th>Quantity (kgs)</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["hname"].'</td>
    <td>'.$row["hdisease"].'</td>
    <td>'.$row["hprice"].'</td>
	<td> <img src="'.$row["himage"].'" height="250" width="300"></td>
	<td>
	<form method="post" action="herbs.php?action=add&id='.$row["id"].'">
	<input type="number" name="quantity" value="1" class="form-control" />
	<input type="hidden" name="hidden_name" value="'.$row["hname"].'" />
	<input type="hidden" name="hidden_price" value="'.$row["hprice"].'" />
	<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
	</form>
	</td>

   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>