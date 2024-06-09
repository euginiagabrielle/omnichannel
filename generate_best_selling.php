<?php 
    session_start();
    require_once('connection.php');

    // Cek apakah pengguna telah login
    if(!isset($_SESSION['Username'])) {
        header("location:login_seller.php");
        exit();
    }

    // Mengambil username seller dari session
    $username_seller = $_SESSION['Username'];

    // Query untuk memeriksa status langganan
    $sql_subscription = "SELECT status_subs FROM seller WHERE username_seller=?";
    $stmt = $con->prepare($sql_subscription);
    $stmt->bind_param("s", $username_seller);
    $stmt->execute();
    $result_subscription = $stmt->get_result();

    if ($result_subscription->num_rows > 0) {
        $row_subscription = $result_subscription->fetch_assoc();
        $user_subscribed = ($row_subscription['status_subs'] == '1');
    } else {
        $user_subscribed = false; // Jika tidak ada data langganan, anggap belum berlangganan
    }

    if ($user_subscribed) {
        // Query untuk mengambil produk yang paling laku
        $sql = "SELECT nama_produk, COUNT(*) AS jumlah_terjual FROM detail_pesanan GROUP BY nama_produk ORDER BY jumlah_terjual DESC";
        $result = $con->query($sql);
    
        if ($result->num_rows > 0) {
            echo "<table class='table table-bordered' style='margin-top: 30px;'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col'>#</th>";
            echo "<th scope='col'>Product</th>";
            echo "<th scope='col'>Sold</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            $counter = 1;
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<th scope='row'>" . $counter . "</th>";
                echo "<td>" . $row["nama_produk"] . "</td>";
                echo "<td>" . $row["jumlah_terjual"] . "</td>";
                echo "</tr>";
                $counter++;
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "No sales data available.";
        }
    } else {
        // Tampilkan pesan bahwa penjual belum berlangganan
        echo "<button type='button' class='btn btn-primary mt-3' data-bs-toggle='modal' data-bs-target='#subscriptionModal'>Subscribe to View</button>";
    }

    $stmt->close();
    $con->close();
?>
