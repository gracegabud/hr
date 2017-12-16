<?php

include 'hrd_db.php';
session_start();


$idno = $_POST['idno'];
$lname = $_POST['lname'];

/* $fname = implode(",",$_POST['day']);*/

$fname = $_POST['fname'];
$startD = $_POST['startD'];

$endD = $_POST['endD'];
$reason = $_POST['reason'];	

$_SESSION['idno'] = $idno;

$idno = stripcslashes($idno);
$idno = mysqli_real_escape_string($con,$idno);

$noInjection = mysqli_query($con,"SELECT idno FROM leaves where idno = '$idno'");
	$row = mysqli_fetch_array($noInjection);

	if($row['idno'] == $idno ){
		echo "<script type='text/javascript'>alert('Sorry the ID NUMBER has already been taken')</script>";
	}

	else
	{
	$query = "INSERT INTO leaves (idno,lname,fname,startD,endD,reason) values ('$idno','$lname','$fname','$startD','$endD','$reason')";

		if(mysqli_query($con,$query)){
			header("refresh:0; url=leaves.php");
		}
		
}
?>