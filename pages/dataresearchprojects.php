 <?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "bitsvizag");  
 $output = '';  
 if(isset($_POST["id"]))  
 {  
      if($_POST["id"] != '')  
      {  
           $sql = "SELECT * FROM research WHERE fid = '".$_POST["id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM research";  
      }  
      $result = mysqli_query($connect, $sql);  
    $output = '
<br />

<table class="table table-bordered table-striped">
 <tr>
      <th width="3%">Research Id</th>
      <th width="25%">Research Project Title</th>
      <th width="20%">Funded By</th>
      <th width="10%">Total Grant Sansactional</th>
      <th width="10%">FROM Date</th>
      <th width="10%">To Date</th>
      <th width="10%">Status</th>
      <th width="10%">Role</th>
      <th width="10%"></th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
  $output .= '
 <tr>
 <td align="center">'.$row["rid"].'</td>
 <td>'.$row["title"].'</td>
 <td>'.$row["funded"].'</td>
 <td>'.$row["grant1"].'</td>
 <td>'.$row["fromdate"].'</td>
 <td>'.$row["todate"].'</td>
 <td>'.$row["status"].'</td>
 <td>'.$row["role"].'</td>
 
  <td><a href="editresearch.php?rid=' . $row["rid"] . '"><button class="btn-success">Approved</button></a> &nbsp; <a href="rejectresearch.php?rid=' . $row["rid"] . '"><button class="btn-danger">Rejected</button></a></td> 
 </tr>
 ';
      }  
      echo $output;  



     
 }  
 ?>  

