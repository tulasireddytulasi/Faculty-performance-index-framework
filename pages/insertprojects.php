<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
if(isset($_POST["course"]))
{
 // session_start();
//$fid = $_SESSION['fid'];
 $bname = $_POST["course"];
 $team = $_POST["team"];
 $title = $_POST["title"];
 $year = $_POST["year"];

 $query = '';
 for($count = 0; $count<count($bname); $count++)
 {
  // $fids = mysqli_real_escape_string($connect, $fid[$count]);
  $courses = mysqli_real_escape_string($connect, $course[$count]);
  $teams = mysqli_real_escape_string($connect, $team[$count]);
  $titles = mysqli_real_escape_string($connect, $title[$count]);
  $years = mysqli_real_escape_string($connect, $year[$count]);
  if($course != '' && $team != '' && $title != '' && $year != '')
  {
   $query .= '
   INSERT INTO projects (fid, course, team, title, year) 
   VALUES("'.$courses.'", "'.$teams.'", "'.$titles.'", "'.$years.'"); 
   ';
  }
 }
 if($query != '')
 {
  if(mysqli_multi_query($connect, $query))
  {
   echo 'Item Data Inserted';
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
