
<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$rid = $_GET['rid'];

$score = "20";

//$sql2 = "SELECT fid FROM result WHERE rid = '$rid' ";
//$fid = mysqli_query($connect, $sql2);



$sql ="update result set score='$score' where rid='$rid'" ;
//$sql1 = "update score set res_score='$score' where fid='$fid'" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
?>
<script>
		alert('Approved');
        window.location.href='result.php';
        </script>
		<?php

 // header('Location: sampleresult.php');    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
<!--  <a href="/pivotalsoft/pages/roles.php">See the list</a> -->