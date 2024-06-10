<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            outline: none;
            color: #5c4b51;
        }

        body{
            height: 100%;
            background: linear-gradient(to right, #465892, #2d3a5f);
        }

        .wrapper{
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form{
            width: 425px;
            height: auto;
            background: #fff;
            padding: 35px 50px;
            border-radius: 2px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.5);
        }

        .form .title{
            text-align: center;
            margin-bottom: 20px;
            font-weight: 700;
            font-size: 24px;
        }

        .form .input_wrap{
            margin-bottom: 20px;
            width: 325px;
            position: relative;
        }

        .form .input_wrap:last-child{
            margin-bottom: 0;
        }

        .form .input_wrap label{
            display: block;
            margin-bottom: 5px;
        }

        .form .input_wrap input{
            padding: 15px;
            width: 100%;
            border: 1px solid transparent;
            font-size: 16px;
            border-radius: 3px;
        }

        .form .input_wrap .input{
            background: #f5f4f4;
            padding-right: 35px;
        }


        .form .input_wrap .input:focus{
            border-color: #244c8c;
        }

        .form .input_wrap .input_field{
            position: relative;
        }

        .form .input_wrap .btn{
            letter-spacing: 3px;
            background: #546da6;
            color: #2f2f2f;
            cursor: pointer;
        }

        .form .input_wrap .btn:hover{
            background: #465892;
            color: #ffffff;
            cursor: pointer;
        }

        .form .input_wrap .error_msg{
            font-size: 15px;
            margin-bottom: 5px; 
            color: #f74040;
            display: none;
        }

        #logo2 {
                width: 40px; 
                height: 40px;
        }
    </style>
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
