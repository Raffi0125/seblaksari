<!-- change_password.php -->
<?php
session_start();
require_once "function.php";

if (!isset($_SESSION["akun-admin"]) && !isset($_SESSION["akun-user"])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST["change_password"])) {
    $result = change_password();
    echo $result > 0
        ? "<script>alert('Password berhasil diubah!'); location.href = 'dashboard.php';</script>"
        : "<script>alert('Gagal mengubah password!');</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/bootstrap-5.2.0/css/bootstrap.min.css">
    <title>Change Password</title>
</head>
<body class="bg-light">
    <div class="container">
        <h1 class="text-center mt-5">Change Password</h1>
        <div class="mx-auto rounded p-5" style="width: 500px; background-color: white;">
            <form action="change_password.php" method="POST">
                <input class="form-control mx-auto d-block" type="password" name="current_password" placeholder="Current Password" required><br>
                <input class="form-control mx-auto d-block" type="password" name="new_password" placeholder="New Password" required><br>
                <input class="form-control mx-auto d-block" type="password" name="confirm_password" placeholder="Confirm New Password" required><br>
                <button class="btn btn-primary" name="change_password">Change Password</button>
                <a href="dashboard.php" class="btn btn-danger" name="batal">batal</a>
            </form>
        </div>
    </div>
    <script src="./src/css/bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>