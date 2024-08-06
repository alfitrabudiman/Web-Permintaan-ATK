<?= $this->extend('atk/layout') ?>

<!-- Mulai bagian konten halaman -->
<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <!-- Menampilkan judul halaman tambah data login -->
                    <h1 class="card-title text-center mb-0">Form Tambah Data Login</h1>
                </div>
                <div class="card-body">
                    <div class="col-md-6 offset-md-3">
                        <!-- Form untuk menambahkan data login, menggunakan metode POST -->
                        <form action="/login/create" method="post">
                            <!-- Menyisipkan token CSRF untuk keamanan form -->
                            <?= csrf_field() ?>
                            <!-- Input untuk username -->
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                            </div>
                            <!-- Input untuk password -->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
                            <!-- Dropdown untuk memilih level pengguna -->
                            <div class="form-group">
                                <label for="level">Level</label>
                                <select class="form-control" id="level" name="level" required>
                                    <option value="" disabled selected>Pilih Level</option>
                                    <option value="1">Bagian Perlengkapan</option>
                                    <option value="2">Karyawan</option>
                                </select>
                            </div>
                            <!-- Tombol untuk membatalkan dan menyimpan data -->
                            <div class="form-group text-center">
                                <a href="/login/manage" class="btn btn-secondary mr-2">Cancel</a>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Penutup bagian konten halaman -->
<?= $this->endSection() ?>
