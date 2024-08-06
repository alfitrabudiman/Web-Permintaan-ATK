<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set karakter encoding dan viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Judul halaman -->
    <title>Laporan Permintaan ATK</title>
    <!-- CSS internal untuk styling halaman -->
    <style>
        /* Style umum untuk body */
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }
        /* Style untuk judul */
        .title {
            text-align: center;
            color: #333;
            margin: 20px 0;
        }
        /* Style untuk subjudul */
        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 20px;
        }
        /* Style untuk tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            /* Menghilangkan border pada tabel */
            border: none;
            margin-top: 20px;
        }
        /* Style untuk sel header dan data dalam tabel */
        th, td {
            padding: 8px;
            text-align: left;
            /* Menghilangkan border pada sel */
            border: none;
        }
        /* Style khusus untuk ID departemen */
        .department-id {
            font-weight: bold;
            margin: 0;
        }
        /* Style untuk bagian tanda tangan */
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
    <!-- Header tabel untuk logo dan informasi sekolah -->
    <table style="border-bottom: 2px solid #000000;" border="0" width="100%">
        <tbody>
            <tr>
                <td>
                    <br>
                    <!-- Informasi sekolah -->
                    <div style="font-weight: bold; text-align: center;">YAYASAN PENDIDIKAN ISLAM AZZIYADATUSH-SHALIHAT</div>
                    <div style="font-weight: bold; font-family: Times; font-size: 25px; text-align: center;">SMP NURUL ANWAR</div>
                    <div style="font-weight: bold; font-family: Times; font-size: 28px; text-align: center;">TERAKREDITASI "B"</div>
                    <div style="font-weight: bold; font-family: Times; font-size: 18px; text-align: center;">NSS : 202026505051 NPSN : 20222897</div>
                    <table width="100%">
                        <tbody>
                            <tr>
                                <td>
                                    <!-- Informasi kontak sekolah -->
                                    <div style="font-size: 11px; text-align: center;">Alamat : Jl. Ratna Gg. Masjid AlMuhajirin RT.002/008 Bekasi</div>
                                    <div style="font-size: 11px; text-align: center;">Email : smpnurulanwar21@gmail.com</div>
                                    <div style="font-size: 11px; text-align: center;">Telp. 081932606234</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <!-- Judul laporan -->
    <div class="title">LAPORAN PERMINTAAN ALAT TULIS KANTOR (ATK)</div>
    <!-- Subjudul laporan dengan periode waktu -->
    <div class="subtitle">Periode: <?= $startDate ?> - <?= $endDate ?></div>
    <!-- Tabel untuk menampilkan data permintaan ATK -->
    <table border="1" cellpadding="5" style="border-collapse: collapse; border: 1px solid #000; text-align: center; width: 100%">
        <thead>
            <tr>
                <!-- Kolom header tabel -->
                <th>Nama Karyawan</th>
                <th>ID Departemen</th>
                <th>Tanggal Permintaan</th>
                <th>Nama ATK</th>
                <th>Satuan</th>
                <th>Jumlah</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $item): ?>
                <?php foreach ($item['details'] as $detail): ?>
                    <tr>
                        <!-- Menampilkan data permintaan ATK -->
                        <td><?= $item['header']['nama_karyawan'] ?></td>
                        <td>
                            <p class="department-id">DPT <?= $item['header']['id_departemen'] ?></p>
                        </td>
                        <td><?= $item['header']['tgl_permintaan'] ?></td>
                        <td><?= $detail['nama_atk'] ?></td>
                        <td><?= $detail['satuan'] ?></td>
                        <td><?= $detail['jumlah'] ?></td>
                        <td><?= $detail['status'] ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- Bagian tanda tangan -->
    <div class="ttd-section">
        <div>Mengetahui,</div>
        <div class="ttd-name">Ahmad Fadlullah</div>
        <div>Bagian Perlengkapan</div>
    </div>
</body>
</html>
