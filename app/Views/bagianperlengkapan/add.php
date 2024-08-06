<?= $this->extend('bagianperlengkapan/layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title text-center mb-0">Form Tambah Data Bagian Perlengkapan</h2>
                </div>
    <div class="card-body">
        <div class="col-md-6 offset-md-3">
            <form action="/bagianperlengkapan/store" method="post">
                <div class="form-group">
                    <label for="nama_bagianperlengkapan">Nama Bagian Perlengkapan</label>
                    <input type="hidden" class="form-control" id="id_bagianperlengkapan" name="id_bagianperlengkapan">
                    <input type="text" class="form-control" id="nama_bagianperlengkapan" name="nama_bagianperlengkapan" required>
                </div>
                <div class="form-group">
                    <label for="id_departemen">ID Departemen</label>
                    <input type="text" class="form-control" id="id_departemen" name="id_departemen" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group text-center">
                <a href="/bagianperlengkapan/kelola_data_bagianperlengkapan" class="btn btn-secondary mr-2">Cancel</a>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
