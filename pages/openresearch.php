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

include 'dbconfig.php';

$rid = $_GET['rid'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM research where rid=" . $rid;
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$rid = $row['rid'];
$title = $row['title'];
$funded = $row['funded'];
$grant1 = $row['grant1'];
$fromdate = $row['fromdate'];
$todate = $row['todate'];
$status = $row['status'];
$role = $row['role'];
?>



                           <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="updateresearch.php" method="post">
                                        <div class="form-group">
                                            <label> Id</label>
                                            <input type="text" class="form-control"  placeholder="Enter Id" name="rid" value="<?php echo ''.$rid ?>" >
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Research Projects</label>
                                              <input type="text" class="form-control" placeholder="Enter Research Projects" name="title" value="<?php echo ''.$title ?>">
                                        </div>

                                         <div class="form-group">
                                            <label>Funded By</label>
                                              <input type="text" class="form-control" placeholder="Enter Funded By" name="funded" value="<?php echo ''.$funded ?>">
                                        </div>
                                      
                                         
                                        <div class="form-group">
                                            <label>Total Grant Sanctioned</label>
                                           <input type="text" class="form-control"  placeholder="Enter Total Grant Sanctioned" name="grant1" value="<?php echo ''.$grant1 ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>From Date</label>
                                           <input type="date" class="form-control"  placeholder="Enter From Date" name="fromdate" value="<?php echo ''.$fromdate ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>To Date</label>
                                           <input type="date" class="form-control"  placeholder="Enter To Date" name="todate" value="<?php echo ''.$todate ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                           <input type="text" class="form-control"  placeholder="Enter Status" name="year" value="<?php echo ''.$status ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Role</label>
                                           <input type="text" class="form-control"  placeholder="Enter Role" name="role" value="<?php echo ''.$role ?>">
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