<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
if(isset($_POST["course"]))
{

   session_start();
   $fids = $_SESSION['id'];
 $course = $_POST["course"];
 $team = $_POST["team"];
 $title = $_POST["title"];
 $year = $_POST["year"];
 
 $query = '';
 for($count = 0; $count<count($course); $count++)
 {

  $fids;
  $course1 = mysqli_real_escape_string($connect, $course[$count]);
  $team1 = mysqli_real_escape_string($connect, $team[$count]);
  $title1 = mysqli_real_escape_string($connect, $title[$count]);
  $year1 = mysqli_real_escape_string($connect, $year[$count]);
 
  if($course1 != '' && $team1 != '' && $title1 != '')
  {
   $query .= '
   INSERT INTO projects (fid, course, team, title, year) 
   VALUES("'.$fids.'", "'.$course1.'", "'.$team1.'", "'.$title1.'", "'.$year1.'"); 
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
