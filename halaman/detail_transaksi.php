<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once "function.php";

// Check if the user is logged in as admin
if (!isset($_SESSION["akun-admin"])) {
    header("Location: login.php");
    exit;
}

// Fetch transaction data by month and calculate the total
$transactions_per_month = ambil_data("
    SELECT 
        DATE_FORMAT(waktu, '%m-%Y') AS bulan, 
        SUM(p.qty * m.harga) AS total_transaksi
    FROM transaksi t
    JOIN pesanan p ON t.kode_pesanan = p.kode_pesanan
    JOIN menu m ON p.kode_menu = m.kode_menu
    GROUP BY DATE_FORMAT(waktu, '%m-%Y')
    ORDER BY bulan DESC
");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi Bulanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="src/css/style.css"> <!-- Custom CSS -->
</head>

<body class="bg-light">

            <!-- Main Table Content -->
            <div class="container my-5">
                <h3 class="mb-4">Detail Transaksi per Bulan</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="table-success">
                            <tr>
                                <th>No</th>
                                <th>Bulan</th>
                                <th>Total Transaksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($transactions_per_month as $transaction) {
                                echo "<tr>
                                        <td>{$i}</td>
                                        <td>{$transaction['bulan']}</td>
                                        <td>Rp " . number_format($transaction['total_transaksi'], 0, ',', '.') . "</td>
                                    </tr>";
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta2/dist/js/bootstrap.min.js"></script>
    <script src="src/js/beranda.js"></script> <!-- Custom JS -->
</body>

</html>
