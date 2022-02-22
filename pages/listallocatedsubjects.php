<?php
include 'hodheader.php';
?>

<!-- ===================================================================================== -->


<div id="page-wrapper">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 align="center" class="page-header">List Of Allocated Subjects</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Of Allocated Subjects
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                            <table width="100%" class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th>Allocated ID</th>
                                        <th>Subject Name</th>
                                        <th>Branch</th>
                                        <th>Course</th>
                                        <th>Year</th>   
                                        <th>Semester</th>  
                                        <th>FID</th>     
                                        <th></th>                                  
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                   include 'dbconfig.php';

                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    } 
                                    
                                    $fid=$_SESSION['id'];
                                    $sql = "SELECT * FROM sub_allocate_dets";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr>";
        
                                            echo '<td>' . $row["allocid"] . '</td>';
                                            echo '<td>' . $row["subname"] . '</td>';
                                            echo '<td>' . $row["deptname"] . '</td>';
                                            echo '<td>' . $row["course"] . '</td>';
                                            echo '<td>' . $row["year"] . '</td>';
                                            echo '<td>' . $row["sem"]. '</td>'; 
                                            echo '<td>' . $row["fid"]. '</td>'; 
                                            echo '<td><a href="openallocsub.php?allocid=' . $row["allocid"] . '">Edit</a> &nbsp; <a href="deleteallocsub.php?allocid=' . $row["allocid"] . '">Delete</a></td>';

                                            //  
                                            echo '</tr>';
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


   <!--======================================================================= -->
  
   <!-- ============================================================================ -->                                              
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div> 
           

        
           
        

<!-- ========================  Footer ===================================================== -->
   <?php
   include 'footer.php';
   ?>