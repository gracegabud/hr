<?php

include 'hrd_db.php';
session_start();


$idno = $_POST['idno'];
$lname = $_POST['lname'];

/* $fname = implode(",",$_POST['day']);*/

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$bdate = $_POST['bdate'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$religion = $_POST['religion'];
$nationality = $_POST['nationality'];
$status = $_POST['status'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department = $_POST['department'];
$info = pathinfo($_FILES['image']['name']);
$ext = $info['extension'];
$newname = "newname.".$ext;
$target='images'
$image ="images/".$_FILES['image']['name'];/*
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
  		move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);*/


$_SESSION['idno'] = $idno;

$idno = stripcslashes($idno);
$idno = mysqli_real_escape_string($con,$idno);

$noInjection = mysqli_query($con,"SELECT idno FROM employee where idno = '$idno'");
	$row = mysqli_fetch_array($noInjection);

	if($row['idno'] == $idno ){

		echo "<script type='text/javascript'>alert('Sorry the ID NUMBER has already been taken')</script>";
	}

	else
	{
	$query = "INSERT INTO employee (idno,lname,fname,mname,bdate,address,gender,religion,nationality,status,email,phone,department,image) values ('$idno','$lname','$fname','$mname','$bdate','$address','$gender','$religion','$nationality','$status','$email','$phone','$department','$image')";

		if(mysqli_query($con,$query)){
				header("refresh:0; url=employees.php");

		/*if(move_uploaded_file($_FILES['image'],['tmp_name'], $target)){
			header("refresh:0; url=employees.php");
		
		}else{
			$msg = "There was a problem uploading image";
		}*/
		}else{
			echo "error";	

			print_r($_FILES);/*
to acquire information on what kind of data you are inquiring from your employees 
to acquire information of the possible feature required in an HR Dashoboard
  echo("Error description: " . mysqli_error($con));*/
		}
		
}
?>