
          
 <?php
include 'hodheader.php';
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
<div id="page-wrapper">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">BITS Faculty Performance Index Framework</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <div class="row">
              <div class="col-lg-12"> 
 <!-- ======================================================================================================= -->     
            <div align="center" class="row">
             <select  name="score" id="score">
                          <option>Select</option>
                                    
                          <?php echo facultyinfo($connect);?>       
                                               
                          </select><br> </div>
                          <div id="show">
                            
                          </div>







         
<!-- ======================================================================================================  -->

                    </div>  <!-- /.col-lg-12 -->
               </div>  <!-- /.row -->
         </div> <!-- /.container-fluid -->
</div> <!-- /#page-wrapper -->

<?php
include 'footer.php';
 ?>

 <script>  
 $(document).ready(function(){  
      $('#score').change(function(){  
           var id = $(this).val();  
           $.ajax({  
                url:"hodviewscore1.php",  
                method:"POST",  
                data:{id:id},  
                success:function(data){  
                     $('#show').html(data);  
                }  
           });  
      });  
 });  
 </script>  