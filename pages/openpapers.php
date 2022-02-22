<?php
include 'fheader.php';
 ?>
<!-- ===================================================================================== -->
<div id="page-wrapper">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 align="center" class="page-header">List Of Research Papers</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           List Of Research Papers
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
<!-- ============================================================================ --> 

<?php

include 'dbconfig.php';

$pid = $_GET['pid'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM papers where pid=" . $pid;
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$aid = $row['pid'];
$name = $row['title'];
$conference = $row['conference'];
$impact = $row['impact'];
$volume = $row['volume'];
$issue = $row['issue'];
$year = $row['year'];
?>



                           <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="updateawards.php" method="post">
                                        <div class="form-group">
                                            <label> Id</label>
                                            <input type="text" class="form-control"  placeholder="Enter Id" name="aid" value="<?php echo ''.$aid ?>" >
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Awards Or Achievements</label>
                                              <input type="text" class="form-control" placeholder="Enter Awards Or Achievements" name="name" value="<?php echo ''.$name ?>">
                                        </div>

                                         <div class="form-group">
                                            <label>Presented By</label>
                                              <input type="text" class="form-control" placeholder="Enter Presented By" name="presentedby" value="<?php echo ''.$presentedby ?>">
                                        </div>
                                      
                                         
                                        <div class="form-group">
                                            <label>Year</label>
                                           <input type="date" class="form-control"  placeholder="Enter Year" name="year" value="<?php echo ''.$year ?>">
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