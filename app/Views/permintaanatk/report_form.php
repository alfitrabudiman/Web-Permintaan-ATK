<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadata dasar halaman -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Permintaan ATK</title>

    <!-- Menghubungkan stylesheet eksternal -->
    <link rel="stylesheet" href="/css/laporanform.css">
</head>
<body>
    <!-- Kontainer utama untuk konten halaman -->
    <div class="container">
        <!-- Judul halaman -->
        <h1 class="title">Laporan Permintaan ATK</h1>

        <!-- Form untuk menghasilkan laporan berdasarkan rentang tanggal -->
        <form action="<?= base_url('permintaanatk/generateReport') ?>" method="post" class="form">
            <!-- Grup formulir untuk Tanggal Mulai -->
            <div class="form-group">
                <label for="start_date" class="label">Tanggal Mulai:</label>
                <input type="date" name="start_date" id="start_date" class="input" required>
            </div>
            
            <!-- Grup formulir untuk Tanggal Akhir -->
            <div class="form-group">
                <label for="end_date" class="label">Tanggal Akhir:</label>
                <input type="date" name="end_date" id="end_date" class="input" required>
            </div>
            
            <!-- Tombol untuk mengirimkan form -->
            <button type="submit" class="button">View</button>
        </form>
        
        <!-- Tombol untuk kembali ke halaman dashboard admin -->
        <a href="/atk/dashboardadmin" class="btn-home">
            <i class="fa fa-home"></i> <span>Home</span>
        </a>
    </div>
</body>
</html>
