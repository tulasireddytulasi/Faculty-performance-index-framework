 <?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "bitsvizag");  
 $output = '';  
 if(isset($_POST["id"]))  
 {  
      if($_POST["id"] != '')  
      {  
           $sql = "SELECT * FROM projects WHERE fid = '".$_POST["id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM projects";  
      }  
      $result = mysqli_query($connect, $sql);  
     
          $output = '
<br />
<table class="table table-bordered table-striped">
 <tr>
      <th width="3%">Id</th>
      <th width="10%">Course</th>
      <th width="25%">Team Members </th>
      <th width="25%">Project Ttile</th>
      <th width="10%">Accademic year</th>
      <th width="10%"></th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
 <td align="center">'.$row["id"].'</td>
  <td>'.$row["course"].'</td>
  <td>'.$row["team"].'</td>
  <td>'.$row["title"].'</td>
  <td>'.$row["year"].'</td>
  <td><a href="editprojects.php?id=' . $row["id"] . '"><button class="btn-success">Approved</button></a> &nbsp; <a href="rejectprojects.php?id=' . $row["id"] . '"><button class="btn-danger">Rejected</button></a></td> 
 </tr>
 ';
      }  
      echo $output;  



     
 }  
 ?>  

