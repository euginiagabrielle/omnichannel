<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adsi_omni";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $period = $_POST['period'];
    $total_penjualan = 0;

    if ($period == '1') { // Daily
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $sql = "SELECT dp.id_pesanan, dp.nama_produk, dp.harga, SUM(dp.harga) AS total_penjualan
                FROM detail_pesanan dp
                JOIN pesanan p ON dp.id_pesanan = p.id_pesanan
                WHERE DATE(p.tgl_pesanan) BETWEEN '$start_date' AND '$end_date'
                GROUP BY dp.id_pesanan, dp.nama_produk, dp.harga";
    } elseif ($period == '2') { // Monthly
        $month = $_POST['month'];
        $year = $_POST['year'];
        $sql = "SELECT dp.id_pesanan, dp.nama_produk, dp.harga, SUM(dp.harga) AS total_penjualan
                FROM detail_pesanan dp
                JOIN pesanan p ON dp.id_pesanan = p.id_pesanan
                WHERE MONTH(p.tgl_pesanan) = '$month' AND YEAR(p.tgl_pesanan) = '$year'
                GROUP BY dp.id_pesanan, dp.nama_produk, dp.harga";
    } elseif ($period == '3') { // Yearly
        $year = $_POST['year'];
        $sql = "SELECT dp.id_pesanan, dp.nama_produk, dp.harga, SUM(dp.harga) AS total_penjualan
                FROM detail_pesanan dp
                JOIN pesanan p ON dp.id_pesanan = p.id_pesanan
                WHERE YEAR(p.tgl_pesanan) = '$year'
                GROUP BY dp.id_pesanan, dp.nama_produk, dp.harga";
    } else {
        echo "Invalid period selected";
        exit();
    }

    $result = $conn->query($sql);

    $data = array();
    $total_penjualan = 0;

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
            $total_penjualan += $row['total_penjualan'];
        }
    }

    $conn->close();

    $response = array(
        'data' => $data,
        'total_penjualan' => $total_penjualan
    );

    echo json_encode($response);
?>
