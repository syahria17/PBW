<?php
// Data Mahasiswa
$npm = "12345xxxx";
$nama = "AL BIN BITCOIN";
$prodi = "SAIN DATA";
$semester = 9;
$biaya_ukt = 5900000;

// Logika Diskon
$diskon = 0;

if ($biaya_ukt >= 5000000) {
    $diskon = 10;
    if ($semester > 8) {
        $diskon += 5; // Jadi 15%
    }
}

// Hitung total yang harus dibayar
$jumlah_diskon = ($diskon / 100) * $biaya_ukt;
$total_bayar = $biaya_ukt - $jumlah_diskon;

// Tampilkan hasil
echo "NPM : $npm <br>";
echo "NAMA : $nama <br>";
echo "PRODI : $prodi <br>";
echo "SEMESTER : $semester <br>";
echo "BIAYA UKT : Rp. " . number_format($biaya_ukt, 0, ',', '.') . ",-<br>";
echo "DISKON : $diskon%<br>";
echo "YANG HARUS DIBAYAR : Rp. " . number_format($total_bayar, 0, ',', '.') . ",-";
?>
