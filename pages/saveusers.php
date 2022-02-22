<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id = $_POST['id'];
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];   
$course = $_POST['course'];
$branch = $_POST['branch'];
$role = $_POST['role'];


$sql ="INSERT INTO userinfo (fullname,username, password, course, branch, role) VALUES('$fullname','$username','$password','$course','$branch','$role')" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
  header('Location: listusers.php');    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>