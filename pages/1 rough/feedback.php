<?php
include 'hodheader.php';
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
                      <form action="savefeedback.php" method="POST">

                     <center> 
                      <select class="form-control" name="fid" required>
                                                 <?php
                                   include 'dbconfig.php';

                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    } 
                                    $sql = "SELECT * FROM userinfo where role = 'Faculty'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                       echo "<option>select </option>";
                                        while($row = $result->fetch_assoc()) {

                echo "<option value='". $row['id'] ."'>" .$row['username'] ."</option>" ;
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
                        <input value="1" type="radio" name="q1" required>Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q1">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q1">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q1">Excellent
                      </label> </td>
                    </tr>
                     <tr>
                      <td width="10px" class="danger"> 2 </td>
                      <td class="danger">Does the teacher presents the lessons clearly and orderly ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q2" required>Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q2">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q2">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q2">Excellent
                      </label> </td>
                    </tr>
                     <tr>
                      <td width="10px" class="info"> 3 </td>
                <td class="info">Does the teacher speak with the voice clarity and effective body language ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q3" required>Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q3">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q3">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q3">Excellent
                      </label> </td>
                    </tr>
                     <tr>
                      <td width="10px" class="danger"> 4 </td>
                      <td class="danger">Is the teacher is capable of keeping the class under discipline and control ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q4" required>Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q4">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q4">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q4">Excellent
                      </label> </td>
                    </tr>
                     <tr>
                      <td width="10px" class="info"> 5 </td>
                      <td class="info">Does the teacher command students attention and give response to students doubts and questions ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q5" required>Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q5">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q5">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q5">Excellent
                      </label> </td>
                    </tr>
                     <tr>
                      <td width="10px" class="danger"> 6 </td>
                      <td class="danger">Does the teacher possess depth of knowledge in subjects ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q6" required>Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q6">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q6">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q6">Excellent
                      </label> </td>
                    </tr>
                     <tr>
                      <td width="10px" class="info"> 7 </td>
                      <td class="info">Does the teacher show readiness to give assignments to improve the studies ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q7" required>Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q7">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q7">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q7">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="danger"> 8 </td>
                      <td class="danger">Is the teacher available outside class hours to clarify the doubts if requested to by students ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q8" required>Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q8">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q8">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q8">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="info"> 9 </td>
                      <td class="info">Does the teacher help the students to clear the doubts and guide them for the successful completion  of the practical programme ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q9" required>Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q9">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q9">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q9">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="danger"> 10 </td>
                      <td class="danger">Does the teacher use the black boaar effectively ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q10" required>Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q10">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q10">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q10">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="info"> 11 </td>
                      <td class="info">Is the teacher regular and punctual ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q11" required>Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q11">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q11">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q11">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="danger"> 12 </td>
                      <td class="danger">Does the teacher come with neat dress and posture ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q12" required>Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q12">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q12">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q12">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="info"> 13 </td>
                      <td class="info">Does the teacher insist on keeping the records up to date and neat ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q13" required>Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q13">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q13">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q13">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="danger"> 14 </td>
                      <td class="danger">Does the teacher take  interest in maintaining discipline anywhere in the college premises ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q14" required>Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q14">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q14">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q14">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="info"> 15 </td>
                      <td class="info">Does the teacher remind you about your responsibility to the institution ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q15" required>Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q15">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q15">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q15">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="danger"> 16 </td>
                      <td class="danger">Do you find teacher unbiased and open mined in judgement ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q16" required>Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q16">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q16">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q16">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="info"> 17 </td>
                      <td class="info">Do you find the teacher patient and considerate ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q17" required>Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q17">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q17">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q17">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="danger"> 18 </td>
                      <td class="danger">Do you find the teacher impartial and honest in paper valuation and personal remark making ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q18" required>Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q18">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q18">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q18">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="info"> 19 </td>
                      <td class="info">Do you find the teacher inspiring in the class as well as outtside ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q19" required>Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q19">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q19">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q19">Excellent
                      </label> </td>
                    </tr>
                    <tr>
                      <td width="10px" class="danger"> 20 </td>
                      <td class="danger">Do you find in the teacher, a true friend support with elderly affection ?</td>
                    </tr>
                    <tr><td></td><td>
                      <label class="radio-inline">
                        <input value="1" type="radio" name="q20" required>Average
                      </label>
                      <label class="radio-inline">
                        <input value="2" type="radio" name="q20">Good
                      </label>
                      <label class="radio-inline">
                        <input value="3" type="radio" name="q20">Very Good
                      </label>
                      <label class="radio-inline">
                        <input value="4" type="radio" name="q20">Excellent
                      </label> </td>
                    </tr>
                   </table>
                <center>  
                 <button style="width: 100px " type="submit" class="btn btn-success" id="staffbtn">Submit</button>
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