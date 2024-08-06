<?= $this->extend('/departemen/layout') ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Menu Kelola Data departemen</h1>
<table id="departemenTable" class="table table-bordered">
    <thead class="thead-dark">
    <tr>
            <th colspan="7">
                <a href="/departemen/add" class="btn btn-primary">Tambah Data</a>
                <a href="/atk/dashboardadmin" class="btn btn-warning">
                    <i class="fa fa-home"></i> <span>Home</span>
                </a>
            </th>
    </tr>
        <tr>
            <th>Id Departemen</th>
            <th>Nama Departemen</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($departemen as $departemen) : ?>
            <tr>
                <td>
                    <p>DPT <?= $departemen['id_departemen']; ?></p>
                </td>
                <td><?= $departemen['nama_departemen']; ?></td>
                <td>
                    <a href="/departemen/edit/<?= $departemen['id_departemen']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/departemen/delete/<?= $departemen['id_departemen']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus ini?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#departemenTable').DataTable();
    });
</script>
<?= $this->endSection() ?>