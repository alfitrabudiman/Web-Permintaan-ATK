<?= $this->extend('/atk/layout') ?>
<!-- Menggunakan layout dasar dari 'atk/layout' -->

<?= $this->section('content') ?>
<!-- Menentukan bagian konten yang akan diisi -->

<h1 class="mb-4">Menu Kelola Data ATK</h1>
<!-- Judul halaman -->

<table id="atkTable" class="table table-bordered">
    <thead class="thead-dark">
    <!-- Bagian header tabel -->
    <tr>
        <th colspan="7">
            <!-- Kolom untuk tombol aksi -->
            <a href="/atk/add" class="btn btn-primary">Tambah Data</a>
            <!-- Tombol untuk menambah data ATK -->
            <a href="/atk/dashboardadmin" class="btn btn-warning">
                <i class="fa fa-home"></i> <span>Home</span>
                <!-- Tombol untuk kembali ke dashboard admin dengan -->
            </a>
        </th>
    </tr>
    <tr>
        <!-- Header kolom tabel -->
        <th>Id Atk</th>
        <!-- Kolom untuk ID ATK -->
        <th>Nama Atk</th>
        <!-- Kolom untuk Nama ATK -->
        <th>Stok</th>
        <!-- Kolom untuk Stok ATK -->
        <th>Satuan</th>
        <!-- Kolom untuk Satuan ATK -->
        <th>Action</th>
        <!-- Kolom untuk Aksi (Edit dan Delete) -->
    </tr>
    </thead>
    <tbody>
        <!-- Bagian body tabel -->
        <?php foreach ($atk as $atk) : ?>
            <!-- Looping melalui setiap item ATK -->
            <tr>
                <td>
                    <p>BR <?= $atk['id_atk']; ?></p>
                    <!-- Menampilkan ID ATK dengan prefix 'BR' -->
                </td>
                <td><?= $atk['nama_atk']; ?></td>
                <!-- Menampilkan Nama ATK -->
                <td><?= $atk['stok']; ?></td>
                <!-- Menampilkan Stok ATK -->
                <td><?= $atk['satuan']; ?></td>
                <!-- Menampilkan Satuan ATK -->
                <td>
                    <a href="/atk/edit/<?= $atk['id_atk']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <!-- Tombol untuk mengedit data ATK -->
                    <a href="/atk/delete/<?= $atk['id_atk']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus ini?');">Delete</a>
                    <!-- Tombol untuk menghapus data ATK dengan konfirmasi -->
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Menyertakan skrip untuk inisialisasi DataTable -->
<script>
    $(document).ready(function() {
        $('#atkTable').DataTable();
        // Menginisialisasi DataTable pada tabel dengan ID 'atkTable'
    });
</script>

<?= $this->endSection() ?>
<!-- Mengakhiri bagian konten -->
