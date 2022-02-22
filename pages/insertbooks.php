<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
if(isset($_POST["title"]))
{

   session_start();
   $fids = $_SESSION['id'];
 $title = $_POST["title"];
 $pub = $_POST["pub"];
 $author = $_POST["author"];
 $year = $_POST["year"];

 $query = '';
 for($count = 0; $count<count($title); $count++)
 {

  $fids;
   $title1 = mysqli_real_escape_string($connect, $title[$count]);
  $pub1 = mysqli_real_escape_string($connect, $pub[$count]);
  $author1 = mysqli_real_escape_string($connect, $author[$count]);
  $year1 = mysqli_real_escape_string($connect, $year[$count]);
 
 
  if($title1 != '' && $pub1 != '' && $author1 != '')
  {
   $query .= '
   INSERT INTO books (fid, title, pub, author, year) 
   VALUES("'.$fids.'", "'.$title1.'", "'.$pub1.'", "'.$author1.'", "'.$year1.'"); 
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
