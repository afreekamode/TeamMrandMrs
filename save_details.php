
<?php
session_start();
require('form/connect.php');


	//Sign-up Page Starts here
	if (isset($_POST['submit'])){
		$user_email = trim(strip_tags($_POST['email']));
		$user_password = trim(strip_tags($_POST['password']));
		$encrypted_md5_password = md5($user_password);
		
		if( $user_email == "" || $user_password == "")
		{
			echo '<br><div class="info">Sorry, all fields are required to create a new account. Thank you.</div><br>';
		}
		elseif(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $user_email))
		{
			echo '<br><div class="info">Sorry, Your email address is invalid, please enter a valid email address to proceed. Thank you.</div><br>';
		}
		
		$sql_check = "SELECT * FROM signup_table WHERE (email = '$user_email')";
		$check_for_duplicates = mysqli_query($conn, $sql_check);

		if(mysqli_num_rows($check_for_duplicates) > 0)
		{
			echo '<br><div class="info">Sorry, your email address already exist in our database and duplicate email addresses are not allowed for security reasons.<br>Please enter a different email address to proceed or login with your existing account. Thank you.</div><br>';
		}
		else
		{
		$sql = "INSERT INTO signup_table (email, password, log_date) VALUES('$user_email', '$encrypted_md5_password', now())";
			
		if (mysqli_query($conn, $sql)) {
		echo "<script> alert ('Sign-up successfully !!!'); </script>";
		header("location: index.php");
				}
			else
			{
				echo '<br><div class="info">Sorry, your account could not be created at the moment. Please try again or contact the site admin to report this error if the problem persist. Thanks.</div><br>';
			}
		}
	}
	////Update Password Starts here
		?>