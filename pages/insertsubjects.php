<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
if(isset($_POST["name"]))
{

 
 $name = $_POST["name"];
 $branch = $_POST["branch"];
 $course = $_POST['course'];
 $year = $_POST["year"];
 $sem = $_POST["sem"];



 $query = '';
 for($count = 0; $count<count($name); $count++)
 {

  
  $name1 = mysqli_real_escape_string($connect, $name[$count]);
  $branch1 = mysqli_real_escape_string($connect, $branch[$count]);
  $course1 = mysqli_real_escape_string($connect, $course[$count]);
  $year1 = mysqli_real_escape_string($connect, $year[$count]);
  $sem1 = mysqli_real_escape_string($connect, $sem[$count]);
  
  if($name1 != '' && $branch1 != '' && $course != '')
  {
   $query .= '
   INSERT INTO  subjects (name, branch, course, year, semester) 
   VALUES("'.$name1.'", "'.$branch1.'", "'.$course1.'", "'.$year1.'", "'.$sem1.'"); 
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
