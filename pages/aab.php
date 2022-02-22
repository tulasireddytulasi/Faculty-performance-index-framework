<?php
include 'adminheader.php';
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
                            <div class="table-responsive">
                            <table width="100%" class="table table-bordered " >
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>Name</th>
                                        <th>Password</th> 
                                        <th>Course</th> 
                                        <th>Branch</th>
                                        <th>Role</th>   
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
                                    $sql = "SELECT * FROM userinfo where role='Faculty'";
                                    $result = $conn->query($sql);

                                    if (mysqli_num_rows($result)>0) {
    
                                        for ($i=0; $i < mysqli_num_rows($result); $i++) { 
                                        # code...
                                        $row = mysqli_fetch_array($result);





                               //     if ($result->num_rows > 0) {
                                        // output data of each row
                                   //     while($row = $result->fetch_assoc()) {
                                            echo "<tr>";
        
                                            echo '<td>' . $row["id"] . '</td>';
                                            echo '<td>' . $row["username"] . '</td>';
                                            echo '<td>' . $row["password"] . '</td>';
                                           
                                          


                                           echo '<td>
                                          <select>';
                                           $results = mysqli_query($conn, $sql);  

                                          while ($rows = mysqli_fetch_array($results)){
                                    echo "<option value='". $rows['username'] ."'>" .$rows['username'] ."</option>" ;
                                    }

                                        echo  '</select>';
                                    echo  '</td> ';

                                     echo '<td>
                                          <select>';
                                           $results = mysqli_query($conn, $sql);  

                                          while ($rows = mysqli_fetch_array($results)){
                                    echo "<option value='". $rows['username'] ."'>" .$rows['username'] ."</option>" ;
                                    }

                                        echo  '</select>';
                                    echo  '</td> ';

                                     echo '<td>
                                          <select>';
                                           $results = mysqli_query($conn, $sql);  

                                          while ($rows = mysqli_fetch_array($results)){
                                    echo "<option value='". $rows['username'] ."'>" .$rows['username'] ."</option>" ;
                                    }

                                        echo  '</select>';
                                    echo  '</td> ';

                                            // 
                                            echo '</tr>';
                                        }
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