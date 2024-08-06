<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Permintaan ATK</title>
    <!-- Menghubungkan stylesheet untuk tampilan form -->
    <link rel="stylesheet" href="/css/cheader.css">
    <!-- Menghubungkan jQuery dari CDN untuk AJAX -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div class="form-container">
    <h2>FORM PERMINTAAN ATK</h2>
    <h3>ISI DATA DIRI ANDA</h3>
    <!-- Form untuk menyimpan data header permintaan ATK -->
    <form action="<?= base_url('/permintaanatk/storeHeader') ?>" method="post">
        <div class="form-group">
            <label for="id_karyawan">ID Karyawan:</label>
            <!-- Dropdown untuk memilih ID Karyawan -->
            <select id="id_karyawan" name="id_karyawan" required>
                <option value="">Pilih Data Karyawan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="nama_karyawan">Nama Karyawan:</label>
            <!-- Input untuk menampilkan nama karyawan (readonly) -->
            <input type="text" id="nama_karyawan" name="nama_karyawan" required readonly>
        </div>
        <div class="form-group">
            <label for="id_departemen">ID Departemen:</label>
            <!-- Input untuk menampilkan ID Departemen (readonly) -->
            <input type="text" id="id_departemen" name="id_departemen" required readonly>
        </div>
        <div class="form-group">
            <label for="tgl_permintaan">Tanggal Permintaan:</label>
            <!-- Input untuk memasukkan tanggal permintaan -->
            <input type="date" name="tgl_permintaan" required>
        </div>
        <div class="form-group">
            <!-- Tombol untuk menyimpan data form -->
            <button type="submit">Simpan</button>
        </div>
    </form>
</div>

<script>
$(document).ready(function() {
    // Ambil data karyawan dari server menggunakan AJAX saat dokumen siap
    $.ajax({
        url: '<?= base_url('karyawan/getAll') ?>', // URL endpoint untuk mendapatkan data karyawan
        method: 'GET',
        success: function(data) {
            var idKaryawanDropdown = $('#id_karyawan');
            // Iterasi data karyawan dan tambahkan ke dropdown ID Karyawan
            $.each(data, function(index, karyawan) {
                // Tambahkan option dengan format yang diinginkan: ID - Nama - ID Departemen
                idKaryawanDropdown.append(new Option(karyawan.id_karyawan + ' - ' + karyawan.nama_karyawan + ' - ' + karyawan.id_departemen, karyawan.id_karyawan));
            });
        }
    });

    // Ketika pengguna memilih ID Karyawan dari dropdown
    $('#id_karyawan').change(function() {
        var selectedId = $(this).val();
        $.ajax({
            url: '<?= base_url('karyawan/getAll') ?>', // URL endpoint untuk mendapatkan data karyawan
            method: 'GET',
            success: function(data) {
                // Iterasi data karyawan untuk mencari yang sesuai dengan ID yang dipilih
                $.each(data, function(index, karyawan) {
                    if (karyawan.id_karyawan == selectedId) {
                        // Set nilai kolom Nama Karyawan dan ID Departemen sesuai dengan data yang dipilih
                        $('#nama_karyawan').val(karyawan.nama_karyawan);
                        $('#id_departemen').val(karyawan.id_departemen);
                        return false; // Menghentikan iterasi karena sudah ditemukan data yang sesuai
                    }
                });
            }
        });
    });
});
</script>

</body>
</html>
