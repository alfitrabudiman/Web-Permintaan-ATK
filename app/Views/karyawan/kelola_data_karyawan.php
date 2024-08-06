<?= $this->extend('/karyawan/layout') ?>


<?= $this->section('content') ?>
<h1 class="mb-4">Menu Kelola Data Karyawan</h1>

<table id="karyawanTable" class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th colspan="7">
                <a href="/karyawan/add" class="btn btn-primary">Tambah Data</a>
                <a href="/atk/dashboardadmin" class="btn btn-warning">
                    <i class="fa fa-home"></i> <span>Home</span>
                </a>
            </th>
        </tr>
        <tr>
            <th>Id Karyawan</th>
            <th>Nama Karyawan</th>
            <th>Id Departemen</th>
            <th>Jenis Kelamin</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($karyawan as $karyawan) : ?>
            <tr>
                <td>
                    <p>K <?= $karyawan['id_karyawan']; ?></p>
                </td>
                <td><?= $karyawan['nama_karyawan']; ?></td>
                <td>
                    <p?>DPT <?= $karyawan['id_departemen']; ?></p>
                </td>
                <td><?= $karyawan['jenis_kelamin']; ?></td>
                <td>
                    <a href="/karyawan/edit/<?= $karyawan['id_karyawan']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/karyawan/delete/<?= $karyawan['id_karyawan']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus ini?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#karyawanTable').DataTable();
    });
</script>
<?= $this->endSection() ?>
