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

$pid = $_GET['pid'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM profissional where pid=" . $pid;
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$pid = $row['pid'];
$name = $row['name'];
$chapter = $row['chapter'];
$membership = $row['membership'];
$year = $row['year'];


?>



                           <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="updatepbms.php" method="post">
                                        <div class="form-group">
                                            <label> Id</label>
                                            <input type="text" class="form-control"  placeholder="Enter Id" name="pid" value="<?php echo ''.$pid ?>" >
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Profissional Body Membership Name</label>
                                              <input type="text" class="form-control" placeholder="Enter Profissional Body Membership Name" name="name" value="<?php echo ''.$name ?>">
                                        </div>

                                         <div class="form-group">
                                            <label>Chapter</label>
                                              <input type="text" class="form-control" placeholder="Enter Chapter" name="chapter" value="<?php echo ''.$chapter ?>">
                                        </div>
                                      
                                         
                                        <div class="form-group">
                                            <label>Membership No</label>
                                           <input type="text" class="form-control"  placeholder="Enter Membership No" name="membership" value="<?php echo ''.$membership ?>">
                                        </div>

                                         <div class="form-group">
                                            <label>Year</label>
                                           <input type="date" class="form-control"  placeholder="Enter Year" name="year" value="<?php echo ''.$year ?>">
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