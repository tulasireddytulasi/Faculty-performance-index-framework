<?php
include 'hodheader.php';
 ?>
<!-- ===================================================================================== -->
<div id="page-wrapper">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 align="center" class="page-header">List Of Student Enrichment Activities</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        List Of Student Enrichment Activities
                        </div>
                        <!-- /.panel-heading -->
                        <div class="ex3">
                        <div class="panel-body">
<!-- ============================================================================ --> 

<?php
//fetch.php    ORDER BY item_id DESC";
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
$output = '';
$query = "SELECT * FROM sea WHERE fid = '" . $_SESSION['id'] . "' ";
// $result = mysqli_query($connect, $query);
// =======================================================================================

$result = mysqli_query($connect,$query);

if (mysqli_num_rows($result)>0) {
  
 

//========================================================================================
$output = '
<br />

<table class="table table-bordered table-striped">
 <tr>
      <th width="3%">Id</th>
      <th width="25%">Event Name</th>
      <th width="20%">No Of Students Participated</th>
      <th width="25%">Outcome</th>
      <th width="10%">Month</th>
      <th width="10%">Year</th>
 </tr>
';
// while($row = mysqli_fetch_array($result))
// {
 for ($i=0; $i < mysqli_num_rows($result); $i++) { 
  # code...
    $row = mysqli_fetch_array($result);
 $output .= '
 <tr>
  <td>'.$row["sid"].'</td>
  <td>'.$row["name"].'</td>
  <td>'.$row["nosp"].'</td>
  <td>'.$row["outcome"].'</td>
  <td>'.$row["month"].'</td>
  <td><select>
  <option>tulasireddy</option>
  <option>tulasireddy</option>
  <option>tulasi</option>
  <option>tulasi</option>
  </select></td>

  <td>
   <select>'
        
$results = mysqli_query($connect,$query);
      while ($rows = mysqli_fetch_array($results)){
echo "<option value='". $rows['name'] ."'>" .$rows['name'] ."</option>" ;
}

      '</select>


  </td>
  

 
 </tr>
 ';
} }
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
         </div>  


 <!-- ===================================================================================== -->          
 <?php
include 'footer.php';
 ?>