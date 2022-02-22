<?php
include 'fheader.php';
 ?>
<!-- ===================================================================================== -->
<div id="page-wrapper">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 align="center" class="page-header">List Of Research Projects</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         List Of Research Projects
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
<!-- ============================================================================ --> 

<?php
//fetch.php    ORDER BY item_id DESC";
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
$output = '';
$query = "SELECT * FROM research WHERE fid = '" . $_SESSION['id'] . "' ";
$result = mysqli_query($connect, $query);
$output = '
<br />

<table class="table table-bordered table-striped">
 <tr>
      <th width="3%">Id</th>
      <th width="25%">Research Project Title</th>
      <th width="20%">Funded By</th>
      <th width="10%">Total Grant Sanctioned</th>
      <th width="10%">From Date</th>
      <th width="10%">To Date</th>
      <th width="10%">Status</th>
      <th width="10%">Role</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
  <td>'.$row["rid"].'</td>
  <td>'.$row["title"].'</td>
  <td>'.$row["funded"].'</td>
  <td>'.$row["grant1"].'</td>
  <td>'.$row["fromdate"].'</td>
  <td>'.$row["todate"].'</td>
  <td>'.$row["status"].'</td>
  <td>'.$row["role"].'</td>

 <td><a href="openresearch.php?rid=' . $row["rid"] . '">Edit</a> &nbsp; <a href="deleteresearch.php?rid=' . $row["rid"] . '">Delete</a></td>
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