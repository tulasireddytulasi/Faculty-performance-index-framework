<?php
include 'hodheader.php';
 ?>


<!-- ===================================================================================== -->





<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                              <div class="row">
                                  <div class="col-lg-12">
                                      <h1 class="page-header">BITS Faculty Performance Index Framework</h1>
                                  </div>
                                  <!-- /.col-lg-12 -->
                              </div>
                              <!-- /.row -->



<!-- ========================================================================================================================== -->
         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                       <center>Allocating Subjects to Faculty</center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div align="center" class="row">

                          <select  name="year" id="year">
                           <option>Not Selected</option>
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           
                          </select>

                           <select  name="sem" id="sem">
                           <option>Not Selected</option>
                           <option>1</option>
                           <option>2</option>
                           </select>

                           <button name="button" id="button">Submit</button>

                           <br>
                           </div>
                          <br>
                             <div class="ex3 row">
                              <form action="allocatesubjects.php" method="POST">
                              <div id="show">
                              <table class="table table-bordered">
                                <tr>
                                <th width="10%">Subject Name</th>
                                <th width="10%">Faculty</th>
                                <th width="10%">Branch</th>
                                </tr>
                                
                              </table>
                           
                         </div>
                          </form>  
                       </div>
                            </div>                          
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div> 
           
         </div>




<!-- ================================================================================= --> 




   
           


 <!-- ===================================================================================== -->          
 <?php
include 'footer.php';
 ?>
 <script>  
 $(document).ready(function(){  
      $('#button').click(function(){  
          // var id = $(this).val();
           var year = $('#year').val();
           var sem = $('#sem').val();
          
           $.ajax({  
                url:"allocatedata.php",  
                method:"POST",  
                data:{year:year, sem:sem},  
                success:function(data){  
                     $('#show').html(data);  
                }  
           });  
      });  

      
  }); 

 </script>  