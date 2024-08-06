<?= $this->extend('departemen/layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title text-center mb-0">Form Tambah Data Departemen</h1>
                </div>
                <div class="card-body">
                <div class="col-md-6 offset-md-3">
            <form action="/departemen/store" method="post">
                <div class="form-group">
                    <label for="nama_departemen">Nama Departemen</label>
                    <input type="hidden" class="form-control" id="id_departemen" name="id_departemen">
                    <input type="text" class="form-control" id="nama_departemen" name="nama_departemen" required>
                </div>
                <div class="form-group text-center">
                <a href="/departemen/kelola_data_departemen" class="btn btn-secondary mr-2">Cancel</a>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
