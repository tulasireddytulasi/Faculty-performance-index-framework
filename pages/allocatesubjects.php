<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bitsvizag";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$subject = $_POST['subject'];
$branch = $_POST['branch'];
$fid = $_POST['fid'];
$subjects = $_POST['subjects'];
$branch1 = $_POST['branch1'];
$fid1 = $_POST['fid1'];
$subject1 = $_POST['subject1'];
$branch2 = $_POST['branch2'];
$fid2 = $_POST['fid2'];
$subject2 = $_POST['subject2'];
$branch3 = $_POST['branch3'];
$fid3 = $_POST['fid3'];
$subject3 = $_POST['subject3'];
$branch4 = $_POST['branch4'];
$fid4 = $_POST['fid4'];
$subject4 = $_POST['subject4'];
$branch5 = $_POST['branch5'];
$fid5 = $_POST['fid5'];
$year = $_POST['year'];
$sem = $_POST['sem'];
$course = $_POST['course'];



if (isset($_POST['subject'])) {
	


if($subject!="select" and isset($_POST['subject']))
{

$result1 = "SELECT * FROM sub_allocate_dets where subname = '$subject' ";
$sql = mysqli_query($conn, $result1);
if (mysqli_num_rows($sql) > 0) {
    // output data of each row
        echo "This " . $_POST["subject"]. " Subject Already Allocated to Another Faculty, Please Choose Another Subject \r\n ";

} else {
    $sql = mysqli_query($conn,"INSERT INTO sub_allocate_dets (subname, deptname,course, year, sem, fid ) VALUES ('$subject','$branch','$course','$year','$sem','$fid')");

}
}

if($subjects!="select" and isset($_POST['subjects']))
{

$result1 = "SELECT * FROM sub_allocate_dets where subname = '$subjects' ";
$sql = mysqli_query($conn, $result1);
if (mysqli_num_rows($sql) > 0) {
    // output data of each row
        echo "This " . $_POST["subjects"]. " Subject Already Allocated to Another Faculty, Please Choose Another Subject \r\n ";

} else {
$sql = mysqli_query($conn,"INSERT INTO sub_allocate_dets (subname, deptname,course, year, sem,  fid ) VALUES ('$subjects','$branch1','$course','$year','$sem','$fid1')");   

}
}

if($subject1!="select" and isset($_POST['subject1']))
{

$result1 = "SELECT * FROM sub_allocate_dets where subname = '$subjects1' ";
$sql = mysqli_query($conn, $result1);
if (mysqli_num_rows($sql) > 0) {
    // output data of each row
        echo "This " . $_POST["subjects1"]. " Subject Already Allocated to Another Faculty, Please Choose Another Subject \r\n ";

} else {
$sql = mysqli_query($conn,"INSERT INTO sub_allocate_dets (subname, deptname,course, year, sem,  fid ) VALUES ('$subject1','$branch2','$course','$year','$sem','$fid2')");

}
}

if($subject2!="select" and isset($_POST['subject2']))
{

$result1 = "SELECT * FROM sub_allocate_dets where subname = '$subjects2' ";
$sql = mysqli_query($conn, $result1);
if (mysqli_num_rows($sql) > 0) {
    // output data of each row
        echo "This " . $_POST["subjects2"]. " Subject Already Allocated to Another Faculty, Please Choose Another Subject \r\n ";

} else {
$sql = mysqli_query($conn,"INSERT INTO sub_allocate_dets (subname, deptname,course, year, sem,  fid ) VALUES ('$subject2','$branch3','$course','$year','$sem','$fid3')");

}
}

if($subject3!="select" and isset($_POST['subject3']))
{

$result1 = "SELECT * FROM sub_allocate_dets where subname = '$subjects3' ";
$sql = mysqli_query($conn, $result1);
if (mysqli_num_rows($sql) > 0) {
    // output data of each row
        echo "This " . $_POST["subjects3"]. " Subject Already Allocated to Another Faculty, Please Choose Another Subject \r\n ";

} else {
$sql = mysqli_query($conn,"INSERT INTO sub_allocate_dets (subname, deptname,course, year, sem,  fid ) VALUES ('$subject3','$branch4','$course','$year','$sem','$fid4')");

}
}


if($subject4!="select" and isset($_POST['subject4']))
{

$result1 = "SELECT * FROM sub_allocate_dets where subname = '$subjects4' ";
$sql = mysqli_query($conn, $result1);
if (mysqli_num_rows($sql) > 0) {
    // output data of each row
        echo "This " . $_POST["subjects4"]. " Subject Already Allocated to Another Faculty, Please Choose Another Subject \r\n ";

} else {
$sql = mysqli_query($conn,"INSERT INTO sub_allocate_dets (subname, deptname,course, year, sem,  fid ) VALUES ('$subject4','$branch5','$course','$year','$sem','$fid5')");

}
}

// header("Location: allocateing.php"); 

 echo "All Subjects Allocated To Respected Faculty";

}









/* if ($_POST['subjects']) {

for ($i=0; $i < sizeof($subjects); $i++) { 
	# code...


elseif ($subjects!="select") {
$sql = mysqli_query($conn,"INSERT INTO sub_allocate_dets (subname, deptname, fid ) VALUES ('$subjects','$branch1','$fid1')");
	
}elseif ($subject1!="select") {
$sql = mysqli_query($conn,"INSERT INTO sub_allocate_dets (subname, deptname, fid ) VALUES ('$subject1','$branch2','$fid2')");
	
}elseif ($subject2!="select") {
$sql = mysqli_query($conn,"INSERT INTO sub_allocate_dets (subname, deptname, fid ) VALUES ('$subject2','$branch3','$fid3')");
	
}elseif ($subject3!="select") {
$sql = mysqli_query($conn,"INSERT INTO sub_allocate_dets (subname, deptname, fid ) VALUES ('$subject3','$branch4','$fid4')");
	
}elseif ($subject4!="select") {
$sql = mysqli_query($conn,"INSERT INTO sub_allocate_dets (subname, deptname, fid ) VALUES ('$subject4','$branch5','$fid5')");
	
}


	
  $sql = "INSERT INTO sub_allocate_dets (subname, deptname, fid ) VALUES ('$subjects[$i]','$branch[$i]','$fid[$i]')";
  
mysqli_query($conn, $sql);
}
echo "New record created successfully";
 // header("Location: allocates.php");
}else
{
	 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>  */