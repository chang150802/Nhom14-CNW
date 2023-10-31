<?php 
    $pro_id = $_GET['pro_id'];
    $sql = "DELETE FROM products where id = $pro_id";
    $query = mysqli_query($connect, $sql);
    header('location: xem_ds_sp.php?page_layout=danhsach');
?>
