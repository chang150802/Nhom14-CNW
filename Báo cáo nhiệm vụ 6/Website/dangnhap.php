<?php
    if(isset($_POST['ok'])){
        $u=$p="";
        if($_POST['username'] == NULL){
            echo "Please enter your username <br/>";
        }else{
            $u=$_POST['username'];
        }
        if($_POST['password'] == NULL){
            echo "Please enter your password <br/>";
        }else{
            $p=$_POST['password'];
        }
        if($u && $p){
            //Kết nối csdl
            $mysqli = mysqli_connect('localhost', 'root', '', 'website') or die("Connection failed: " . mysqli_connect_error());
            $sql = ("SELECT * FROM users where username='".$u."' and password='".$p."' " );
            //kiểm tra tài khoản và mật khẩu có hợp lệ không
            $result = $mysqli->query($sql);
            $num_rows = mysqli_num_rows($result);
            if($num_rows == 0){
                echo "Username or password is not correct, please try again!";
            }else{
                $row=mysqli_fetch_array($result);
                session_start();
                $array = [];
                $_SESSION['id'] = $row->$array['id'];
                $_SESSION['level'] = $row->$array['level'];
                header('Location: main_ad.php');
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Đăng nhập tài khoản</title>
    <link rel="stylesheet" href="./assets/css/form.css">
</head>
<body>
    <div class="container">
        <h1>ĐĂNG NHẬP</h1>
        <form method="post" action="dangnhap.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input name="username" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" class="form-control" required>
            </div>

            <button class="btn" name="ok">Login</button>
            <p class="text">Don't have an account? <a href="dangki.php">Register</a> </p>
        </form>
    </div>
    <script scr="./assets/js/form.js"></script>
</body>
</html>