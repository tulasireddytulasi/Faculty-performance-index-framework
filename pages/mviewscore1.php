
 <!-- ======================================================================================================= -->     

 <h2 align="center"> Result</h2>   

  <?php
//fetch.php    ORDER BY item_id DESC";
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
$output = '';
$result1 = 0 ;
$projects = 0;
$fid = $_POST['id'];
$query = "SELECT * FROM result WHERE fid = '$fid' ";
$result = mysqli_query($connect, $query);
$output = '
<br />

<table class="table table-bordered table-striped">
 <tr>
      <th width="3%">Result Id</th>
      <th width="25%">Course</th>
      <th width="20%">Branch</th>
      <th width="10%">Year</th>
      <th width="10%">Semester</th>
      <th width="10%">Sbject Name</th>
      <th width="10%">Pass Percentage</th>
      <th width="10%">Score</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{


$result1 = $result1 + $row["score"];


 $output .= '
 <tr>
  <td>'.$row["rid"].'</td>
  <td>'.$row["course"].'</td>
  <td>'.$row["branch"].'</td>
  <td>'.$row["year"].'</td>
  <td>'.$row["sem"].'</td>
  <td>'.$row["subname"].'</td>
  <td>'.$row["pass"].'</td>
  <td>'.$row["score"].'</td>
 

 
 </tr>
 ';
}
$output .= '</table>';
echo $output;
// echo $a;
?>      
         
         <br>
         <table  class="table table-bordered table-striped">
           <tr>
             <th align="center"><center>Result Total Score</center> </th>
           </tr>
            <tr>
             <td align="center"> <?php echo $result1;  ?></td>
           </tr>


         </table>   


         <!-- ======================================================================================================  -->
 <h2 align="center"> Administative Activities </h2>   

  <?php
//fetch.php    ORDER BY item_id DESC";
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
$output = '';
$administrative = 0;
$query = "SELECT * FROM administative WHERE fid = '$fid' ";
$result = mysqli_query($connect, $query);
$output = '
<br />

<table class="table table-bordered table-striped">
 <tr>
      <th width="3%">Id</th>
      <th width="25%">Work Title</th>
      <th width="20%">Duty Assigned</th>
      <th width="10%">From Date</th>
      <th width="10%">To Date</th>
      <th width="10%">Score</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{


$administrative = $administrative + $row["score"];


 $output .= '
 <tr>
  <td>'.$row["aid"].'</td>
  <td>'.$row["title"].'</td>
  <td>'.$row["duty"].'</td>
  <td>'.$row["fromdate"].'</td>
  <td>'.$row["todate"].'</td>
  <td>'.$row["score"].'</td>
 

 
 </tr>
 ';
}
$output .= '</table>';
echo $output;
// echo $a;
?>      
         
         <br>
         <table  class="table table-bordered table-striped">
           <tr>
             <th align="center"><center>Administative Activities  Total Score</center> </th>
           </tr>
            <tr>
             <td align="center"> <?php echo $administrative;  ?></td>
           </tr>


         </table>
 <!-- ======================================================================================================  -->
  <h2 align="center"> Professional Body Membership </h2>   

  <?php
//fetch.php    ORDER BY item_id DESC";
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
$output = '';
$pbms = 0;
$query = "SELECT * FROM Profissional WHERE fid = '$fid' ";
$result = mysqli_query($connect, $query);
$output = '
<br />

<table class="table table-bordered table-striped">
 <tr>
      <th width="3%">Id</th>
      <th width="25%">Professional Body Membership Title</th>
      <th width="20%">Chapter</th>
      <th width="10%">Membership No</th>
      <th width="10%">To Date</th>
      <th width="10%">Score</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{


$pbms = $pbms + $row["score"];


 $output .= '
 <tr>
  <td>'.$row["pid"].'</td>
  <td>'.$row["name"].'</td>
  <td>'.$row["chapter"].'</td>
  <td>'.$row["membership"].'</td>
  <td>'.$row["year"].'</td>
  <td>'.$row["score"].'</td>
 

 
 </tr>
 ';
}
$output .= '</table>';
echo $output;
// echo $a;
?>      
         
         <br>
         <table  class="table table-bordered table-striped">
           <tr>
             <th align="center"><center>Professional Body Membership Total Score</center> </th>
           </tr>
            <tr>
             <td align="center"> <?php echo $pbms;  ?></td>
           </tr>


         </table>
 <!-- ======================================================================================================  -->
<h2 align="center"> Courses Undertaken </h2>   

  <?php
//fetch.php    ORDER BY item_id DESC";
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
$output = '';
$course = 0;
$query = "SELECT * FROM course WHERE fid = '$fid' ";
$result = mysqli_query($connect, $query);
$output = '
<br />

<table class="table table-bordered table-striped">
 <tr>
      <th width="3%">Id</th>
      <th width="25%">Courses Undertaken </th>
      <th width="20%">Affliation</th>
      <th width="10%">From Date</th>
      <th width="10%">To Date</th>
      <th width="10%">Score</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{


$course = $course + $row["score"];


 $output .= '
 <tr>
  <td>'.$row["cid"].'</td>
  <td>'.$row["name"].'</td>
  <td>'.$row["org"].'</td>
  <td>'.$row["fromdate"].'</td>
  <td>'.$row["todate"].'</td>
  <td>'.$row["score"].'</td>
 

 
 </tr>
 ';
}
$output .= '</table>';
echo $output;
// echo $a;
?>      
         
         <br>
         <table  class="table table-bordered table-striped">
           <tr>
             <th align="center"><center>Courses Undertaken Total Score</center> </th>
           </tr>
            <tr>
             <td align="center"> <?php echo $course;  ?></td>
           </tr>


         </table>
 <!-- ======================================================================================================  -->
<h2 align="center"> Student Enrishment Activities </h2>   

  <?php
//fetch.php    ORDER BY item_id DESC";
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
$output = '';
$sea = 0;
$query = "SELECT * FROM sea WHERE fid = '$fid' ";
$result = mysqli_query($connect, $query);
$output = '
<br />

<table class="table table-bordered table-striped">
 <tr>
      <th width="3%">Id</th>
      <th width="25%">Event Name  </th>
      <th width="20%">No Of Student Partisipants</th>
      <th width="10%">Outcome</th>
      <th width="10%">Month</th>
      <th width="10%">Year</th>
      <th width="10%">Score</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{


$sea = $sea + $row["score"];


 $output .= '
 <tr>
  <td>'.$row["sid"].'</td>
  <td>'.$row["name"].'</td>
  <td>'.$row["nosp"].'</td>
  <td>'.$row["outcome"].'</td>
  <td>'.$row["month"].'</td>
    <td>'.$row["year"].'</td>
  <td>'.$row["score"].'</td>
 

 
 </tr>
 ';
}
$output .= '</table>';
echo $output;
// echo $a;
?>      
         
         <br>
         <table  class="table table-bordered table-striped">
           <tr>
             <th align="center"><center>Student Enrichment Activities Total Score</center> </th>
           </tr>
            <tr>
             <td align="center"> <?php echo $sea;  ?></td>
           </tr>


         </table>
<!-- ===============================================================================================================  -->


 <!-- ======================================================================================================  -->
 <h2 align="center">Awards And Achievements</h2>   

  <?php
//fetch.php    ORDER BY item_id DESC";
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
$output = '';

$awards = 0 ;
$projects = 0;
$query = "SELECT * FROM awards WHERE  fid = '$fid' ";
$result = mysqli_query($connect, $query);
$output = '
<br />

<table class="table table-bordered table-striped">
 <tr>
      <th width="3%">Id</th>
      <th width="25%">Research Project Title</th>
      <th width="20%">Presented By</th>
      <th width="10%">Year</th>
      <th width="10%">Score</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{


$awards = $awards + $row["score"];


 $output .= '
 <tr>
  <td>'.$row["aid"].'</td>
  <td>'.$row["name"].'</td>
  <td>'.$row["presentedby"].'</td>
  <td>'.$row["year"].'</td>
  <td>'.$row["score"].'</td>
 

 
 </tr>
 ';
}
$output .= '</table>';
echo $output;
// echo $a;
?>      
         
         <br>
         <table  class="table table-bordered table-striped">
           <tr>
             <th align="center"><center>Awards Total Score</center> </th>
           </tr>
            <tr>
             <td align="center"> <?php echo $awards;  ?></td>
           </tr>


         </table>   
 <!-- ======================================================================================================  -->
 <h2 align="center">Projects Guided</h2>  

 <?php
//fetch.php    ORDER BY item_id DESC";
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
$output = '';
$query = "SELECT * FROM projects WHERE  fid = '$fid' ";
$result = mysqli_query($connect, $query);
$output = '
<br />
<table class="table table-bordered table-striped">
 <tr>
      <th width="10%">Id</th>
      <th width="10%">Course</th>
      <th width="30%">Team Members </th>
      <th width="30%">Project Ttile</th>
      <th width="10%">Accademic year</th>
      <th width="10%">Score</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{

  $projects = $projects + $row['score'];
 $output .= '
 <tr>
 <td>'.$row["id"].'</td>
  <td>'.$row["course"].'</td>
  <td>'.$row["team"].'</td>
  <td>'.$row["title"].'</td>
  <td>'.$row["year"].'</td>
  <td align="center">'.$row["score"].'</td>
 
 </tr>
 ';
}
$output .= '</table>';
echo $output;
?>
     <br>
         <table  class="table table-bordered table-striped">
           <tr>
             <th align="center"><center>Guided Projects Total Score</center> </th>
           </tr>
            <tr>
             <td align="center"> <?php echo $projects;  ?></td>
           </tr>


         </table>   
              

<!-- ======================================================================================================== -->

<h2 align="center">Research Papers</h2>  

 <?php
//fetch.php    ORDER BY item_id DESC";
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
$output = '';
$papers = 0;
$query = "SELECT * FROM papers WHERE  fid = '$fid' ";
$result = mysqli_query($connect, $query);
$output = '
<br />
<table class="table table-bordered table-striped">
 <tr>
      <th width="10%">Id</th>
      <th width="10%">Research Paper Title</th>
      <th width="30%">Conference</th>
      <th width="30%">Impact</th>
      <th width="10%">Volume</th>
      <th width="10%">Issue</th>
      <th width="10%">National/International</th>
      <th width="10%">Score</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{

  $papers = $papers + $row['score'];
 $output .= '
 <tr>
 <td>'.$row["pid"].'</td>
  <td>'.$row["title"].'</td>
  <td>'.$row["conference"].'</td>
  <td>'.$row["impact"].'</td>
  <td>'.$row["volume"].'</td>
  <td>'.$row["issue"].'</td>
  <td>'.$row["national"].'</td>
  <td>'.$row["year"].'</td>
  <td align="center">'.$row["score"].'</td>
 
 </tr>
 ';
}
$output .= '</table>';
echo $output;
?>
     <br>
         <table  class="table table-bordered table-striped">
           <tr>
             <th align="center"><center>Research Papers Total Score</center> </th>
           </tr>
            <tr>
             <td align="center"> <?php echo $papers;  ?></td>
           </tr>


         </table>   
              

<!-- ======================================================================================================== -->


<h2 align="center">Research Projects</h2>  

 <?php
//fetch.php    ORDER BY item_id DESC";
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
$output = '';
$research = 0;
$query = "SELECT * FROM research WHERE  fid = '$fid' ";
$result = mysqli_query($connect, $query);
$output = '
<br />
<table class="table table-bordered table-striped">
 <tr>
      <th width="10%">Id</th>
      <th width="10%">Research Project Title</th>
      <th width="30%">Funded By</th>
      <th width="30%">Total Grant Sanctioned</th>
      <th width="10%">From Date</th>
      <th width="10%">To Date</th>
      <th width="10%">Status</th>
      <th width="10%">Role</th>
      <th width="10%">Score</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{

  $research = $research + $row['score'];
 $output .= '
 <tr>
 <td>'.$row["rid"].'</td>
  <td>'.$row["title"].'</td>
  <td>'.$row["funded"].'</td>
  <td>'.$row["grant1"].'</td>
  <td>'.$row["fromdate"].'</td>
  <td>'.$row["todate"].'</td>
  <td>'.$row["status"].'</td>
  <td>'.$row["role"].'</td>
  <td align="center">'.$row["score"].'</td>
 
 </tr>
 ';
}
$output .= '</table>';
echo $output;
?>
     <br>
         <table  class="table table-bordered table-striped">
           <tr>
             <th align="center"><center>Research Projects Total Score</center> </th>
           </tr>
            <tr>
             <td align="center"> <?php echo $research;  ?></td>
           </tr>


         </table>   
              

<!-- ======================================================================================================== -->

<h2 align="center">Event Conducted</h2>  

 <?php
//fetch.php    ORDER BY item_id DESC";
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
$output = '';
$eventsconducted = 0;
$query = "SELECT * FROM events WHERE  fid = '$fid' ";
$result = mysqli_query($connect, $query);
$output = '
<br />
<table class="table table-bordered table-striped">
 <tr>
      <th width="10%">Id</th>
      <th width="10%">Event Title</th>
      <th width="10%">Event Type</th>
      <th width="30%">Associating Institution</th>
      <th width="10%">From Date</th>
      <th width="10%">To Date</th>
      <th width="10%">Score</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{

  $eventsconducted = $eventsconducted + $row['score'];
 $output .= '
 <tr>
 <td>'.$row["id"].'</td>
  <td>'.$row["title"].'</td>
  <td>'.$row["type"].'</td>
  <td>'.$row["org"].'</td>
  <td>'.$row["from1"].'</td>
  <td>'.$row["to1"].'</td>
  <td align="center">'.$row["score"].'</td>
 
 </tr>
 ';
}
$output .= '</table>';
echo $output;
?>
     <br>
         <table  class="table table-bordered table-striped">
           <tr>
             <th align="center"><center>Event Conducted Total Score</center> </th>
           </tr>
            <tr>
             <td align="center"> <?php echo $eventsconducted;  ?></td>
           </tr>


         </table>   
              

<!-- ======================================================================================================== -->


<h2 align="center">Event Attended</h2>  

 <?php
//fetch.php    ORDER BY item_id DESC";
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
$output = '';
$eventsattended = 0;
$query = "SELECT * FROM events1 WHERE  fid = '$fid' ";
$result = mysqli_query($connect, $query);
$output = '
<br />
<table class="table table-bordered table-striped">
 <tr>
      <th width="10%">Id</th>
      <th width="10%">Event Title</th>
      <th width="10%">Event Type</th>
      <th width="30%">Associating Institution</th>
      <th width="10%">From Date</th>
      <th width="10%">To Date</th>
      <th width="10%">Score</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{

  $eventsattended = $eventsattended + $row['score'];
 $output .= '
 <tr>
 <td>'.$row["id"].'</td>
  <td>'.$row["title"].'</td>
  <td>'.$row["type"].'</td>
  <td>'.$row["org"].'</td>
  <td>'.$row["from1"].'</td>
  <td>'.$row["to1"].'</td>
  <td align="center">'.$row["score"].'</td>
 
 </tr>
 ';
}
$output .= '</table>';
echo $output;
?>
     <br>
         <table  class="table table-bordered table-striped">
           <tr>
             <th align="center"><center>Event Attended Total Score</center> </th>
           </tr>
            <tr>
             <td align="center"> <?php echo $eventsattended;  ?></td>
           </tr>


         </table>   
              

<!-- ======================================================================================================== -->


<h2 align="center">Books Published</h2>  

 <?php
//fetch.php    ORDER BY item_id DESC";
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
$output = '';
$books = 0;
$query = "SELECT * FROM books WHERE  fid = '$fid' ";
$result = mysqli_query($connect, $query);
$output = '
<br />
<table class="table table-bordered table-striped">
 <tr>
      <th width="10%">Id</th>
      <th width="10%">Book Title</th>
      <th width="10%">Publication</th>
      <th width="30%">Authored/ Partially Authored</th>
      <th width="10%">Year</th>
      <th width="10%">Score</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{

  $books = $books + $row['score'];
 $output .= '
 <tr>
 <td>'.$row["bid"].'</td>
  <td>'.$row["title"].'</td>
  <td>'.$row["pub"].'</td>
  <td>'.$row["author"].'</td>
  <td>'.$row["year"].'</td>
  <td align="center">'.$row["score"].'</td>
 
 </tr>
 ';
}
$output .= '</table>';
echo $output;
?>
     <br>
         <table  class="table table-bordered table-striped">
           <tr>
             <th align="center"><center>Books Published Total Score</center> </th>
           </tr>
            <tr>
             <td align="center"> <?php echo $books;  ?></td>
           </tr>


         </table>   
              

<!-- ======================================================================================================== -->



<h2 align="center">Patents Filed Or Granted</h2>  

 <?php
//fetch.php    ORDER BY item_id DESC";
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
$output = '';
$patents = 0;
$query = "SELECT * FROM patents WHERE  fid = '$fid' ";
$result = mysqli_query($connect, $query);
$output = '
<br />
<table class="table table-bordered table-striped">
 <tr>
      <th width="10%">Id</th>
      <th width="10%">Patent Title</th>
      <th width="10%">Status Of Patent</th>
      <th width="30%">Year Of Granted Or Filed</th>
      <th width="10%">Score</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{

  $patents = $patents + $row['score'];
 $output .= '
 <tr>
 <td>'.$row["pid"].'</td>
  <td>'.$row["title"].'</td>
  <td>'.$row["status"].'</td>
  <td>'.$row["year"].'</td>
  <td align="center">'.$row["score"].'</td>
 
 </tr>
 ';
}
$output .= '</table>';
echo $output;
?>
     <br>
         <table  class="table table-bordered table-striped">
           <tr>
             <th align="center"><center>Patents Total Score</center> </th>
           </tr>
            <tr>
             <td align="center"> <?php echo $patents;  ?></td>
           </tr>


         </table>   
              

<!-- ======================================================================================================== -->


 <h2 align="center">HOD Feedback On Faculty</h2>  

 <?php
//fetch.php    ORDER BY item_id DESC";
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
$output = '';
$feedbackscore = 0;
$query = "SELECT * FROM hodfeedback WHERE  fid = '$fid' ";
$result = mysqli_query($connect, $query);

while($row = mysqli_fetch_array($result))
{

  $feedbackscore = $row['q1'] + $row['q2'] + $row['q3'] + $row['q4'] + $row['q5'] + $row['q6'] + $row['q7'] + $row['q8'] +$row['q9'] + $row['q10'] + $row['q11'] + $row['q12'] + $row['q13'] + $row['q14'] + $row['q15'] + $row['q16'] + $row['q17'] + $row['q18'] + $row['q19'] + $row['q20'] ;
 
}
$output .= '</table>';
echo $output;
?>
     <br>
         <table  class="table table-bordered table-striped">
           <tr>
             <th align="center"><center>HOD Feedback Total Score</center> </th>
           </tr>
            <tr>
             <td align="center"> <?php echo $feedbackscore;  ?></td>
           </tr>


         </table>   
              

<!-- ======================================================================================================  -->
<h2 align="center">Student Feedback On Faculty</h2>  

 <?php
//fetch.php    ORDER BY item_id DESC";
$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
$output = '';
$studentfeedback = 0;
$count =1;

?>
     <br>
         <table  class="table table-bordered table-striped">
           <tr>
            <th>Id</th>
             <th>Department </th>
             <th>Year</th>
             <th>Semister</th>
        <!--     <th>Subject</th> -->
             <th>Score</th>
            
           </tr>
          
<?php

$connect = mysqli_connect("localhost", "root", "", "bitsvizag");
$output = '';
$studentfeedback1 = 0;
$count =1;
$query = "SELECT * FROM studentfeedback WHERE fid = '$fid' and year = '4' and sem = '2' ";
$result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
{

  $studentfeedback1 = $studentfeedback1 + $row['total'];
 $output .= '
 <tr>
 <td>'.$row["sid"].'</td>
  <td>'.$row["branch"].'</td>
  <td>'.$row["year"].'</td>
  <td>'.$row["sem"].'</td>
 

  <td align="center">'.$row["total"].'</td>
 
 </tr>
 ';
}
// $output .= '</table>';
echo $output;

$output1 = '';
$studentfeedback2 = 0;
$query1 = "SELECT * FROM studentfeedback WHERE fid = '$fid' and year = '1' and sem = '1' ";
$result1 = mysqli_query($connect, $query1);
 while($row = mysqli_fetch_array($result1))
{

  $studentfeedback2 = $studentfeedback2 + $row['total'];
 $output1 .= '
 <tr>
 <td>'.$row["sid"].'</td>
  <td>'.$row["branch"].'</td>
  <td>'.$row["year"].'</td>
  <td>'.$row["sem"].'</td>
 

  <td align="center">'.$row["total"].'</td>
 
 </tr>
 ';
}
$output .= '</table>';
echo $output1;





 ?>
           


        <!-- </table> --> 

         <br>
         <table  class="table table-bordered table-striped">
           <tr>
             <th align="center"><center>Student Feedback Total Score</center> </th>
           </tr>
            <tr>
             <td align="center"> <?php  
             $studfb =  $studentfeedback1 + $studentfeedback2;

              echo $studfb;  ?></td>
           </tr>


         </table>   

         <!---

         <table  class="table table-bordered table-striped">
           <tr>
             <th align="center"><center>Student Feedback Total Score</center> </th>
           </tr>
            <tr>
             <td align="center"> <?php //echo $studfb;  ?></td>
           </tr>


         </table>   --> 
              

<!-- ======================================================================================================  -->

<!-- ======================================================================================================  -->


<!-- ======================================================================================================  -->

 <br>
         <table  class="table table-bordered table-striped">
           <tr>
             <th align="center"><center>Total Performance Score</center> </th>
           </tr>
            <tr>
             <td align="center"> 
              <?php 
              // $mainscore = 0;
               $mainscore =  $result1 + $awards  + $projects + $feedbackscore + $studfb + $administrative + $pbms + $course + $sea + $papers + $research + $eventsconducted + $eventsattended + $books + $patents;

             echo $mainscore; 

              ?>
             </td>
           </tr>


         </table>   




<!--$query = "SELECT * FROM studentfeedback WHERE fid = '$fid' and year = '4' and sem = '2' ";
$result = mysqli_query($connect, $query);

while($row = mysqli_fetch_array($result))
{
 
 $count = $count + 1 ;
 $studentfeedback = $studentfeedback + $row['total'];
 
}
$output .= '</table>';
$studfb = $studentfeedback/$count;
echo $output; -->