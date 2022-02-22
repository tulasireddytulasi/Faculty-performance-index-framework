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
<!-- ============================================================================ --> 

<?php

include 'dbconfig.php';

$bid = $_GET['bid'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM books where bid=" . $bid;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$bid = $row['bid'];
$title = $row['title'];
$pub = $row['pub'];
$author = $row['author'];
$year = $row['year'];


?>



                           <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="updatebooks.php" method="post">
                                        <div class="form-group">
                                            <label>Book Id</label>
                                            <input type="text" class="form-control"  placeholder="Enter roleid" name="bid" value="<?php echo ''.$bid ?>" >
                                            <label id="roleerr1"></label>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Book Title</label>
                                            <input type="text" class="form-control"  placeholder="Enter Course" name="title" value="<?php echo ''.$title ?>">
                                            <label id="roleerr1"></label>
                                        </div>
                                      

                                                                  
                                        <div class="form-group">
                                            <label>Enter Publication</label>
                                           <input type="text" class="form-control"  placeholder="Enter Publication" name="pub" value="<?php echo ''.$pub ?>">
                                        </div>

                                         <div class="form-group">
                                            <label>Role</label>
                                             <select class="form-control" name="author" required>
                                                 <option><?php echo ''.$author ?></option>
                                                <option>Authored</option>
                                                <option>Partialy</option>
                                             </select>
                                            
                                        </div>

                                         

                                        <div class="form-group">
                                            <label>Year</label>
                                           <input type="Date" class="form-control"  placeholder="Enter Year" name="year" value="<?php echo ''.$year ?>">
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