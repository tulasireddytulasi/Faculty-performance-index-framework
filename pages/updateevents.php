<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id = $_POST['id'];
$title = $_POST['title']; 
$type = $_POST['type'];  
$org = $_POST['org'];
$from1 = $_POST['from1'];
$to1 = $_POST['to1'];


$sql ="update events set title='$title', type='$type', org='$org', from1='$from1', to1='$to1' where id='$id'" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
  header('Location: listevents.php');    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!--  <a href="/pivotalsoft/pages/roles.php">See the list</a> -->