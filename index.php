<?php
    include "connection.php";

    //button selesai clicked
    if(isset($_POST['selesai'])){
        mysqli_query($conn, "UPDATE pembelian SET
        status = 'complete'
        WHERE nama = '$_POST[nama]'");
    }
    //view total
    function view() {
        global $conn;
        
        //check date true
        $result = mysqli_query($conn, "SELECT * FROM  pembelian WHERE tanggal='$_POST[date]'");
        //check date false
        // if(mysqli_fetch_array($result) == 0){
        //     echo "tidak ada";
        // }
        $total = 0;
        while($row = mysqli_fetch_array($result)){
            if($row['status'] == "complete"){
                $total += $row['total'];
            }
        }
        if($total == 0){
            echo "<script>alert('Tidak ada pembelian ditanggal ini');</script>";
        }else{
            echo $total;
        }
    }
    //call tanggal input to again
    function tanggal_again(){
        echo $_POST['date'];
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai Cesa</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <div class="container">
        <p class="date" name="date"></p>
        <div class="box_pesan">
            <?php
                //add pesanan status proses
                $result = mysqli_query($conn, "SELECT * FROM  pembelian");
                while($row = mysqli_fetch_array($result)){
                    if($row['status'] == "proses"){
                        echo "<form method='post' class='pesanan'><p>Nama</p><input name='nama' value='$row[nama]' readonly><p>Pesanan</p><textarea readonly>$row[pesanan]</textarea><p>total</p><p>Rp.$row[total]</p><div><a href='update.php?nama=$row[nama]'>Update</a><button type='submit' name='selesai'>Selesai</button></div></form>";
                    }   
                }
            ?>
            
            <!--
            <form method='post' class='pesanan'>
                <p>Nama</p>
                <input name='nama' value='$row[nama]' readonly>
                <p>Pesanan</p>
                <textarea readonly>$row[pesanan]</textarea>
                <p>total</p>
                <p>Rp.$row[total]</p>
                <div>
                    <a href='update.php?nama=$row[nama]'>Update</a>
                    <button type='submit' name='selesai'>Selesai</button>
                </div>
            </form>-->

            <button id="add" onclick="add()">Add</button>
        </div>
        <p>View income</p>
        <form method="post" class="user" id="user">
            <span>
                <p>Tanggal</p>
                <input type="text" placeholder="Example(8-10-2022)" value="<?php if(isset($_POST['view'])){tanggal_again();} ?>" name="date" class="date">
            </span>
            <button name="view">View</button>
            <b>
                <?php
                //button view clicked
                if(isset($_POST['view'])){
                    view();
                }
                ?>
            </b>
        </form>
    </div>
<script src="js/index.js"></script>
</body>
</html>