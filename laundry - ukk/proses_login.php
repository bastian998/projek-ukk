<?php
session_start();
require "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']); 

$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_array($query);

if ($data) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['level'] = $data['level'];

    // arahkan sesuai level
    if ($data['level'] == "admin") {
        header("Location: admin/index.php");
    } elseif ($data['level'] == "kasir") {
        header("Location: kasir/index.php");
    } elseif ($data['level'] == "user") {
        header("Location: user/index.php");
    }
    exit;
} else {
    echo "<script>alert('Login gagal!'); window.location='login.php';</script>";
}
?>
