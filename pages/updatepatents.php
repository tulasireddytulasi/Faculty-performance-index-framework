<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$pid = $_POST['pid'];
$title = $_POST['title']; 
$status = $_POST['status'];  
$year = $_POST['year'];


$sql ="update patents set title='$title', status='$status', year='$year' where pid='$pid'" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
  header('Location: listpatents.php');    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!--  <a href="/pivotalsoft/pages/roles.php">See the list</a> -->