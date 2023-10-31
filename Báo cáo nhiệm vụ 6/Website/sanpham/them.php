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

if(isset($_POST["sbm"])){
        $product_name = $_POST['product_name'];
        $product_img_name = $_FILES["product_img_name"]["name"];
        $product_img_name_tmp = $_FILES["product_img_name"]["tmp_name"];
        $price = $_POST["price"];
        $product_desc = $_POST["product_desc"];
        $L = $_POST["L"];
        $PS = $_POST["PS"];

        $sql = "INSERT INTON products (product_name,product_img_name,price,product_desc,L,PS)
        VALUES ('$product_name','$product_img_name', '$price','$product_desc','$L','$PS')";
        $result = mysqli_query($connect, $sql);
 // Kiểm tra kết quả
if ($sql) {
    echo "Thêm dữ liệu thành công";
  } else {
    echo "Thêm dữ liệu thất bại";
  }
    header("location: xem_ds_sp.php?page_layout=danhsach");
   }?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm sản phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="product_name" class="form-control" required>
                    <br>
                </div>

                <div class="form-group">
                    <label for="">Ảnh</label>
                    <input type="file" name="product_img_name" ></br>
                    
                </div>

                <div class="form-group">
                    <label for="">Mô tả</label>
                    <input type="text" name="product_desc" class="form-control"required>
                    <br>
                </div>

                <div class="form-group">
                    <label for="">Giá</label>
                    <input type="number" name="price" class="form-control"required><br>
                </div>

                <div class="form-group">
                    <label for="">Thong số xe (L)</label>
                    <input type="number" name="L" class="form-control"required><br>
                </div>

                <div class="form-group">
                    <label for="">Mã lực (PS)</label>
                    <input type="number" name="PS" class="form-control"required><br>
                </div>
                <button name="sbm" class="btn btn-success" type="submit" >Thêm</button>
                
            </form>
        </div>
    </div>
</div>