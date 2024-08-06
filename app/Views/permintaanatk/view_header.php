<!-- Memperluas template layout utama -->
<?= $this->extend('/permintaanatk/layout') ?>

<!-- Memulai bagian konten -->
<?= $this->section('content') ?>

<!-- Kontainer utama untuk konten halaman -->
<div class="container">
    <!-- Judul halaman -->
    <h1>Daftar Permintaan ATK</h1>

    <!-- Tombol kembali ke halaman utama admin -->
    <a href="/atk/dashboardadmin" class="btn">
        <i class="fa fa-home"></i> Home
    </a>
    
    <!-- Form untuk mengatur jumlah entri yang ditampilkan dan pencarian -->
    <form method="GET" action="" class="form-inline">
        <div>
            <!-- Dropdown untuk memilih jumlah entri yang ditampilkan -->
            <label for="entries">Show entries:</label>
            <select id="entries" name="entries" onchange="this.form.submit()">
                <?php foreach ([5, 10, 20, 50] as $entry): ?>
                    <!-- Pilihan dropdown dengan kondisi terpilih sesuai jumlah entri -->
                    <option value="<?= $entry ?>" <?= $entries == $entry ? 'selected' : '' ?>><?= $entry ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <!-- Input untuk melakukan pencarian -->
            <label for="search">Search:</label>
            <input type="text" id="search" name="search" value="<?= $search ?>" placeholder="Search...">
            <!-- Tombol submit untuk pencarian -->
            <button type="submit">Search</button>
        </div>
    </form>

    <!-- Tabel untuk menampilkan daftar permintaan ATK -->
    <table class="styled-table">
        <thead>
            <tr>
                <th>ID Header</th>
                <th>ID Karyawan</th>
                <th>Nama Karyawan</th>
                <th>ID Departemen</th>
                <th>Tanggal Permintaan</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop melalui data header dan menampilkan setiap baris dalam tabel -->
            <?php foreach ($headers as $header): ?>
                <tr>
                    <td>H<?= $header['id_header'] ?></td>
                    <td>K<?= $header['id_karyawan'] ?></td>
                    <td><?= $header['nama_karyawan'] ?></td>
                    <td>DPT<?= $header['id_departemen'] ?></td>
                    <td><?= $header['tgl_permintaan'] ?></td>
                    <!-- Link untuk melihat detail permintaan -->
                    <td><a href="<?= base_url('/permintaanatk/viewDetail/' . $header['id_header']) ?>" class="detail-link">Detail</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Menambahkan pagination dengan menggunakan Pager -->
    <div class="pagination">
        <?= $pager->links() ?>
    </div>
</div>

<!-- Mengakhiri bagian konten -->
<?= $this->endSection() ?>
