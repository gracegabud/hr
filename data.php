<?php
header('Content-Type: application/json');
include 'hrd_db.php';

$query = sprintf("SELECT playerid,score FROM trial");
$result = $con->query($query);
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}
$result->close();

$con->close();

print json_encode($data);

?>