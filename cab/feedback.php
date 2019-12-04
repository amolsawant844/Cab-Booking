<?php
session_start();
$conn = new mysqli("37.59.55.185", "hUNB1awrCF", "MB9HZ3sgGg", "hUNB1awrCF", 3306);

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/feedback.css">
</head>
<body>
  <div class="header" style="height:52px; width:1500px">
    
  </div>


<h3 style="font-size:35px"><center>CUSTOMER FEEDBACK FORM</center></h3>

<div class="container1">
  <form action="feedback.php" method="POST">
    <label for="custID">Customer ID</label>
    <input type="text" id="custID" name="custID" placeholder="Your ID..">

    <label for="ffare">Final fare</label>
    <input type="text" id="ffare" name="ffare" placeholder="Your fare..">

    <label for="modepay">Mode of payment</label>
    <select id="modepay" name="modepay">
      <option value="cash">Cash</option>
      <option value="ewallet">E-wallet</option>
      <option value="intbank">Internet banking</option>
      </select>


<h1 style = "font-size : 15px">Rate your experience</h1>
<label class="container"><pre>   1</pre>
  <input type="radio" checked="checked" name="radio" value="1">
  <span class="checkmark"></span>
</label>
<label class="container"><pre>   2</pre>
  <input type="radio" name="radio" value="2">
  <span class="checkmark"></span>
</label>
<label class="container"><pre>   3</pre>
  <input type="radio" name="radio" value="3">
  <span class="checkmark"></span>
</label>
<label class="container"><pre>   4</pre>
  <input type="radio" name="radio" value="4">
  <span class="checkmark"></span>
</label>
<label class="container"><pre>   5</pre>
  <input type="radio" name="radio"value="5">
  <span class="checkmark"></span>
</label>

    <label for="feedback">Feedback</label>
    <textarea id="feedback" name="feedback" placeholder="Write something.." style="height:80px"></textarea>

    <input type="submit" value="SUBMIT">
  </form>
</div>
<?php
  $id=$_SESSION['un'];
  $fare=$_POST['ffare'];
  $mod=$_POST['modepay'];
  $feedback=$_POST['feedback'];
  $ratings=$_POST['radio'];
  /*echo $ratings;
  echo $feedback;
  echo $mod;
  echo $fare;*/

  $sql1="UPDATE customer_driver SET fare='$fare', modofpay='$mod',rating='$ratings',feedback='$feedback' WHERE customer_id='$id'";
  $result2 = $conn->query($sql1);


?>

</body>
</html>
