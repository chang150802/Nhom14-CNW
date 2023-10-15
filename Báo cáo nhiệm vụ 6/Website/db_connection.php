<?php
    $host = 
    $mysqli = new mysqli("localhost","root","","website");

    // Check connection
    if ($mysqli->connect_errno) {
        echo "Kết nối MYSQLi lỗi!" . $mysqli->connect_error;
        exit();
    }   
    echo "Kết nối thành công!" . $mysqli->close();
?>