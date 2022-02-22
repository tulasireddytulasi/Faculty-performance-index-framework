<?php
	
	header('Content-type: application/json; charset=UTF-8');
	
	$response = array();
	
	if ($_POST['delete']) {
		
		require_once 'dbconfig1.php';
		$score = 10;
		$pid = intval($_POST['delete']);
		

		$query = "UPDATE  users set score = '$score' WHERE id=:pid";
		$stmt = $DBcon->prepare( $query );
		$stmt->execute(array(':pid'=>$pid));
		
		if ($stmt) {
			$response['status']  = 'success';
			$response['message'] = 'Approved Successfully ...';
		} else {
			$response['status']  = 'error';
			$response['message'] = 'Unable to Approve ...';
		}
		echo json_encode($response);
	}