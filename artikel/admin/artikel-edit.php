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
  <h4><b> Putri Prameswari</b></h4>
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

   <?php $ambil = $koneksi->query("SELECT * FROM berita WHERE id='$_GET[id]'"); ?>
    <?php $pecah=$ambil->fetch_assoc()?>
   <form method="POST" enctype="multipart/form-data">
       <table>
         <img src="../assets/<?php echo$pecah["foto"]; ?>" alt="">
         <br>
         <input type="file" name="foto">
         <br><br>
         <tr>
           <th>
         <label>Judul</label>
           </th>
           <td>:</td>
           <td>
         <input type="text" name="judul" value="<?php echo$pecah["judul"]; ?>">
           </td>
         </tr>
         <tr>
           <th>
           <label>Nama Penulis</label>
           </th>
           <td>:</td>
           <td>
           <input type="text" name="penulis" value="<?php echo$pecah["penulis"]; ?>">
           </td>
         </tr>
         <tr>
           <th>
           <label>Waktu</label>
           </th>
           <td>:</td>
           <td>
           <input type="date" name="tgl" value="<?php echo$pecah["tgl"]; ?>">
           </td>
         </tr>
         <tr>
           <th>
           <label>Redaksi</label>
           </th>
           <td>:</td>
           <td>
           <textarea name="redaksi"><?php echo$pecah["redaksi"]; ?></textarea>
           </td>
         </tr>
         <tr>
           <th>
           <label>Konten</label>
           </th>
           <td>:</td>
           <td>
           <textarea name="konten"><?php echo$pecah["konten"]; ?></textarea>
           </td>
         </tr>
       </table>
       <div class="btn">
       <button name="update" type="submit" onclick="return confirm('Apakah anda yakin meng Ubah data ini?')"><p><b>UPDATE</b></p></button>
       
       <button><p><b><a href="dashboard.php">KEMBALI</a></b></p></button>
       </div>
       
     </form>
     <!-- php -->

  <?php 
  if(isset($_POST['update'])){
    
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    

    if(!empty($lokasi)){
      move_uploaded_file($lokasi,"../assets/$foto");

      $koneksi->query("UPDATE berita SET
          judul = '$_POST[judul]'
         ,penulis = '$_POST[penulis]'
         ,tgl = '$_POST[tgl]'
         ,redaksi = '$_POST[redaksi]'
         ,konten = '$_POST[konten]'
         ,foto = '$foto'
 
      WHERE id = '$_GET[id]' ");

  }else{

      $koneksi->query("UPDATE berita SET 
       judul = '$_POST[judul]'
      ,penulis = '$_POST[penulis]'
      ,tgl = '$_POST[tgl]'
      ,redaksi = '$_POST[redaksi]'
      ,konten = '$_POST[konten]'
      
      WHERE id = '$_GET[id]' ");
  }
  echo "File berhasil di rubah";
  echo "<script>location='artikelUtama.php'; </script>";
  }

  
  ?>
  

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