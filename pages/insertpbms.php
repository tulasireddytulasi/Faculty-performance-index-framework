<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
if(isset($_POST["name"]))
{

   session_start();
   $fids = $_SESSION['id'];
 $name = $_POST["name"];
 $chapter = $_POST["chapter"];
 $membership = $_POST["membership"];
 $year = $_POST["year"];

 $query = '';
 for($count = 0; $count<count($name); $count++)
 {

  $fids;
   $name1 = mysqli_real_escape_string($connect, $name[$count]);
  $chapter1 = mysqli_real_escape_string($connect, $chapter[$count]);
  $membership1 = mysqli_real_escape_string($connect, $membership[$count]);
  $year1 = mysqli_real_escape_string($connect, $year[$count]);
 
 
  if($name1 != '' && $chapter1 != '' && $membership1 != '')
  {
   $query .= '
   INSERT INTO  profissional (fid, name, chapter, membership, year) 
   VALUES("'.$fids.'", "'.$name1.'", "'.$chapter1.'", "'.$membership1.'", "'.$year1.'"); 
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
