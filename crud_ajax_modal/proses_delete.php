<?php
	include "koneksi.php";
	$modal_id=$_POST['modal_id'];
	$query=mysqli_query($koneksi,"Delete FROM modal WHERE modal_id='$modal_id'");
	
	
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