<?php
session_start();
$conn = new mysqli("37.59.55.185", "hUNB1awrCF", "MB9HZ3sgGg", "hUNB1awrCF", 3306);
/*echo $_SESSION["un"];
echo $_SESSION["psw"];
*/?>
<!DOCTYPE html>
<html>
<head>
	
	<title>One Ride.com</title>
	<meta charset="utf-8"><!--describing the language we are going to use -->
	<meta name="viewport" content="width=device-width, initial-scale=1"><!--to adjust the width according to the device -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"><!--for using bootstrap4 -->
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"><!--for usng icons -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


   	
	</script>
  <style type="text/css">
    input[type=text] {
  border: 2px solid gray;
  border-radius: 4px;
  background-color: #515050;
  width: 30%;
  padding: 12px 20px;
}
::placeholder {
  color: white;
  opacity: 1; /* Firefox */
}
.button {
  background-color: #555555;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
.button5:hover {
  background-color: #e7e7e7;
  color: white;
}
  </style>

</head>
<body>
	<header>

		<!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
      <a class="navbar-brand" href="#"><img src="./images/lo.png"  height="42" width="42" ></a> 
        <a class="navbar-brand" href="#"><b>One Ride</b></a>
      
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php" style="color: white;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about_us.php" style="color: white;">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: white;">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: white;">Coming Soon..</a>
          </li>

        </ul>
        <ul>
        	<ul style="color:white; margin-left:550px; ">
        	<?php
        	$sql = "SELECT *  FROM driver WHERE driver_id='{$_SESSION['un']}'";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			
  			echo "<h6> WELCOME, ".$row["first_name"]." !!</h6>";
    		?>
    		</ul>
        </ul>
    </nav>

    <div style="padding-top: 100px;">
    	<form style="" action="driver_login.php" method="POST">
    	<label for="curr_loc" style="margin-left:20px; "><b>Current Location:</b></label>
        <input type="text" style=" color: white;" placeholder="Enter Your Current Location" name="curr_loc" required>
        <br><br>	
    	<label for="car_type" style="margin-left:20px; "><b>Choose the type of car you are driving:</b></label><br>
  		<input style="margin-left:20px; " type="radio" name="car_type" value="go" checked> Go
  		<input type="radio" name="car_type" value="premier"> Premier
  		<input type="radio" name="car_type" value="pool"> Pool
  		<input type="radio" name="car_type" value="xl"> XL
  		<br><br>

  		<button class="button button5"  style="margin-left:20px; color: white; " type="submit" class="">Find One Riders</button>
  		</form>
	</div>
		<?php
			$username=$_SESSION['un'];
			$type=$_POST['car_type'];
			//echo "strdasdsa";
			//echo $type;
			//echo $username;
			$sql="INSERT INTO dlog (driver,car_type) values('$username','$type')";
			$result = $conn->query($sql);
			if ($result==true) 
			{
				echo "Finding a customer";
			}
      $sql2="DELETE from dlog where driver='$username' and car_type=''";
      $result2 = $conn->query($sql2);
		?>



    </header>
	
	<section>
	<div>   
    
    
    </div>
 
	</section>


</body>
</html>