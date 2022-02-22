 <div class="row">
                                <div class="col-lg-12">

                               <div class="table-responsive">
                            <table width="100%" class="table table-bordered " >
                                <thead>
                                    <tr>
                                        <th>Subject Name</th>
                                        <th>Faculty</th>
                                        <th>Branch</th> 
                                        <th>Year</th>
                                        <th>Semester</th>
                                                                          
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
                                    $id = $_POST['sem'];
                                    $year = $_POST['year'];
                                    //$branch = $_POST['branch'];
                                    $sql = "SELECT * FROM subjects where  semester = '$id' and year='$year'";
                                    $result = $conn->query($sql);

                                    if (mysqli_num_rows($result)>0) 
                                    {
                                      while ($row=$result->fetch_assoc()) 
                                      {
                                        echo "<tr>";
                                        echo '<td>' .$row["name"].'</td>';
                                        echo '<select name="fid[]" id="names[]">' ;
                                        $sqls = "SELECT * FROM userinfo where role = 'faculty' ";
                                        $result1 = $conn->query($sqls);
                                        if (mysqli_num_rows($result1)>0) 
                                        {
                                          while ($row=$result1->fetch_assoc()) 
                                          {
                                            echo "<option value='". $rows['id'] ."'>" .$rows['fullname'] ."</option>" ;
                                          }   
                                        }
                                        echo '</select>';
                                        echo '<td>
                                              <select name="branch[]">
                                                <option>CSE</option>
                                                <option>ECE</option>
                                                <option>EEE</option>
                                                <option>CIVIL</option>
                                                <option>MECH</option>
                                              </select>
                                              </td>';
                                        echo '<td>' .$row["year"].'</td>';
                                        echo '<td>' .$row["semester"].'</td>';
                                      }
                                    }
                                    else 
                                    {
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
                            