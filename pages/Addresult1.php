<?php
include 'fheader.php';
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
                           <center> Enter your result particulars</center>
                        </div>
                        <div class="ex3">
                        <div class="panel-body">
                             <div class="row">
                                <div class="col-lg-12">
                                    <form action="saveresult.php" method="POST">
<!-- ========================================================================================= -->                            
                        <div class="table-responsive">
                           <table style="width:100%">
                                   <tr>
   
                                    <th> <center>Course</center></th>
                                    <th> <center>Department</center></th>        
                                    <th> <center>Year</center></th>
                                    <th> <center>Semester</center></th>
                                    <th> <center>Subject Name</center></th>
                                    <th> <center>Enter Pass %</center></th>
                                  </tr>
  
                                <tbody>
                                    <?php
                                   include 'dbconfig.php';

                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    } 
                                    $fid = $_SESSION['id'];
                                    $sql = "SELECT * FROM sub_allocate_dets where fid= '$fid' ";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) { 
                                            ?>
                                            <tr>

           <td> <input class="form-control" type="text" name="course[]" value="<?php echo ''.$row['course'] ?>" ></td>
           <td> <input class="form-control" type="text" name="dept[]" value="<?php echo ''.$row['deptname'] ?>" ></td>
           <td> <input class="form-control" type="text" name="year[]" value="<?php echo ''.$row['year'] ?>" ></td>
           <td> <input class="form-control" type="text" name="sem[]" value="<?php echo ''.$row['sem'] ?>" ></td>
           <td> <input class="form-control" type="text" name="sub[]" value="<?php echo ''.$row['subname'] ?>" ></td>
    <td> <input class="form-control" type="text" name="per[]"  placeholder="Enter Pass Percentage" required></td>
                                      </tr>
                                      <?php 
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();
                                    ?>
                                    </table>                         
                                </tbody>
                            </table>

                            <!-- /.table-responsive -->  
                            </div>     




 <!--======================================================================================================== -->
<br>
<center><button  type="submit" class="btn btn-default" id="staffbtn">Submit</button></center>
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



        
           
        

<?php
include 'footer.php';
?>