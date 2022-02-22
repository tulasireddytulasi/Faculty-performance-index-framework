<?php
include "dbconfig.php";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
  die("connection failed" . $conn->connect_error);
}


//$type=$_POST['type'];
$username=$_POST['username'];
$password=$_POST['password'];

$query="select * from users where username='$username'  and password='$password'";

$result=mysqli_query($conn,$query);

if($row=mysqli_fetch_array($result))
{

	session_start();
	$_SESSION["username"] = $row["username"];
if($row['username']==$username && $row['password']==$password && $row['type']=='Admin')
    {
    header("Location: admin.php");
    }elseif($row['username']==$username && $row['password']==$password && $row['type']=='Faculty')
    {
    header("Location: faculty.php");
    }elseif($row['username']==$username && $row['password']==$password && $row['type']=='Rd')
    {
    header("Location: rd.php");
    }elseif($row['username']==$username && $row['password']==$password && $row['type']=='Hod')
    {
    header("Location: hod.php");
    }

}else{
    header('Location: login.php'); 
    }


?>
