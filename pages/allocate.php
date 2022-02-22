<?php
include 'hodheader.php';
?>

<!-- ===================================================================================== -->


<div id="page-wrapper">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 align="center" class="page-header">List Of Users</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Of Existing Users
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div class="row">
                                <div class="col-lg-12">



                                     <form action="insertreviewer.php" method="POST">
                              <div class="table-responsive">
                            <table width="100%" class="table table-bordered " >
                                <thead>
                                    <tr>
                                        <th>Subject Names</th>
                                        <th>Faculty Name</th> 
                                        <th>Branch</th>
                                        <th>Year</th>
                                        <th>Semester</th>  
                                       
                                        <th></th>                                   
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                   include 'dbconfig.php';

                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    } 
                                    $sql = "SELECT * FROM subjects where semester = '4-2' ";
                                    $sqls = "SELECT * FROM userinfo where role = 'faculty' ";
                                    $result = $conn->query($sql);

                                    if (mysqli_num_rows($result)>0) {
    
                                        for ($i=0; $i < mysqli_num_rows($result); $i++) { 
                                
                                        $row = mysqli_fetch_array($result);

                                            echo "<tr>";

                                     echo '<td><input name="id[]" type=text value="' . $row["name"] . '"></td>';
        

                                            echo '<td>
                                          <select name="review1[]">';
                                           $results = mysqli_query($conn, $sqls);  

                                          while ($rows = mysqli_fetch_array($results)){
                                echo "<option value='". $rows['id'] ."'>" .$rows['fullname'] ."</option>" ;
                                    }

                                        echo  '</select>';
                                    echo  '</td> ';

                                     echo '<td>
                                          <select name="review2[]">';
                                          
                                    echo "<option>CSE</option>
                                          <option>EEE</option>
                                          <option>ECE</option>
                                          <option>CIVIL</option>
                                          <option>MECH</option>" ;

                                           echo  '</select>';
                                    echo  '</td> ';


                                     echo '<td>
                                          <select name="review2[]">';
                                          
                                    echo "<option>Not Selected</option>
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>" ;

                                           echo  '</select>';
                                    echo  '</td> ';

                                     echo '<td>
                                          <select name="review2[]">';
                                          
                                    echo "<option>Not Selected</option>
                                           <option>1</option>
                                           <option>2</option> " ;

                                           echo  '</select>';
                                    echo  '</td> ';
                                    }

                                       



                                  

                                            // 
                                            echo '</tr>';

                                        
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();
                                    ?>
                                    </table>                         
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->  
                            </div> 
          <center> <button>Submit</button> </center>
                            </form>    





                                  
                                </div>
                                
                            </div>
                          
   <!--======================================================================= -->
   

   <!-- ============================================================================ -->                                              
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div> 
<!-- ========================  Footer ===================================================== -->
   <?php
   include 'footer.php';
   ?>