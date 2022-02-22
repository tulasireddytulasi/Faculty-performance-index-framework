<?php
include 'fheader.php';
 ?>
<!-- ===================================================================================== -->
<div id="page-wrapper">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 align="center" class="page-header">List Of Users</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Of Existing Users
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
<!-- ============================================================================ --> 

<?php

include 'dbconfig.php';

$aid = $_GET['aid'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM administative where aid=" . $aid;
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$aid = $row['aid'];
$title = $row['title'];
$duty = $row['duty'];
$fromdate = $row['fromdate'];
$todate = $row['todate'];


?>



                           <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="updateadministative.php" method="post">
                                        <div class="form-group">
                                            <label>Administative Id</label>
                                            <input type="text" class="form-control"  placeholder="Enter Administative Id" name="aid" value="<?php echo ''.$aid ?>" >
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Work Title</label>
                                              <input type="text" class="form-control" placeholder="Enter Administative Title" name="title" value="<?php echo ''.$title ?>">
                                        </div>

                                         <div class="form-group">
                                            <label>Duty Assigned</label>
                                              <input type="text" class="form-control" placeholder="Enter Duty Assigned" name="duty" value="<?php echo ''.$duty ?>">
                                        </div>
                                      
                                         
                                        <div class="form-group">
                                            <label>From Date</label>
                                           <input type="date" class="form-control"  placeholder="Enter From Date" name="fromdate" value="<?php echo ''.$fromdate ?>">
                                        </div>

                                         <div class="form-group">
                                            <label>To Date</label>
                                           <input type="date" class="form-control"  placeholder="Enter To Date" name="todate" value="<?php echo ''.$todate ?>">
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