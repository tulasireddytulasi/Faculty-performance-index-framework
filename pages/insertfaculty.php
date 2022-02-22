<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
if(isset($_POST["fullname"]))
{

  // session_start();
//   $fids = $_SESSION['id'];
 $fullname = $_POST["fullname"];
 $username = $_POST["username"];
 $password = $_POST["password"];
 $branch = $_POST["branch"];
 $course = $_POST["course"];




 $query = '';
 for($count = 0; $count<count($fullname); $count++)
 {

  
  $fullname1 = mysqli_real_escape_string($connect, $fullname[$count]);
  $username1 = mysqli_real_escape_string($connect, $username[$count]);
  $password1 = mysqli_real_escape_string($connect, $password[$count]);
  $branch1 = mysqli_real_escape_string($connect, $branch[$count]);
  $course1 = mysqli_real_escape_string($connect, $course[$count]);
  $role = 'Faculty';
  
  
  if($fullname1 != '' && $branch1 != '' && $course1 != '')
  {
   $query .= '
   INSERT INTO  userinfo (fullname, username, password, course, branch, role) 
   VALUES("'.$fullname1.'", "'.$username1.'",  "'.$password1.'", "'.$course1.'", "'.$branch1.'", "'.$role.'"); 
   ';
  }
 }
 if($query != '')
 {
  if(mysqli_multi_query($connect, $query))
  {
   echo 'Subjects are Inserted';
  }
  else
  {
   echo 'Error';
  }
 }
 else
 {
  echo 'All Fields are Required';
 }
}
?>
