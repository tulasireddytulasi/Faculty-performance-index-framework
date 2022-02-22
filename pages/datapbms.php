 <?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "bitsvizag");  
 $output = '';  
 if(isset($_POST["id"]))  
 {  
      if($_POST["id"] != '')  
      {  
           $sql = "SELECT * FROM profissional WHERE fid = '".$_POST["id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM profissional";  
      }  
      $result = mysqli_query($connect, $sql);  
    $output = '
<br />

<table class="table table-bordered table-striped">
 <tr>
      <th width="3%">Id</th>
      <th width="25%">Profissional Body Membership</th>
      <th width="20%">Chapter</th>
      <th width="10%">Membership No</th>
      <th width="10%">To Date</th>
      <th width="10%"></th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
  $output .= '
 <tr>
 <td>'.$row["pid"].'</td>
  <td>'.$row["name"].'</td>
  <td>'.$row["chapter"].'</td>
  <td>'.$row["membership"].'</td>
   <td>'.$row["year"].'</td>
 
  <td><a href="editpbms.php?pid=' . $row["pid"] . '"><button class="btn-success">Approved</button></a> &nbsp; <a href="rejectpbms.php?pid=' . $row["pid"] . '"><button class="btn-danger">Rejected</button></a></td> 
 </tr>
 ';
      }  
      echo $output;  



     
 }  
 ?>  

