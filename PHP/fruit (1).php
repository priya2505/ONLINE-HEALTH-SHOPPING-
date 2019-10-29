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

if(isset($_POST['delete']))
{	 
	 $name = $_POST['name'];
	 $sql = "DELETE from f1 where fname='".$name."' ";
     if (mysqli_query($link, $sql)) 
     {
         
		echo '<script>alert("Item Removed")</script>';
		
     }
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
        <title>Welcome Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <style >
        body{
            background-color: cyan;
         }
        table{
            height: 100%;
            width: 100%;
            
        }
        th, td {
             border-bottom: 1px solid #000000;
             padding: 30px;
              text-align: left;
        }
        .t{
            width : 350px;
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
        <div style="overflow-x:auto;">
        <?php
        $sql = "SELECT * FROM f1";
        $result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());

        if ($result->num_rows > 0) {
            // output data of each row
            echo "<table>";
            echo "<tr>"; 
            echo "<td>"; echo "NAME"; echo "</td>";
            echo "<td>"; echo "DESCRIPTION"; echo "</td>";
            echo "<td>"; echo "DISEASE"; echo "</td>";
            echo "<td>"; echo "PRICE"; echo "</td>";
            echo "</tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo"<td>";echo  $row["fname"];echo"</td>";
                echo"<td class='t'>";echo  $row["fdescription"];echo"</td>";
                echo"<td class='t'>";echo  $row["fdiseases"];echo"</td>";
                echo"<td>";echo  $row["fprice"];echo"</td>";
                echo"<td>";?> <img src="<?php echo $row["fimg"];?>" height="250" width="300"> <?php echo"</td>";
                echo "<td>";
              ?>
              <form method='POST'>
					<input type="hidden" name="name" value="<?php echo $row['fname']; ?>">
                    <button  name="delete" type="submit">DELETE</button>
                  </form>
                  <?php 
                  echo "</td>";
            echo "</tr>";
            }
        }
        echo "</table>";
        mysqli_close($link);
        ?>
        </div>
    </body>

</html>