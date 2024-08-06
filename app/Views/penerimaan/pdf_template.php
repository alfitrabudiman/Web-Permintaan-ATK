<!DOCTYPE html>
<html>
<head>
    <title>Laporan Penerimaan ATK</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin: 20px 0;
        }
        p {
            text-align: center;
            margin: 20px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
            text-align: center;
        }
        th, td {
            padding: 8px;
        }
        .department-id {
            font-weight: bold;
        }
        .ttd-section {
            margin-top: 50px;
            text-align: center;
            width: 50%;
            float: right;
        }
        /* Style untuk elemen div di dalam bagian tanda tangan */
        .ttd-section div {
            margin-bottom: 5px;
        }
        /* Style khusus untuk nama tanda tangan */
        .ttd-name {
            margin-top: 65px;
        }
    </style>
</head>
<body>
    <h1>Laporan Penerimaan ATK</h1>
    <p>Periode: <?= $start_date ?> - <?= $end_date ?></p>
    <table>
        <thead>
            <tr>
                <th>Nama Karyawan</th>
                <th>ID Departemen</th>
                <th>Tanggal Permintaan</th>
                <th>Nama ATK</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Status</th>
                <th>Tanda Tangan Karyawan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($atk_data as $atk): ?>
                <tr>
                    <td><?= $atk['nama_karyawan'] ?></td>
                    <td><p class="department-id">DPT <?= $atk['id_departemen'] ?></p></td>
                    <td><?= $atk['tgl_permintaan'] ?></td>
                    <td><?= $atk['nama_atk'] ?></td>
                    <td><?= $atk['jumlah'] ?></td>
                    <td><?= $atk['satuan'] ?></td>
                    <td><?= $atk['status'] ?></td>
                    <td></td> <!-- Kolom untuk tanda tangan, bisa diisi kemudian -->
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- Bagian tanda tangan bisa ditambahkan sesuai kebutuhan -->
    <div class="ttd-section">
        <div>Mengetahui,</div>
        <div class="ttd-name">Ahmad Fadlullah</div>
        <div>Bagian Perlengkapan</div>
    </div>
</body>
</html>
