<?php
include 'dbconfig.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
   } 

$course=$_POST['course'];
$year=$_POST['year'];
$sem=$_POST['sem'];
$sql = "SELECT name FROM subjects where course = '$course' and year = '$year' and semester = '$sem'  ";
$result = $conn->query($sql);
echo "<option>select</option>";
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

echo "<option >" .$row['name']."</option>";
      }
} else {
  echo "0 results";
}
$conn->close();
?>