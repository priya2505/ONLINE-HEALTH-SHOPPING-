<?php  
$servername='localhost';
$username='root';
$password='';
$dbname = 'test';
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(isset($_POST["submit"])){  
  
if(!empty($_POST['uname']) && !empty($_POST['passwd'])) {  
    $user=$_POST['uname'];  
    $pass=$_POST['passwd'];  

    $query="SELECT * FROM signup WHERE uname='".$user."' AND passwd='".$pass."'";  
    $result = mysqli_query($conn,$query) or die("Unable to select: ".mysql_error());
    if ($result->num_rows > 0) 
    {
      while($row = $result->fetch_assoc())  {  
    $dbusername=$row['uname'];  
    $dbpassword=$row['passwd'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: cart.php");  
    }  
  }
  else if($user=='admin' && $pass=='admin'){
    header("Location: fruit.php");
  }
    else {  
    echo '<script>alert("Invalid username or password!")</script>';
    }  
  
}  
}  

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta  name="viewport" content="width=device-width , initial-scale=1.0" charset="utf-8">

    <title>Netmeds</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="rlogin.css">
    <style >
         body{
            background-color: cyan;
            background-image : url("fh1.jpg");
            background-repeat : no-repeat;
            background-size :  100% 100%;
        }
        </style>
    
  </head>
  <body class="body">
    <div id="login">
     <div class="flex-container-center">
       <div id="loginBox">
          <div class="container p-3 text-center">
             <div class="login-header flex-container-center">
               Account Login
              </div>
              <div class="form">
               <form align="center" method='POST' action="">
                  <label class="labelfont" for-="username">Username : </label>
                  <input type="text" size="10" maxlength="15" name="uname" class="form" placeholder="Username" required><br>
                  <label class="labelfont" for-="password">Password : </label>
                  <input type="password" size="10" maxlength="20" name="passwd" class="form" placeholder="Password" required><br><br>
                  <div class="sfont">
                  <button name="submit" class="btn btn-primary btn-lg btn-responsive" type="submit">Login</button><br>
                    <a href ="trial.php"> Sign Up </a> to create an account.
                  </div>
                </form>
              </div>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>
