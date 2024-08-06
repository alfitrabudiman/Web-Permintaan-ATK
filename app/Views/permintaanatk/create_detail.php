<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Permintaan ATK</title>
    <!-- Menghubungkan stylesheet untuk tampilan form -->
    <link rel="stylesheet" href="/css/cdetail.css">
    <!-- Menyertakan SweetAlert untuk menampilkan notifikasi -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <div class="form-container">
        <h2>Form Permintaan ATK</h2>
        <!-- Form untuk menyimpan detail permintaan ATK -->
        <form action="<?= base_url('/permintaanatk/storeDetail') ?>" method="post" id="detailForm">
            <input type="hidden" name="id_header" value="<?= $id_header ?>">

            <div id="atk-fields">
                <!-- Baris input untuk detail ATK -->
                <div class="atk-row">
                    <div class="form-group">
                        <label for="id_atk">ID ATK:</label>
                        <select name="id_atk[]" class="id_atk" required>
                            <option value="">Pilih ATK Yang Sesuai</option>
                            <!-- Mengisi dropdown dengan data ATK dari server -->
                            <?php foreach ($atk as $item): ?>
                                <option value="<?= $item['id_atk'] ?>"
                                        data-nama_atk="<?= $item['nama_atk'] ?>"
                                        data-satuan="<?= $item['satuan'] ?>">
                                    <?= $item['id_atk'] ?> - <?= $item['nama_atk'] ?> - <?= $item['satuan'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama_atk">Nama ATK:</label>
                        <!-- Input untuk menampilkan nama ATK (readonly) -->
                        <input type="text" name="nama_atk[]" class="nama_atk" required readonly>
                    </div>

                    <div class="form-group">
                        <label for="satuan">Satuan:</label>
                        <!-- Input untuk menampilkan satuan ATK (readonly) -->
                        <input type="text" name="satuan[]" class="satuan" required readonly>
                    </div>

                    <div class="form-group">
                        <label for="jumlah">Jumlah:</label>
                        <!-- Input untuk memasukkan jumlah ATK -->
                        <input type="text" name="jumlah[]" required>
                    </div>

                    <div class="form-group">
                        <label for="status">Status:</label>
                        <!-- Dropdown untuk memilih status permintaan -->
                        <select name="status[]" required>
                            <option value="pending">Pending</option>
                        </select>
                    </div>

                    <!-- Tombol untuk menghapus baris ATK -->
                    <button type="button" class="remove-atk">Remove</button>
                </div>
            </div>

            <!-- Tombol untuk menambah baris ATK -->
            <button type="button" id="add-atk">Add ATK</button>

            <div class="form-group">
                <!-- Tombol untuk menyimpan form -->
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>

    <script>
        // Tambahkan event listener untuk tombol "Add ATK"
        document.getElementById('add-atk').addEventListener('click', function() {
            const atkFields = document.getElementById('atk-fields');
            // Clone baris ATK pertama untuk menambah baris baru
            const newAtkRow = document.querySelector('.atk-row').cloneNode(true);
            // Kosongkan nilai input pada baris baru
            newAtkRow.querySelectorAll('input').forEach(input => input.value = '');
            newAtkRow.querySelector('select').selectedIndex = 0;
            atkFields.appendChild(newAtkRow);
        });

        // Tambahkan event listener untuk tombol "Remove"
        document.getElementById('atk-fields').addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-atk')) {
                const atkRow = e.target.closest('.atk-row');
                // Hapus baris ATK hanya jika ada lebih dari satu baris
                if (document.querySelectorAll('.atk-row').length > 1) {
                    atkRow.remove();
                }
            }
        });

        // Tambahkan event listener untuk select ID ATK
        document.getElementById('atk-fields').addEventListener('change', function(e) {
            if (e.target.classList.contains('id_atk')) {
                const selectedOption = e.target.options[e.target.selectedIndex];
                const atkRow = e.target.closest('.atk-row');

                // Ambil data nama_atk dan satuan dari option yang dipilih
                const namaAtk = selectedOption.getAttribute('data-nama_atk');
                const satuan = selectedOption.getAttribute('data-satuan');

                // Set nilai input nama_atk dan satuan
                atkRow.querySelector('.nama_atk').value = namaAtk;
                atkRow.querySelector('.satuan').value = satuan;
            }
        });

        // Mengganti form submit default dengan AJAX submit
        document.getElementById('detailForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah form submit secara default

            // Mengambil data dari form
            let formData = new FormData(this);

            // Mengirim data melalui AJAX
            fetch(this.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Menampilkan Sweet Alert berdasarkan respon
                Swal.fire({
                    title: data.status === 'success' ? 'Berhasil' : 'Gagal',
                    text: data.message,
                    icon: data.status === 'success' ? 'success' : 'error',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed && data.status === 'success') {
                        // Mengarahkan ke halaman dashboard karyawan setelah klik "OK"
                        window.location.href = '/dashboardkaryawan';
                    }
                });
            })
            .catch(error => {
                console.error('Terjadi kesalahan:', error);
                Swal.fire({
                    title: 'Error',
                    text: 'Terjadi kesalahan saat menyimpan data',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
        });
    </script>
</body>
</html>
