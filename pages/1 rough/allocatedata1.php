                              
                              <div class="row">
                                <div class="col-lg-12">

                               <div class="table-responsive">
                            <table width="100%" class="table table-bordered " >
                                <thead>
                                    <tr>
                                        <th>Subject Name</th>
                                        <th>Branch</th>
                                        <th>Faculty</th> 
                                       
                                                                          
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
                                    
                                    $year = $_POST['year'];
                                    $sem = $_POST['sem'];
                                    //$branch = $_POST['branch'];
                                    $sql = "SELECT * FROM subjects where year='$year'  and semester = '$sem' ";
                                    $sqls = "SELECT * FROM userinfo where role = 'faculty' ";
                                    $result = $conn->query($sql);

                                    if (mysqli_num_rows($result)>0) 
                                    {
    
                                        for ($i=0; $i < mysqli_num_rows($result); $i++) { 
                                
                                        $row = mysqli_fetch_array($result);

                                            echo "<tr>";

                                     echo '<td><input size="35" name="subjects[]" type=text value="' . $row["name"] . '"></td>';


                                     echo '<td>
                                          <select name="branch[]">
                                            <option>Selecte</option>
                                            <option>CSE</option>
                                            <option>ECE</option>
                                            <option>EEE</option>
                                            <option>CIVIL</option>
                                            <option>MECH</option>
                                          </select>
                                             </td>';
        

                                           echo '<td>';
                                      echo    '<select name="fid[]" id="names[]">' ;
                                           $results = mysqli_query($conn, $sqls);  

                                          while ($rows = mysqli_fetch_array($results)){
                                    echo "<option value='". $rows['id'] ."'>" .$rows['fullname'] ."</option>" ;
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
          <center> <button>Submit</button> </center>
                            </div>
                                
                            </div>
                           
