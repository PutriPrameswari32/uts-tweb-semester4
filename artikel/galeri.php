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
   <link rel="stylesheet" href="css/galeri.css">

   

    <title>Berita Terkini</title>
</head>

<body>

<!-- Header -->
<?php include(ROOT_PATH . "/header.php"); ?>
<!-- End Header -->


<div class="container">
  <div class="galeri">
    <h1>Galeri</h1>
    <p>Ini galeri dari BEEnews</p>
</div>
<?php $ambil = $koneksi->query("SELECT * FROM galeri"); ?>
        <?php $pecah=$ambil->fetch_assoc()?>
        
  <div class="foto">
    <img src="./assets/<?php echo$pecah["foto"]; ?>" alt="">
    <img src="./assets/<?php echo$pecah["foto"]; ?>" alt="">
    <img src="./assets/<?php echo$pecah["foto"]; ?>" alt="">
  
  </div>
</div>



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
      <form action="index.html" method="post">
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