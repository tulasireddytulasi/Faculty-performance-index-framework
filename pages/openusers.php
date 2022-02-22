<?php
include 'adminheader.php';
?>
<!-- ===================================================================================== -->

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
$sql = "SELECT * FROM userinfo where id=" . $id;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id = $row['id'];
$fullname = $row['fullname'];
$username = $row['username'];
$password = $row['password'];
$course = $row['course'];
$branch = $row['branch'];
$role = $row['role'];
?>

<div id="page-wrapper">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 align="center" class="page-header">Department Of Computer Science</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add New Users details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="updateusers.php" method="POST">
                                        <div class="form-group">
                                            <label>User ID</label>
                                            <input class="form-control" id="id" placeholder="Enter User Id" name="id" value="<?php echo ''.$id ?>">
                                            <label id="stafferr1"></label>
                                        </div>
                                         <div class="form-group">
                                            <label>Full Name</label>
                                            <input class="form-control" placeholder="Enter Full Name" name="fullname" value="<?php echo ''.$fullname ?>">
                                            <label id="stafferr2"></label>
                                        </div>
                                        <div class="form-group">
                                            <label>User Name</label>
                                            <input class="form-control" id="username" placeholder="Enter User Name" name="username" value="<?php echo ''.$username ?>">
                                            <label id="stafferr2"></label>
                                        </div> 
                                      <!--  <div class="form-group">
                                            <label>Course</label>
                                            <input class="form-control" id="course" placeholder="Enter User Name" name="username" value="<?php //echo ''.$course ?>">
                                            <label id="stafferr2"></label>
                                        </div>  --> 
                                        <div class="form-group">
                                            <label>Course</label>
                                            <select class="form-control" name="course">
                                                <option><?php echo ''.$course ?></option>
                                                <option>B.Tech</option>
                                                <option>M.Tech</option>
                                                <option>MBA</option>
                                            </select>
                                    
                                            <label id="stafferr3"></label>
                                        </div>                                       
                                        <div class="form-group">
                                            <label>Branch</label>
                                             <select class="form-control" name="branch">
                                                <option><?php echo ''.$branch ?></option>
                                                <option>CSE</option>
                                                <option>MECH</option>
                                                <option>CIVIL</option>
                                                <option>EEE</option>
                                                <option>ECE</option>
                                             </select>
                                    <label id="stafferr5"></label>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" id="password" placeholder="Enter Password" maxlength="10" name="password" value="<?php echo ''.$password ?>">
                                            <label id="stafferr4"></label>
                                        </div>

                                        <div class="form-group">
                                            <label>Role</label>
                                             <select class="form-control" name="role">
                                                <option><?php echo ''.$role ?></option>
                                                <option>Admin</option>
                                                <option>Hod</option>
                                                <option>Faculty</option>
                                                <option>Rd</option>
                                                <option>Student</option>
                                             </select>
                                             <label id="stafferr6"></label>
                                        </div>
                    <button type="submit" class="btn btn-default" id="staffbtn">Submit</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
                                      

        
           
        

<!-- ========================  Footer ===================================================== -->
  <?php   
   include 'footer.php';
   ?>
