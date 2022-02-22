<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$rid = $_POST['rid'];
$title = $_POST['title']; 
$funded = $_POST['funded'];  
$grant1 = $_POST['grant1'];
$fromdate = $_POST['fromdate'];
$todate = $_POST['todate'];
$status = $_POST['status'];
$role = $_POST['role'];

$sql ="update research set title='$title', funded='$funded', grant1='$grant1', fromdate='$fromdate', todate='$todate', status='$status', role='$role' where rid='$rid'" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
  header('Location: listresearch.php');    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!--  <a href="/pivotalsoft/pages/roles.php">See the list</a> -->