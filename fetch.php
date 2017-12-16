<?php
$connect = mysqli_connect("localhost","root","", "hrdashboard");
$output = '';
$sql = "SELECT * FROM employee where lname LIKE '%".$_POST["search"]."%'";
$result = mysqli_query($connect, $sql);
if(mysql_num_rows($result) > 0 )
{
	$output .='<h4 align="center"> Search Result </h4>';
	$output .='<div class= "table-responsive">
				table class = "table table bordered">
				<tr>
					<th>ID Number</th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Gender</th>
					<th>Department</th>
					<th>Email</th>
					</tr>';
			while($row = msqli_fetch_array($result))
			{
				$output .='
					<tr>
						<td>'.$row["idno"].'</td>
						<td>'.$row["lname"].'</td>
						<td>'.$row["fname"].'</td>
						<td>'.$row["gender"].'</td>
						<td>'.$row["department"].'</td>
						<td>'.$row["email"].'</td>
					</tr>
				';
			}
			echo $output;
}
else
{
	echo 'Data Not Found';
}
?>