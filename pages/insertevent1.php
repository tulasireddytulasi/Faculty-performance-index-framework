<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
if(isset($_POST["title"]))
{

   session_start();
   $fids = $_SESSION['id'];
 $title = $_POST["title"];
 $type = $_POST["type"];
 $asso = $_POST["asso"];
 $from1 = $_POST["from1"];
 $to1 = $_POST["to1"];
 
 $query = '';
 for($count = 0; $count<count($title); $count++)
 {

  $fids;
   $title1 = mysqli_real_escape_string($connect, $title[$count]);
  $type1 = mysqli_real_escape_string($connect, $type[$count]);
  $asso1 = mysqli_real_escape_string($connect, $asso[$count]);
  $from2 = mysqli_real_escape_string($connect, $from1[$count]);
  $to2 = mysqli_real_escape_string($connect, $to1[$count]);
 
  if($title1 != '' && $type1 != '' && $asso1 != '')
  {
   $query .= '
   INSERT INTO events1 (fid, title, type, org, from1, to1) 
   VALUES("'.$fids.'", "'.$title1.'", "'.$type1.'", "'.$asso1.'", "'.$from2.'", "'.$to2.'"); 
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
