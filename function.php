<?php

$koneksi = mysqli_connect("localhost", "root", "", "pwl_kasir_restoran");

// Funtion Register

function register_akun()

{

    global $koneksi;



    $username = htmlspecialchars($_POST["username"]);

    $password = md5(htmlspecialchars($_POST["password"]));

    $konfirmasi_password = md5(htmlspecialchars($_POST["konfirmasi-password"]));



    $cek_username = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM `user` WHERE username = '$username'"));



    if ($cek_username != null) {

        echo "<script>

            alert('Username sudah ada!');

        </script>";

        return -1;
    } else if ($password != $konfirmasi_password) {

        echo "<script>

            alert('Password Tidak Sesuai!');

        </script>";

        return -1;
    }



    mysqli_query($koneksi, "INSERT INTO `user` (`username`, `password`)

                            VALUES ('$username', '$password')

    ");

    return mysqli_affected_rows($koneksi);
}



// Function Login

function login_akun()

{

    global $koneksi;



    $username = htmlspecialchars($_POST["username"]);

    $password = md5(htmlspecialchars($_POST["password"]));



    $cek_akun_admin = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM `admin` 

                                                           WHERE username = '$username' AND 

                                                                `password` = '$password'

    "));

    $cek_akun_user = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM `user` 

                                                           WHERE username = '$username' AND 

                                                                `password` = '$password'

    "));



$cek_akun_user = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM `user` WHERE username = '$username' AND `password` = '$password'"));

if ($cek_akun_admin == null && $cek_akun_user == null) {
    return false;
}

if ($cek_akun_user != null) {
    $_SESSION["akun-user"] = [
        "username" => $username,
        "password" => $password,
        "username" => $cek_akun_user['username'] // Ensure the 'nama' field exists in your 'user' table
    ];
}

if ($cek_akun_admin != null) {
    $_SESSION["akun-admin"] = [
        "username" => $username,
        "password" => $password
    ];
}

    header("Location: dashboard.php");

    exit;
}

// Function to Change Password
// Function to Change Password
function change_password() {
    global $koneksi;

    // Ambil username dari session
    $username = $_SESSION['akun-user']['username'] ?? $_SESSION['akun-admin']['username'];
    $current_password = md5(htmlspecialchars($_POST["current_password"]));
    $new_password = md5(htmlspecialchars($_POST["new_password"]));
    $confirm_password = md5(htmlspecialchars($_POST["confirm_password"]));

    // Cek apakah pengguna adalah admin atau user
    $table = isset($_SESSION['akun-admin']) ? 'admin' : 'user';

    // Check if the current password is correct
    $cek_akun = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM $table WHERE username = '$username' AND password = '$current_password'"));

    if ($cek_akun == null) {
        echo "<script>alert('Current password is incorrect!');</script>";
        return -1;
    }

    // Check if new password and confirm password match
    if ($new_password != $confirm_password) {
        echo "<script>alert('New password and confirm password do not match!');</script>";
        return -1;
    }

    // Check if the new password is the same as the current password
    if ($current_password == $new_password) {
        echo "<script>alert('New password cannot be the same as the current password!');</script>";
        return -1;
    }

    // Update the password
    mysqli_query($koneksi, "UPDATE $table SET password = '$new_password' WHERE username = '$username'");
    return mysqli_affected_rows($koneksi);
}

// Function Select Data

function ambil_data($query)

{

    global $koneksi;



    $db = [];

    $sql_query = mysqli_query($koneksi, $query);

    while ($q = mysqli_fetch_assoc($sql_query)) {

        array_push($db, $q);
    }

    return $db;
}



// Function Tambah Data

function tambah_data_menu()

{

    global $koneksi;



    $nama = htmlspecialchars($_POST["nama"]);

    $harga = (int) htmlspecialchars($_POST["harga"]);

    $gambar = htmlspecialchars($_FILES["gambar"]["name"]);

    $kategori = htmlspecialchars($_POST["kategori"]);

    $status = htmlspecialchars($_POST["status"]);



    // Generate Kode Menu

    $kode_menu = "MN" . ambil_data("SELECT MAX(SUBSTR(kode_menu, 3)) AS kode FROM menu")[0]["kode"] + 1;



    // cek format gambar

    $format_gambar = ["jpg", "jpeg", "png", "gif"];

    $cek_gambar = explode(".", $gambar);

    $cek_gambar = strtolower(end($cek_gambar));

    if (!in_array($cek_gambar, $format_gambar)) {

        echo "<script>

            alert('File yang diupload bukan merupakan image!');

        </script>";

        return -1;
    }



    // upload file
    $nama_gambar = uniqid() . ".$cek_gambar";
    move_uploaded_file($_FILES["gambar"]["tmp_name"], "src/img/$nama_gambar");



    // eksekusi query insert

    $id_menu = ambil_data("SELECT MAX(SUBSTR(kode_menu, 3)) AS kode FROM menu")[0]["kode"] + 1;

    mysqli_query($koneksi, "INSERT INTO menu

                            VALUES ($id_menu, '$kode_menu', '$nama', $harga, '$nama_gambar', '$kategori', '$status')

    ");

    return mysqli_affected_rows($koneksi);
}



// Function Edit Data Menu

function edit_data_menu()

{

    global $koneksi;



    $id_menu = $_POST["id_menu"];

    $nama = htmlspecialchars($_POST["nama"]);

    $harga = (int) htmlspecialchars($_POST["harga"]);

    $gambar = htmlspecialchars($_FILES["gambar"]["name"]);

    $kategori = htmlspecialchars($_POST["kategori"]);

    $status = htmlspecialchars($_POST["status"]);

    $kode_menu = htmlspecialchars($_POST["kode_menu"]);



    // cek format gambar

    $format_gambar = ["jpg", "jpeg", "png", "gif"];

    $cek_gambar = explode(".", $gambar);

    $cek_gambar = strtolower(end($cek_gambar));

    if (!in_array($cek_gambar, $format_gambar) && strlen($gambar) != 0) {

        echo "<script>

            alert('File yang diupload bukan merupakan image!');

        </script>";

        return -1;
    }



    // cek jika admin mengupload gambar yang baru

    $gambar_lama = $_POST["gambar-lama"];



    if (strlen($gambar) == 0) {

        $gambar = $gambar_lama;
    } else if ($gambar != $gambar_lama && strlen($gambar) != 0) {

        move_uploaded_file($_FILES["gambar"]["tmp_name"], "src/img/$gambar");

        unlink("src/img/$gambar_lama");
    }



    // eksekusi query update

    mysqli_query($koneksi, "UPDATE menu

                            SET kode_menu = '$kode_menu',

                                nama = '$nama',

                                harga = $harga,

                                gambar = '$gambar',

                                kategori = '$kategori',

                                `status` = '$status'

                            WHERE id_menu = $id_menu

    ");

    return mysqli_affected_rows($koneksi);
}



// Function Hapus Data Menu

function hapus_data_menu()

{

    global $koneksi;



    $id_menu = $_GET["id_menu"];



    // hapus file gambar

    $file_gambar = ambil_data("SELECT * FROM menu WHERE id_menu = $id_menu")[0]["gambar"];

    if (file_exists("src/img/$file_gambar")) unlink("src/img/$file_gambar");



    // eksekusi query delete

    mysqli_query($koneksi, "DELETE FROM menu

                            WHERE id_menu = $id_menu

    ");

    return mysqli_affected_rows($koneksi);
}



// Tambah Data Pesanan & Transaksi

function tambah_data_pesanan()

{

    global $koneksi;



    // Nama Pelanggan

    $pelanggan = $_SESSION['akun-user']['username'];

    // Generate Kode Pesanan

    $kode_pesanan = uniqid();



    // Mengambil Data Qty dan Kode Menu

    $list_pesanan = [];

    $max_menu = count(ambil_data("SELECT * FROM menu"));

    for ($i = 1; $i <= $max_menu; $i++) {

        if ((int) $_POST["qty$i"] != 0) {

            array_push($list_pesanan, [

                "kode_menu" => $_POST["kode_menu$i"],

                "qty" => (int) $_POST["qty$i"]

            ]);
        }
    }


    // Cek Jika Memesan Tapi Kosong
    if (count($list_pesanan) == 0) {
        echo "<script>
            alert('Anda belum memesan menu!');
        </script>";
        return -1;
    }

    // Tambah Data Pesanan

    foreach ($list_pesanan as $lp) {

        $kode_menu = $lp["kode_menu"];

        $qty = $lp["qty"];

         mysqli_query($koneksi, "INSERT INTO pesanan (kode_pesanan, kode_menu, qty)

                                VALUES ('$kode_pesanan', '$kode_menu', $qty);

        ");
    }



    // Tambah Data Transaksi

	mysqli_query($koneksi, "INSERT INTO transaksi (kode_pesanan, nama_pelanggan, waktu)

                            VALUES ('$kode_pesanan', '$pelanggan', NOW())

    ");

    return mysqli_affected_rows($koneksi);
}



// Hapus Data Pesanan & Transaksi

function hapus_data_pesanan()

{

    global $koneksi;



    $kode_pesanan = $_GET["kode_pesanan"];

    // eksekusi query delete

    mysqli_query($koneksi, "DELETE FROM transaksi

                            WHERE kode_pesanan = '$kode_pesanan'

    ");

    mysqli_query($koneksi, "DELETE FROM pesanan

                            WHERE kode_pesanan = '$kode_pesanan'

    ");

    return mysqli_affected_rows($koneksi);
}
