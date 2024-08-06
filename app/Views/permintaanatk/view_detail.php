<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadata dasar halaman -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Permintaan ATK</title>

    <!-- Menghubungkan stylesheet eksternal -->
    <link rel="stylesheet" href="/css/vdetail.css">

    <!-- Menghubungkan Font Awesome untuk ikon jika belum termasuk -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <!-- Kontainer utama untuk konten halaman -->
    <div class="container">
        <!-- Judul halaman -->
        <h1>Detail Permintaan ATK</h1>

        <!-- Tombol untuk kembali ke dashboard admin -->
        <a href="/atk/dashboardadmin" class="btn btn-warning">Home</a>

        <!-- Tombol untuk kembali ke halaman sebelumnya -->
        <a href="/permintaanatk/view_header" class="btn btn-warning">Back</a>

        <!-- Tabel untuk menampilkan detail permintaan ATK -->
        <table>
            <thead>
                <tr>
                    <!-- Header tabel -->
                    <th>ID Detail</th>
                    <th>ID Header</th>
                    <th>ID ATK</th>
                    <th>Nama ATK</th>
                    <th>Satuan</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop melalui data detail dan menampilkan setiap baris dalam tabel -->
                <?php foreach ($details as $detail): ?>
                    <tr>
                        <td><?= $detail['id_detail'] ?></td>
                        <td><?= $detail['id_header'] ?></td>
                        <td><?= $detail['id_atk'] ?></td>
                        <td><?= $detail['nama_atk'] ?></td>
                        <td><?= $detail['satuan'] ?></td>
                        <td><?= $detail['jumlah'] ?></td>
                        <td><?= $detail['status'] ?></td>
                        <!-- Link untuk mengedit detail permintaan -->
                        <td><a href="<?= base_url('/permintaanatk/editDetail/' . $detail['id_detail']) ?>" class="edit-link">Edit</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
