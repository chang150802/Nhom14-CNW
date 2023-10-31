<?php
$host = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'website';
$connect = mysqli_connect($host, $username, $pass, $dbname);
// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    //echo "Connected successfully"; echo '<br>';
}
mysqli_set_charset($connect,"utf8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem danh sách sản phẩm - PLCDREAM SHOWROOM</title>
    <link rel="shortcut icon" type="image/x-icon" href="./img/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/trangchu.css">
 <?php 
    if(isset($_GET['page_layout'])) {
        switch($_GET['page_layout']) {
            case 'danhsach':
                require_once('sanpham/danhsach.php');
                break;
            case'them':
                require_once('sanpham/them.php');
                break;
                case'sua':
                    require_once('sanpham/sua.php');
                    break;
                    case'xoa':
                        require_once('sanpham/xoa.php');
                        break;
            default:
            require_once('sanpham/danhsach.php');
            break;}
    }else{
        require_once('sanpham/danhsach.php');
    }
 ?>
</head>
