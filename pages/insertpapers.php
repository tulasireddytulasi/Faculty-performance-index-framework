<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
if(isset($_POST["title"]))
{

   session_start();
   $fids = $_SESSION['id'];
 $title = $_POST["title"];
$conference = $_POST["conference"];
$impact = $_POST["impact"];
$volume = $_POST["volume"];
$issue = $_POST["issue"];
$national = $_POST["national"];
 $year = $_POST["year"];

 $query = '';
 for($count = 0; $count<count($title); $count++)
 {

  $fids;
  $title1 = mysqli_real_escape_string($connect, $title[$count]);
  $conference1 = mysqli_real_escape_string($connect, $conference[$count]);
  $impact1 = mysqli_real_escape_string($connect, $impact[$count]);
    $volume1 = mysqli_real_escape_string($connect, $volume[$count]);
      $issue1 = mysqli_real_escape_string($connect, $issue[$count]);
        $national1 = mysqli_real_escape_string($connect, $national[$count]);
          $year1 = mysqli_real_escape_string($connect, $year[$count]);
  
  if($title1 != '' && $conference1 != '' && $impact1 != '' && $volume1 != '' && $issue1 != '' && $national1 != '' && $year1 != '')
  {
   $query .= '
   INSERT INTO  papers (fid, title, conference, impact, volume, issue, national, year) 
   VALUES("'.$fids.'", "'.$title1.'", "'.$conference1.'", "'.$impact1.'", "'.$volume1.'", "'.$issue1.'", "'.$national1.'", "'.$year1.'"); 
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
