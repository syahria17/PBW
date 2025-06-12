<?php include 'menu.php'; ?>
<br><br>
<?php
$jumlah_roda = 4;

switch ($jumlah_roda) {
    case 2:
        echo "Jenis Kendaraan: Sepeda Motor";
        break;
    case 3:
        echo "Jenis Kendaraan: Bajaj";
        break;
    case 4:
        echo "Jenis Kendaraan: Mobil";
        break;
    case 6:
        echo "Jenis Kendaraan: Truk";
        break;
    default:
        echo "Jenis Kendaraan tidak diketahui.";
}
?>
