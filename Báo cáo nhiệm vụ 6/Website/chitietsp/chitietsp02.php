<!-- trang liệt kê các sản phẩm-->
<?php
$mysqli = new mysqli("localhost","root","","website");
$conn = mysqli_connect("localhost","root","","website");
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
    <?php include "trangchu/hearder.php" ;?>
  
        
    <main class="container">
    <?php
    $results = $mysqli->query("SELECT * FROM products ORDER BY id ASC");
    $obj = $results->fetch_object();
    ?>

        <!-- Left Column / Headphones Image -->
        <div class="left-column">
            <img data-image="black" class="active" src="xe/Ford Ranger đen.png" alt="">
            <img data-image="white" src="xe/Ford Ranger trắng.png" alt="">
            <img data-image="yellow" src="xe/Ford Ranger vàng.png" alt="">
            <img data-image="blue" src="xe/Ford Ranger xanh dương.png" alt="">
            <img data-image="brown" src="xe/Ford Ranger nâu.png" alt="">
        </div>


        <!-- Right Column -->
        <div class="right-column">

            <!-- Product Description -->
            <div class="product-description">
                <span>Ô tô</span>
                <h1><b><?php echo $obj->product_name; ?></b></h1>
                <p><?php echo $obj->product_desc;?></p>
            </div>

            <!-- Product Configuration -->
            <div class="product-configuration">

                <!-- Product Color -->
                <div class="product-color">
                    <span>Color</span>

                    <div class="color-choose">
                        <div>
                            <input data-image="black" type="radio" id="black" name="color" value="black" checked>
                            <label for="black"><span></span></label>
                        </div>
                        <!--div>
                            <input data-image="white" type="radio" id="white" name="color" value="white">
                            <label for="white"><span></span></label>
                        </div-->
                        <div>
                            <input data-image="yellow" type="radio" id="yellow" name="color" value="yellow">
                            <label for="yellow"><span></span></label>
                        </div>
                        <div>
                            <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                            <label for="blue"><span></span></label>
                        </div>
                        <div>
                            <input data-image="brown" type="radio" id="brown" name="color" value="brown">
                            <label for="brown"><span></span></label>
                        </div>
                    </div>

                </div>

      
            </div>

            <!-- Product Pricing -->
            <div class="product-price">
                <span><?php echo $obj->price;?></span>
                <a href="#" class="cart-btn">Add to cart</a>
            </div>
        </div>
    </main>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="assets/js/chi-tiet-san-pham.js" charset="utf-8"></script>
    </main>
    <?php include"/trangchu/footer.php";?>
</body>

</html>