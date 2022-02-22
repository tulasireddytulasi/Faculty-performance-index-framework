 <?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "bitsvizag");  
 $output = '';  
 if(isset($_POST["id"]))  
 {  
      if($_POST["id"] != '')  
      {  
           $sql = "SELECT * FROM books WHERE fid = '".$_POST["id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM books";  
      }  
      $result = mysqli_query($connect, $sql);  
    $output = '
<br />

<table class="table table-bordered table-striped">
 <tr>
      <th width="3%">Book Id</th>
      <th width="25%">Book Title</th>
      <th width="20%">Publication</th>
      <th width="10%">Authored/Partially Authored</th>
      <th width="10%">Year</th>
      <th width="10%"></th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
  $output .= '
 <tr>
 <td align="center">'.$row["bid"].'</td>
 <td>'.$row["title"].'</td>
 <td>'.$row["pub"].'</td>
 <td>'.$row["author"].'</td>
 <td>'.$row["year"].'</td>

 
 
  <td><a href="editbooks.php?bid=' . $row["bid"] . '"><button class="btn-success">Approved</button></a> &nbsp; <a href="rejectbooks.php?bid=' . $row["bid"] . '"><button class="btn-danger">Rejected</button></a></td> 
 </tr>
 ';
      }  
      echo $output;  



     
 }  
 ?>  

