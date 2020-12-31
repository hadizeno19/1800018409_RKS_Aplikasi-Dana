<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:dashboard.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/until.css">
</head>
<body>

<div class="header">
  <h1>Selamat Datang</h1>
  <p>Muhammad Hadi | 1800018409</p>
  <marquee><p>Halo! Selamat Datang Di MangaKita</p></marquee>
</div>

<div class="topnav">
  <a href="index.php">Beranda</a>
  <a href="#" id="voucher">Baca Komik Boruto Terbaru</a>
  <a href="#" id="onepiece">Onepunch-Man [ NEW ]</a>
  <a href="daftar.php" style="float:right">DAFTAR</a>
  <a href="login.php" style="float:right">LOGIN</a>
</div>
  
<div class="row">
     <div id="content">
  <div class="leftcolumn">
    <div class="card">
      <h2>WELCOME TO WEBSITE ME</h2>
      <h5>Platform komik digital yang seru dengan berbagai pilihan genre dan di-update setiap hari. Semuanya GRATIS! Baca sekarang!</h5>
      <center>
      <img src="anime.jpg" height="400px" width="1080px">
    </center>
      <p>Baca komik manga terjemahan Bahasa Indonesia gratis di mangaindonesia.com</p>
    </div></div>

  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div id="fb-root"></div>
     <div class="fb-page" 
  data-href="https://web.facebook.com/Zeno-Zeno-2194277944168253/?ref=settings"
  data-width="380" 
  data-hide-cover="false"
  data-show-facepile="false"></div>
  <marquee><p>Jangan Lupa Follow Fanspage Kami Yaa :)</p></marquee>
    </div>
    <div class="card">
      <h3>Daftar Komik Terupdate</h3>
      <ul>
  <li><a class="active" href="#" id="boruto">Boruto</a>
  <li><a href="#">Onepunch-Man</a></li>
  <li><a href="#">Dragon Ball Super</a></li>
  <li><a href="#">Fairy Tail</a></li>
</li>
</div>
</div>
</div>
</div>
<div class="footer">
  <h2>Zeno | 2019</h2>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="proses.js"></script>
<script type="text/javascript" src="submit.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.3&appId=825300440918276&autoLogAppEvents=1"></script>
</body>
</html>
