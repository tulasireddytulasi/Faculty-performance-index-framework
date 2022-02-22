<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$cid = $_POST['cid'];
$name = $_POST['name']; 
$org = $_POST['org'];  
$fromdate = $_POST['fromdate'];
$todate = $_POST['todate'];


$sql ="update course set name='$name', org='$org', fromdate='$fromdate', todate='$todate' where cid='$cid'" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
  header('Location: listcourse.php');    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!--  <a href="/pivotalsoft/pages/roles.php">See the list</a> -->