<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles/dsignup.css">
</head>
<body>
<script>
function myFunction() {
  alert("WELCOME TO ONE RIDE!!");
}
</script>

<form action="Ddetailstransfer.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
   <h1>Driver Sign Up</h1>
      <p>Please fill in this form to create an account with ONE RIDE.</p>
      <hr>

      <label for="firstname"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="firstname" required>

      <label for="lastname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="lastname" required>

      <label for="contact"><b>Contact Number</b></label>
      <input type="text" placeholder="Enter Contact Number" name="contact" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="username"><b>User ID</b></label>
      <input type="text" placeholder="Enter User ID" name="duserid" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="dpsw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button  type="button" class="cancelbtn">Cancel</button>
      <button onclick="myFunction()" type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>