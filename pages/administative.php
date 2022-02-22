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
      $sql = "SELECT id,username FROM userinfo  where course = '$course' and branch = '$branch' and   role = 'faculty'";
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id"].'">'.$row["username"].'</option>';  
      }  
      return $output;  
 }  
 function show($connect)  
 { 

$output = '';
$query = "SELECT * FROM administative";
$result = mysqli_query($connect, $query);
$output = '
<br />
<table class="table table-bordered table-striped">
 <tr>
      <th width="3%">___Id</th>
      <th width="25%">Work Title</th>
      <th width="20%">Duty Assigned</th>
      <th width="10%">From Date</th>
      <th width="10%">To Date</th>
      <th width="10%"></th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
 <td align="center">'.$row["aid"].'</td>
  <td>'.$row["title"].'</td>
  <td>'.$row["duty"].'</td>
  <td>'.$row["fromdate"].'</td>
   <td>'.$row["todate"].'</td>
  <td><a href="editadmini.php?aid=' . $row["aid"] . '"><button class="btn-success">Approved</button></a> &nbsp; <a href="rejectadmini.php?aid=' . $row["aid"] . '"><button class="btn-danger">Rejected</button></a></td> 
 </tr>
 ';
}
$output .= '</table>';
echo $output;
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
                           Lists Of Administative Activities
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div align="center" class="row">
                          <select  name="awards" id="awards">
                          <option>Select</option>
                                    
                          <?php echo facultyinfo($connect);?>       
                                               
                          </select><br>

                          </div>
                          <br>
                             <div class="ex3">
                             <div  class="row" id="show">
                          
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




<!-- ================================================================================= --> 




   
           


 <!-- ===================================================================================== -->          
 <?php
include 'footer.php';
 ?>
 <script>  
 $(document).ready(function(){  
      $('#awards').change(function(){  
           var id = $(this).val();  
           $.ajax({  
                url:"dataadmini.php",  
                method:"POST",  
                data:{id:id},  
                success:function(data){  
                     $('#show').html(data);  
                }  
           });  
      });  
 });  
 </script>  