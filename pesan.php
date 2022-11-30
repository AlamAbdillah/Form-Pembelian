<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai Cesa</title>
    <link rel="stylesheet" type="text/css" href="css/pesan.css">
</head>
<body>
    <div class="container">
        <button class="home" onclick="home()">Home</button>            
        <form method="post">
            <h1>FORM PESANAN</h1>
            <p>Nama Pembeli</p>
            <input type="text" name="nama" required>
            <p>Sosial Media</p>
            <input type="text" name="sosmed" required>
            <p>Tanggal</p>
            <input type="text" id="tanggal" name="tanggal">
            <p>Pesanan</p>
            <textarea name="pesanan" readonly></textarea>
            <p>Total</p>
            <input type="text" id="view_total" name="total" readonly>
            <button type="submit" onclick="pesan()" name="submit" class="submit">Pesan</button>
            <a onclick="hapus()">Hapus</a>
        </form>
        <div class="produk">
            <h2>MENU</h2>
            <ul>
                <li onclick="add_pesanan('Nasi putih', 3000)">Nasi putih @3k</li>
                <li onclick="add_pesanan('Ayam perang', 10000)">Ayam perang @10k</li>
                <li onclick="add_pesanan('Ayam gugur', 10000)">Ayam gugur @10k</li>
                <li onclick="add_pesanan('Ayam bakar', 12000)">Ayam bakar @12k</li>
                <li onclick="add_pesanan('Ayam geprek', 10000)">Ayam geprek @10k</li>
                <li onclick="add_pesanan('Nasi goreng special', 12000)">Nasi goreng special @12k</li>
                <li onclick="add_pesanan('Sate obong', 2000)">Sate obong @2k</li>
                <li onclick="add_pesanan('Burger', 8000)">Burger @8k</li>
                <li onclick="add_pesanan('Kentang goreng', 8000)">Kentang goreng @8k</li>
                <li onclick="add_pesanan('Roti bakar', 8000)">Roti bakar @8k</li>
                <li onclick="add_pesanan('Kebab sosis', 8000)">Kebab sosis @8k</li>
                <li onclick="add_pesanan('Kebab sosis', 7000)">Mie @7k</li>
                <li onclick="add_pesanan('Kebab sosis', 10000)">Mie special @10k</li>
            </ul>
            <ul>
                <li onclick="add_pesanan('Mojito', 8000)">Mojito @8k</li>
                <li onclick="add_pesanan('Kopsu', 8000)">Kopsu @8k</li>
                <li onclick="add_pesanan('Sop buah', 8000)">Sop buah @8k</li>
                <li onclick="add_pesanan('Es taro', 6000)">Es taro @6k</li>
                <li onclick="add_pesanan('Red velvet', 6000)">Red velvet @6k</li>
                <li onclick="add_pesanan('Coklat', 6000)">Coklat @6k</li>
                <li onclick="add_pesanan('Hazelnut', 6000)">Hazelnut @6k</li>
                <li onclick="add_pesanan('Green tea', 6000)">Green tea @6k</li>
                <li onclick="add_pesanan('Josu', 5000)">Josu @5k</li>
                <li onclick="add_pesanan('Es teh manis', 5000)">Es teh manis @5k</li>
                <li onclick="add_pesanan('Kopi sached', 5000)">Kopi sached @5k</li>
                <li onclick="add_pesanan('Milo', 6000)">Milo @6k</li>
                <li onclick="add_pesanan('Drink beng beng', 6000)">Drink beng beng @6k</li>
                <li onclick="add_pesanan('Cappucino', 6000)">Cappuccino @6k</li>
            </ul>
        </div>
    </div>
<script src="js/pesan.js"></script>
</body>
</html>
<?php
require "connection.php";

if (isset($_POST['submit'])){

    //create variabel from post
    $nama = $_POST['nama'];
    $sosmed = $_POST['sosmed'];
    $tanggal = $_POST['tanggal'];
    $pesanan = $_POST['pesanan'];
    $total = $_POST['total'];

    $result = mysqli_query($conn, "SELECT nama FROM pembelian WHERE nama = '$nama', status = 'proses'");
    if (mysqli_fetch_array($result)){
        echo "<script>alert('nama sudah ada dipesanan');</script>";
        
    } else{
        //insert database to table
        mysqli_query($conn, "INSERT INTO pembelian SET 
        status = 'proses',
        nama = '$nama',
        sosmed = '$sosmed',
        tanggal = '$tanggal',
        pesanan = '$pesanan',
        total = '$total'
        ");
        header("location: index.php");
    }

   
}
?>