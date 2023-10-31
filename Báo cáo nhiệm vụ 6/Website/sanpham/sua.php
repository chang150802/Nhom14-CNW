<link rel="stylesheet" href="./assets/css/sua.css">
<?php include "trangchu/hearder.php"; ?>
<?php 
// Kết nối với MySQL
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
$pro_id=$_GET["pro_id"];
$sql_up = "SELECT * FROM products where id=$pro_id";
$query_up=mysqli_query($connect,$sql_up);
$row_up=mysqli_fetch_array($query_up);
if(isset($_POST["sbm"])){
        $product_name = $_POST['product_name'];
        if($_FILES['product_img_name']['name'] == ''){
            $product_img_name=$row_up['product_name'];
        }else{
            $product_img_name=$row_up['product_name'];
        }
        
        $price = $_POST["price"];
        $product_desc = $_POST["product_desc"];
        $L = $_POST["L"];
        $PS = $_POST["PS"];

        $sql = "UPDATE products SET product_name = '$product_name',product_img_name = '$product_img_name',price = '$price',product_desc = '$product_desc',L = '$L',PS = '$PS' WHERE id = '$pro_id'";
        $query = mysqli_query($connect,$sql);
 // Kiểm tra kết quả
if ($sql) {
    echo "Sửa dữ liệu thành công";
  } else {
    echo "Sửa dữ liệu thất bại";
  }
    
   }?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa sản phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="product_name" class="form-control1" required value="<?php echo $row_up['product_name'];?>">
                    <br>
                </div>

                <div class="form-group">
                    <label for="">Ảnh</label>
                    <input type="file" name="product_img_name" class="form-control2"></br>
                </div>

                <div class="form-group">
                    <label for="">Mô tả</label>
                    <input type="text" name="product_desc" class="form-control3" required value="<?php echo $row_up['product_desc'];?>">
                    <br>
                </div>

                <div class="form-group">
                    <label for="">Giá</label>
                    <input type="number" name="price" class="form-control4" required value="<?php echo $row_up['price'];?>"><br>
                </div>

                <div class="form-group">
                    <label for="">Thông số xe (L)</label>
                    <input type="number" name="L" class="form-control5" required value="<?php echo $row_up['L'];?>"><br>
                </div>

                <div class="form-group">
                    <label for="">Mã lực (PS)</label>
                    <input type="number" name="PS" class="form-control6" required value="<?php echo $row_up['PS'];?>"><br>
                </div>
                <button name="sbm" class="btn" type="submit">Sửa</button>
                
            </form>
        </div>
    </div>
</div>
<?php include "trangchu/footer.php"; ?>

