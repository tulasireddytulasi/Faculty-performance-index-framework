<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
session_start();
$fid = $_SESSION['id'];
$course = $_POST['course'];
$dept = $_POST['dept'];
$year = $_POST['year'];   
$sem = $_POST['sem'];
$sub = $_POST['sub'];
$per = $_POST['per'];



if ($_POST['sub']) {
	
for ($i=0; $i < sizeof($sub); $i++) { 

	mysqli_query($conn,"INSERT INTO result (fid, course, branch, year, sem, subname, pass) VALUES('$fid', '$course[$i]', '$dept[$i]', '$year[$i]', '$sem[$i]', '$sub[$i]', '$per[$i]')");

//$sql = "INSERT INTO assignreviewer (pid, reviewer1, reviewer2) VALUES ('$id[$i]','$reviewer1[$i]','$reviewer2[$i]')";
   
//mysqli_query($conn, $sql);
}
echo "New record created successfully";
 header("Location: listresult.php");
}else
{
	 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 


/*

if(isset($_POST['sub'])){

for ($i=0; $i < sizeof($sub[$i]); $i++) { 
	

mysqli_query($conn,"INSERT INTO result (fid, course, branch, year, sem, subname, pass) VALUES('$fid[$i]', '$course[$i]', '$dept[$i]', '$year[$i]', '$sem[$i]', '$sub[$i]', '$per[$i]')");


}
}else{
	echo "No Result Inserted";
}

*/








/*

$sql ="INSERT INTO result (fid, course, branch, year, sem, subname, pass) VALUES('$fid', '$course', '$dept', '$year', '$sem', '$sub', '$per')" ;

if ($conn->query($sql) === TRUE) {
  $conn->close();
  echo "Successfully Added";
//  header('Location: listusers.php');    
} else {
    echo "Error: " . $sql . "<//br>" . $conn->error;
}

$conn->close();
?>
<!--  <a href="/pivotalsoft/pages/roles.php">See the list</a> --> */