<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Existing head content -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url("css/keloladpt.css") ?>" />
    <style>
        /* Gaya khusus untuk navbar */
        .navbar-custom {
            background-color: #42a5f5; /* Warna biru muda */
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-nav .nav-link {
            color: white; /* Warna teks putih */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <a class="navbar-brand" href="#">Bagian Perlengkapan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?= (uri_string() == 'atk/kelola_data_atk') ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= site_url('atk/kelola_data_atk') ?>">Kelola Data ATK <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?= (uri_string() == 'karyawan/kelola_data_karyawan') ? 'active' : '' ?>">
                    <a class="nav-link"
                        href="<?= site_url('karyawan/kelola_data_karyawan') ?>">Kelola Data Karyawan <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <li class="nav-item <?= (uri_string() == 'bagianperlengkapan/kelola_data_bagianperlengkapan') ? 'active' : '' ?>">
                    <a class="nav-link"
                        href="<?= site_url('bagianperlengkapan/kelola_data_bagianperlengkapan') ?>">Kelola Data Bagian
                        Perlengkapan <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?= (uri_string() == 'departemen/kelola_data_departemen') ? 'active' : '' ?>">
                    <a class="nav-link"
                        href="<?= site_url('departemen/kelola_data_departemen') ?>">Kelola Data Departemen <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?= (uri_string() == 'permintaanatk/view_header') ? 'active' : '' ?>">
                    <a class="nav-link"
                        href="<?= site_url('permintaanatk/view_header') ?>">Kelola Data Permintaan ATK <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?= (uri_string() == 'login/manage') ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= site_url('login/manage') ?>">Kelola Data Login <span
                            class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <?= $this->renderSection('content') ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
