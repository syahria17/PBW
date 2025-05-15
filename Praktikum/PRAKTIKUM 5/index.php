<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Pertemuan 7 </title>
</head>
<body>
<?php
   echo "Halo, selamat datang di dunia PHP!";

   $nama = "Budi";
   $umur = 20;


   // Menampilkan nilai variabel
   echo "Nama: " . $nama . "<br>";
   echo "Umur: " . $umur . " tahun<br>";

   define("SITE_NAME", "unsika.ac.id");
   define("VERSION", "1.0");
   
   echo "Selamat datang di " . SITE_NAME . "<br>";
   echo "Versi Sistem: " . VERSION . "<br>";

?>
</body>
</html>