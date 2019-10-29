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
?>
<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "test");
 
if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
		$count = count($_SESSION["shopping_cart"]);
		$item_array = array(
		'item_id'		=>	$_GET["id"],
		'item_name'		=>	$_POST["hidden_name"],
		'item_price'		=>	$_POST["hidden_price"],
		'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
		echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
		'item_id'		=>	$_GET["id"],
		'item_name'		=>	$_POST["hidden_name"],
		'item_price'		=>	$_POST["hidden_price"],
		'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}
 
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
		if($values["item_id"] == $_GET["id"])
		{
		unset($_SESSION["shopping_cart"][$keys]);
		echo '<script>window.location="tp.php"</script>';
		echo '<script>alert("Item Removed")</script>';
		}
		}
	}
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
		<meta  name="viewport" content="width=device-width initial-scale=1.0" charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <style >
         body{
            background-color:#3CF7FF;
        }
        table{
            height: 100%;
            width: 100%;
            
        }
        th, td {
             border: 1px solid darkblue;
              text-align: left;
        }
        </style>
    </head>
    <body class="body">
     <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand" href="#" >NETMEDS<i class="fa fa-heartbeat" aria-hidden="true"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
             <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" name="search_text"  id="search_text" type="search" placeholder="Search" aria-label="Search">
                  </form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                            <a  class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown">HOME</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="cart.php">Fruits</a>
                                <a class="dropdown-item" href="herbs.php">Herbs</a>
                                <a class="dropdown-item" href="hospital.php">Hospitals</a>
                            </div>
                        </li>
                <li class="nav-item active">
                        <a  class="nav-link" href="tp.php">CART<i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </li>
                <li class="nav-item active">
                        <a  class="nav-link" href="logout.php">LOGOUT<i class="fa fa-user-circle" aria-hidden="true"></i></a>
                    </li>
                </li>
            </ul>    
            </div>
        </nav>
        
		<div style="clear:both"></div>
		<br />
		<h3>Order Details</h3>
		<div>
		<table>
		<tr>
		<th width="30%">Item Name</th>
		<th width="10%">Quantity</th>
		<th width="20%">Price</th>
		<th width="15%">Total</th>
		<th width="15%">Action</th>
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
		<td><a href="tp.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
		</tr>
		<?php
		$total = $total + ($values["item_quantity"] * $values["item_price"]);
		}
		?>
		<tr>
		<td colspan="3" align="right">Total</td>
		<td align="right">Rs. <?php echo number_format($total, 2); ?></td>
		<td>	
		<form  action="pay.php" method='POST'>
					<input type="hidden" name="total" value="<?php echo $total; ?>">
                    <button  name="payment" type="submit">PROCEED TO PAYMENT</button>
                  </form>
		</td>
		</tr>
		<?php
		}
		?>
        </div>
        </body>
</html>