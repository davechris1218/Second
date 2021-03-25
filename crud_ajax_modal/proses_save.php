<?php
include "koneksi.php";
$modal_name = $_POST['modal_name'];
$description = $_POST['description'];
$query = mysqli_query($koneksi,"INSERT INTO modal (modal_name,description) VALUES ('$modal_name','$description')");

if($query)
{
	header('Content-Type: application/json');
	$content = file_get_contents('http://localhost/php7/modalajax/ajax_data.php', true);
	$data = array('status'=>'success', 'data'=> $content);
	echo json_encode($data);
}
else
{
	$data = array('status'=>'failed', 'data'=> null);
	echo json_encode($data);
}

?>