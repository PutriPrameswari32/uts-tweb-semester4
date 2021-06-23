<?php 
$koneksi = new mysqli("localhost","root","","artikel");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Ikon logo -->
    <link rel="shortcut icon" href="./assets/logo.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
  integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

   <!-- Custom Styling -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="admin.css">
   

    <title>Admin Section</title>
</head>

<body>

<!-- Header -->
<header>
    <div class="logo">
      <h1 class="logo-text"><span>BEE</span>news</h1>
    </div>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
      <li>
        <a href="#">
          <i class="fa fa-user"></i>
          Putri prameswari
          <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
        </a>
        <ul>
          <li><a href="../login.php" class="logout">Logout</a></li>
        </ul>
      </li>
    </ul>
  </header>
<!-- End Header -->

<div class="sidebar">

<div class="foto-admin">
  <img src="profil.png" alt=""><br>
  <h4><b>Putri Prameswari</b></h4>
</div>

  <!-- Sidebar disebelah kiri -->
  <div class="left-sidebar">
    <ul>
      <li><a href="#">Artikel</a></li>
      <li><a href="">Index</a></li>
      <li><a href="">Profil</a></li>
      <li><a href="">galery</a></li>
    </ul>

  </div>
</div>

<div class="main-content">
  <h1>Artikel System</h1><br>
  <div class="isi">
  <button class="tambah-artikel"> Tambah Foto</button>
  
  </div>

</div>


    
<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Slick Carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Custom Script -->
<script src="js/scripts.js"></script>

</body>
</html>