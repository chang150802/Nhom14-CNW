<!-- 3.Content -->
    <div class="content">
        <!-- Sản phẩm -->
        <p class="product-title">Sản phẩm nổi bật</p>
        <?php
            $results = $mysqli->query("SELECT * FROM hot_products ORDER BY id ASC");
            $obj = $results->fetch_object();
        ?>
        <div class="products">
            <?php
                $results = $mysqli->query("SELECT * FROM hot_products ORDER BY id ASC");
		        if ($results) { 
			        //fetch results set as object and output HTML
			        while($obj = $results->fetch_object())
			        {
                    ?>
                    <div class="product-grid">
                        <div class="product-box">
                            <div style="overflow: hidden;">
                                <div class="product-box-img">
                                    <img src="xehot/<?php echo  $obj->product_img_name;?>" alt="" class="default">
                                    <img src="xehot/<?php echo  $obj->product_img_name;?>" alt="" class="hover">
                                </div>
                            </div>
                            <div class="product-box-title">
                                <p><?php echo $obj-> product_name?></p>
                                <p><?php echo $obj-> color?></p> 
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <p><b>$ <?php echo $obj -> price?></b></p>
                            </div>
                            <div class="product-icon">
                                <div><i class="fa-solid fa-search "></i></div>
                                <div><i class="fa-regular fa-heart"></i></div>
                                <div><i class="fa-solid fa-cart-shopping"></i></div>
                            </div>
                        </div>
                        
                    </div>
                    <?php
                    }
                }
            ?>
        </div>
    </div>