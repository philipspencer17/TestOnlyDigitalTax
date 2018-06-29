<!DOCTYPE html>
<html>

<head>

        <meta charset = "UTF-8">
        <title> Ebid Sale Items</title>
        <img src="auctionimage.jpeg" width ="140" height = "140"></img> 
</head>

<style>

   
* {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the already a vendor button */
.vendor {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float vendor and signup buttons and add an equal width */
.vendor, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for vendor button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .vendor, .signupbtn {
    width: 100%;
  }
}
</style>
<body>

<form action="register.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Vendor Sign Up</h1>
    <p>Please fill in this form to create a vendor account.</p>
    <hr>
    
    <p>If you've signed up as a vendor, <a href="#" style="color:dodgerblue">Click Here</a>.</p>
    
	<label><b>FirstName</b></label>
    <input type="text" placeholder="firstname" name="firstName" required>
    
    <label><b>LastName</b></label>
    <input type="text" placeholder="lastName" name="lastName" required>
	
    <label><b>Email</b></label>
    <input type="text" placeholder="email" name="email" required>

    <label><b>Address</b></label>
    <input type="text" placeholder="address" name="address" required>
    
    <label><b>Password</b></label>
    <input type="text" placeholder="password" name="password" required>
    
    <label>
      <input type="checkbox" checked="checked" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>Already a Member <a href="login.php">Sign in</a>
    </p>

    <div class="clearfix">
      <button type="button" class="vendor">Already a Vendor</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>
