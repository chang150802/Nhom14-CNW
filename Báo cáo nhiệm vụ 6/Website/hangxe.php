<?php 
   session_start();
   include_once("ketnoi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hãng xe - PLCDREAM SHOWROOM</title>
    <link rel="shortcut icon" type="image/x-icon" href="./img/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/trangchu.css">
    <link rel="stylesheet" href="./assets/css/hangxe.css">

</head>

<body>
    <!-- 1. header-->
    <?php include "trangchu/hearder.php";?>    
    <div class="menu">
        <?php
            $results = $mysqli->query("SELECT * FROM brand ORDER BY id ASC");
            $obj = $results->fetch_object();
        ?>
        <div class="car-menu">
            <button class="active" type-car="all">All car</button>
            <button type-car="Audi">Audi</button>
            <button type-car="Ford Ranger">Ford Ranger</button>
            <button type-car="Huyndai">Huyndai</button>
            <button type-car="KIA">KIA</button>
            <button type-car="Lamborghini">Lamborghini</button>
            <button type-car="Land Rover">Land Rover</button>
            <button type-car="Mazda">Mazda</button>
            <button type-car="Merceder">Merceder</button>
            <button type-car="Toyota">Toyota</button>
        </div>
        <div class="car-list">
            <?php
                $results = $mysqli->query("SELECT * FROM brand ORDER BY id ASC");
		        if ($results) { 
			        //fetch results set as object and output HTML
			        while($obj = $results->fetch_object())
			        {
                    ?>
                    <?php
                        $array = [];
                        $brand = $obj->brand_name;
                        switch($brand){
                            case 'Audi':
                                echo ''.$obj->brand_name='Audi';
                                break;
                            case 'Ford Ranger':
                                echo ''.$obj->brand_name='Ford Ranger';
                                break;
                            default:
                                
                                break;
                        }              
                    ?>
                    <div class="car-item" type-car="All car">
                        <img src="xehot/<?php echo  $obj->brand_img_name;?>" alt="">
                    </div>
                    <?php
                    }
                }
                ?>
        </div>
    </div>
    <script src="./assets/js/hangxe.js"></script>
    
</body>
</html>
