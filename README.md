# Form-Pembelian
Form pembelian merupakan halaman web untuk menghitung pembelian disebuah toko.

[![Website shields.io](https://img.shields.io/website-up-down-green-red/http/shields.io.svg)](http://shields.io/)

![Javascript](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)
![Visual Studio Code](https://img.shields.io/badge/Visual%20Studio%20Code-0078d7.svg?style=for-the-badge&logo=visual-studio-code&logoColor=white)

## Features form pembelian
 - Insert database
 - Update database
 - Select database
 - Penghitungan pendapatan otomatis

## Database
conection database ada didalam file connection.php
```
$conn = mysqli_connect("localhost", "root", "", "mytoko");
```
Nama database **mytoko**</br>
Nama table **pembelian**</br>
Column:
 - **status (varchar)**
 - **nama (varchar)**
 - **sosmed (varchar)**
 - **tanggal (varchar)**
 - **pesanan (varchar)**
 - **total (integer)**

 ## Image page
 
 detail pesanan yang sedang dalam proses
 <img src="https://user-images.githubusercontent.com/115331322/204836896-85b447b5-1d6b-47f0-8ca2-b66370921d09.png" width="800">
 
 Form input pesanan dan pemesan
 <img src="https://user-images.githubusercontent.com/115331322/204841842-353ad327-fb3e-4c32-a0f7-439ca8866628.png" width="800">
 
 Form update pesanan, seperti mengubah nama, sosial media, tanggal, dan pesanan
 <img src="https://user-images.githubusercontent.com/115331322/204842342-443f5822-af4e-43cb-a488-7d6f8a348c6c.png" width="800">
 
 ## Penutup
 Sekian project website saya terima kasih
