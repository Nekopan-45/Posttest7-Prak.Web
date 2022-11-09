<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comptible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data Vtuber</title>
    <link rel="stylesheet" href="styleAdd.css">
</head>
<body>
    <div class="form">
        <h3>TAMBAH DATA TALENT VTUBER</h3><br>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="">Nama Vtuber</label><br>
            <input type="text" name="nama" id=""> <br><br>

            <label for="">Nama Channel Mereka</label><br>
            <input type="text" name="ytname" id=""> <br><br>

            <label for="">AGENCY / INDIE</label> <br>
            <input type="text" name="status" id=""> <br><br>
            
            <label for="">Tanggal Debut</label><br>
            <input type="date" name="debut"><br><br>

            <label for="">Foto Talent</label><br>
            <input type="file" name="gambar"><br><br>

            <button type="submit" name="submit" class="submit">TAMBAH</button>
        </form>
    </div>
</body>
</html>


<?php
    require 'config.php';

    if (isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $ytname = $_POST['ytname'];
        $status = $_POST['status'];
        $debut = $_POST['debut'];
        
        $gambar = $_FILES['gambar']['name'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));

        $gambar_baru = "$nama.$ekstensi";
        $tmp = $_FILES['gambar']['tmp_name'];

        if(move_uploaded_file($tmp, 'model/'.$gambar_baru)){
            $query = "INSERT INTO agency (nama,ytname,status, debut, gambar) VALUES ('$nama','$ytname','$status','$debut','$gambar_baru')";
            $result = $db->query($query);

            if($result){
                header("Location:talent.php");
            }else{
                echo "gagal kirim";
            }
        }
    }
?> 
 