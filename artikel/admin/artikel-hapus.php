<?php 

include '../koneksi.php';


$ambil = $koneksi->query("SELECT * FROM berita WHERE id = '$_GET[id]' ");
$pecah = $ambil->fetch_assoc();


$koneksi->query("DELETE FROM berita WHERE id='$_GET[id]' ");

echo "<script>alert('Data Terhapus'); </script>";
echo "<script>location='artikelUtama.php'; </script>";

?>