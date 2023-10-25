<?php
$host = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'website';
$mysqli = mysqli_connect($host, $username, $pass, $dbname);
// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    //echo "Connected successfully"; echo '<br>';
}
mysqli_set_charset($mysqli,"utf8");
//thiết lập kết nối cơ sở dữ liệu và đảm bảo rằng cơ sở dữ liệu sử dụng mã ký tự UTF-8 để xử lý dữ liệu.
