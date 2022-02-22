<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
if(isset($_POST["name"]))
{

   session_start();
   $fids = $_SESSION['id'];
 $name = $_POST["name"];
 $presentedby = $_POST["presentedby"];
 $year = $_POST["year"];

 $query = '';
 for($count = 0; $count<count($name); $count++)
 {

  $fids;
  $name1 = mysqli_real_escape_string($connect, $name[$count]);
  $presentedby1 = mysqli_real_escape_string($connect, $presentedby[$count]);
  $year1 = mysqli_real_escape_string($connect, $year[$count]);
  
  if($name1 != '' && $presentedby1 != '' && $year1 != '')
  {
   $query .= '
   INSERT INTO  awards (fid, name, presentedby, year) 
   VALUES("'.$fids.'", "'.$name1.'", "'.$presentedby1.'", "'.$year1.'"); 
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
