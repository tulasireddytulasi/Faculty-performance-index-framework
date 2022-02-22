 <?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "bitsvizag");  
 $output = '';  
 if(isset($_POST["id"]))  
 {  
      if($_POST["id"] != '')  
      {  
           $sql = "SELECT * FROM course WHERE fid = '".$_POST["id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM course";  
      }  
      $result = mysqli_query($connect, $sql);  
  $output = '
<br />

<table class="table table-bordered table-striped">
 <tr> <th width="3%"></th>
      <th width="20%">Courses Under Taken</th>
      <th width="23%">Affliation</th>
      <th width="12%">From Date</th>
      <th width="12%">To Date</th>
     <th width="3%"></th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
  $output .= '
 <tr>
 <td>'.$row["cid"].'</td>
  <td>'.$row["name"].'</td>
  <td>'.$row["org"].'</td>
  <td>'.$row["fromdate"].'</td>
  <td>'.$row["todate"].'</td>
 
  <td><a href="editcourse.php?cid=' . $row["cid"] . '"><button class="btn-success">Approved</button></a> &nbsp; <a href="rejectcourse.php?cid=' . $row["cid"] . '"><button class="btn-danger">Rejected</button></a></td> 
 </tr>
 ';
      }  
      echo $output;  



     
 }  
 ?>  

