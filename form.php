<?php
session_start();
require('form/connect.php');

//capture user data input
$Errmsg1 = "";
$Errmsg2 = "";
$Errmsg3 = "";
$Errmsg4 = "";

if (isset($_POST['submit'])){
		$email = trim(strip_tags($_POST['email']));
		$pword = trim(strip_tags($_POST['password']));
		$encrypted_md5_password = md5($pword);
	

		if (!empty($pword && $email)) {

			$stmt = $conn->prepare('SELECT * FROM signup_table WHERE email = ?');
			$stmt->bind_param('s', $email);
			$stmt->execute();

			$result_check = $stmt->get_result();
					
		if(mysqli_num_rows($result_check) > 0){

			$sql_check = "SELECT * FROM signup_table WHERE password = '$encrypted_md5_password' AND email = '$email' ";

			 $result_check = mysqli_query($conn, $sql_check);
    		//condition statement to check if the data exist

    		if(mysqli_num_rows($result_check) > 0){
					
			//Update query syntax for login status
			$sql_update = "UPDATE signup_table SET login_status = true WHERE (email= '$email' AND password = '$encrypted_md5_password') ORDER BY log_date ASC limit 1";
			$result_update = mysqli_query($conn, $sql_update);
					
			//condition statement to check if it updates
			if($result_update){

				//used to check output of each row data 
				while($row_check = mysqli_fetch_assoc($result_check)){

					
					//the header redirect the user to the index.php page
				header("location: dashboard.html");
				}
			}else{
				//if an error occur exit and display these alert msg
				$Errmsg1 = "Please try again later!!!";
			}

		}else{
			$Errmsg2 = "Incorrect USERNAME/PASSWORD!";
		}

		}else{
			$Errmsg3 = "kindly fill all the entry in the form or check your input!";
		}

	}
}

	function PrepSQL($value)
    {
        // Stripslashes
        if(get_magic_quotes_gpc()) 
        {
            $value = stripslashes($value);
        }

        // Quote
        $value = "'" . mysqli_real_escape_string($value) . "'";

        return($value);
    }

    $conn->close();
?>