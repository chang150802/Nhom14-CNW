<link rel="stylesheet" href="./assets/css/danhsach.css">
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
$sql = "SELECT * FROM products ";
$query = mysqli_query($connect, $sql);
?>
<?php include "trangchu/hearder.php"; ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh Sách Sản Phẩm</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh sản phẩm </th>
                        <th>Giá</th>
                        <th>Mô tả</th>
                        <th>Thông số xe (L)</th>
                        <th>Mã lực (PS)</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
</tr>
                </thead>
                <tbody>
                    <?php 
                        $i=1;
                        while ($row = mysqli_fetch_assoc($query)) {?>
                        <tr>
                        <td style="width: 40px;"><?php echo $i++;?></td>
                        <td><?php echo $row['product_name']?></td>
                        <td>
                            <img src="xe/<?php echo $row['product_img_name'];?>">
                            </td>
                        <td style="width: 150px"><?php echo $row['price']?></td>
                        <td style="width: 460px;"><?php echo $row['product_desc']?></td>
                        <td style="width: 100px;"><?php echo $row['L']?></td>
                        <td style="width: 100px;"><?php echo $row['PS']?></td>
                        <td style="width: 60px">
                        <a href="xem_ds_sp.php?page_layout=sua&pro_id=<?php echo $row['id'];?>">Sửa</a>
                        </td>
                        <td style="width: 60px;">
                        <a href="xem_ds_sp.php?page_layout=xoa&pro_id=<?php echo $row['id'];?>">Xoá</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a class="btn btn-primary" href="xem_ds_sp.php?page_layout=them">Thêm mới</a>
        </div>
    </div>
 </div>
