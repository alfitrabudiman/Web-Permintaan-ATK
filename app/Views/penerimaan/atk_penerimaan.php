<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PENERIMAAN ATK</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-yellow {
            background-color: yellow;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">DATA PENERIMAAN ATK</h1>
        <div class="row mb-4">
            <div class="col-md-6">
                <form method="post" action="<?= base_url('penerimaan/penerimaan') ?>" class="d-flex">
                    <div class="input-group me-2">
                        <label for="start_date" class="input-group-text">Start Date:</label>
                        <input type="date" id="start_date" name="start_date" class="form-control" required>
                    </div>
                    <div class="input-group me-2">
                        <label for="end_date" class="input-group-text">End Date:</label>
                        <input type="date" id="end_date" name="end_date" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Filter</button>
                    <a href="<?= base_url('atk/dashboardadmin') ?>" class="btn btn-warning">Home</a>
                </form>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-center">
                <?php if (isset($atk_data) && !empty($atk_data)): ?>
                    <form method="post" action="<?= base_url('penerimaan/generatePdf') ?>">
                        <input type="hidden" name="start_date" value="<?= session()->get('start_date') ?>">
                        <input type="hidden" name="end_date" value="<?= session()->get('end_date') ?>">
                        <button type="submit" class="btn btn-success">Cetak PDF</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>

        <?php if (isset($atk_data) && !empty($atk_data)): ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama Karyawan</th>
                            <th>ID Departemen</th>
                            <th>Tanggal Permintaan</th>
                            <th>Nama ATK</th>
                            <th>Jumlah</th>
                            <th>Satuan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($atk_data as $atk): ?>
                            <tr>
                                <td><?= $atk['nama_karyawan'] ?></td>
                                <td>
                                   <p>DPT <?= $atk['id_departemen'] ?> </p>
                                </td>
                                <td><?= $atk['tgl_permintaan'] ?></td>
                                <td><?= $atk['nama_atk'] ?></td>
                                <td><?= $atk['jumlah'] ?></td>
                                <td><?= $atk['satuan'] ?></td>
                                <td><?= $atk['status'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <p class="alert alert-warning">Tidak ada data</p>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
