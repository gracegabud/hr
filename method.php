<?php
// Get values pass from form in login.php file
	include 'hrd_db.php';
	ob_start();
	session_start();


	$username = $_POST['username'];
	$password = $_POST['password'];

	//print_r($_POST);exit;


	// to preven mysql injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysqli_real_escape_string($con,$username);
	$password = mysqli_real_escape_string($con,$password);

	// Query the database for user

	$result = mysqli_query($con,"SELECT * from signup where username = '$username' and password = '$password'")
				or die ("Failed to query database" . mysqli_error());
	$fetch = mysqli_fetch_array($result);

	$_SESSION['firstname']= $fetch['idno'];
	$_SESSION['fname']= $fetch['fname'];
	$_SESSION['lname']= $fetch['lname'];

	$rows = mysqli_num_rows($result);

	if($rows == 1){
		$_SESSION['login_user']=$username;
		echo "<script type='text/javascript'>alert('Login successful!')</script>";
		header("refresh:0;url=home.php");
		// new comment 092617
	}
	else{
		//echo nl2br("\nThe user doesn't exist");
		echo "<script type='text/javascript'>alert('INVALID ACCOUNT')</script>";
		header("refresh:0; url=login.php");

	}
?>
