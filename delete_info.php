<?php
include 'hrd_db.php';
$id = $_GET["id"];
$sql = "DELETE FROM employee WHERE idno = '".$id."'";

if ($con->query($sql) === TRUE) {
    echo "<script type='text/javascript'> alert('employee [$id] successfully deleted!') </script>";

		header('location: employees.php');
} else {
    echo "Error deleting record: " . $con->error;
}
$con->close();

?> 