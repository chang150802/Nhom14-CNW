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
        <form method="post" action="dangnhap_action.php">
            <div class="form-group">
                <label for="username">Email</label>
                <input name="username" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input name="password" class="form-control" required>
            </div>

            <button class="btn">Login</button>
            <p class="text">Don't have an account? <a href="dangki.php">Register</a> </p>
        </form>
    </div>
    <script scr="./assets/js/form.js"></script>
</body>
</html>