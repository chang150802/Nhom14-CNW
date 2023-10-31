<?php 
   session_start();
   include_once("ketnoi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - PLCDREAM SHOWROOM</title>
    <link rel="shortcut icon" type="image/x-icon" href="./img/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/trangchu.css">

</head>

<body>
   <!--1.header-->
    <?php
     include "trangchu_ad/hearder.php";
    //2.Slider
     include "trangchu_ad/Slider.php";
    //3.Content 
    include "trangchu_ad/Content.php";
    //4.footer
    include "trangchu_ad/footer.php";
        ?>
    <script src="./assets/js/slider.js"></script>
</body>
</html>
