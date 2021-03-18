<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'nagax21');
    define('DB_PASSWORD', 'Fiorenasitalia1234');
    define('DB_NAME', 'test_db');
    
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>