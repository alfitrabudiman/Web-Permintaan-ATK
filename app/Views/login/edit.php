<?= $this->extend('atk/layout') ?>

<!-- Mulai bagian konten halaman -->
<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <!-- Menampilkan judul halaman edit data login -->
                    <h1 class="card-title text-center mb-0">Form Edit Data Login</h1>
                </div>
                <div class="card-body">
                    <div class="col-md-6 offset-md-3">
                        <!-- Form untuk mengupdate data login, menggunakan metode POST -->
                        <form action="/login/update/<?= $user['id_login'] ?>" method="post">
                            <!-- Menyisipkan token CSRF untuk keamanan form -->
                            <?= csrf_field() ?>
                            <!-- Input untuk username -->
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?= $user['username'] ?>" required>
                            </div>
                            <!-- Input untuk password baru -->
                            <div class="form-group">
                                <label for="password">Password Baru</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password Baru">
                            </div>
                            <!-- Dropdown untuk memilih level pengguna -->
                            <div class="form-group">
                                <label for="level">Level</label>
                                <select class="form-control" id="level" name="level" required>
                                    <option value="" disabled>Pilih Level</option>
                                    <option value="1" <?= $user['level'] == 1 ? 'selected' : '' ?>>Bagian Perlengkapan</option>
                                    <option value="2" <?= $user['level'] == 2 ? 'selected' : '' ?>>Karyawan</option>
                                </select>
                            </div>
                            <!-- Tombol submit untuk menyimpan perubahan -->
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
