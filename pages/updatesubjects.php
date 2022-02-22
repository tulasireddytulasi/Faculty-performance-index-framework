<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sid = $_POST['sid'];
$name = $_POST['name']; 
$branch = $_POST['branch'];  
$course = $_POST['course'];
$year = $_POST['year'];
$sem = $_POST['sem'];


$sql ="update subjects set name='$name', branch='$branch', course='$course', year='$year', semester='$sem' where sid='$sid'" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
  header('Location: listsubjects.php');    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>