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

                           <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="updatebook.php" method="post">
                                        <div class="form-group">
                                            <label>Book ID</label>
                                            <input type="number" class="form-control" id="bid" placeholder="Enter roleid" name="bid" value="<?php echo ''.$bid ?>">
                                            <label id="roleerr1"></label>
                                        </div>
                                      

                                       <div class="form-group">
                                        <label for="comment">Comment:</label>
                                         <textarea class="form-control" rows="5" id="comment"></textarea>
                                         </div>                              
                                        <div class="form-group">
                                            <label>Author</label>
                                           <input type="text" class="form-control" id="author" placeholder="Enter Author Name" name="author" value="<?php echo ''.$author ?>">
                                        </div>


                                        <div class="form-group">
                                            <label>Price</label>
                                           <input type="number" class="form-control" id="price" placeholder="Enter Price" name="price" value="<?php echo ''.$price ?>">
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