<?= $this->extend('karyawan/layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title text-center mb-0">Form Edit Data Karyawan</h1>
                </div>
                <div class="card-body">
                <div class="col-md-6 offset-md-3">
            <form action="/karyawan/update/<?= $karyawan['id_karyawan'] ?>" method="post">
                <div class="form-group">
                    <label for="nama_karyawan">Nama Karyawan</label>
                    <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" value="<?= $karyawan['nama_karyawan'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="id_departemen">ID Departemen</label>
                    <input type="text" class="form-control" id="id_departemen" name="id_departemen" value="<?= $karyawan['id_departemen'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="Laki-laki" <?= $karyawan['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                        <option value="Perempuan" <?= $karyawan['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                    </select>
                </div>
                <div class="form-group text-center">
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
