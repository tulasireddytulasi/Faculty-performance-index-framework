<?php 
include "fheader.php"; ?>

<div class="content-wrapper">
  <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Core Committee Member Sessions
       
      </h1>
    </section>

  <div id="page-wrapper">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 align="center" class="page-header">Chair Persons Details</h1>
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
                                        <th>Name</th>
                                        <th>Designation</th> 
                                       <th>Institution</th> 
                                        <th>Contact No1</th>  
                                         <th>Contact No2</th>  
                                          <th>Email</th> 
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
                                    $sql = "SELECT * FROM chair where role = 'co chair persons'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr>";
        
                                            echo '<td>' . $row["cid"] . '</td>';
                                            echo '<td>' . $row["name"] . '</td>';
                                           echo '<td>' . $row["designation"] . '</td>';
                                            echo '<td>' . $row["org"] . '</td>';
                                             echo '<td>' . $row["con1"] . '</td>';
                                              echo '<td>' . $row["con2"] . '</td>';
                                               echo '<td>' . $row["email"] . '</td>';
                                            echo '<td>' . $row["role"] . '</td>';
                                            echo '<td><a href="openpersons1.php?cid=' . $row["cid"] . '">Edit</a> &nbsp; <a href="deletepersons.php?cid=' . $row["cid"] . '">Delete</a></td>';

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

                                       
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div> 
         





<?php 
include "footer.php";
?>