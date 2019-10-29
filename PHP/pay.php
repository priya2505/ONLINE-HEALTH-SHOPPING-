
<?php
$hostname = "localhost"; // the hostname you created when creating the database
$username = "root";      // the username specified when setting up the database
$password = "";      // the password specified when setting up the database
$database = "test";      // the database name chosen when setting up the database 
$link = mysqli_connect($hostname, $username, $password, $database);
if (mysqli_connect_errno()) {
   die("Connect failed: %s\n" + mysqli_connect_error());
   exit();
}
session_start();
    if(isset($_POST["payment"]))
    {
      echo "<font align='center'><h2><br>The payment is done.</h2>";
      ?>
		<h3>Order Details</h3>
		<table align="center" >
		<tr>
		<th width="40%">Item Name</th>
		<th width="20%">Quantity</th>
		<th width="20%">Price</th>
		<th width="20%">Total</th>
    </tr>
    <?php
      if(!empty($_SESSION["shopping_cart"]))
      {
      $total = 0;
      foreach($_SESSION["shopping_cart"] as $keys => $values)
      {
      ?>
      <tr>
      <td><?php echo $values["item_name"]; ?></td>
      <td><?php echo $values["item_quantity"]; ?></td>
      <td>Rs. <?php echo $values["item_price"]; ?></td>
      <td>Rs. <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
      </tr>
      <?php
      }
      echo '</table>';
    }
      
        echo "<font align='center'><h2><br>The total bill is Rs.".$_POST['total'].".</h2>";
        
         session_unset();
        }
mysqli_close($link);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta  name="viewport" content="width=device-width", initial-scale="1.0" charset="utf-8">
    <title>Netmeds</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="C:\xampp\htdocs\nf\pr.php">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
         <style>
    body{
        background-color : #3CF7FF;
    }
    </style>
  </head>
<body>
<p align=center>
<font size=5 face=Arial, Helvetica, sans-serif>
<h3><a href="cart.php">Continue Shopping...</a></h3>
  </body>
</html>
