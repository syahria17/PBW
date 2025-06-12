<?php
include 'koneksi_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    $stmt = $conn->prepare("UPDATE pelanggan SET nama = ?, alamat = ?, telepon = ? WHERE ID = ?");
    $stmt->bind_param("sssi", $nama, $alamat, $telepon, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Data pelanggan berhasil diperbarui'); window.location='daftar_pelanggan.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data pelanggan'); window.location='daftar_pelanggan.php';</script>";
    }
}
?>
