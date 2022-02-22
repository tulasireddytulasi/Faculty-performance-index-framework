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
$sql = "SELECT * FROM patents where pid=" . $pid;
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$pid = $row['pid'];
$title = $row['title'];
$status = $row['status'];
$year = $row['year'];


?>



                           <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="updatepatents.php" method="post">
                                        <div class="form-group">
                                            <label>Patent Id</label>
                                            <input type="text" class="form-control"  placeholder="Enter Patent Id" name="pid" value="<?php echo ''.$pid ?>" >
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Patent Title</label>
                                            <input type="text" class="form-control"  placeholder="Enter Patent Title" name="title" value="<?php echo ''.$title ?>">
                                            
                                        </div>
                                      

                                                                  
                                       

                                         <div class="form-group">
                                            <label>Status</label>
                                             <select class="form-control" name="status" required>
                                                 <option><?php echo ''.$status ?></option>
                                                <option>Granted</option>
                                                <option>Filed</option>
                                             </select>
                                            
                                        </div>

                                         

                                        <div class="form-group">
                                            <label>Year Of Granted</label>
                                           <input  class="form-control"  placeholder="Enter Year Of Granted" name="year" value="<?php echo ''.$year ?>">
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