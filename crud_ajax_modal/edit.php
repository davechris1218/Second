<?php
	include "connect.php";
	$modal_id=$_POST['modal_id'];
	$modal_name = $_POST['modal_name'];
	$description = $_POST['description'];
	$query=mysqli_query($connect,"UPDATE modal SET modal_name = '$modal_name',description = '$description' WHERE modal_id = '$modal_id'");
	
	if($query)
	{
		header('Content-Type: application/json');
		$content = file_get_contents('http://localhost/ajax_data.php', true);
		$data = array('status'=>'success', 'data'=> $content);
		echo json_encode($data);
	}
	else
	{
		$data = array('status'=>'failed', 'data'=> null);
		echo json_encode($data);
	}
?>