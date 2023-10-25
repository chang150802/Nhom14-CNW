<!-- trang liệt kê các sản phẩm-->
<?php 
   session_start();
   include_once("ketnoi.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm - PLCDREAM SHOWROOM</title>
    <link rel="shortcut icon" type="image/x-icon" href="./img/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/trangchu.css">
    <link rel="stylesheet" href="./assets/css/sanpham.css">
</head>

<body>
    <!-- 1. header-->
    <?php include "trangchu/hearder.php";?>
    <!-- Sản phẩm-->
    <main class="container">
        <?php
            $results = $mysqli->query("SELECT * FROM products ORDER BY id ASC");
            $obj = $results->fetch_object();
        ?>
        <div class="row">
            <?php 
                $results = $mysqli->query("SELECT * FROM products ORDER BY id ASC");
		        if ($results) { 
			        //fetch results set as object and output HTML
			        while($obj = $results->fetch_object())
			        {
			        ?> 
                    <!--xe-->
		            <div class="xe">
                        <div class="sanpham">
                            <div class="img">
                                <a href="">
                                    <img src="xe/<?php echo  $obj->product_img_name;?>">
                                </a>
                                <div class="thongsoanh">
                                    <ul>
                                        <li><?php echo $obj->L; ?> L</li>
                                        <li><?php echo $obj->PS; ?> PS</li>
                                    </ul>
                                </div>
                                <div class="click">
                                    <a class="clickthemvaogiohang" title="Them vao gio hang" href="#">
                                        <i style="font-size: 24px" class="fa fa-shopping-cart"></i></a>
                                    <a class="clickthemvaoyeuthich" title="Them vao yeu thich" href="trangchu.html">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a class="clickxemnhanh" title="Xem nhanh" href="tintuc.html">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <div class="chitietsp">
                                    <div class="chitietsp1">
                                        <h3><a href="gioithieu.html"><?php echo $obj-> product_name?></a></h3>
                                    </div>
                                    <div class="gia">
                                        <span><?php echo $obj -> price?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
	                <?php 
			        } 
		        }
	        ?> 
        </div>
    </main>

    <?php include "trangchu/footer.php"; ?>
</body>
</html>