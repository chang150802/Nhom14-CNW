<?php
    session_start();
    if(isset($_SESSION['id']) &&  $_SESSION['level'] == 2){
        //đăng nhập thành công
        if(isset($_POST['adduser'])){
            $u = $p ="";
            if($_POST['username'] == NULL){
                echo "Vui lòng nhập Username! <br/>";
            }else{
                $u = $_POST["username"];
            }
            if($_POST['password'] != $_POST['re-password']){
                echo "Password và Re-Password không chính xác! <br/>";
            }else{
                if($_POST["password"] == NULL){
                    echo "Vui lòng nhập Password! <br/>";
                }else{
                    $p = $_POST["password"];
                }
            }
            $l=$_POST['level'];
            if($u & $p & $l){
                //Kết nối csdl
                $mysqli = mysqli_connect('localhost', 'root', '', 'website') or die("Connection failed: " . mysqli_connect_error());
                $sql = ("SELECT * FROM users where username='".$u."' ");
                $result = $mysqli->query($sql);
                $num_rows = mysqli_num_rows($result);
                if($num_rows != ""){
                    echo "Username đã tồn tại! <br/>";
                }else{
                    $sql2 = "INSERT INTO user (username, password, level) VALUES ('".$u."', '".$p."', '".$l."')";
                    $result2 = $mysqli->query($sql2);
                    echo "Đã thêm tài khoản thành công!";
                    header("location: dangnhap.php");
                }
            }
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Đăng kí tài khoản</title>
    <link rel="stylesheet" href="./assets/css/form.css">
</head>
<body>
    <div class="container">
        <h1>ĐĂNG KÍ TÀI KHOẢN</h1>
        <form method="post" action="dangki.php">
            <div class="form-group">
                <label for="username">Level</label>
                <select name="username" class="form-control">
                    <option value="1">Admin</option>
                </select>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Re-Password</label>
                <input name="re-password" class="form-control" required>
            </div>
            <button class="btn" name="adduser">Add account</button>
        </form>
    </div>
    <script scr="./assets/js/form.js"></script>
</body>
</html>
