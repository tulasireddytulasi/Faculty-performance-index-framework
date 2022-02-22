 <?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "bitsvizag");  
 $output = '';  
 if(isset($_POST["id"]))  
 {  
      if($_POST["id"] != '')  
      {  
           $sql = "SELECT * FROM awards WHERE fid = '".$_POST["id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM awards";  
      }  
      $result = mysqli_query($connect, $sql);  
     
          $output = '
<br />

<table class="table table-bordered table-striped">
 <tr>
      <th width="3%">Id</th>
      <th width="25%">Awards/Archievement Titles</th>
      <th width="20%">Presented By</th>
      <th width="10%">Year</th>
      <th width="20%"></th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
 <td>'.$row["aid"].'</td>
  <td>'.$row["name"].'</td>
  <td>'.$row["presentedby"].'</td>
  <td>'.$row["year"].'</td>



<td><a href="editawards.php?aid=' . $row["aid"] . '"><button class="btn-success">Approved</button></a> &nbsp; <a href="rejectawards.php?aid=' . $row["aid"] . '"><button class="btn-danger">Rejected</button></a></td> 
 </tr>';
      }  
      echo $output;  



     
 }  
 ?>  

