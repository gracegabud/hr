<?php
	
	include 'hrd_db.php';

	/*$idno = $_POST['IDNo'];*/
	$fname = $_POST['FirstName'];
	$lname = $_POST['LastName'];
	$email = $_POST['Email'];
	/*$contact = $_POST['ContactNumber'];*/
	$username = $_POST['Username'];
	$password = $_POST['Password'];		
	$cpassword = $_POST['ConfirmPassword'];

	// prevent injection
	$username = stripcslashes($username);
	$username = mysqli_real_escape_string($con,$username);

	$noInjection = mysqli_query($con,"SELECT username from signup where username = '$username'") or die ( "Something went wrong" . mysqli_error());
	$row = mysqli_fetch_array($noInjection);

	if($row['username'] == $username ){
		echo "<script type='text/javascript'>alert('Sorry the username has already been taken')</script>";
		header("refresh:0; url=login.php");
	}
	else{
 	
	if($_POST["Password"] == $_POST["ConfirmPassword"]){

	$query = "INSERT INTO signup (idno,fname,lname,email,username,password,cpassword) values ('$idno','$fname','$lname','$email','$username','$password','$cpassword')";

	if(mysqli_query($con,$query)){
		echo "<script type='text/javascript'>alert('SIGN UP SUCCESSFUL')</script>";
		header("refresh:0; url=login.php");
	}
	else{
		echo "<script type='text/javascript'>alert('SOMETHING WENT WRONG')</script>";
	}

}
else{
echo "<script type='text/javascript'>alert('Password does not match')</script>";
		header("refresh:0; url=login.php");
	}
}
?>