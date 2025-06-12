<!DOCTYPE html>
<html>
<head>
    <title>Latihan Nilai</title>
</head>
<body>

<h2>Form Nilai Mahasiswa</h2>
<form method="POST" action="">
    Nama Mahasiswa: <input type="text" name="nama"><br>
    Nilai: <input type="number" name="nilai" ><br>
    <input type="submit" value="Proses">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];

    echo "<h3>Hasil:</h3>";
    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Nilai: " . htmlspecialchars($nilai) . "<br>";

    // Menentukan predikat
    if ($nilai >= 85 && $nilai <= 100) {
        $predikat = "A";
    } elseif ($nilai >= 75 && $nilai <= 84) {
        $predikat = "B";
    } elseif ($nilai >= 65 && $nilai <= 74) {
        $predikat = "C";
    } elseif ($nilai >= 50 && $nilai <= 64) {
        $predikat = "D";
    } elseif ($nilai >= 0 && $nilai <= 49) {
        $predikat = "E";
    } else {
        $predikat = "Tidak valid";
    }

    echo "Predikat: " . $predikat;
}
?>

</body>
</html>
