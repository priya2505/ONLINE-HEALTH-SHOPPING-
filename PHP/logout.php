<?php

session_start();
session_unset();
session_destroy();

echo "<p align=center>";
echo "<font size=7 face=Arial, Helvetica, sans-serif>"; 
echo "<br> <br>You have been succesfully log out.<br>";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta  name="viewport" content="width=device-width", initial-scale="1.0" charset="utf-8">
    <title>Netmeds</title>
      <style>
    body{
        background-color : #3CF7FF;
    }
    </style>
  </head>
<body>
<p align=center>
<font size=5 face=Arial, Helvetica, sans-serif>
<h3><a href="lognew.php">Go back to login page</a></h3>
</font>
</p>

  </body>
</html>

