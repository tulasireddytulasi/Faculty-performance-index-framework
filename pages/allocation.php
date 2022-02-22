<?php
include 'hodheader.php';
 ?>

<?php   
 //load_data_select.php  
 $connect = mysqli_connect("localhost", "root", "", "bitsvizag");  
  function facultyinfo($connect)  
 {  
      $output = '';  
      $sql = "SELECT id,username FROM userinfo where role = 'faculty'"; 
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id"].'">'.$row["username"].'</option>';  
      }  
      return $output;  
 }  
 
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
                           Lists Existing Roles
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div align="center" class="row">
                          <form action="ab.php" method="POST">
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
                           </select><br>

                          </div>
                          <br>
                             <div class="ex3 row">
                              
                              <div id="show">
                              <table>
                                <tr>
                                <th width="10%">Subject Name</th>
                                <th width="10%">Faculty</th>
                                <th width="10%">Branch</th>
                                <th width="10%">Year</th>
                                <th width="10%">Semester</th>
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
      $('#sem').change(function(){  
           var id = $(this).val();
          
           $.ajax({  
                url:"allocatedata.php",  
                method:"POST",  
                data:{id:id},  
                success:function(data){  
                     $('#show').html(data);  
                }  
           });  
      });  

      
  }); 

 </script>  