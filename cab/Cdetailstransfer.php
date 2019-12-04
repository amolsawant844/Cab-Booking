<?php


$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$contact=$_POST['contact'];
$cemail=$_POST['email'];
$city=$_POST['city'];
$cuserid=$_POST['cusername'];
$cpassword=$_POST['cpsw'];
/*echo "$firstname";
echo "$lastname";
echo "$contact";
echo "$cemail";
echo "$city";
echo "$cuserid";
echo "$cpassword";*/
$mysqli = new mysqli("37.59.55.185", "hUNB1awrCF", "MB9HZ3sgGg", "hUNB1awrCF", 3306);

$result = $mysqli->query("INSERT INTO customer(customer_id,first_name,last_name,cemail,contact,city,password) values('$cuserid','$firstname','$lastname','$cemail','$contact','$city','$cpassword')");

mysqli_close($mysqli);

?>