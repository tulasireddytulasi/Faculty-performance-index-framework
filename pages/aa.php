
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

if (mysqli_num_rows($result)>0) { ?>
	 <html>
    <head></head><body>
    <table border="2px">
    <tr>
    	<th>Name</th>
    	 <th>Roll No</th>
    	 <th>Name 1</th>
    	 <th>Name 2</th>
    </tr>
    <?php
	for ($i=0; $i < mysqli_num_rows($result); $i++) { 
	# code...
    $row = mysqli_fetch_array($result); ?>
   
    
    <tr><td><?php $row['name'] ?></td>';
        <td><?php $row['rollno'] ?></td>';
     <td>
      <select>
      	<?php
       $results = mysqli_query($conn, $sql);  

      while ($rows = mysqli_fetch_array($results)){ ?>
<option value="<?php $rows['name'] ?>"><?php echo"".$rows['name'] ?></option>
}

    </select>




    </td>
     <td>
      <select><?php
       $results = mysqli_query($conn, $sql);  

      while ($rows = mysqli_fetch_array($results)){ ?>
<option value="<?php $rows['name'] ?>"><?php echo"".$rows['name'] ?></option>
<?php
}
?>
    </select>




    </td></tr>
    </table></body></html>
<?php
}





}

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
<!--  <a href="/pivotalsoft/pages/roles.php">See the list</a> -->