
<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sid = $_GET['sid'];
$score = "10";


$sql ="update sea set score='$score' where sid='$sid'" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
?>
<script>
		alert('Approved');
        window.location.href='sea.php?success';
        </script>
		<?php

 // header('Location: sampleresult.php');    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
<!--  <a href="/pivotalsoft/pages/roles.php">See the list</a> -->