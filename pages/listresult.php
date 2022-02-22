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
                            <div class="table-responsive">
                            <table width="100%" class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th>Result ID</th>
                                        <th>Course</th>
                                        <th>Branch</th>
                                        <th>Year</th>   
                                        <th>Semester</th>  
                                        <th>Subject Name</th>
                                        <th>Pass Percentage</th>     
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
                                    $sql = "SELECT * FROM result where fid = '$fid' ";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr>";
        
                                            echo '<td>' . $row["rid"] . '</td>';
                                            echo '<td>' . $row["course"] . '</td>';
                                            echo '<td>' . $row["branch"] . '</td>';
                                            echo '<td>' . $row["year"] . '</td>';
                                            echo '<td>' . $row["sem"]. '</td>'; 
                                            echo '<td>' . $row["subname"] . '</td>';
                                            echo '<td>' . $row["pass"] . '</td>';
                                            echo '<td><a href="openusers.php?rid=' . $row["rid"] . '">Edit</a> &nbsp; <a href="deleteusers.php?rid=' . $row["rid"] . '">Delete</a></td>';

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