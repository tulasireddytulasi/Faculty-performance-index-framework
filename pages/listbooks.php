<?php
include 'fheader.php';
 ?>
<!-- ===================================================================================== -->
<div id="page-wrapper">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 align="center" class="page-header">List Of Published Books</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Of Published Books
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
<!-- ============================================================================ --> 

<?php
//fetch.php    ORDER BY item_id DESC";
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
$output = '';
$query = "SELECT * FROM books WHERE fid = '" . $_SESSION['id'] . "' ";
$result = mysqli_query($connect, $query);
$output = '
<br />

<table class="table table-bordered table-striped">
 <tr>
      <th width="3%">Id</th>
      <th width="25%">Book Title</th>
      <th width="25%">Publication </th>
      <th width="15%">Authored/Partialy</th>
      <th width="13%">Year</th>
      
      <th width="10%"></th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
 <td>'.$row["bid"].'</td>
  <td>'.$row["title"].'</td>
  <td>'.$row["pub"].'</td>
  <td>'.$row["author"].'</td>
  <td>'.$row["year"].'</td>
 
  <td><a href="openbooks.php?bid=' . $row["bid"] . '">Edit</a> &nbsp; <a href="deletebooks.php?bid=' . $row["bid"] . '">Delete</a></td>
 </tr>
 ';
}
$output .= '</table>';
echo $output;
?>









   <!-- ============================================================================ -->                                              
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div> 
           


 <!-- ===================================================================================== -->          
 <?php
include 'footer.php';
 ?>