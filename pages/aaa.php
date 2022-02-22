
<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password,'ainsert');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
} 
$sql ="select * from sample" ;

$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
	
	for ($i=0; $i < mysqli_num_rows($result); $i++) { 
	# code...
    $row = mysqli_fetch_array($result);
   
     echo '<html>';
    echo '<head></head><body>';
    echo '<table border="2px">';
    echo '<tr><th>Name</th> <th>Roll No</th><th>Name 1</th><th>Name 2</th></tr>';
    echo '<tr><td>'.$row['name'].'</td>';
     echo '<td>'.$row['rollno'].'</td>';
      echo '<td>
      <select>';
       $results = mysqli_query($conn, $sql);  

      while ($rows = mysqli_fetch_array($results)){
echo "<option value='". $rows['name'] ."'>" .$rows['name'] ."</option>" ;
}

    echo  '</select>';




    echo  '</td> ';
     echo '<td>
      <select>';
       $results = mysqli_query($conn, $sql);  

      while ($rows = mysqli_fetch_array($results)){
echo "<option value='". $rows['name'] ."'>" .$rows['name'] ."</option>" ;
}

    echo  '</select>';




    echo  '</td></tr>';
    echo "</table></body></html>";

}





}

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
<!--  <a href="/pivotalsoft/pages/roles.php">See the list</a> -->