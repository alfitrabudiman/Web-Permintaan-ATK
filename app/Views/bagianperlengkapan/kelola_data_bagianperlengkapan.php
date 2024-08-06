<?= $this->extend('/bagianperlengkapan/layout') ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Menu Kelola Data Bagian Perlengkapan</h1>

<table id="bagianperlengkapanTable" class="table table-bordered">
    <thead class="thead-dark">
    <tr>
            <th colspan="7">
                <a href="/bagianperlengkapan/add" class="btn btn-primary">Tambah Data</a>
                <a href="/atk/dashboardadmin" class="btn btn-warning">
                    <i class="fa fa-home"></i> <span>Home</span>
                </a>
            </th>
    </tr>
        <tr>
            <th>Id Bagian Perlengkapan</th>
            <th>Nama Bagian Perlengkapan</th>
            <th>Id Departemen</th>
            <th>Jenis Kelamin</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($bagianperlengkapan as $bagianperlengkapan) : ?>
            <tr>
                <td>
                    <p>BG <?= $bagianperlengkapan['id_bagianperlengkapan']; ?></p>
                </td>
                <td><?= $bagianperlengkapan['nama_bagianperlengkapan']; ?></td>
                <td>
                    <p?>DPT <?= $bagianperlengkapan['id_bagianperlengkapan']; ?></p>
                </td>
                <td><?= $bagianperlengkapan['jenis_kelamin']; ?></td>
                <td>
                    <a href="/bagianperlengkapan/edit/<?= $bagianperlengkapan['id_bagianperlengkapan']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/bagianperlengkapan/delete/<?= $bagianperlengkapan['id_bagianperlengkapan']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus ini?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#bagianperlengkapanTable').DataTable();
    });
</script>
<?= $this->endSection() ?>