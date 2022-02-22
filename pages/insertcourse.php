<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
if(isset($_POST["name"]))
{

   session_start();
   $fids = $_SESSION['id'];
 $name = $_POST["name"];
 $org = $_POST["org"];
 $fromdate = $_POST["fromdate"];
 $todate = $_POST["todate"];

 $query = '';
 for($count = 0; $count<count($name); $count++)
 {

  $fids;
  $name1 = mysqli_real_escape_string($connect, $name[$count]);
  $org1 = mysqli_real_escape_string($connect, $org[$count]);
  $fromdate1 = mysqli_real_escape_string($connect, $fromdate[$count]);
  $todate1 = mysqli_real_escape_string($connect, $todate[$count]);
 
 
  if($name1 != '' && $org1 != '' && $fromdate1 != '')
  {
   $query .= '
   INSERT INTO  course (fid, name, org, fromdate, todate) 
   VALUES("'.$fids.'", "'.$name1.'", "'.$org1.'", "'.$fromdate1.'", "'.$todate1.'"); 
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
