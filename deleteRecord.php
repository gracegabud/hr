<?php
include 'hrd_db.php';
session_start();
$id = $_GET["emp"];

// sql to delete a record
$sql = "DELETE FROM employee WHERE idno = '".$id."'";

if ($con->query($sql) === TRUE) {
    echo "<script type='text/javascript'> alert('employee [$id] successfully deleted!') </script>";

   	header("refresh:0; url=course_subject.php");
} else {
    echo "Error deleting record: " . $con->error;
}

$con->close();

?> 