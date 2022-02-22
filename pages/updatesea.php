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
$nosp = $_POST['nosp'];  
$outcome = $_POST['outcome'];
$month = $_POST['month'];
$year = $_POST['year'];

$sql ="update sea set name='$name', nosp='$nosp', outcome='$outcome', month='$month', year='$year' where sid='$sid'" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
  header('Location: listsea.php');    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!--  <a href="/pivotalsoft/pages/roles.php">See the list</a> -->