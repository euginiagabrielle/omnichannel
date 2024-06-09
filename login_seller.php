<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="login_style.css">
    <?php
        if (@$_GET['Empty']) {
            echo "<script>alert('" . $_GET['Empty'] . "');</script>";
        }
        if (@$_GET['Invalid']) {
            echo "<script>alert('" . $_GET['Invalid'] . "');</script>";
        }
    ?>
</head>
<body>
    <div class="wrapper">
        <div class="form">
          <div class="title">
            <img id="logo2" src="logo.png" alt="logo">
          </div>
          <div class="card-body">
            <form action="process_login.php" method="post">
                <p>Username</p>
                <input type="text" name="Username" class="form-control mb-3">
                <p>Password</p>
                <input type="password" name="Password" class="form-control mb-3">
                <div class="d-grid">
                    <button class="btn btn-dark mt-3" name="Login">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>