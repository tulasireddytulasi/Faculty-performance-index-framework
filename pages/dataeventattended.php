 <?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "bitsvizag");  
 $output = '';  
 if(isset($_POST["id"]))  
 {  
      if($_POST["id"] != '')  
      {  
           $sql = "SELECT * FROM events1 WHERE fid = '".$_POST["id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM events1";  
      }  
      $result = mysqli_query($connect, $sql);  
    $output = '
<br />

<table class="table table-bordered table-striped">
 <tr>
      <th width="3%">Event Id</th>
      <th width="25%">Event Title</th>
      <th width="20%">Event Type</th>
      <th width="10%">Associating Institution</th>
      <th width="10%">FROM Date</th>
      <th width="10%">TO Date</th>
      <th width="10%"></th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
  $output .= '
 <tr>
 <td align="center">'.$row["id"].'</td>
 <td>'.$row["title"].'</td>
 <td>'.$row["type"].'</td>
 <td>'.$row["org"].'</td>
 <td>'.$row["from1"].'</td>
 <td>'.$row["to1"].'</td>
 
 
  <td><a href="editeventattended.php?id=' . $row["id"] . '"><button class="btn-success">Approved</button></a> &nbsp; <a href="rejecteventattended.php?id=' . $row["id"] . '"><button class="btn-danger">Rejected</button></a></td> 
 </tr>
 ';
      }  
      echo $output;  



     
 }  
 ?>  

