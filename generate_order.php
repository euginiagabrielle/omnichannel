<?php 
session_start();
require_once('connection.php');
// Check if the user has logged in
if(!isset($_SESSION['Username'])) {
    header("location:login_seller.php");
    exit();
}

$period = $_POST['period'];
$asc = $_POST['asc'];
// var_dump($_POST);
// Query to fetch all orders
$sql_order = "SELECT id_pesanan, tgl_pesanan, total_harga, status_pesanan, (SELECT nama_ecommerce from ecommerce e where e.id_ecommerce = p.id_ecommerce) as id_ecommerce FROM pesanan p";
if ($period == '1') {
    $sql_order = $sql_order . " ORDER BY id_pesanan $asc";
}
else if ($period == '2') {
    $sql_order = $sql_order . " ORDER BY tgl_pesanan $asc";
}
else if ($period == '3') {
    $sql_order = $sql_order . " ORDER BY id_ecommerce $asc";
}
else if ($period == '4') {
    $sql_order = $sql_order . " ORDER BY status_pesanan $asc";
}
else if ($period == '5') {
    $sql_order = $sql_order . " ORDER BY total_harga $asc";
}

$result_order = $con->query($sql_order);

$orders = [];
while ($row = $result_order->fetch_assoc()) {
    $orders[] = $row;
}

echo json_encode($orders);

$con->close();
?>