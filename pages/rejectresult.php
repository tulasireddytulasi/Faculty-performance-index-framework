
<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$rid = $_GET['rid'];
$score = "0";


$sql ="update result set score='$score' where rid='$rid'" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
 ?>
<script>
		alert('Approved');
        window.location.href='result.php';
        </script>
		<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>