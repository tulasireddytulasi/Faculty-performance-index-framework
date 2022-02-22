<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
if(isset($_POST["title"]))
{

   session_start();
   $fids = $_SESSION['id'];
 $title = $_POST["title"];
 $duty = $_POST["duty"];
 $fromdate = $_POST["fromdate"];
 $todate = $_POST["todate"];

 $query = '';
 for($count = 0; $count<count($title); $count++)
 {

  $fids;
   $title1 = mysqli_real_escape_string($connect, $title[$count]);
  $duty1 = mysqli_real_escape_string($connect, $duty[$count]);
  $fromdate1 = mysqli_real_escape_string($connect, $fromdate[$count]);
  $todate1 = mysqli_real_escape_string($connect, $todate[$count]);
 
 
  if($title1 != '' && $duty1 != '' && $fromdate1 != '')
  {
   $query .= '
   INSERT INTO Administative (fid, title, duty, fromdate, todate) 
   VALUES("'.$fids.'", "'.$title1.'", "'.$duty1.'", "'.$fromdate1.'", "'.$todate1.'"); 
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
