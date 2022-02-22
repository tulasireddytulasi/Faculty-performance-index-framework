<?php
include 'fheader.php';
 ?>
<!-- ===================================================================================== -->
<div id="page-wrapper">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 align="center" class="page-header">List Of Guided Projects</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Of Guided Projects
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
<!-- ============================================================================ --> 

<?php
//fetch.php    ORDER BY item_id DESC";
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
$output = '';
$query = "SELECT * FROM projects WHERE fid = '" . $_SESSION['id'] . "' ";
$result = mysqli_query($connect, $query);
$output = '
<br />
<table class="table table-bordered table-striped">
 <tr>
      <th width="10%">Id</th>
      <th width="10%">Course</th>
      <th width="30%">Team Members </th>
      <th width="30%">Project Ttile</th>
      <th width="10%">Accademic year</th>
      <th width="10%"></th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
 <td>'.$row["id"].'</td>
  <td>'.$row["course"].'</td>
  <td>'.$row["team"].'</td>
  <td>'.$row["title"].'</td>
  <td>'.$row["year"].'</td>
  <td><a href="openprojects.php?id=' . $row["id"] . '">Edit</a> &nbsp; <a href="deleteprojects.php?id=' . $row["id"] . '">Delete</a></td>
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