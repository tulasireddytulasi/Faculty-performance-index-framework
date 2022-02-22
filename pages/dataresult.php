 <?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "bitsvizag");  
 $output = '';  
 if(isset($_POST["id"]))  
 {  
      if($_POST["id"] != '')  
      {  
           $sql = "SELECT * FROM result WHERE fid = '".$_POST["id"]."'";  
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
      <th width="3%">Result Id</th>
      <th width="10%">Course</th>
      <th width="25%">Branch</th>
      <th width="25%">year</th>
      <th width="10%">Semester</th>
      <th width="10%">Subname</th>
      <th width="10%">Pass Percentage<th>
      <th width="10%"> </th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
 <td align="center">'.$row["rid"].'</td>
  <td>'.$row["course"].'</td>
  <td>'.$row["branch"].'</td>
  <td>'.$row["year"].'</td>
  <td>'.$row["sem"].'</td>
  <td>'.$row["subname"].'</td>
  <td>'.$row["pass"].'</td>
  <td><a href="editresult.php?rid=' . $row["rid"] . '"><button class="btn-success">Approved</button></a> &nbsp; <a href="rejectprojects.php?rid=' . $row["rid"] . '"><button class="btn-danger">Rejected</button></a></td> 
 </tr>
 ';
      }  
      echo $output;  



     
 }  
 ?>  

