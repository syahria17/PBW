<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Total Pembelian (Dengan Array)</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 30px;
        }

        .box {
            border: 1px solid black;
            padding: 20px;
            width: 500px;
        }

        h2 {
            font-weight: bold;
            font-size: 22px;
            margin: 0 0 10px 0;
        }

        hr {
            border: 1px solid black;
            margin: 10px 0;
        }

        .bold {
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 15px;
        }

        select, input[type=number] {
            width: 100%;
            padding: 5px;
            font-family: 'Times New Roman';
        }

        input[type=submit] {
            padding: 5px 10px;
            font-family: 'Times New Roman';
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Perhitungan Total Pembelian (Dengan Array)</h2>
        <hr>

        <form method="POST">
            <div class="form-group">
                <label for="barang">Nama Barang:</label>
                <select name="barang" id="barang" required>
                    <option value="">-- Pilih Barang --</option>
                    <option value="0">Keyboard</option>
                    <option value="1">Mouse</option>
                    <option value="2">Monitor</option>
                </select>
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah Beli:</label>
                <input type="number" name="jumlah" id="jumlah" min="1" required>
            </div>

            <input type="submit" value="Hitung Total">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $barang = ["Keyboard", "Mouse", "Monitor"];
            $harga = [150000, 100000, 1200000];

            $index = $_POST['barang'];
            $jumlah = $_POST['jumlah'];

            define("PAJAK", 0.10);

            $total = $harga[$index] * $jumlah;
            $pajak = $total * PAJAK;
            $totalBayar = $total + $pajak;

            function formatRupiah($angka) {
                return "Rp " . number_format($angka, 0, ',', '.');
            }

            echo "<br>Nama Barang: " . $barang[$index] . "<br>";
            echo "Harga Satuan: " . formatRupiah($harga[$index]) . "<br>";
            echo "Jumlah Beli: " . $jumlah . "<br>";
            echo "Total Harga (Sebelum Pajak): " . formatRupiah($total) . "<br>";
            echo "Pajak (10%): " . formatRupiah($pajak) . "<br>";
            echo "<span class='bold'>Total Bayar: " . formatRupiah($totalBayar) . "</span>";
        }
        ?>
    </div>
</body>
</html>
