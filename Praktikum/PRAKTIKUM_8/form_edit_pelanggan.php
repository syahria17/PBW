<?php
include 'koneksi_db.php';
include 'nav.php';

$id = $_GET['id'] ?? 0;

// Ambil data pelanggan berdasarkan ID
$stmt = $conn->prepare("SELECT * FROM pelanggan WHERE ID = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <title>Edit Pelanggan</title>
</head>
<body>
   <div class="container mt-4">
       <h2>Edit Data Pelanggan</h2>
       <form method="post" action="proses_edit_pelanggan.php">
           <input type="hidden" name="id" value="<?= $row['ID'] ?>">
           <input type="hidden" name="type" value="pelanggan">

           <div class="mb-3">
               <label for="nama" class="form-label">Nama</label>
               <input type="text" class="form-control" id="nama" name="nama" value="<?= htmlspecialchars($row['nama']) ?>" required>
           </div>
           <div class="mb-3">
               <label for="alamat" class="form-label">Alamat</label>
               <input type="text" class="form-control" id="alamat" name="alamat" value="<?= htmlspecialchars($row['alamat']) ?>" required>
           </div>
           <div class="mb-3">
               <label for="telepon" class="form-label">Telepon</label>
               <input type="text" class="form-control" id="telepon" name="telepon" value="<?= htmlspecialchars($row['telepon']) ?>" required>
           </div>

           <button type="submit" class="btn btn-success">Simpan Perubahan</button>
       </form>
   </div>
</body>
</html>
