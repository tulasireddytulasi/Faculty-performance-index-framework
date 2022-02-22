<?php
include 'adminheader.php';
 ?>
<!-- ===================================================================================== -->
<div id="page-wrapper">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 align="center" class="page-header">List Of Subjects</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Of Subjects
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
$sql = "SELECT * FROM subjects where sid=" . $sid;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$sid = $row['sid'];
$name = $row['name'];
$branch = $row['branch'];
$course = $row['course'];
$year = $row['year'];
$semester = $row['semester'];


?>



                           <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="updatesubjects.php" method="post">
                                        <div class="form-group">
                                            <label>Subject Id</label>
                                            <input type="text" class="form-control"  placeholder="Enter id" name="sid" value="<?php echo ''.$sid ?>" >
                                            <label id="roleerr1"></label>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Subject Name</label>
                                            <input type="text" class="form-control"  placeholder="Enter Course" name="name" value="<?php echo ''.$name ?>">
                                            <label id="roleerr1"></label>
                                        </div>
                                      

                                                                  
                                        

                                         <div class="form-group">
                                            <label>Enter Branch</label>
                                             <select class="form-control" name="branch" required>
                                                <option><?php echo ''.$branch ?></option>
                                                <option>eee</option>
                                                <option>ece</option>
                                                <option>mech</option>
                                                <option>civil</option>
                                                <option>cse</option>
                                             </select>
                                            
                                         </div>

                                          <div class="form-group">
                                            <label>Enter Course</label>
                                             <select class="form-control" name="course" required>
                                                <option><?php echo ''.$course ?></option>
                                                <option>B.Tech</option>
                                             </select>
                                            
                                         </div>

                                         <div class="form-group">
                                            <label>Enter Year</label>
                                             <select class="form-control" name="year" required>
                                                <option><?php echo ''.$year ?></option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                             </select>
                                         </div>

                                         <div class="form-group">
                                            <label>Enter Semester</label>
                                             <select class="form-control" name="sem" required>
                                                <option><?php echo ''.$semester ?></option>
                                                <option>1</option>
                                                <option>2</option>
                                               
                                               
                                             </select>
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