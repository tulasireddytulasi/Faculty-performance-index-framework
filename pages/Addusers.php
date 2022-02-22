
<?php
include 'adminheader.php';
?>
<!-- ===================================================================================== -->

<div id="page-wrapper">
        <div class="container-fluid">
               
                    
                        <h1 align="center" class="page-header">Add Users</h1>
                    
                    <!-- /.col-lg-12 -->
                
<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add New Users details
                        </div>
                        <div class="ex3">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="saveusers.php" method="post">
                                        
                                         <div class="form-group">
                                            <label>Full Name</label>
                                            <input class="form-control" id="fullname" placeholder="Enter Full Name" name="fullname" required>
                                            <label id="stafferr2"></label>
                                        </div>  


                                        <div class="form-group">
                                            <label>User Name</label>
                                            <input class="form-control" id="username" placeholder="Enter User Name" name="username" required>
                                            <label id="stafferr2"></label>
                                        </div>  
                                        <div class="form-group">
                                            <label>Course</label>
                                            <select class="form-control" name="course" required>
                                                <option>select</option>
                                                <option>B.Tech</option>
                                                <option>M.Tech</option>
                                                <option>MBA</option>
                                            </select>
                                    
                                            <label id="stafferr3"></label>
                                        </div>                                       
                                        <div class="form-group">
                                            <label>Branch</label>
                                             <select class="form-control" name="branch" required>
                                                <option>select</option>
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
                                            <input class="form-control" id="password" placeholder="Enter Password" maxlength="10" name="password" required>
                                            <label id="stafferr4"></label>
                                        </div>

                                        <div class="form-group">
                                            <label>Role</label>
                                             <select class="form-control" name="role" required>
                                                <option>select</option>
                                                <option>Admin</option>
                                                <option>Hod</option>
                                                <option>Faculty</option>
                                                <option>Rd</option>
                                                <option>Student</option>
                                             </select>
                                            
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
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>



        
           
        

<!-- ========================  Footer ===================================================== -->
  <?php
  include 'footer.php';
  ?>
