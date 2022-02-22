<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$bid = $_POST['bid'];
$title = $_POST['title']; 
$pub = $_POST['pub'];  
$author = $_POST['author'];
$year = $_POST['year'];


$sql ="update books set title='$title', pub='$pub', author='$author', year='$year' where bid='$bid'" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
  header('Location: listbooks.php');    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!--  <a href="/pivotalsoft/pages/roles.php">See the list</a> -->