<?= $this->extend('atk/layout') ?>
<!-- Menggunakan template dasar dari 'atk/layout' -->

<?= $this->section('content') ?>
<!-- Menentukan bagian konten yang akan diisi -->

<div class="container">
    <!-- Kontainer utama untuk menyusun layout dengan bootstrap -->
    <div class="row justify-content-center">
        <!-- Baris dengan elemen-elemen yang diposisikan di tengah -->
        <div class="col-md-8">
            <!-- Kolom yang mengambil 8 dari 12 bagian lebar grid bootstrap -->
            <div class="card">
                <!-- Komponen card bootstrap untuk membungkus konten form -->
                <div class="card-header">
                    <!-- Header dari card -->
                    <h1 class="card-title text-center mb-0">Form Tambah Data ATK</h1>
                    <!-- Judul form yang ditampilkan di tengah dengan margin bawah 0 -->
                </div>
                <div class="card-body">
                    <!-- Badan dari card yang berisi form -->
                    <div class="col-md-6 offset-md-3">
                        <!-- Kolom yang diposisikan di tengah dengan offset 3 -->
                        <form action="/atk/store" method="post">
                            <!-- Form yang mengirim data ke URL '/atk/store' menggunakan metode POST -->
                            <div class="form-group">
                                <!-- Grup input untuk nama ATK -->
                                <label for="nama_atk">Nama ATK</label>
                                <!-- Label untuk input nama ATK -->
                                <input type="text" class="form-control" id="nama_atk" name="nama_atk" required>
                                <!-- Input text untuk nama ATK dengan kelas bootstrap dan atribut wajib diisi -->
                            </div>
                            <div class="form-group">
                                <!-- Grup input untuk stok ATK -->
                                <label for="stok">Stok</label>
                                <!-- Label untuk input stok -->
                                <input type="text" class="form-control" id="stok" name="stok" required>
                                <!-- Input text untuk stok dengan kelas bootstrap dan atribut wajib diisi -->
                            </div>
                            <div class="form-group">
                                <!-- Grup input untuk satuan ATK -->
                                <label for="satuan">Satuan</label>
                                <!-- Label untuk input satuan -->
                                <input type="text" class="form-control" id="satuan" name="satuan" required>
                                <!-- Input text untuk satuan dengan kelas bootstrap dan atribut wajib diisi -->
                            </div>
                            <div class="form-group text-center">
                                <!-- Grup tombol dengan teks yang diposisikan di tengah -->
                                <a href="/atk/kelola_data_atk" class="btn btn-secondary mr-2">Cancel</a>
                                <!-- Tombol untuk membatalkan dan kembali ke halaman pengelolaan data ATK -->
                                <button type="submit" class="btn btn-success">Add</button>
                                <!-- Tombol submit untuk menambahkan data -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
<!-- Mengakhiri bagian konten -->
