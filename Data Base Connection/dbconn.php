<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="webtech";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else
{
	//echo "Connected successfully";
	//$q="INSERT INTO `student`( `Name`, `Email`) VALUES ('najib','najib@gmail.com')";
	//$q="DELETE FROM Student where ID=103";
	$q= "UPDATE `student` SET `Name`= 'jhon' , `Email` = 'jhon@gmail.com' WHERE ID ='102'";
	
	$result=$conn->query($q);
	if($result)
		echo "data inserted successfully";
	else
		echo "data not inserted";
}

?>