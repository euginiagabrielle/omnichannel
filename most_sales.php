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
    <title>E-commerce with Most Sales</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .header {
            background: linear-gradient(to right, #465892, #2d3a5f);
            height: 110px;
        }
        .header1 {
            display: flex;
            justify-content: center;
            color: #ffffff;
        }
        #btn-subs {
            background-color: #465892;
            color: #fff3e3;
        }
        #btn-subs:hover {
            background-color: #2d3a5f;
            color: #fff3e3;
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
                        <a class="nav-link" href="#">Order</a>
                    </li>
                    <li class="nav-item dropdown" style='margin-left: 5px;'>
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <li><a class="dropdown-item" href="logout.php?logout">Logout</a></li>
                </ul>
            </div>
    </nav>
    
    <div class="report">
        <div class="header">
            <div class="header1">
                <h1 style="font-weight: bold; margin-top: 30px;">E-commerce with the Most Sales</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="productContainer"></div>
    </div>

   <!-- Modal Subscription -->
   <div class="modal fade" id="subscriptionModal" tabindex="-1" aria-labelledby="subscriptionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="subscriptionModalLabel" style="font-weight: bold">Unlock Exclusive Insights with Our Subscription</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h3 style="margin-bottom: 20px;">Choose Your Subscription Plan:</h3>
                    <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: bold">3 Months</h5>
                            <p class="card-text">Get access for 3 months and save!</p>
                            <p class="card-text">Price: Rp 299.000</p>
                            <button type="button" class="btn btn-block" id="btn-subs">Subscribe Now</button>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: bold">6 Months</h5>
                            <p class="card-text">Get access for 6 months and save even more!</p>
                            <p class="card-text">Price: Rp 499.000</p>
                            <button type="button" class="btn btn-block" id="btn-subs">Subscribe Now</button>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: bold">12 Months</h5>
                            <p class="card-text">Get access for a whole year and save the most!</p>
                            <p class="card-text">Price: Rp 799.000</p>
                            <button type="button" class="btn btn-block" id="btn-subs">Subscribe Now</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- JavaScript -->
    <script>
       // Fungsi untuk memuat produk terlaris dengan AJAX
       function loadMostSales() {
            $.ajax({
                url: 'generate_most_sales.php',
                type: 'GET',
                success: function(response) {
                    $('#productContainer').html(response);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }

        // Memanggil fungsi saat halaman dimuat
        $(document).ready(function() {
            loadMostSales();
        });
    </script>
</body>
</html>
