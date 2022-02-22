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

                           <select  name="course" id="course">
                           <option>Not Selected</option>
                           <option>b.tech</option>
                           <option>mba</option>
                           <option>m.tech</option>
                          </select>

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
                       <!--       <form action="allocatesubjects.php" method="POST"> -->
                              <div id="show">
                              <table class="table table-bordered">
                                <tr>
                                <th width="10%">Subject Name</th>
                                <th width="10%">Branch</th>
                                <th width="10%">Faculty</th>
                                </tr>
                                <tr>
                                  <td> <select name="subject" id="subject">
                                    <option>  select  </option>
                                    
                                  
                                  </select> </td>
                               
                                  <td>
                                    <select name="branch" id="branch">
                                      <option>select</option>
                                      <option>CSE</option>
                                      <option>EEE</option>
                                      <option>ECE</option>
                                      <option>CIVIL</option>
                                      <option>MECH</option>
                                    </select>
                                  </td>

                                   <td>
                                    <select name="fid" id="fid">
                                      <option>select</option>
                                     
                                    </select>
                                  </td>
                                </tr>
                                 <tr>
                                  <td> <select name="subjects" id="subjects">
                                    <option>  select  </option>
                                    
                                  
                                  </select> </td>
                               
                                  <td>
                                    <select name="branch1" id="branch1">
                                      <option>select</option>
                                      <option>CSE</option>
                                      <option>EEE</option>
                                      <option>ECE</option>
                                      <option>CIVIL</option>
                                      <option>MECH</option>
                                    </select>
                                  </td>

                                   <td>
                                    <select name="fid1" id="fid1">
                                      <option>select</option>
                                     
                                    </select>
                                  </td>
                                </tr>

                                <tr>
                                  <td> <select name="subject1" id="subject1">
                                    <option>  select  </option>
                                    
                                  
                                  </select> </td>
                               
                                  <td>
                                    <select name="branch2" id="branch2">
                                      <option>select</option>
                                      <option>CSE</option>
                                      <option>EEE</option>
                                      <option>ECE</option>
                                      <option>CIVIL</option>
                                      <option>MECH</option>
                                    </select>
                                  </td>

                                   <td>
                                    <select name="fid2" id="fid2">
                                      <option>select</option>
                                     
                                    </select>
                                  </td>
                                </tr>

                                <tr>
                                  <td> <select name="subject2" id="subject2">
                                    <option>  select  </option>
                                    
                                  
                                  </select> </td>
                               
                                  <td>
                                    <select name="branch3" id="branch3">
                                      <option>select</option>
                                      <option>CSE</option>
                                      <option>EEE</option>
                                      <option>ECE</option>
                                      <option>CIVIL</option>
                                      <option>MECH</option>
                                    </select>
                                  </td>

                                   <td>
                                    <select name="fid3" id="fid3">
                                      <option>select</option>
                                     
                                    </select>
                                  </td>
                                </tr>

                                <tr>
                                  <td> <select name="subject3" id="subject3">
                                    <option>  select  </option>
                                    
                                  
                                  </select> </td>
                               
                                  <td>
                                    <select name="branch4" id="branch4">
                                      <option>select</option>
                                      <option>CSE</option>
                                      <option>EEE</option>
                                      <option>ECE</option>
                                      <option>CIVIL</option>
                                      <option>MECH</option>
                                    </select>
                                  </td>

                                   <td>
                                    <select name="fid4" id="fid4">
                                      <option>select</option>
                                     
                                    </select>
                                  </td>
                                </tr>

                                <tr>
                                  <td> <select name="subject4" id="subject4">
                                    <option>  select  </option>
                                    
                                  
                                  </select> </td>
                               
                                  <td>
                                    <select name="branch5" id="branch5">
                                      <option>select</option>
                                      <option>CSE</option>
                                      <option>EEE</option>
                                      <option>ECE</option>
                                      <option>CIVIL</option>
                                      <option>MECH</option>
                                    </select>
                                  </td>

                                   <td>
                                    <select name="fid5" id="fid5">
                                      <option>select</option>
                                     
                                    </select>
                                  </td>
                                </tr>
                                
                              </table>
                          <center><button type="submit" class="btn btn-default" name="button1" id="button1">Submit Button</button>
                              <button type="reset" class="btn btn-default">Reset Button</button></center>
                           
                         </div>
                      <!--    </form> --> 
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

   $('#button1').click(function(){  
          // var id = $(this).val();
           var subject = $('#subject').val();
           var branch = $('#branch').val();
           var fid = $('#fid').val();
           var subjects = $('#subjects').val();
           var branch1 = $('#branch1').val();
           var fid1 = $('#fid1').val();
           var subject1 = $('#subject1').val();
           var branch2 = $('#branch2').val();
           var fid2 = $('#fid2').val();
           var subject2 = $('#subject2').val();
           var branch3 = $('#branch3').val();
           var fid3 = $('#fid3').val();
           var subject3 = $('#subject3').val();
           var branch4 = $('#branch4').val();
           var fid4 = $('#fid4').val();
           var subject4 = $('#subject4').val();
           var branch5 = $('#branch5').val();
           var fid5 = $('#fid5').val();
           var year = $('#year').val();
           var sem = $('#sem').val();
           var course = $('#course').val();

          
           $.ajax({  
                url:"allocatesubjects.php",  
                method:"POST",  
                data:{subject:subject, branch:branch, fid:fid, subjects:subjects, branch1:branch1, fid1:fid1, subject1:subject1, branch2:branch2, fid2:fid2, subject2:subject2, branch3:branch3, fid3:fid3, subject3:subject3, branch4:branch4, fid4:fid4, subject4:subject4, branch5:branch5, fid5:fid5, year:year, sem:sem, course:course},  
                success:function(data){  
                      alert(data);
                }  
           });  
      });  






      $('#button').click(function(){  
          // var id = $(this).val();
           var course = $('#course').val();
           var year = $('#year').val();
           var sem = $('#sem').val();
          
           $.ajax({  
                url:"semester.php",  
                method:"POST",  
                data:{course:course, year:year, sem:sem},  
                success:function(data){  
                      $('#subject').html(data);  
                      $('#subjects').html(data); 
                      $('#subject1').html(data);
                      $('#subject2').html(data);
                      $('#subject3').html(data); 
                      $('#subject4').html(data); 
                }  
           });  
      });  

       $('#branch').on('change',function() {
                        
           var id = $(this).val();
           $.ajax({  
                url:"branch.php",  
                method:"POST",  
                data:{id:id},  
                success:function(data){  
                     $('#fid').html(data);  
                }  
           });  
      });  

        $('#branch1').on('change',function() {
                        
           var id = $(this).val();
           $.ajax({  
                url:"branch.php",  
                method:"POST",  
                data:{id:id},  
                success:function(data){  
                     $('#fid1').html(data);  
                }  
           });  
      });  

        $('#branch2').on('change',function() {
                        
           var id = $(this).val();
           $.ajax({  
                url:"branch.php",  
                method:"POST",  
                data:{id:id},  
                success:function(data){  
                     $('#fid2').html(data);  
                }  
           });  
      });  

        $('#branch3').on('change',function() {
                        
           var id = $(this).val();
           $.ajax({  
                url:"branch.php",  
                method:"POST",  
                data:{id:id},  
                success:function(data){  
                     $('#fid3').html(data);  
                }  
           });  
      });  

        $('#branch4').on('change',function() {
                        
           var id = $(this).val();
           $.ajax({  
                url:"branch.php",  
                method:"POST",  
                data:{id:id},  
                success:function(data){  
                     $('#fid4').html(data);  
                }  
           });  
      });  

        $('#branch5').on('change',function() {
                        
           var id = $(this).val();
           $.ajax({  
                url:"branch.php",  
                method:"POST",  
                data:{id:id},  
                success:function(data){  
                     $('#fid5').html(data);  
                }  
           });  
      });  



      
  }); 

 </script>  