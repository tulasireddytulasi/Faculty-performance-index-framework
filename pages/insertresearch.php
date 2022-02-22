<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
if(isset($_POST["title"]))
{

   session_start();
   $fids = $_SESSION['id'];
   $title = $_POST["title"];
   $funded = $_POST["funded"];
   $grant = $_POST["grant"];
   $fromdate = $_POST["fromdate"];
   $todate = $_POST["todate"];
   $status = $_POST["status"];
   $role = $_POST["role"];

 $query = '';
 for($count = 0; $count<count($title); $count++)
 {

  $fids;
  $title1 = mysqli_real_escape_string($connect, $title[$count]);
  $funded1 = mysqli_real_escape_string($connect, $funded[$count]);
  $grant1 = mysqli_real_escape_string($connect, $grant[$count]);
  $fromdate1 = mysqli_real_escape_string($connect, $fromdate[$count]);
  $todate1 = mysqli_real_escape_string($connect, $todate[$count]);
  $status1 = mysqli_real_escape_string($connect, $status[$count]);
  $role1 = mysqli_real_escape_string($connect, $role[$count]);
  
  if($title1 != '' && $funded1 != '' && $grant1 != '')
  {
   $query .= '
   INSERT INTO  research (fid, title, funded, grant1, fromdate, todate, status, role) 
   VALUES("'.$fids.'", "'.$title1.'", "'.$funded1.'", "'.$grant1.'", "'.$fromdate1.'", "'.$todate1.'", "'.$status1.'", "'.$role1.'"); 
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
