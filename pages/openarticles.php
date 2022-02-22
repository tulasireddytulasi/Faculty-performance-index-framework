<?php
include 'fheader.php';
 ?>
<!-- ===================================================================================== -->
<div id="page-wrapper">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 align="center" class="page-header">List Of Articles</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           List Of Articles
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
<!-- ============================================================================ --> 

<?php

include 'dbconfig.php';

$aid = $_GET['aid'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM articles where aid=" . $aid;
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$aid = $row['aid'];
$title = $row['title'];
$pub = $row['pub'];
$month = $row['month'];
$year = $row['year'];
?>



                           <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="updatearticles.php" method="post">
                                        <div class="form-group">
                                            <label> Id</label>
                                            <input type="text" class="form-control"  placeholder="Enter Id" name="aid" value="<?php echo ''.$aid ?>" >
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Articles</label>
                                              <input type="text" class="form-control" placeholder="Enter Articles" name="title" value="<?php echo ''.$title ?>">
                                        </div>

                                         <div class="form-group">
                                            <label>Publication</label>
                                              <input type="text" class="form-control" placeholder="Enter Publication" name="pub" value="<?php echo ''.$pub ?>">
                                        </div>
                                      
                                      <div class="form-group">
                                            <label>Month</label>
                                           <input type="text" class="form-control"  placeholder="Enter Month" name="month" value="<?php echo ''.$month ?>">
                                        </div>
                                         
                                        <div class="form-group">
                                            <label>Year</label>
                                           <input type="text" class="form-control"  placeholder="Enter Year" name="year" value="<?php echo ''.$year ?>">
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