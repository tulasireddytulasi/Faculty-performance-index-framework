<?php
include 'adminheader.php';
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
                            <table width="100%" class="table table-bordered " >
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>Full Name</th>
                                        <th>User Name</th>
                                        <th>Password</th> 
                                        <th>Course</th> 
                                        <th>Branch</th>
                                        <th>Role</th>   
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
                                    $sql = "SELECT * FROM userinfo where role='HOD'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr>";
        
                                            echo '<td>' . $row["id"] . '</td>';
                                            echo '<td>' . $row["fullname"] . '</td>';
                                            echo '<td>' . $row["username"] . '</td>';
                                            echo '<td>' . $row["password"] . '</td>';
                                            echo '<td>' . $row["course"]. '</td>'; 
                                            echo '<td>' . $row["branch"] . '</td>';
                                            echo '<td>' . $row["role"] . '</td>';
                                            echo '<td><a href="openhod.php?id=' . $row["id"] . '">Edit</a> &nbsp; <a href="deletehod.php?id=' . $row["id"] . '">Delete</a></td>';

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