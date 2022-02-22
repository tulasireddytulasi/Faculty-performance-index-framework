<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id = $_POST['id'];
$course = $_POST['course']; 
$team = $_POST['team'];  
$title = $_POST['title'];
$year = $_POST['year'];


$sql ="update projects set course='$course', team='$team', title='$title', year='$year' where id='$id'" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
  header('Location: listproject.php');    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!--  <a href="/pivotalsoft/pages/roles.php">See the list</a> -->