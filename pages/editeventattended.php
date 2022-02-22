
<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id = $_GET['id'];
$score = "10";


$sql ="update events1 set score='$score' where id='$id'" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
?>
<script>
		alert('Approved');
        window.location.href='eventattended.php';
        </script>
		<?php

 // header('Location: sampleresult.php');    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
<!--  <a href="/pivotalsoft/pages/roles.php">See the list</a> -->