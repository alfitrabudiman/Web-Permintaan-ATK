<?= $this->extend('/login/layout') ?>
<!-- Memperluas tampilan layout utama yang berada di /login/layout -->

<?= $this->section('content') ?>
<!-- Membuka bagian konten utama -->

<h1 class="mb-4">Menu Kelola Data Login</h1>
<!-- Menampilkan judul halaman -->

<table id="loginTable" class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th colspan="4">
                <div class="button-group">
                    <!-- Tombol untuk menambah data pengguna baru -->
                    <a href="/login/add" class="btn btn-primary btn-tambah">Tambah Data</a>
                    <!-- Tombol untuk navigasi kembali ke dashboard admin -->
                    <a href="/atk/dashboardadmin" class="btn btn-warning btn-navigasi">
                        <i class="fa fa-home"></i> <span>Home</span>
                    </a>
                </div>
            </th>
        </tr>
        <tr>
            <!-- Header kolom untuk tabel data pengguna -->
            <th>ID</th>
            <th>Username</th>
            <th>Level</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- Looping untuk menampilkan data pengguna -->
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user['id_login']; ?></td>
                <td><?= $user['username']; ?></td>
                <td><?= $user['level']; ?></td>
                <td>
                    <!-- Tombol untuk mengedit data pengguna -->
                    <a href="/login/edit/<?= $user['id_login']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <!-- Tombol untuk menghapus data pengguna dengan konfirmasi -->
                    <a href="/login/delete/<?= $user['id_login']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus ini?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        // Menginisialisasi DataTable untuk tabel login
        $('#loginTable').DataTable();
    });
</script>
<!-- Menutup bagian konten utama -->
<?= $this->endSection() ?>
