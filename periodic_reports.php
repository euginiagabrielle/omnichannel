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
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .header {
            background-color: #546da6;
            height: 200px;
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
            margin-top: 24px;
            color: #fff3e3;
            background-color: #546da6;
        }
        #generate-btn:hover {
            color: #fff3e3;
            background-color: #465892;
        }
        .table-container {
            margin: 30px 50px 30px 50px;
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
                        <a class="nav-link" href="order.php">Order</a>
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
                    <li><a class="dropdown-item" href="login_seller.php">Logout</a></li>
                </ul>
            </div>
    </nav>
    <div class="report">
        <div class="header">
            <div class="header1">
                <h1 style="font-weight: bold; margin-top: 30px;">Periodic Sales Reports</h1>
            </div>
            <div class="filterperiod">
                <select class="form-select" id="period-select" aria-label="Default select example">
                    <option selected>Select Period</option>
                    <option value="1">Daily</option>
                    <option value="2">Monthly</option>
                    <option value="3">Yearly</option>
                </select>
                <div id="dynamic-inputs"></div>
                <button id="generate-btn" class="btn">Generate Report</button>
            </div>
        </div>
        <div class="table-container" id="table-container"></div>
    </div>

    <script>
        $(document).ready(function() {
            $('#generate-btn').hide();

            $('#period-select').change(function() {
                var period = $(this).val();
                var dynamicInputs = $('#dynamic-inputs');
                var generateBtn = $('#generate-btn');

                dynamicInputs.empty();

                if (period == '1') { // Daily
                    dynamicInputs.append('<label for="start-date">Start Date:</label>');
                    dynamicInputs.append('<input type="date" id="start-date" class="form-control">');
                    dynamicInputs.append('<label for="end-date">End Date:</label>');
                    dynamicInputs.append('<input type="date" id="end-date" class="form-control">');
                } else if (period == '2') { // Monthly
                    dynamicInputs.append('<label for="month">Month:</label>');
                    dynamicInputs.append('<select id="month" class="form-select">'+
                        '<option value="1">January</option>'+
                        '<option value="2">February</option>'+
                        '<option value="3">March</option>'+
                        '<option value="4">April</option>'+
                        '<option value="5">May</option>'+
                        '<option value="6">June</option>'+
                        '<option value="7">July</option>'+
                        '<option value="8">August</option>'+
                        '<option value="9">September</option>'+
                        '<option value="10">October</option>'+
                        '<option value="11">November</option>'+
                        '<option value="12">December</option>'+
                    '</select>');
                    dynamicInputs.append('<label for="year">Year:</label>');
                    dynamicInputs.append('<input type="number" id="year" class="form-control" min="2000" max="2100">');
                } else if (period == '3') { // Yearly
                    dynamicInputs.append('<label for="year">Year:</label>');
                    dynamicInputs.append('<input type="number" id="year" class="form-control" min="2000" max="2100">');
                }

                generateBtn.show();
            });

            $('#generate-btn').click(function() {
                var period = $('#period-select').val();
                var data = { period: period };

                if (period == '1') { // Daily
                    data.start_date = $('#start-date').val();
                    data.end_date = $('#end-date').val();
                } else if (period == '2') { // Monthly
                    data.month = $('#month').val();
                    data.year = $('#year').val();
                } else if (period == '3') { // Yearly
                    data.year = $('#year').val();
                }

                $.ajax({
                    type: "POST",
                    url: "generate_report.php",
                    data: data,
                    dataType: "json",
                    success: function(response) {
                        var tableHTML = '<table class="table table-bordered">';
                        tableHTML += '<thead><tr><th>ID Pesanan</th><th>Nama Produk</th><th>Harga</th></tr></thead>';
                        tableHTML += '<tbody>';

                        for (var i = 0; i < response.data.length; i++) {
                            tableHTML += '<tr>';
                            tableHTML += '<td>' + response.data[i].id_pesanan + '</td>';
                            tableHTML += '<td>' + response.data[i].nama_produk + '</td>';
                            tableHTML += '<td>' + response.data[i].harga + '</td>';
                            tableHTML += '</tr>';
                        }

                        tableHTML += '</tbody></table>';

                        var totalPenjualanHTML = '<h4>Total Penjualan: ' + response.total_penjualan + '</h4>';

                        $('#table-container').html(tableHTML + totalPenjualanHTML);
                    },
                    error: function(error) {
                        console.log("Error fetching data: ", error);
                        alert("Data not found");
                    }
                });
            });
        });
    </script>
</body>
</html>
