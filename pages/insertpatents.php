<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
if(isset($_POST["title"]))
{

   session_start();
   $fids = $_SESSION['id'];
 $title = $_POST["title"];
 $status = $_POST["status"];
 $year = $_POST["year"];

 $query = '';
 for($count = 0; $count<count($title); $count++)
 {

  $fids;
   $title1 = mysqli_real_escape_string($connect, $title[$count]);
  $status1 = mysqli_real_escape_string($connect, $status[$count]);
  $year1 = mysqli_real_escape_string($connect, $year[$count]);
 
 
  if($title1 != '' && $status1 != '' && $year1 != '')
  {
   $query .= '
   INSERT INTO patents (fid, title, status, year) 
   VALUES("'.$fids.'", "'.$title1.'", "'.$status1.'", "'.$year1.'"); 
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
