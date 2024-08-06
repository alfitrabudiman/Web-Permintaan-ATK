<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Bagian Perlengkapan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/css/dashboardbgperlengkapan.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">SMP Nurul Anwar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bagian Perlengkapan
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" onclick="confirmLogout()"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="slider">
        <div class="slider-head">
            <p>Bagian Perlengkapan</p>
        </div>
        <div class="slider-body">
            <nav class="nav flex-column">
                <a class="nav-link" href="<?= site_url('atk/kelola_data_atk') ?>"><i class="fas fa-pencil-alt"></i> Kelola Data ATK</a>
                <a class="nav-link" href="<?= site_url('karyawan/kelola_data_karyawan') ?>"><i class="fas fa-users"></i> Kelola Data Karyawan</a>
                <a class="nav-link" href="<?= site_url('bagianperlengkapan/kelola_data_bagianperlengkapan') ?>"><i class="fas fa-box"></i> Kelola Data Bagian Perlengkapan</a>
                <a class="nav-link" href="<?= site_url('departemen/kelola_data_departemen') ?>"><i class="fas fa-building"></i> Kelola Data Departemen</a>
                <a class="nav-link" href="<?= site_url('permintaanatk/view_header') ?>"><i class="fas fa-clipboard-list"></i> Kelola Data Permintaan ATK</a>
                <a class="nav-link" href="<?= site_url('login/manage') ?>"><i class="fas fa-user-lock"></i> Kelola Data Login</a>
                <a class="nav-link" href="<?= site_url('penerimaan/atk_penerimaan') ?>"><i class="fas fa-file-alt"></i> Data Penerimaan Atk</a>
                <a class="nav-link" href="<?= site_url('permintaanatk/report_form') ?>"><i class="fas fa-file-alt"></i> Laporan Permintaan ATK</a>
            </nav>
        </div>
    </div>

    <div class="content">
        <div class="feature-box">
            <i class="fas fa-pencil-alt"></i>
            <h3>Jumlah ATK Saat Ini</h3>
            <p><?= $totalJenisAtk ?> ATK</p>
        </div>
        <div class="feature-box">
            <i class="fas fa-file-alt"></i>
            <h3>Membuat Laporan Permintaan ATK</h3>
            <a class="nav-link" href="<?= site_url('permintaanatk/report_form') ?>"></i> Buat</a>

        </div>
        <div class="feature-box">
            <i class="fas fa-users"></i>
            <h3>karyawan mengajukan permintaan ATK</h3>
            <a class="nav-link" href="<?= site_url('permintaanatk/view_header') ?>"></i> Lihat</a>

        </div>
        <div class="feature-box">
            <i class="fas fa-user-lock"></i>
            <h3>Periksa Akses Masuk</h3>
            <a class="nav-link" href="<?= site_url('login/manage') ?>"></i> Periksa</a>
        </div>
        <div class="feature-box">
            <i class="fas fa-info-circle"></i>
            <h3>Attention</h3>
            <p>Harap Mengecek Permintaan ATK Dari Karyawan :)</p>
        </div>
        <div class="feature-box">
            <i class="fas fa-tasks"></i>
            <h3>Tugas Anda</h3>
            <ul>
                <li>Periksa stok ATK</li>
                <li>Verifikasi permintaan ATK</li>
                <li>Membuat Laporan</li>
            </ul>
        </div>
        <canvas id="atkUsageChart"></canvas>
    </div>
    <footer class="footer">
        <p>&copy; 2024 SMP Nurul Anwar Bekasi. All rights reserved.</p>
      </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        function confirmLogout() {
            var confirmation = confirm("Apakah Anda ingin logout?");
            if (confirmation) {
                window.location.href = "<?= site_url('logout') ?>"; // Menggunakan rute CodeIgniter
            }
        }
    </script>
    
</body>

</html>
