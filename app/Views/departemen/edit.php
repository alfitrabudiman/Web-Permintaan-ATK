<?= $this->extend('departemen/layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title text-center mb-0">Form Edit Data Departemen</h1>
                </div>
                <div class="card-body">
                <div class="col-md-6 offset-md-3">
            <form action="/departemen/update/<?= $departemen['id_departemen'] ?>" method="post">
                <div class="form-group">
                    <label for="nama_departemen">Nama Departemen</label>
                    <input type="text" class="form-control" id="nama_departemen" name="nama_departemen" value="<?= $departemen['nama_departemen'] ?>" required>
                </div>
                <div class="form-group text-center">
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
