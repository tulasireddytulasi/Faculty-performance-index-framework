<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$aid = $_POST['aid'];
$title = $_POST['title']; 
$pub = $_POST['pub'];  
$month = $_POST['month'];
$year = $_POST['year'];

$sql ="update articles set title='$title', pub='$pub', month='$month', year='$year' where aid='$aid'" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
  header('Location: listarticles.php');    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!--  <a href="/pivotalsoft/pages/roles.php">See the list</a> -->