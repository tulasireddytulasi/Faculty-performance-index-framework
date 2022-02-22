<?php

include 'dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$fid = $_POST['fid'];

// if($subject!="select")

if($fid!="select"){

for($i=1;$i<=20;$i++)
{
	if(isset($_POST['q'.$i]))
	{
		$q[$i]=$_POST['q'.$i];
	}
	else
	{
		$q[$i]=0;
	}
}

	
	$sql ="INSERT INTO hodfeedback (fid, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19, q20) VALUES('$fid', '$q[1]', '$q[2]', '$q[3]', '$q[4]', '$q[5]', '$q[6]', '$q[7]', '$q[8]', '$q[9]', '$q[10]', '$q[11]', '$q[12]', '$q[13]', '$q[14]', '$q[15]', '$q[16]', '$q[17]', '$q[18]', '$q[19]','$q[20]')" ;
mysqli_query($conn,$sql);

header('Location: feedback.php');

echo "Given Feedback";
}else{

	echo "Please Select Faculty";
	// header('Location: feedback.php');
}

?>