<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
if(isset($_POST["name"]))
{

   session_start();
   $fids = $_SESSION['id'];
 $name = $_POST["name"];
 $nosp = $_POST["nosp"];
 $outcome = $_POST["outcome"];
 $month = $_POST["month"];
 $year = $_POST["year"];

 $query = '';
 for($count = 0; $count<count($name); $count++)
 {

  $fids;
  $name1 = mysqli_real_escape_string($connect, $name[$count]);
  $nosp1 = mysqli_real_escape_string($connect, $nosp[$count]);
  $outcome1 = mysqli_real_escape_string($connect, $outcome[$count]);
  $month1 = mysqli_real_escape_string($connect, $month[$count]);
  $year1 = mysqli_real_escape_string($connect, $year[$count]);
  
  if($name1 != '' && $nosp1 != '' && $month1 != '' && $year1 != '')
  {
   $query .= '
   INSERT INTO  sea (fid, name, nosp, outcome, month, year) 
   VALUES("'.$fids.'", "'.$name1.'", "'.$nosp1.'", "'.$outcome1.'", "'.$month1.'", "'.$year1.'"); 
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
