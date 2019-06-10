<?php
require('form/connect.php');
$user = "";
$sql = "SELECT * FROM signup_table WHERE login_status = false ORDER BY id DESC LIMIT 1";
  $result_check = mysqli_query($conn, $sql);

  //conditional statment for the person logged in
  if (mysqli_num_rows($result_check)==1){

    //to loggedout for logged in users we run our codes inside this logged in area
    
    while($rows_check = mysqli_fetch_assoc($result_check)) {

      //get the user name frm the login details
      $user = $rows_check['firstname'];
      $user = ucfirst($user);

    }
}

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IVR | Users Registration</title>

<link rel="icon"  type="image/x-icon" href="favicon.ico">
<!-- Required header files -->
<script type="text/javascript" src="js/logjs/jquery_1.5.2.js"></script>
<script type="text/javascript" src="js/logjs/save_details.js"></script>
<script type="text/javascript" src="js/logjs/update_pass.js"></script>
<script type="text/javascript" src="js/logjs/reset_pass.js"></script>

<link href="css/logstyle.css" rel="stylesheet" type="text/css">

</head>
<style>


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

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 100%;
}

/* Add padding to container elements */
.container {
  padding: 56px;
  margin: 100px;
  border: 1px solid #ccc;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
  <div class="section">
<br clear="all">
<center>

<?php if (isset($_GET['signup'])){ ?>

  <div class="container">
    <div style="border:1px solid #ccc; color: green;"><h3>New Users Registration Page</h3></div>
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>First Name</b></label>
    <input type="text" id="firstname" name="firstname" required>

    <label for="email"><b>Last Name</b></label>
    <input type="text" id="lastname" name="lastname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" id="email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" id="passwd" name="passwd" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" id="rpasswd" name="rpasswd" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="submit" class="cancelbtn">Cancel</button>
      <button type="submit" name="signup"  onclick="users_registration();" class="signupbtn">Sign Up</button>
    </div>
  </div>
  <div class="lebels_fields" align="left" id="signup_status"></div><br clear="all"></div>

<?php } ?>


<?php if (isset($_GET['welcome'])){ ?>
<center>
<div style="" id="programming_blog_wrapper">

<div class="" align="left" style="width:200px; float:left;font-family:Verdana, Geneva, sans-serif; font-size:12px; font-weight:bold;">Signup Successfull...<br><br><?php echo "<span style='color : green;font-size:15px;' > Welcome " .$user. " ! </span>";?></div>

<span></span><a href="login.php?login" class="general_button">Login Here</a><br clear="all">
<div class="lebels" align="left">&nbsp;</div>
<div class="lebels_fields" align="left" id="signup_status"></div><br clear="all">
<?php } ?>

</div>
</center>

</div>
</div>

</div>
</body>
</html>