<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$aid = $_POST['aid'];
$name = $_POST['name']; 
$presentedby = $_POST['presentedby'];  
$year = $_POST['year'];

$sql ="update awards set name='$name', presentedby='$presentedby', year='$year' where aid='$aid'" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
  header('Location: listawards.php');    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!--  <a href="/pivotalsoft/pages/roles.php">See the list</a> -->