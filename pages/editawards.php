
<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$aid = $_GET['aid'];
$score = "10";


$sql ="update awards set score='$score' where aid='$aid'" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
?>
<script>
		alert('Approved');
        window.location.href='awards.php?success';
        </script>
		<?php

 // header('Location: sampleresult.php');    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
<!--  <a href="/pivotalsoft/pages/roles.php">See the list</a> -->