<?php
include 'studentheader.php';
 ?>


<!-- ===================================================================================== -->





<!-- Page Content -->
  
        <div id="page-wrapper">
          <div class="ex2">  
            <div class="container-fluid">
                              <div class="row">
                                  <div class="col-lg-12">
                                      <h2 align="center" class="page-header">HOD FEEDBACK ON FACULTY</h2>
                                  </div>
                                  
                               </div>
                   <div class="row">
                     <div class="col-lg-12">
                     <form action="savefeedback1.php" method="POST"> 

                     <center> 
                      <select class="form-control" name="fid" >
                                                 <?php
                                   include 'dbconfig.php';

                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    } 
                                    session_start();
                                    $course = $_SESSION['course'];
                                    $year = $_SESSION["year"];
                                    $sem = $_SESSION["sem"];
                                    $sql = "SELECT * FROM sub_allocate_dets where year = '$year' and sem = '$sem' and course = '$course'    ";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                       echo "<option>select </option>";
                                        while($row = $result->fetch_assoc()) {

                echo "<option value='". $row['fid'] ."'>" .$row['subname'] ."</option>" ;
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();
                                    ?>
                                               
                                               
                                             </select>







                      </center> <br>
                   <table width="100%" class="table table-bordered table-striped">
                    
                   
                    <tr>
                      <td width="10px" class="info"> 1 </td>
                      <td class="info">Does the teacher come prepared on lessons ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q1" id="q1">Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q1" id="q1">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q1" id="q1">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q1" id="q1">Excellent
                      </label> </td>
                    </tr>
                     <tr>
                      <td width="10px" class="danger"> 2 </td>
                      <td class="danger">Does the teacher presents the lessons clearly and orderly ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q2" id="q2">Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q2" id="q2">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q2" id="q2">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q2" id="q2">Excellent
                      </label> </td>
                    </tr>
                     <tr>
                      <td width="10px" class="info"> 3 </td>
                <td class="info">Does the teacher speak with the voice clarity and effective body language ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q3" id="q3">Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q3" id="q3">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q3" id="q3">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q3" id="q3">Excellent
                      </label> </td>
                    </tr>
                     <tr>
                      <td width="10px" class="danger"> 4 </td>
                      <td class="danger">Is the teacher is capable of keeping the class under discipline and control ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q4" id="q4">Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q4" id="q4">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q4" id="q4">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q4" id="q4">Excellent
                      </label> </td>
                    </tr>
                     <tr>
                      <td width="10px" class="info"> 5 </td>
                      <td class="info">Does the teacher command students attention and give response to students doubts and questions ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q5" id="q5" >Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q5" id="q5">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q5" id="q5">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q5" id="q5">Excellent
                      </label> </td>
                    </tr>
                     <tr>
                      <td width="10px" class="danger"> 6 </td>
                      <td class="danger">Does the teacher possess depth of knowledge in subjects ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q6" id="q6" >Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q6" id="q6">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q6" id="q6">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q6" id="q6">Excellent
                      </label> </td>
                    </tr>
                     <tr>
                      <td width="10px" class="info"> 7 </td>
                      <td class="info">Does the teacher show readiness to give assignments to improve the studies ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q7" id="q7">Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q7" id="q7">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q7" id="q7">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q7" id="q7">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="danger"> 8 </td>
                      <td class="danger">Is the teacher available outside class hours to clarify the doubts if requested to by students ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q8" id="q8">Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q8" id="q8">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q8" id="q8">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q8" id="q8">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="info"> 9 </td>
                      <td class="info">Does the teacher help the students to clear the doubts and guide them for the successful completion  of the practical programme ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q9" id="q9">Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q9" id="q9">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q9" id="q9">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q9" id="q9">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="danger"> 10 </td>
                      <td class="danger">Does the teacher use the black boaar effectively ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q10" id="q10">Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q10" id="q10">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q10" id="q10">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q10" id="q10">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="info"> 11 </td>
                      <td class="info">Is the teacher regular and punctual ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q11" id="q11">Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q11" id="q11">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q11" id="q11">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q11" id="q11">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="danger"> 12 </td>
                      <td class="danger">Does the teacher come with neat dress and posture ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q12" id="q12">Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q12" id="q12">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q12" id="q12">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q12" id="q12">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="info"> 13 </td>
                      <td class="info">Does the teacher insist on keeping the records up to date and neat ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q13" id="q13">Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q13" id="q13">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q13" id="q13">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q13" id="q13">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="danger"> 14 </td>
                      <td class="danger">Does the teacher take  interest in maintaining discipline anywhere in the college premises ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q14" id="q14">Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q14" id="q14">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q14" id="q14">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q14" id="q14">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="info"> 15 </td>
                      <td class="info">Does the teacher remind you about your responsibility to the institution ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q15" id="q15">Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q15" id="q15">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q15" id="q15">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q15" id="q15">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="danger"> 16 </td>
                      <td class="danger">Do you find teacher unbiased and open mined in judgement ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q16" id="q16">Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q16" id="q16">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q16" id="q16">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q16" id="q16">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="info"> 17 </td>
                      <td class="info">Do you find the teacher patient and considerate ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q17" id="q17">Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q17" id="q17">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q17" id="q17">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q17" id="q17">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="danger"> 18 </td>
                      <td class="danger">Do you find the teacher impartial and honest in paper valuation and personal remark making ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q18" id="q18">Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q18" id="q18">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q18" id="q18">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q18" id="q18">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="info"> 19 </td>
                      <td class="info">Do you find the teacher inspiring in the class as well as outtside ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q19" id="q19">Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q19" id="q19">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q19" id="q19">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q19" id="q19">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="danger"> 20 </td>
                      <td class="danger">Do you find in the teacher, a true friend support with elderly affection ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q20" id="q20">Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q20" id="q20">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q20" id="q20">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q20" id="q20">Excellent
                      </label> </td>
                    </tr>
                   </table>
                <center>  
                 <button style="width: 100px " type="submit" class="btn btn-success" name="button" id="button">Submit</button>
                 <button style="width: 100px " type="reset" class="btn btn-warning">Reset</button></center>
                  </form> 
                   <br>
                     </div>
                   </div> 
            </div>
        </div>
      </div>





<!-- ================================================================================= --> 




   
           


 <!-- ===================================================================================== -->          
 <?php
include 'footer.php';
 ?>
 <script>  
 $(document).ready(function(){  
      $('#button11').click(function(){  
          // var id = $(this).val();
           var q1 = $('#q1').val();
           var q2 = $('#q2').val();
           var q3 = $('#q3').val();
           var q4 = $('#q4').val();
           var q5 = $('#q5').val();
           var q6 = $('#q6').val();
           var q7 = $('#q7').val();
           var q8 = $('#q8').val();
           var q9 = $('#q9').val();
           var q10 = $('#q10').val();
           var q11 = $('#q11').val();
           var q12 = $('#q12').val();
           var q13 = $('#q13').val();
           var q14 = $('#q14').val();
           var q15 = $('#q15').val();
           var q16 = $('#q16').val();
           var q17 = $('#q17').val();
           var q18 = $('#q18').val();
           var q19 = $('#q19').val();
           var q20= $('#q20').val();
          
          
           $.ajax({  
                url:"savefeedback.php",  
                method:"POST",  
                data:{q1:q1, q2:q2, q3:q3, q4:q4, q5:q5, q6:q6, q7:q7, q8:q8, q9:q9, q10:q10, q11:q11, q12:q12, q13:q13, q14:q14, q15:q15, q16:q16, q17:q17, q18:q18, q19:q19, q20:q20},  
                success:function(data){  
                       alert(data); 
                }  
           });  
      });  

      
  }); 

 </script>  