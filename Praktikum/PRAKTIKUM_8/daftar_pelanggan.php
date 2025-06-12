<?php
include 'koneksi_db.php';
include 'nav.php';

// Pencarian nama pelanggan
$nama = isset($_GET['nama']) ? $_GET['nama'] : '';

$query = "SELECT * FROM pelanggan";
if ($nama !== '') {
    $query .= " WHERE nama LIKE '%$nama%'";
}
$result = mysqli_query($conn, $query);
?>

<div class="container mt-4">
    <h2>Daftar Pelanggan</h2>
    <form class="form-inline mb-3" method="GET" action="">
        <input type="text" name="nama" class="form-control mr-2" placeholder="Masukkan nama pelanggan" value="<?php echo htmlspecialchars($nama); ?>">
        <button type="submit" class="btn btn-primary">Cari</button>
        <a href="daftar_pelanggan.php" class="btn btn-secondary ml-2">Reset</a>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['telepon']; ?></td>
                    <td>
                        <a href="form_edit.php?id=<?php echo $row['id']; ?>&type=pelanggan" class="btn btn-warning btn-sm">Edit</a>
                        <a href="proses_hapus.php?id=<?php echo $row['id']; ?>&type=pelanggan" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
