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

$cid = $_GET['cid'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM course where cid=" . $cid;
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$cid = $row['cid'];
$name = $row['name'];
$org = $row['org'];
$fromdate = $row['fromdate'];
$todate = $row['todate'];


?>



                           <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="updatecourse.php" method="post">
                                        <div class="form-group">
                                            <label> Id</label>
                                            <input type="text" class="form-control"  placeholder="Enter Id" name="cid" value="<?php echo ''.$cid ?>" >
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Courses Under Taken</label>
                                              <input type="text" class="form-control" placeholder="Enter Courses Under Taken" name="name" value="<?php echo ''.$name ?>">
                                        </div>

                                         <div class="form-group">
                                            <label>Affliation</label>
                                              <input type="text" class="form-control" placeholder="Enter Affliation" name="org" value="<?php echo ''.$org ?>">
                                        </div>
                                      
                                         
                                        <div class="form-group">
                                            <label>fromdate</label>
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