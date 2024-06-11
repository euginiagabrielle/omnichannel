<?php 
session_start();
require_once('connection.php');
// Check if the user has logged in
if(!isset($_SESSION['Username'])) {
    header("location:login_seller.php");
    exit();
}

$id = $_POST['id'];
$update_type = $_POST['update_type'];
// var_dump($_POST);
// Query to fetch all orders
$sql_order = "UPDATE pesanan SET status_pesanan = '";
if ($update_type == 1){
    $sql_order = $sql_order . "dalam proses";
}
else{
    $sql_order = $sql_order . "selesai";
}
$sql_order = $sql_order . "' WHERE id_pesanan = " . $id . ";";
echo($sql_order);
$con->query($sql_order);
$con->close();
header("location:order.php");
?>