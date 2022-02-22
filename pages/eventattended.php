<?php
include 'rdheader.php';
 ?>

<?php   
 //load_data_select.php  
 $connect = mysqli_connect("localhost", "root", "", "bitsvizag");  
  function facultyinfo($connect)  
 {  
       session_start();
      $course = $_SESSION['course'];
      $branch = $_SESSION['branch'];
      $output = '';  
      $sql = "SELECT id,username FROM userinfo where course = '$course' and branch = '$branch' and   role = 'faculty'";
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
<!-- ====================================================================================================== -->
         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                       <center>  List of Events Attended</center>  
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div align="center" class="row">
                          <select  name="awards" id="awards">
                          <option>Not Selected</option>
                                    
                          <?php echo facultyinfo($connect);?>       
                                               
                          </select><br>

                          </div>
                          <br>
                             <div class="ex3 row">
                             <div   id="show">
                           
                         </div>
                    
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

<!-- ========================================================================================================================== -->
        
 <?php
include 'footer.php';
 ?>
 <script>  
 $(document).ready(function(){  
      $('#awards').change(function(){  
           var id = $(this).val();  
           $.ajax({  
                url:"dataeventattended.php",  
                method:"POST",  
                data:{id:id},  
                success:function(data){  
                     $('#show').html(data);  
                }  
           });  
      });  
 });  
 </script>  