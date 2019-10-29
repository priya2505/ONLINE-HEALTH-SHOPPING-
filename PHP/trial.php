<?php
$servername='localhost';
$username='root';
$password='';
$dbname = 'test';

if(isset($_POST['submit']))
{
$conn=mysqli_connect($servername,$username,$password,"$dbname") or die('Error connecting to MySQL server');

$uname = $_POST['uname'];
$mailid = $_POST['mailid'];
$num = $_POST['num'];
$passwd = $_POST['passwd'];
$query="SELECT * FROM signup WHERE uname='".$uname."'";  
$result = mysqli_query($conn,$query) or die("Unable to select: ".mysql_error());
$count = mysqli_num_rows($result);
   if($count == 0)
    {
        $query1="INSERT INTO signup(uname, mailid, num ,passwd) VALUES ('$uname','$mailid','$num','$passwd')";  
        $result = mysqli_query($conn,$query1);
        echo '<script>alert("Signup Successful")</script>';
        echo '<script>window.location="lognew.php"</script>';
    }else{
      echo '<script>alert("The user already exists!")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta  name="viewport" content="width=device-width", initial-scale="1.0" charset="utf-8">
    <title>Netmeds</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
    <div id="signup">
      <div class="flex-container-center">
        <div id="loginBox">
         <div class="container p-3 text-center">
           <div class="login-header flex-container-center">
              Account Signup
            </div>
            <div class="form">
             <form method='POST' action="trial.php" >
               <label class="labelfont" for-="username">Username : </label>
                <input type="text" size="12" maxlength="15" name="uname" class="form" placeholder="Username"  required><br><br>
                <label class="labelfont" for-="email">Email id : </label>
                <input type="email" size="12" maxlength="30" name="mailid" class="form" placeholder="Email" required><br><br>
                <label class="labelfont" for-="number">Number : </label>
                <input type="tel" size="12" maxlength="10" name="num" class="form" placeholder="Number" pattern="[0-9]{10}"  required><br><br>
                <label class="labelfont" for="password">Password : </label>
                <input type="password" size="20" maxlength="20" name="passwd" class="form" placeholder="Password" ><br><br>
                <div class="sfont">
                 <!-- <input type="submit" value="Signup" name='signup' class='submit'></input> -->
                 <button class="button"  name="submit" type="submit">Signup</button>
               </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
