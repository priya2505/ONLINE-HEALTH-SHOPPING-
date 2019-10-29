<?php

$connect = mysqli_connect("localhost", "root", "", "test");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM hop 
  WHERE hosname LIKE '%".$search."%'
  OR hosdes LIKE '%".$search."%'  
 ";
}
else
{
 $query = "
  SELECT * FROM hop ORDER BY hosname
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
     <th>Description</th>
     <th>Address</th>
     <th>Contact</th>
     <th></th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["hosname"].'</td>
    <td>'.$row["hosdes"].'</td>
    <td>'.$row["hosadd"].'</td>
    <td>'.$row["hoscontact"].'</td>
	<td> <img src="'.$row["hosimage"].'" height="250" width="300"></td>
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