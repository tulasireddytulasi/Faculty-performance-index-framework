
<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$pid = $_GET['pid'];
$score = "0";


$sql ="update profissional set score='$score' where pid='$pid'" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
 ?>
<script>
		alert('Approved');
        window.location.href='pbms.php?success';
        </script>
		<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
<!--  <a href="/pivotalsoft/pages/roles.php">See the list</a> -->