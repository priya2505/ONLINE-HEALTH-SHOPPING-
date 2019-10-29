<?php
$servername='localhost';
$username='root';
$password='';
$dbname = 'test';
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
if(isset($_POST['Product1']))
{	 
  // die('hello');
      $product_cat = $_POST['Product1'];
	    $product_name = $_POST['Product'];
      $descrip = $_POST['Description'];
      $disease=$_POST['Disease'];
      $image = $_POST['image'];
      $price = $_POST['Price'];
      if($product_cat=='fruits'){
        // echo $product_cat;
      $sql = "INSERT INTO f1(fname,fdescription,fdiseases,fprice,fimg) VALUES ('$product_name','$descrip','$disease','$price','$image');";
    }
      else if($product_cat=='herbs'){
        $sql = "INSERT INTO h2(hname,hdisease,hprice,himage) VALUES ('$product_name','$disease','$price','$image')";
      }
	   if (mysqli_query($conn, $sql)) {
	  	echo "New record created successfully !";
	   } else {
	  	echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
       <style >
         body{
            background-color: cyan;
            
            background-repeat : no-repeat;
            background-size :  100% 100%;
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
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                            <a  class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown">HOME</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="fruit.php">Fruits</a>
                                <a class="dropdown-item" href="herbsa.php">Herbs</a>
                                <a class="dropdown-item" href="hospitala.php">Hospitals</a>
                            </div>
                        </li>
                <li class="nav-item active">
                        <a  class="nav-link" href="adminf.php">ADD PRODUCT</a>
                    </li>
                <li class="nav-item active">
                        <a  class="nav-link" href="logout.php">LOGOUT<i class="fa fa-user-circle" aria-hidden="true"></i></a>
                    </li>
                </li>
            </ul>    
            </div>
        </nav>
       <div id="login">
            <div class="flex-container-center">
              <div id="loginBox">
                 <div class="container p-3 text-center">
                    <div class="login-header flex-container-center">
                      Product/Add Product
                     </div>
                     <div class="form">
                      <form style='align:left;' method='POST' action="adminf.php">
                            <label class="labelfont" for-="Product1">Product Category: </label>
                            <input type="text" size="30"  name="Product1" class="form" placeholder="Product category" required><br><br>
                         <label class="labelfont" for-="Product">Product: </label>
                         <input type="text" size="30"  name="Product" class="form" placeholder="Product name" required><br><br>
                         <label class="labelfont" for-="Description">Description : </label>
                         <textarea rows="4" cols="50"  name="Description" class="form" placeholder="Description" required></textarea><br><br>  
                         <label class="labelfont" for-="Disease">Disease: </label>
                         <input type="text" size="30"  name="Disease" class="form" placeholder="Disease name" required><br><br>
                         <label class="labelfont" for-="Add image"> Add image : </label>
                          <!--input type="text" name="image"><br><br>-->
                          <input type="file" name="image" accept="image/*">
                          <input type="submit">
                         </label><br><br>
                         
                         <label class="labelfont" for-="Price">Price(in INR): </label>
                         <input type="number" size="20"  name="Price" class="form" placeholder="Price" pattern="[0-9]{10}" required><br><br>
                         <div class="sfont">
                           <!--  <input type="submit" value="Login" name='submit' class='submit'></input> -->
                           <button class="button" type="submit" formaction="adminf.php" ><b>CANCEL</b></button>
                           <button class="button" type="submit"  ><b>ADD PRODUCT</b></button>
                          </div>
                         </div>
                       </form>
                     </div>
                   </div>
               </div>
             </div>
           </div>
    </body>
</html>

