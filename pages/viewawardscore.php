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
 function fill_product($connect)  
 { 

$output = '';
$query = "SELECT * FROM awards";
$result = mysqli_query($connect, $query);
$output = '
<br />

<table class="table table-bordered table-striped">
 <tr>
      <th width="3%">Id</th>
      <th width="25%">Awards/Archievement Titles</th>
      <th width="20%">Presented By</th>
      <th width="10%">Year</th>
      <th width="10%">Score</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
 <td>'.$row["aid"].'</td>
  <td>'.$row["name"].'</td>
  <td>'.$row["presentedby"].'</td>
  <td>'.$row["year"].'</td>
  <td>'.$row["score"].'</td>

 
 
   <td><a href="editawards.php?aid=' . $row["aid"] . '"><button class="btn-success">Approved</button></a> &nbsp; <a href="deleteawards1.php?aid=' . $row["aid"] . '"><button class="btn-danger">Rejected</button></a></td> 
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
                           Lists Existing Roles
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

                             <div  class="row" id="show_product">
                           <?php echo fill_product($connect);?> 
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
                url:"dataawards.php",  
                method:"POST",  
                data:{id:id},  
                success:function(data){  
                     $('#show_product').html(data);  
                }  
           });  
      });  
 });  
 </script>  