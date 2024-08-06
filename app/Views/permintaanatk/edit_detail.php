<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadata dasar halaman -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Detail</title>

    <!-- Menghubungkan stylesheet eksternal -->
    <link rel="stylesheet" href="/css/editdetail.css">
</head>
<body>
    <!-- Kontainer utama untuk konten halaman -->
    <div class="container">
        <!-- Form untuk memperbarui detail permintaan ATK -->
        <form action="<?= base_url('/permintaanatk/updateDetail') ?>" method="post" class="form">
            <!-- Input tersembunyi untuk menyimpan ID detail -->
            <input type="hidden" name="id_detail" value="<?= $detail['id_detail'] ?>">
            
            <!-- Grup formulir untuk ID Header -->
            <div class="form-group">
                <label for="id_header">ID Header:</label>
                <input type="text" name="id_header" value="<?= $detail['id_header'] ?>" required readonly>
            </div>

            <!-- Grup formulir untuk ID ATK -->
            <div class="form-group">
                <label for="id_atk">ID ATK:</label>
                <input type="text" name="id_atk" value="<?= $detail['id_atk'] ?>" required>
            </div>

            <!-- Grup formulir untuk Nama ATK -->
            <div class="form-group">
                <label for="nama_atk">Nama ATK:</label>
                <input type="text" name="nama_atk" value="<?= $detail['nama_atk'] ?>" required>
            </div>

            <!-- Grup formulir untuk Satuan -->
            <div class="form-group">
                <label for="satuan">Satuan:</label>
                <input type="text" name="satuan" value="<?= $detail['satuan'] ?>" required>
            </div>

            <!-- Grup formulir untuk Jumlah -->
            <div class="form-group">
                <label for="jumlah">Jumlah:</label>
                <input type="number" name="jumlah" value="<?= $detail['jumlah'] ?>" required>
            </div>

            <!-- Grup formulir untuk Status -->
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" required>
                    <!-- Opsi status dengan seleksi berdasarkan status saat ini -->
                    <option value="Pending" <?= ($detail['status'] == 'Pending') ? 'selected' : '' ?>>Pending</option>
                    <option value="Done" <?= ($detail['status'] == 'Done') ? 'selected' : '' ?>>Done</option>
                </select>
            </div>

            <!-- Grup formulir untuk tombol submit -->
            <div class="form-group full-width">
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>
