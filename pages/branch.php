<?php
include 'dbconfig.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
   } 

$id=$_POST['id'];

$sql = "SELECT id,fullname FROM userinfo where branch = '$id' and role = 'Faculty'  ";
$result = $conn->query($sql);
echo "<option>select</option>";
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

echo "<option value='". $row['id'] ."'>" .$row['fullname'] ."</option>" ;
      }
} else {
  echo "0 results";
}
$conn->close();
?>