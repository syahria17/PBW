<?php include 'menu.php'; ?>
<br><br>
<?php
$hewan = ["Kucing", "Anjing", "Burung", "Ikan", "Kelinci"];

echo "Daftar Hewan:<br>";
foreach ($hewan as $nama) {
    echo "- " . $nama . "<br>";
}
?>
