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
                            <h3 align="center" style="color: red">Computer Science And Engineering</h3>
                            <div class="table-responsive">
                            <table width="100%" class="table table-bordered " >
                                <thead>
                                    <tr>
                                        <th>Subjects ID</th>
                                        <th>Subject Name</th>
                                        <th>Branch</th> 
                                        <th>Course</th> 
                                        <th>Year</th>
                                        <th>Semester</th>
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
                                    $sql = "SELECT * FROM subjects";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr>";
        
                                            echo '<td>' . $row["sid"] . '</td>';
                                            echo '<td>' . $row["name"] . '</td>';
                                            echo '<td>' . $row["branch"] . '</td>';
                                            echo '<td>' . $row["course"]. '</td>'; 
                                            echo '<td>' . $row["year"]. '</td>'; 
                                            echo '<td>' . $row["semester"] . '</td>';
                                            echo '<td><a href="opensubjects.php?sid=' . $row["sid"] . '">Edit</a> &nbsp; <a href="deletesubjects.php?sid=' . $row["sid"] . '">Delete</a></td>';

                                            // 
                                            echo '</tr>';
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                 //   $conn->close();
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