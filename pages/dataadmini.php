 <?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "bitsvizag");  
 $output = '';  
 if(isset($_POST["id"]))  
 {  
      if($_POST["id"] != '')  
      {  
           $sql = "SELECT * FROM administative WHERE fid = '".$_POST["id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM administative";  
      }  
      $result = mysqli_query($connect, $sql);  
     $output = '
<br />
<table class="table table-bordered table-striped">
 <tr>
      <th width="3%">Id</th>
      <th width="25%">Work Title</th>
      <th width="20%">Duty Assigned</th>
      <th width="10%">From Date</th>
      <th width="10%">To Date</th>
      <th width="10%"></th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
  $output .= '
 <tr>
 <td align="center">'.$row["aid"].'</td>
  <td>'.$row["title"].'</td>
  <td>'.$row["duty"].'</td>
  <td>'.$row["fromdate"].'</td>
   <td>'.$row["todate"].'</td>
  <td><a href="editadmini.php?aid=' . $row["aid"] . '"><button class="btn-success">Approved</button></a> &nbsp; <a href="rejectadmini.php?aid=' . $row["aid"] . '"><button class="btn-danger">Rejected</button></a></td> 
 </tr>
 ';
      }  
      echo $output;  



     
 }  
 ?>  

