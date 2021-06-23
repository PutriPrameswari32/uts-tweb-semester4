<?php 
include 'koneksi.php';
include("path.php");
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

    <title>Berita Terkini</title>
</head>

<body>

<!-- Header -->
<?php include(ROOT_PATH . "/header.php"); ?>
<!-- End Header -->

<!-- Page Wrapper -->
<div class="page-wrapper">

     <!-- Content -->
     <div class="content clearfix">

        <!-- Main Content -->
        <div class="main-content">
          <h1 class="recent-post-title">My Profil</h1>

           <?php $ambil = $koneksi->query("SELECT * FROM profil"); ?>
        <?php $pecah=$ambil->fetch_assoc()?>

  
          <div class="post clearfix">
            <img src="assets/<?php echo$pecah["foto"]; ?>" alt="" class="post-image">
            <div class="post-preview">
              <table>
                <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td><?php echo$pecah["nama"]; ?></td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <td>:</td>
                    <td><?php echo$pecah["nim"]; ?></td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td><?php echo$pecah["kelas"]; ?></td>
                </tr>
                <tr>
                    <th>Hobi</th>
                    <td>:</td>
                    <td><?php echo$pecah["hobi"]; ?></td>
                </tr>
            </table>
            </div>
          </div>
  
  
        </div>
        <!-- End Main Content -->
  
        <div class="sidebar">
  
          <div class="section search">
            <h2 class="section-title">Search</h2>
            <form action="index.php" method="post">
              <input type="text" name="search-term" class="text-input" placeholder="Search...">
            </form>
          </div>
  
  
          <div class="section topics">
            <h2 class="section-title">Topics</h2>
            <ul>
              <li><a href="#">Artikel</a></li>
              <li><a href="#">CSS</a></li>
              <li><a href="#">Java</a></li>
              <li><a href="#">PHP</a></li>
              <li><a href="#">Bootstrap</a></li>
            </ul>
          </div>
  
        </div>
  
      </div>
    <!-- End Content -->

</div>

<!-- End Page Wrapper -->

 <!-- footer -->
 <div class="footer">
  <div class="footer-content">

    <div class="footer-section about">
      <h1 class="logo-text"><span>BEE</span>news</h1>
      <p>
       Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, iure.</p>
      <div class="contact">
        <span><i class="fas fa-phone"></i> &nbsp; 086666666</span>
        <span><i class="fas fa-envelope"></i> &nbsp; info@skuyjoin.com</span>
      </div>
      <div class="socials">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div>

    <div class="footer-section links">
      <h2>Links</h2>
      <br>
      <ul>
        <a href="#">
          <li>CSS</li>
        </a>
        <a href="#">
          <li>JAVA</li>
        </a>
        <a href="#">
          <li>PHP</li>
        </a>
      </ul>
    </div>

    <div class="footer-section contact-form">
      <h2>Contact us</h2>
      <br>
      <form action="index.php" method="post">
        <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
        <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
        <button type="submit" class="btn btn-big contact-btn">
          <i class="fas fa-paper-plane"></i>
            Submit
        </button>
      </form>
    </div>

  </div>

  <div class="footer-bottom">
     Copyright &copy; 2021 by Putri Prameswari
  </div>
</div>
  <!-- // footer -->
    
<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Slick Carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Custom Script -->
<script src="js/scripts.js"></script>

</body>
</html>