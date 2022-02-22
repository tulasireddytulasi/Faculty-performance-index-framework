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
$sql = "SELECT * FROM projects where id=" . $id;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id = $row['id'];
$course = $row['course'];
$team = $row['team'];
$title = $row['title'];
$year = $row['year'];
?>



                           <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="updateprojects.php" method="post">
                                        <div class="form-group">
                                            <label>User Id</label>
                                            <input type="text" class="form-control"  placeholder="Enter roleid" name="id" value="<?php echo ''.$id ?>">
                                            <label id="roleerr1"></label>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Course</label>
                                            <input type="text" class="form-control"  placeholder="Enter Course" name="course" value="<?php echo ''.$course ?>">
                                            <label id="roleerr1"></label>
                                        </div>
                                      

                                                                  
                                        <div class="form-group">
                                            <label>Team Members Details</label>
                                           <input type="text" class="form-control"  placeholder="Enter Team Members Details" name="team" value="<?php echo ''.$team ?>">
                                        </div>

                                         <div class="form-group">
                                        <label for="comment">Project Title</label>
                                         <textarea class="form-control" rows="5" name="title" value=""><?php echo ''.$title ?></textarea>
                                         </div>  

                                        <div class="form-group">
                                            <label>Year</label>
                                           <input type="number" class="form-control"  placeholder="Enter Year" name="year" value="<?php echo ''.$year ?>">
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