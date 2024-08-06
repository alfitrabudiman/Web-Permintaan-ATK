<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - SMP Nurul Anwar Bekasi</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
  <link rel="stylesheet" href="/css/dashboardkaryawan.css">
</head>
<body>
<!-- Dashboard Layout -->
<div class="dashboard">
    <!-- Sidebar -->
    <div class="sidebar">
      <h2>SMP Nurul Anwar Bekasi</h2>
      <ul>
        <li><a href="<?= site_url('/permintaanatk/create_header') ?>"><i class="fas fa-pencil-alt"></i> Permintaan ATK</a></li>
      </ul>
    </div>
    <!-- Main Content -->
    <div class="main-content">
      <!-- Navbar -->
      <div class="navbar">
        <a href="#" onclick="confirmLogout()"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </div>
      <!-- Page Content -->
      <h2>Profil SMP Nurul Anwar</h2>
      <div class="content">
        <!-- Sekolah Section -->
        <div class="section">
          <h3>Tentang Sekolah</h3>
          <p>SMP Nurul Anwar Bekasi adalah sekolah menengah pertama yang berlokasi di Bekasi. Sekolah ini berkomitmen untuk menyediakan pendidikan berkualitas dan membentuk siswa yang berkarakter.</p>
        </div>

        <!-- Visi Section -->
        <div class="section">
          <h3>Visi</h3>
          <p>Menjadi lembaga pendidikan yang unggul dalam membentuk generasi yang berakhlak mulia, cerdas, dan berdaya saing tinggi.</p>
        </div>

        <!-- Misi Section -->
        <div class="section">
          <h3>Misi</h3>
          <ul>
            <li>Menyelenggarakan pendidikan yang berkualitas dan berbasis nilai-nilai keagamaan.</li>
            <li>Mengembangkan potensi siswa melalui kegiatan akademik dan non-akademik.</li>
            <li>Meningkatkan kompetensi guru dan tenaga kependidikan secara berkelanjutan.</li>
            <li>Menjalin kemitraan dengan orang tua siswa dan masyarakat.</li>
          </ul>
        </div>

        <!-- Moto Section -->
        <div class="section">
          <h3>Moto</h3>
          <p>"Berkualitas dalam ilmu, berakhlak dalam tindakan, dan berdaya saing dalam karya."</p>
        </div>

        <!-- Nilai-Nilai Section -->
        <div class="section">
          <h3>Nilai-Nilai</h3>
          <ul>
            <li>Integritas</li>
            <li>Profesionalisme</li>
            <li>Kerjasama</li>
            <li>Kepedulian</li>
          </ul>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer">
        <p>&copy; 2024 SMP Nurul Anwar Bekasi. All rights reserved.</p>
      </footer>
    </div>
  </div>
  <!-- JavaScript for Logout Confirmation -->
  <script>
    function confirmLogout() {
      var confirmation = confirm("Apakah Anda ingin logout?");
      if (confirmation) {
        window.location.href = "<?= site_url('logout') ?>"; // Menggunakan rute CodeIgniter
      }
    }
  </script>
</body>
</html>
