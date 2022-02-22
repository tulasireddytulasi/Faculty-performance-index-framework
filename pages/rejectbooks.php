
<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$bid = $_GET['bid'];
$score = "0";


$sql ="update books set score='$score' where bid='$bid'" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
 ?>
<script>
		alert('Rejected');
        window.location.href='books.php';
        </script>
		<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>