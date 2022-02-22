
<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$cid = $_GET['cid'];
$score = "0";


$sql ="update course set score='$score' where cid='$cid'" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
 ?>
<script>
		alert('Approved');
        window.location.href='course.php?success';
        </script>
		<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>