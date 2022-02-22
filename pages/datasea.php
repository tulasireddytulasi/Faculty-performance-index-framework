 <?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "bitsvizag");  
 $output = '';  
 if(isset($_POST["id"]))  
 {  
      if($_POST["id"] != '')  
      {  
           $sql = "SELECT * FROM sea WHERE fid = '".$_POST["id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM sea";  
      }  
      $result = mysqli_query($connect, $sql);  
  $output = '
<br />

<table class="table table-bordered table-striped">
 <tr> <th width="3%">Id</th>
      <th width="20%">Event Name</th>
      <th width="23%">No Of Student Participated</th>
      <th width="12%">Outcome</th>
      <th width="12%">Month</th>
      <th width="12%">Year</th>
     <th width="3%"></th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
  $output .= '
 <tr>
 <td>'.$row["sid"].'</td>
  <td>'.$row["name"].'</td>
  <td>'.$row["nosp"].'</td>
  <td>'.$row["outcome"].'</td>
  <td>'.$row["month"].'</td>
  <td>'.$row["year"].'</td>
 
  <td><a href="editsea.php?sid=' . $row["sid"] . '"><button class="btn-success">Approved</button></a> &nbsp;
   <a href="rejectsea.php?sid=' . $row["sid"] . '"><button class="btn-danger">Rejected</button></a></td> 
 </tr>
 ';
      }  
      echo $output;  



     
 }  
 ?>  

