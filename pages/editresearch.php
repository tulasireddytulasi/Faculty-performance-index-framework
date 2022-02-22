
<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$rid = $_GET['rid'];
$score = "10";


$sql ="update research set score='$score' where rid='$rid'" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
?>
<script>
		alert('Approved');
        window.location.href='researchprojects.php';
        </script>
		<?php

 // header('Location: sampleresult.php');    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
<!--  <a href="/pivotalsoft/pages/roles.php">See the list</a> -->