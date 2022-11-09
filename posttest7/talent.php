<?php
    session_start();
    if(!isset($_SESSION['login'])){
        echo "<script>
                alert('Harap login terlebih dahulu');
                document.location.href = 'login.php';
            </script>";
    }
    require 'config.php';
    $result = mysqli_query($db, "SELECT * FROM agency");

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VTuber</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styletalent.css">
</head>
<body>
    <header id ="Home">
        <nav>
            <a href="#Home"><img class="Logo" src="logo.png" alt="vtube" id="logo"></a>
            <div class="navi" id="naviList">
                <ul id="listNav">
                    <li><a href="index.php">Home</a></li>
                    <li id="talent_id"><a href="talent.php">Talent</a></li>
                    <li id="news_id"><a href="#News">News</a></li>
                    <li id="goods_id"><a href="#Goods">Official Goods</a></li>
                    <li id="about_id"><a href="about.html">About Us</a></li>
                    <li id="darkmode_id">DarkMode</li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="head-table">
        <h3>DAFTAR TALENT VTUBER AGENCY DAN INDIE</h3> <br>
        
    </div>
    <div>
        <button class="addbutton"><a href="formadd.php" style="text-decoration: none;">TAMBAH DATA</a></button>
        
        <form action="" method="post" enctype="multipart/form-data">
            <table id="tablesearch">
            <tr>
                <td>
                <div class="searchbar">
                    <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search Bar">
                    <button type="submit" class="searchbtn" name="search">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                </td>
            </tr>
            </table>                
        </form>
        
    </div>
    <div class="tableview" >
        <table border="1">
            <tr>
                <th>NO</th>
                <th>Nama Vtuber</th>
                <th>Channel Vtuber</th>
                <th>Agensi / Indie</th>
                <th>Tanggal Debut</th>
                <th>Model Talent</th>
                <th>Modifikasi</th>
                <th>Menghapus</th>
            </tr>
                <?php
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                
                ?>

            <tr>
                <td><?=$i?></td>
                <td><?=$row['nama']?></td>
                <td><?=$row['ytname']?></td>
                <td><?=$row['status']?></td>
                <td><?=$row['debut']?></td>
                <td><img src="model/<?=$row['gambar']?>" alt="" width="100px"></td>
                <td class="edit"><a href="editform.php?id=<?=$row['id']?>">EDIT</a></td>
                <td class="del"><a href="hapusform.php?id=<?=$row['id']?>">HAPUS</a></td>
            </tr>
                <?php
                    $i++;
                }
                ?>

        </table>
        
    </div>

    <footer>
        <ul id="footer_id">
            <li><a href="#Home">Home</a></li>
            <li><a href="about.html">About Me</a></li>
            <li><a href="#Contact">Contact Us</a></li>
        </ul>
        <p class="hakcipta" id="hc">
            VTuber @ 2022
        </p>
    </footer>
</body>
<script src="script.js"></script>
</html>
<?php
    if(isset($_GET['search'])){
        $keyword = $_GET['keyword'];
        
        $hasil = mysqli_query($db, "SELECT * FROM agency WHERE nama LIKE '%keyword%' OR ytname '%keyword%' OR status '%keyword%'");
    } else {
        $hasil = mysqli_query($db, "SELECT * FROM agency");
        
    }
    
    $vtuber = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $vtuber = $row;
    }
    
?>