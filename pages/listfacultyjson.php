


                                    <?php
                                   include 'dbconfig.php';

                                    // Create connection   and id = {$_POST['user_id']}
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    } 

                                    //$gets = $_POST['user_id'];

                                    $sql = "SELECT * FROM userinfo where role='Faculty' ";

                                    $result = mysqli_query($conn,$sql);

                                    $data = array();

                                    while ($row = mysqli_fetch_assoc($result)) 
                                    {
                                       //  $data['status'] = 'ok';
                                        $data[] = $row;
                                    }


                                   echo json_encode($data);

                              

                                    ?>
                                  

