 <?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "bitsvizag");  
 $output = '';  
 if(isset($_POST["id"]))  
 {  
      if($_POST["id"] != '')  
      {  
           $sql = "SELECT * FROM patents WHERE fid = '".$_POST["id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM patents";  
      }  
      $result = mysqli_query($connect, $sql);  
    $output = '
<br />

<table class="table table-bordered table-striped">
 <tr>
      <th width="3%">Patent Id</th>
      <th width="25%">Patent Title</th>
      <th width="20%">Grant Status</th>
      <th width="10%">Year Of Grant</th>
      <th width="10%"></th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
  $output .= '
 <tr>
 <td align="center">'.$row["pid"].'</td>
 <td>'.$row["title"].'</td>
 <td>'.$row["status"].'</td>
 <td>'.$row["year"].'</td>

 
 
  <td><a href="editpatents.php?pid=' . $row["pid"] . '"><button class="btn-success">Approved</button></a> &nbsp; <a href="rejectpatents.php?pid=' . $row["pid"] . '"><button class="btn-danger">Rejected</button></a></td> 
 </tr>
 ';
      }  
      echo $output;  



     
 }  
 ?>  

