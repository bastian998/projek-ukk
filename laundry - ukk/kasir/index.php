<?php
session_start();
if ($_SESSION['level'] != "kasir") {
    header("Location: ../login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/565/565722.png">
    <meta charset="UTF-8">
    <title>Dashboard Kasir - Laundry</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #56CCF2, #2F80ED);
            color: #333;
        }
        .navbar {
            background: #fff;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
        }
        .navbar h1 {
            margin: 0;
            color: #2F80ED;
            font-size: 20px;
        }
        .navbar a {
            text-decoration: none;
            background: #2F80ED;
            color: #fff;
            padding: 8px 15px;
            border-radius: 6px;
            transition: 0.3s;
        }
        .navbar a:hover {
            background: #1B5DC9;
        }
        .container {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 8px 18px rgba(0,0,0,0.2);
            text-align: center;
        }
        .container img {
            width: 100px;
            margin-bottom: 15px;
        }
        .container h2 {
            color: #2F80ED;
            margin-bottom: 15px;
        }
        .info {
            background: #f0f8ff;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 16px;
        }
        .menu {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 25px;
        }
        .menu a {
            display: block;
            width: 180px;
            text-align: center;
            padding: 20px 10px;
            background: #2F80ED;
            color: white;
            border-radius: 12px;
            text-decoration: none;
            font-weight: bold;
            box-shadow: 0px 5px 12px rgba(0,0,0,0.1);
            transition: 0.3s;
        }
        .menu a:hover {
            background: #1B5DC9;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Laundry Management - Kasir</h1>
        <a href="../logout.php">Logout</a>
    </div>

    <div class="container">
        <img src="https://cdn-icons-png.flaticon.com/512/554/554857.png" alt="Kasir Icon">
        <h2>Selamat Datang, <?php echo $_SESSION['username']; ?> 👋</h2>
        
        <div class="info">
            Anda login sebagai <strong><?php echo $_SESSION['level']; ?></strong>.  
            Silakan pilih menu kasir di bawah ini.
        </div>

        <div class="menu">
            <a href="#"> Input Transaksi</a>
            <a href="#"> Pembayaran</a>
            <a href="#"> Laporan Harian</a>
        </div>
    </div>
</body>
</html>
