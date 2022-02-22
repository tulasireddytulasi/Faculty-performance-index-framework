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
$duty = $_POST['duty'];  
$fromdate = $_POST['fromdate'];
$todate = $_POST['todate'];


$sql ="update administative set title='$title', duty='$duty', fromdate='$fromdate', todate='$todate' where aid='$aid'" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
  header('Location: listadministative.php');    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!--  <a href="/pivotalsoft/pages/roles.php">See the list</a> -->