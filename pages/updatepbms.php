<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$pid = $_POST['pid'];
$name = $_POST['name']; 
$chapter = $_POST['chapter'];  
$membership = $_POST['membership'];
$year = $_POST['year'];


$sql ="update profissional set name='$name', chapter='$chapter', membership='$membership', year='$year' where pid='$pid'" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
  header('Location: listpbms.php');    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!--  <a href="/pivotalsoft/pages/roles.php">See the list</a> -->