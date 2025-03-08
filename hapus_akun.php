<?php
session_start();
require_once "function.php";

if (!isset($_SESSION["akun-admin"]) && !isset($_SESSION["akun-user"])) {
    header("Location: login.php");
    exit;
}

// Ambil username dari session
$username = $_SESSION['akun-user']['username'] ?? $_SESSION['akun-admin']['username'];

// Cek apakah pengguna adalah admin atau user
$table = isset($_SESSION['akun-admin']) ? 'admin' : 'user';

// Hapus akun dari database
mysqli_query($koneksi, "DELETE FROM $table WHERE username = '$username'");

// Hancurkan session
session_destroy();

// Redirect ke halaman login
header("Location: login.php");
exit;
?>