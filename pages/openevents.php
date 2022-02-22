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

$id = $_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM events where id=" . $id;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id = $row['id'];
$title = $row['title'];
$type = $row['type'];
$org = $row['org'];
$from1 = $row['from1'];
$to1 = $row['to1'];

?>



                           <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="updateevents.php" method="post">
                                        <div class="form-group">
                                            <label>User Id</label>
                                            <input type="text" class="form-control"  placeholder="Enter roleid" name="id" value="<?php echo ''.$id ?>">
                                            <label id="roleerr1"></label>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Course</label>
                                            <input type="text" class="form-control"  placeholder="Enter Course" name="title" value="<?php echo ''.$title ?>">
                                            <label id="roleerr1"></label>
                                        </div>
                                      

                                                                  
                                        <div class="form-group">
                                            <label>Team Members Details</label>
                                           <input type="text" class="form-control"  placeholder="Enter Team Members Details" name="type" value="<?php echo ''.$type ?>">
                                        </div>

                                         <div class="form-group">
                                            <label>Team Members Details</label>
                                           <input type="text" class="form-control"  placeholder="Enter Team Members Details" name="org" value="<?php echo ''.$org ?>">
                                        </div>

                                         

                                        <div class="form-group">
                                            <label>Year</label>
                                           <input type="Date" class="form-control"  placeholder="Enter Year" name="from1" value="<?php echo ''.$from1 ?>">
                                        </div>

                                         <div class="form-group">
                                            <label>Team Members Details</label>
                                           <input type="Date" class="form-control"  placeholder="Enter Team Members Details" name="to1" value="<?php echo ''.$to1 ?>">
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