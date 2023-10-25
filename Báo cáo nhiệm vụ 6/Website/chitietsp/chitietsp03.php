<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <link href="assets/css/chi-tiet-san-pham.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/trangchu.css">
</head>

<body>
    <?php include "trangchu/hearder.php";?>
    <main class="container">

        <!-- Left Column / Headphones Image -->
        <div class="left-column">
            <img data-image="black" class="active" src="xe/Hyundai Accent  đen.jpg" alt="">
            <img data-image="red" src="xe/Hyundai Accent  đỏ.jpg" alt="">
            <img data-image="white" src="xe/Hyundai Accent trắng.jpg" alt="">
            <img data-image="blue" src="xe/Hyundai Accent xanh dương.jpg" alt="">
            <img data-image="gray" src="xe/Hyundai Accent xám.jpg" alt="">
        </div>


        <!-- Right Column -->
        <div class="right-column">

            <!-- Product Description -->
            <div class="product-description">
                <span>Ô tô</span>
                <h1>Hyndai Accent</h1>
                <p>Hyndai Accent Hyundai Accent phiên bản mới có thiết kế uyển chuyển, sắc sảo, hiện đại và không kém
                    phần thể thao.Sở hữu khoang nội thất rộng rãi, hoàn thiện hơn so với phiên bản cũ. Cốp thông minh,
                    tự động mở khi đến gần chỉ với một thao tác nhấn đơn giản với SmartKey . Được trang bị camera lùi
                    tiêu chuẩn, khả năng cách âm tuyệt vời.Động cơ 1,6l giúp Accent có khả năng vận hành tương đối mạnh
                    mẽ, tiết kiện nhiên liệu..</p>
                <p>Mức tiêu thụ nhiên liệu của Hyundai Accent 2023 mới tại Việt Nam là: 5.58 L / 100KM đến 5.86 L /
                    100KM,and Mức tiêu hao nhiên liệu 2021 Hyundai Accent 1.4 MT Tiêu chuẩn Nhà sản xuất công bố 5.58 L
                    / 100 KM </p>

            </div>

            <!-- Product Configuration -->
            <div class="product-configuration">

                <!-- Product Color -->
                <div class="product-color">
                    <span>Color</span>

                    <div class="color-choose">
                        <div>
                            <input data-image="black" type="radio" id="black" name="color" value="black" checked>
                            <label for="brow"><span></span></label>
                        </div>
                        <!--div>
                            <input data-image="red" type="radio" id="red" name="color" value="red">
                            <label for="red"><span></span></label>
                        </div-->
                        <div>
                            <input data-image="white" type="radio" id="white" name="color" value="white">
                            <label for="white"><span></span></label>
                        </div>
                        <div>
                            <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                            <label for="blue"><span></span></label>
                        </div>
                        <div>
                            <input data-image="gray" type="radio" id="gray" name="color" value="gray">
                            <label for="gray"><span></span></label>
                        </div>
                    </div>

                </div>

                <!-- Cable Configuration -->
                <!--div class="cable-config">
                    <span>Cable configuration</span>

                    <div class="cable-choose">
                        <button>Straight</button>
                        <button>Coiled</button>
                        <button>Long-coiled</button>
                    </div>

                    <a href="#">How to configurate your headphones</a>
                </div-->
            </div>

            <!-- Product Pricing -->
            <div class="product-price">
                <span>540 000 000 VNĐ</span>
                <a href="#" class="cart-btn">Add to cart</a>
            </div>
        </div>
    </main>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="assets/js/chi-tiet-san-pham.js" charset="utf-8"></script>
    </main>
    <?php include "trangchu/footer.php";?>
</body>

</html>