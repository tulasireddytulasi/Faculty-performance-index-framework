 <?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "bitsvizag");  
 $output = '';  
 if(isset($_POST["id"]))  
 {  
      if($_POST["id"] != '')  
      {  
           $sql = "SELECT * FROM papers WHERE fid = '".$_POST["id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM papers";  
      }  
      $result = mysqli_query($connect, $sql);  
    $output = '
<br />

<table class="table table-bordered table-striped">
 <tr>
      <th width="3%">Research Paper Id</th>
      <th width="25%">Research Paper Title</th>
      <th width="20%">Journal / Conferance</th>
      <th width="10%">Imapact</th>
      <th width="10%">Volume</th>
      <th width="10%">Issue</th>
      <th width="10%">National/International</th>
      <th width="10%">Year</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
  $output .= '
 <tr>
 <td align="center">'.$row["pid"].'</td>
 <td>'.$row["title"].'</td>
 <td>'.$row["conference"].'</td>
 <td>'.$row["impact"].'</td>
 <td>'.$row["volume"].'</td>
 <td>'.$row["issue"].'</td>
 <td>'.$row["national"].'</td>
 <td>'.$row["year"].'</td>

 
 
  <td><a href="editpapers.php?pid=' . $row["pid"] . '"><button class="btn-success">Approved</button></a> &nbsp; <a href="rejectpapers.php?pid=' . $row["pid"] . '"><button class="btn-danger">Rejected</button></a></td> 
 </tr>
 ';
      }  
      echo $output;  



     
 }  
 ?>  

