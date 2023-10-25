<?php 
   session_start();
   include_once("ketnoi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ - PLCDREAM SHOWROOM</title>
    <link rel="shortcut icon" type="image/x-icon" href="./img/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/lienhe.css">
    <link rel="stylesheet" href="./assets/css/trangchu.css">

</head>

<body>
    <!-- 1. header-->
    <?php include "trangchu/hearder.php"; ?>
    <!--content-->
    <div class="content">
        <img src="./img/banner1.jpg" alt="">
        <!-- Liên hệ -->
        <div class="contact">
            <div class="contact-title">
                <h2>Thông tin liên hệ </h2>
                <p>Customers? Drop a note!</p>    
            </div>
            <div class="row contact-content">
                <div class="col col-haft contact-info">
                    <p><i class="fa-solid fa-location-dot"></i> Địa chỉ: Văn Quán, Hà Đông, HN</p>
                    <p><i class="fa-solid fa-phone"></i> Điện thoại: 0986205415</p>
                    <p><i class="fa-solid fa-envelope"></i> Email: hau@gmail.com</p>
                </div>
         
                <div class="col col-haft contact-form">
                    <form action="">
                        <div class="row">
                            <div class="col col-haft">
                                <input type="text" name="" placeholder="Name" required id="" class="form-control">
                            </div>
                            <div class="col col-haft">
                                <input type="email" name="" placeholder="Email" required id="" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-8">
                            <div class="col col-full">
                                <input type="text" name="" placeholder="Message" required id="" class="form-control">
                            </div>
                        </div>

                        <div class="form-submit-btn mt-16">
                            <input type="submit" value="SEND">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include "trangchu/footer.php";?>
</body>
</html>
