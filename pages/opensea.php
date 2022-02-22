<?php
include 'fheader.php';
 ?>
<!-- ===================================================================================== -->
<div id="page-wrapper">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 align="center" class="page-header">List Of Student Enrishment Activitites</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           List Of Student Enrishment Activitites
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
<!-- ============================================================================ --> 

<?php

include 'dbconfig.php';

$sid = $_GET['sid'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM sea where sid=" . $sid;
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$sid = $row['sid'];
$name = $row['name'];
$nosp = $row['nosp'];
$outcome = $row['outcome'];
$month = $row['month'];
$year = $row['year'];
?>



                           <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="updatesea.php" method="post">
                                        <div class="form-group">
                                            <label> Id</label>
                                            <input type="text" class="form-control"  placeholder="Enter Id" name="sid" value="<?php echo ''.$sid ?>" >
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Event Name</label>
                                              <input type="text" class="form-control" placeholder="Enter Event Name" name="name" value="<?php echo ''.$name ?>">
                                        </div>

                                         <div class="form-group">
                                            <label>No Of Students Participated</label>
                                              <input type="text" class="form-control" placeholder="Enter No Of Students Participated" name="nosp" value="<?php echo ''.$nosp ?>">
                                        </div>

                                         <div class="form-group">
                                            <label>Outcome</label>
                                              <input type="text" class="form-control" placeholder="Enter Outcome" name="outcome" value="<?php echo ''.$outcome ?>">
                                        </div>
                                      
                                      <div class="form-group">
                                            <label>Month</label>
                                           <input type="text" class="form-control"  placeholder="Enter Month" name="month" value="<?php echo ''.$month ?>">
                                        </div>
                                         
                                        <div class="form-group">
                                            <label>Year</label>
                                           <input type="text" class="form-control"  placeholder="Enter Year" name="year" value="<?php echo ''.$year ?>">
                                        </div>

                                        
                                        
                                        <button type="submit" class="btn btn-default" id="rolebtn">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                
                            </div>









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