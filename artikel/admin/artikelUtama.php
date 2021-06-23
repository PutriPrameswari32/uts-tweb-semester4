<?php 
include '../koneksi.php';
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
      <li><a href="#">Index</a></li>
      <li><a href="#">Profil</a></li>
      <li><a href="#">Galery</a></li>
    </ul>

  </div>
</div>

<!-- tahan dulu -->
<div class="main-content">
  <h1>Artikel System</h1><br>

    <!-- button -->


 <!-- Admin Content -->
 <div class="container">
   <div class="artikel">
       <button style="margin-left: 30px;"><p><b><a href="artikel-add.php">TAMBAH</a></b></p></button>
        <br>
        <br>
        <?php $ambil = $koneksi->query("SELECT * FROM berita"); ?>
        <?php while($pecah = $ambil->fetch_assoc()){ ?>
       <table>
           <img src="../assets/<?php echo$pecah["foto"]; ?>" alt="" >

           <tr>
               <th>JUDUL</th>
               <td>:</td>
               <td><?php echo$pecah["judul"]; ?></td>
           </tr>

           <tr>
               <th>PENULIS</th>
               <td>:</td>
               <td><?php echo$pecah["penulis"]; ?></td>
           </tr>

           <tr>
               <th>TANGGAL RLIS</th>
               <td>:</td>
               <td><?php echo$pecah["tgl"]; ?></td>
           </tr>
       </table>

       <div>
       <h4>REDAKSI</h4>
       <textarea name="redaks" id="" cols="30" rows="10"><?php echo$pecah["redaksi"]; ?></textarea>
       </div>
       <br>

       <div>
       <h4>KONTEN</h4>
       <textarea name="redaks" id="" cols="30" rows="10"><?php echo$pecah["konten"]; ?></textarea>
       <br><br>

       <div>
           <button><p><b><a href="artikel-edit.php?id=<?php echo$pecah['id'];?>">EDIT</a></b></p></button>
           <button><p><b><a href="artikel-hapus.php?id=<?php echo$pecah['id'];?>">HAPUS</a></b></p></button>
       </div>
       <br><br><br><br><br><br>
       </div>

       <?php } ?>
   </div>
 </div>
</div>



            <!-- // Admin Content -->




    
<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Slick Carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Custom Script -->
<script src="js/scripts.js"></script>

</body>
</html>