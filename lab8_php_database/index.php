<?php
include("koneksi.php");

// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Data Barang</title>
</head>
<body>
    <div class="container">
        <h1>Data Barang</h1>
        <div class="main">

            <a href="tambah.php" style="display:inline-block;margin-bottom:15px;">
                + Tambah Barang
            </a>

            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>

                <?php if ($result && mysqli_num_rows($result) > 0): ?>
                    <?php while ($row = mysqli_fetch_array($result)): ?>
                        <tr>
                            <td><img src="<?= $row['gambar']; ?>" width="100"></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['kategori']; ?></td>
                            <td><?= number_format($row['harga_jual']); ?></td>
                            <td><?= number_format($row['harga_beli']); ?></td>
                            <td><?= $row['stok']; ?></td>

                            <td>
                                <a href="ubah.php?id=<?= $row['id_barang']; ?>">Ubah</a> |
                                <a href="hapus.php?id=<?= $row['id_barang']; ?>" 
                                   onclick="return confirm('Yakin ingin menghapus?');">
                                   Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">Belum ada data</td>
                    </tr>
                <?php endif; ?>
            </table>
        </div>
    </div>
</body>
</html>
