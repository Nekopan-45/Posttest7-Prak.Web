<?php
    session_start();
    if(!isset($_SESSION['login'])){
        echo "<script>
                alert('Harap login terlebih dahulu');
                document.location.href = 'login.php';
            </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VTuber</title>
    <link rel="stylesheet" href="style.css">
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
                    <li id="about_id"><a href="about.html">About Us</a></li>
                    <li id="goods_id"><a href="logout.php">Log out</a></li>
                    <li id="darkmode_id">DarkMode</li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="main-konten">
            <div class="konten1">
                <h1 id="slogan">DIVE INTO THE VTUBER WORLD</h1>
                <p>Learn and discover many kinds of vtuber
                    around the world from famous agency or
                    indie vtuber!
                </p>
                <a class="agen" href="#agency"><button>AGENCY</button></a>
                <a class="ind" href="#indie"><button>INDIE</button></a>
            </div>
            <div class="konten2">
                <img src="sora.png" alt="maskot" id="soraimg">
            </div>
        </div>
    </main>
    <div class = "content-add">
        <div class="img2">
            <img src="astel1.png" alt="holostar" id="astelimg">
        </div>
        <div class="add-vt">
            <h1 id="sentence">WE NEED YOUR INFORMATION</h1>
            <p>If you know any Vtuber out there that exists
                you can <br> add them with this button so we can
                help their channel!
            </p>
            <a class="tambah" href="formadd.php"><button>ADD DATA</button></a>
            
        </div>
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