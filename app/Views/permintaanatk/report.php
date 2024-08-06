<!DOCTYPE html>
<html>
<head>
    <!-- Judul halaman dan penghubung stylesheet eksternal -->
    <title>Laporan Permintaan ATK</title>
    <link rel="stylesheet" href="/css/reportview.css">
</head>
<body>
    <!-- Judul utama halaman -->
    <h1>Laporan Permintaan ATK</h1>

    <!-- Tabel untuk menampilkan laporan permintaan ATK -->
    <table>
        <!-- Header tabel -->
        <thead>
            <tr>
                <th>Nama Karyawan</th>
                <th>ID Departemen</th>
                <th>Tanggal Permintaan</th>
                <th>Nama ATK</th>
                <th>Satuan</th>
                <th>Jumlah</th>
                <th>Status</th>
            </tr>
        </thead>
        <!-- Badan tabel -->
        <tbody>
            <!-- Looping melalui data untuk menampilkan setiap permintaan ATK -->
            <?php foreach ($data as $item): ?>
                <?php foreach ($item['details'] as $detail): ?>
                    <tr>
                        <!-- Menampilkan nama karyawan -->
                        <td><?= $item['header']['nama_karyawan'] ?></td>
                        <!-- Menampilkan ID departemen dengan awalan "DPT" -->
                        <td>
                           <p>DPT <?= $item['header']['id_departemen'] ?></p>
                        </td>
                        <!-- Menampilkan tanggal permintaan -->
                        <td><?= $item['header']['tgl_permintaan'] ?></td>
                        <!-- Menampilkan nama ATK -->
                        <td><?= $detail['nama_atk'] ?></td>
                        <!-- Menampilkan satuan ATK -->
                        <td><?= $detail['satuan'] ?></td>
                        <!-- Menampilkan jumlah ATK yang diminta -->
                        <td><?= $detail['jumlah'] ?></td>
                        <!-- Menampilkan status permintaan ATK -->
                        <td><?= $detail['status'] ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Form untuk mencetak laporan ke PDF -->
    <form action="<?= base_url('permintaanatk/exportPdf') ?>" method="post">
        <!-- Menyembunyikan input untuk tanggal mulai dan tanggal akhir -->
        <input type="hidden" name="start_date" value="<?= $startDate ?>">
        <input type="hidden" name="end_date" value="<?= $endDate ?>">
        <!-- Tombol untuk submit form dan mencetak laporan ke PDF -->
        <button type="submit">Cetak ke PDF</button>
    </form>
</body>
</html>
