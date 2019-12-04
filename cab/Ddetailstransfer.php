<?php

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$contact=$_POST['contact'];
$demail=$_POST['email'];
$duserid=$_POST['duserid'];
$dpassword=$_POST['dpsw'];
/*echo "$firstname";
echo "$lastname";
echo "$contact";
echo "$demail";
echo "$duserid";
echo "$dpassword";*/


$mysqli = new mysqli("37.59.55.185", "hUNB1awrCF", "MB9HZ3sgGg", "hUNB1awrCF", 3306);

$result = $mysqli->query("INSERT INTO driver(driver_id,first_name,last_name,demail,contact,password) values('$duserid','$firstname','$lastname','$demail','$contact','$dpassword')");

mysqli_close($mysqli);


?>