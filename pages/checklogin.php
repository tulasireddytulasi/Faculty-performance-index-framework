 <?php
include "dbconfig.php";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
  die("connection failed" . $conn->connect_error);
}


//$type=$_POST['type'];
$username=$_POST['username'];
$password=$_POST['password'];
                                                  
$query="select * from userinfo where username='$username'  and password='$password'";

$result=mysqli_query($conn,$query);

if($row=mysqli_fetch_array($result))
{

	session_start();
	$_SESSION["username"] = $row["username"];
	$_SESSION["id"] = $row["id"];
    $_SESSION["course"] = $row["course"];
    $_SESSION["branch"] = $row["branch"];

if($row['username']==$username && $row['password']==$password && $row['role']=='Admin')
    {
    header("Location: admin.php");
    }elseif($row['username']==$username && $row['password']==$password && $row['role']=='Faculty')
    {
    header("Location: faculty.php");
    }elseif($row['username']==$username && $row['password']==$password && $row['role']=='Rd')
    {
    header("Location: rd.php");
    }elseif($row['username']==$username && $row['password']==$password && $row['role']=='Hod')
    {
    header("Location: hod.php");
    }

    elseif($row['username']==$username && $row['password']==$password && $row['role']=='manager')
    {
    header("Location: manager.php");
    }

    elseif($row['username']==$username && $row['password']==$password && $row['role']=='Student')
    {
    header("Location: student.php");
    }

}else{
    header('Location: login.php'); 
    }


?>
