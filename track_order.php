<?php
    session_start();
    if(isset($_SESSION['Username']))
    {
    }
    else
    {
        header("location:login_seller.php");
    }
?>
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
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .header {
            background-color: #546da6;
            height: 200px;
            width: 100%;
        }
        .header1 {
            display: flex;
            justify-content: center;
            color: #ffffff;
        }
        .filterperiod {
            margin: 30px 400px 20px 400px;
        }
        .dynamic-inputs {
            display: flex;
            justify-content: center;
            margin: 30px 50px 30px 50px;
        }
        #generate-btn {
            /* margin-top: 24px; */
            color: #fff3e3;
            background-color: #6a93d9;
        }
        #generate-btn:hover {
            color: #fff3e3;
            background-color: #465892;
        }
        .table-container {
            margin: 30px 50px 30px 50px;
        }
        .filters{
            display: flex;
            justify-content: space-evenly;
            margin-left: 20px;
            margin-right: 20px;
            /* padding: 5px 5px; */
            margin-top: 10px;
        }
        .filter {
            width: 80%;
        }
        .header{
            text-align: center;
        }
        .arrow *{
            margin-left: -100px;
            width: 35px;
            height: 35px;
            fill: #fff3e3;
        }
        .rotate{
            -moz-transition: all 0.25s linear;
            -webkit-transition: all 0.25s linear;
            transition: all 0.25s linear;
        }

        .rotate.down{
            -ms-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }
        .report{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .cardss{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .cardss * {
            margin: 10px 10px;
            padding: 5px 5px;
        }
    </style>
</head>


<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" style='margin-left: 10px; margin-right: 10px;'>
            <img src="logo.png" alt="adsiomni-logo" style='width: 28px; height: 28px; margin-right: 10px;'>
            <a class="navbar-brand" href="#" style='font-size: 30px; font-weight: bolder'>Adsiomni</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown" style="font-size: 16px;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Product</a>
                    </li>
                    <li class="nav-item"  style='margin-left: 5px;'>
                        <a class="nav-link active" href="order.php">Order</a>
                    </li>
                    <li class="nav-item dropdown" style='margin-left: 5px;'>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Reports
                        </a>
                        <ul class="dropdown-menu" style='font-size: 16px;'>
                            <li><a class="dropdown-item" href="periodic_reports.php">Periodic Sales Reports</a></li>
                            <li><a class="dropdown-item" href="best_selling.php">Best selling product</a></li>
                            <li><a class="dropdown-item" href="most_sales.php">E-commerce with the most sales</a></li>
                        </ul>
                    </li>
                    <li class="nav-item" style='margin-left: 5px;'>
                        <a class="nav-link" href="#">Subscription</a>
                    </li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle fs-5"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="login_seller.php">Logout</a></li>
                </ul>
            </div>
    </nav>
    <div class="report">
        <div class="header">
            <div class="header1">
                <h1 style="font-weight: bold; margin-top: 30px;">Track Order</h1>
            </div>
        </div>
        <div class="cardss">
            <div class="table-container" id="table-container"></div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Pengirim</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Bejo - Malang, Jawa Timur</h6>
                    <h5 class="card-title">Tujuan</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Kos - Surabaya, Jawa Timur</h6>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">4 Jun 4:18 pm</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Paket diterima di pusat</h6>
                    <h5 class="card-title">5 Jun 12:10 pm</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Pengecekan Pengiriman</h6>
                    <h5 class="card-title">5 Jun 9:30 pm</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Paket telah diterima oleh Laura</h6>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            
        });
    </script>
</body>
</html>