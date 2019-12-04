<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script>
    function myFunction() {
    location.replace("feedback.php")
    }
</script>
<style type="text/css">
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
</style>

</head>
<body>
    <div style="color:#515050;text-align:center">
    <?php
    $conn = new mysqli("37.59.55.185", "hUNB1awrCF", "MB9HZ3sgGg", "hUNB1awrCF", 3306);
        session_start();
        $username=$_SESSION['un'];
        $type=$_POST['car'];
        $source=$_POST['curr_loc'];
        $destination=$_POST['dest_loc'];
        
        echo "<br><br><br>";?>
        <span style="color: gray; text-decoration: underline overline wavy black;"><?php echo "<h2>DRIVER DETAILS</h2>";?></span>
        <?php
        $sql = "SELECT * from driver where driver_id=(SELECT driver  FROM dlog WHERE car_type='$type')";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) 
        {
          while($row = $result->fetch_assoc())
          {?>
            <span style="color: gray; "><?php echo "<br>";
            echo "<h3>-Driver id:           " . $row["driver_id"]. "<br> -Name:           " . $row["first_name"]. " " . $row["last_name"]. "<br> -email:            " .$row["demail"]. "<br>-contact:           ".$row["contact"]."<br></h3>";
            $d_id=$row["driver_id"];?></span>
            <?php
            $sql1="INSERT INTO customer_driver (customer_id,driver_id,source,destiantion) values('$username','$d_id','$source','$destination')";
            $result1 = $conn->query($sql1);
            $sql2="DELETE from dlog where driver='$d_id'";
            $result2 = $conn->query($sql2);



            //header('Location: feedback.php');
            /*if($result1==true)
            {
              echo "divers aasigned";
            }*/
          }
          
        }
        elseif ($result->num_rows == 0)
        {?>
          <span style="color: gray;"><?php echo "<h3>Drivers are not currently available</h3>";?></span>
        <?php
        }
        elseif($result->num_rows>1)
        {

        } 



      ?>
      </div>
      <div>
      <form action="feedback.php" method="POST">
      <button class="button button5"   style="margin-left: 610px; color: white; " onclick="myFunction()" type="submit" class="">GIVE FEEDBACK</button>
      </div>

</form>

</body>
</html>
