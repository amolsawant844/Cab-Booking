<?php
session_start();
$username=$_POST['uname'];
$password=$_POST['psw'];
$type=$_POST['Type'];
$_SESSION['un']=$username;
$_SESSION['pswd']=$password;
/*echo"$username";
echo"$password";
echo"$type";
echo"<br>";
*/
	$conn = new mysqli("37.59.55.185", "hUNB1awrCF", "MB9HZ3sgGg", "hUNB1awrCF", 3306);
	if($type=='customer')
	{
		
		$sql = "SELECT *  FROM customer WHERE customer_id='$username'";
		$result = $conn->query($sql);

		if ($result->num_rows == 1) 
		{
    		// output data of each row
    		while($row = $result->fetch_assoc())
     		{
     			//echo "$password";
     			 if($row["password"]==$password)
     			 {
     			 	header('Location: customer_login.php');
     			 	//echo $row["password"];
     			 	//echo "account is present";
     			 }
        		//echo "id: " . $row["customer_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. " -password " .$row["password"]. "<br>";
     			 elseif($row["password"]!=$password)
     			 {
     			 	
     			 	echo "<script type='text/javascript'>
            	   		 alert('USERNAME AND PASSWORD IS INCORRECT');
           				 </script>";
           			
     			 }
    		}
		} 
		else
		{
			
    		echo "<script type='text/javascript'>
               	  alert('USERNAME AND PASSWORD IS INCORRECT');
            	  </script>";
            
		}

	}
	elseif ($type=='driver') 
	{
		$sql = "SELECT *  FROM driver WHERE driver_id='$username'";
		$result = $conn->query($sql);

		if ($result->num_rows == 1) 
		{
    		// output data of each row
    		while($row = $result->fetch_assoc())
     		{
     			//echo "$password";
     			 if($row["password"]==$password)
     			 {
     			 	//echo $row["password"];
     			 	header('Location: driver_login.php');
     			 	//echo "account is present";
     			 }
        		//echo "id: " . $row["customer_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. " -password " .$row["password"]. "<br>";
     			 elseif($row["password"]!=$password)
     			 {
     			 	
     			 	 echo "<script type='text/javascript'>
                		alert('USERNAME AND PASSWORD IS INCORRECT');
           				</script>";
     			 }
    		}
		} 
		else
		{	

    		
            echo "<script type='text/javascript'>
                alert('USERNAME AND PASSWORD IS INCORRECT');
            </script>";
		}
	}
		
	


?>