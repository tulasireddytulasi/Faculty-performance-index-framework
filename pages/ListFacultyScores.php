<?php
include 'managerheader.php';
?>

<!-- ===================================================================================== -->


<div id="page-wrapper">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 align="center" class="page-header">Scores of all Faculty Members</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Hi! these are the scores of all your faculty members
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                            <table width="100%" class="table table-bordered " >
                                <thead>
                                    <tr>
                                        <th>Faculty Name</th>
                                        <th>Department</th>
                                        <th>Result Score</th>
                                        <th>Projects Guided Score</th>
                                        <th>Events Conducted Score</th>
                                        <th>Events Attended Score</th>
                                        <th>Books Published Score</th>
                                        <th>Patents Score</th>
                                        <th>Administrative Activities Score</th>
                                        <th>Professional Bodies Memberships Score</th>
                                        <th>Courses undertaken Score</th>
                                        <th>Awards & Achievements Score</th>
                                        <th>Research Projects Score</th>
                                        <th>Research Papers Score</th>
                                        <th>Articles Published Score</th>
                                        <th>Student Enrichment Activities Score</th>
                                        <th>HOD Feedback Score</th>
                                        <th>Student Feedback Score</th>                                        
                                        <th>Total Score</th>   
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
                                    $sql = "SELECT * FROM score";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr>";
        
                                            echo '<td>' . $row["sctbid"] . '</td>';
                                            echo '<td>' . $row["fid"] . '</td>';
                                            echo '<td>' . $row["res_score"] . '</td>';
                                            echo '<td>' . $row["prj_gu_score"] . '</td>';
                                            echo '<td>' . $row["ev_con_score"]. '</td>'; 
                                            echo '<td>' . $row["ev_att_score"] . '</td>';
                                            echo '<td>' . $row["bk_pub_score"] . '</td>';
                                            echo '<td>' . $row["pat_score"] . '</td>';
                                            echo '<td>' . $row["adm_act_score"] . '</td>';
                                            echo '<td>' . $row["pbm_score"] . '</td>';
                                            echo '<td>' . $row["cou_ut_score"] . '</td>';
                                            echo '<td>' . $row["aw_ach_score"]. '</td>'; 
                                            echo '<td>' . $row["res_prj_score"] . '</td>';
                                            echo '<td>' . $row["res_pap_score"] . '</td>';
                                            echo '<td>' . $row["art_pub_score"] . '</td>';
                                            echo '<td>' . $row["stud_enr_score"] . '</td>';
                                            echo '<td>' . $row["hod_fb_score"] . '</td>';
                                            echo '<td>' . $row["stud_fb_score"] . '</td>';
                                            echo '<td>' . $row["totalscore"]. '</td>'; 
                                                                                                                                    

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