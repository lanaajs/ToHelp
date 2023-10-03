<?php 
    $servername = "localhost";
    $username = "root";
    $password = "2004";
    $db_name = "tohelpdb";  
    $conn = new mysqli($servername, $username, $password, $db_name, 3306);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "";
?>