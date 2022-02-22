<?php
include 'fheader.php';
 ?>
<!-- ===================================================================================== -->
<div id="page-wrapper">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 align="center" class="page-header">List Of Research Papers</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          List Of Research Papers
                        </div>
                        <!-- /.panel-heading -->
                         <div class="ex3">
                        <div class="panel-body">
<!-- ============================================================================ --> 

<?php
//fetch.php    ORDER BY item_id DESC";
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
$output = '';
$query = "SELECT * FROM papers WHERE fid = '" . $_SESSION['id'] . "' ";
$result = mysqli_query($connect, $query);
$output = '
<br />

<table class="table table-bordered table-striped">
 <tr>
       <th width="3%">Id</th>
      <th width="23%">Title of Research Papers</th>
      <th width="18%">Conference/Journal</th>
      <th width="12%">Impact Factor</th>
      <th width="12%">Volume</th>
      <th width="12%">Issue</th>
      <th width="12%">National/International</th>
      <th width="12%">Year</th>
      <th width="3%"></th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
  <td>'.$row["pid"].'</td>
  <td>'.$row["title"].'</td>
  <td>'.$row["conference"].'</td>
  <td>'.$row["impact"].'</td>
  <td>'.$row["volume"].'</td>
  <td>'.$row["issue"].'</td>
  <td>'.$row["national"].'</td>
  <td>'.$row["year"].'</td>
 
  <td><a href="openpapers.php?pid=' . $row["pid"] . '">Edit</a> &nbsp; <a href="deletepapers.php?pid=' . $row["pid"] . '">Delete</a></td>
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
              </div>
                <!-- /.col-lg-12 -->
            </div> 
           


 <!-- ===================================================================================== -->          
 <?php
include 'footer.php';
 ?>