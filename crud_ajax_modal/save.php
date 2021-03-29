<?php
    include "connect.php";
    $modalName = $_POST['modal_name'];
    $description = $_POST['description'];
    $query = mysqli_query($connect,"INSERT INTO modal (modal_name,description) VALUES ('$modalName','$description')");

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