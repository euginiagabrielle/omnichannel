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
$sql_order = "SELECT id_detail, nama_produk, jumlah, harga, p.id_pesanan FROM detail_pesanan dp left join pesanan p on (p.id_pesanan = dp.id_pesanan) WHERE p.id_pesanan = " . $_POST['id'];
if ($period == '1') {
    $sql_order = $sql_order . " ORDER BY id_detail $asc";
}
if ($period == '2') {
    $sql_order = $sql_order . " ORDER BY nama_produk $asc";
}
if ($period == '3') {
    $sql_order = $sql_order . " ORDER BY jumlah $asc";
}
if ($period == '4') {
    $sql_order = $sql_order . " ORDER BY harga $asc";
}

$result_order = $con->query($sql_order);

$orders = [];
while ($row = $result_order->fetch_assoc()) {
    $orders[] = $row;
}

echo json_encode($orders);

$con->close();
?>