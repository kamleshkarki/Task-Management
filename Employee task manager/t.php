<?php
error_reporting(E_ALL & ~E_NOTICE);
if(isset($_POST['submit']))
{
$servername = "localhost";
$username = "id9775959_root1";
$password = "root1@123";
$dbname = "id9775959_atz12";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	$empid = $_POST["empid"];
	$date = $_POST["date"];
	$ename = $_POST["ename"];
	$department = $_POST["department"];
	$projectname = $_POST["projectname"];
	$reportingto = $_POST["reportingto"];
	$status= $_POST["status"];
	$pending= $_POST["pending"];
	$msg = $_POST["msg"];
// if($completed='null')
// {
// 	$completed= "Yes";
// }

$sql ="INSERT INTO `employee`( `eid`, `ename`, `dname`, `pname`, `rto`, `status`, `pending`, `task`,`date`) VALUES ('$empid','$ename','$department','$projectname','$reportingto','$status','$pending','$msg','$date')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
