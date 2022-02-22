 <?php
include "dbconfig.php";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
  die("connection failed" . $conn->connect_error);
}


//$type=$_POST['type'];
$username=$_POST['username'];
$password=$_POST['password'];
                                                  
$query="select * from student where username='$username'  and password='$password'";

$result=mysqli_query($conn,$query);

if($row=mysqli_fetch_array($result))
{

	session_start();
	$_SESSION["username"] = $row["username"];
	$_SESSION["id"] = $row["id"];
    $_SESSION["course"] = $row["course"];
    $_SESSION["branch"] = $row["branch"];
    $_SESSION["year"] = $row["year"];
    $_SESSION["sem"] = $row["sem"];

if($row['username']==$username && $row['password']==$password)
    {
    header("Location: student.php");
    }
}
else{
    header('Location: studentlogin.php'); 
    }


?>
