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
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .report {
            margin-top: 30px;
        }
        .header1 {
            display: flex;
            justify-content: center;
        }
        .filterperiod {
            margin: 20px 400px 20px 400px;
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
            <a><i class="bi bi-person-circle fs-3" style='justify-content: right;'></i></a>
        </div>
    </nav>
    
</body>
</html>