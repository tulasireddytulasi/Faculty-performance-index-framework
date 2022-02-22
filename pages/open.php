
<?php
 include 'fheader.php'
 ?>

<!-- ========================================================================================================================== -->


        
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Role
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="updatebook.php" method="post">
                                        <div class="form-group">
                                            <label>Book ID</label>
                                            <input type="number" class="form-control" id="bid" placeholder="Enter roleid" name="bid" value="<?php echo ''.$bid ?>">
                                            <label id="roleerr1"></label>
                                        </div>
                                      <!--  <div class="form-group">
                                            <label>Book Name</label>
                                            <input type="text" class="form-control" id="bname" placeholder="Enter Book Name" name="bname" value="<?php //echo ''.$bname ?>">
                                            
                                        </div>   -->     

                                        <div class="form-group">
                                            <label>Name</label>
                                            <select class="form-control" name="bname" value="<?php echo ''.$bname ?>">
                                                <option ><?php echo ''.$bname ?></option>
                                                <option >Nowsha</option>
                                                <option>Vinod</option>
                                                <option>Suresh</option>
                                            </select>
                                    
                                            <label id="stafferr3"></label>
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
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
       

 <!-- ========================================================================================================================== -->
 
<?php
 include 'footer.php'
 ?>
