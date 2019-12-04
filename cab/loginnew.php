<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/login.css">
</head>
<body>

  <form action="login_check_details.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
    <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label><b>Type</b></label><br><br>
      <input type="radio" name="Type" value="driver"> Driver<br>
      <input type="radio" name="Type" value="customer"> Customer<br>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    
    <div class="clearfix">
     
      <button type="button" class="cancelbtn">Cancel</button>
      
    </div>

    </div>
  </div>
</form>

</body>
</html>