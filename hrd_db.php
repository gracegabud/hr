<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'hrdashboard';

$con = mysqli_connect($host,$user,$pass,$db);
mysqli_select_db($con,'hrdashboard');
/*if($con)
echo 'connection success';

$sql ="insert into login (username, password) values('hello123',1234)";
$query=mysqli_query($con, $sql);

if($query)
	echo'data inserted successfully'; */
?>