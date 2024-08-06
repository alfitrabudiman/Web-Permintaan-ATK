<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - SMP Nurul Anwar Bekasi</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    /* Reset CSS */
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
    }

    /* Layout */
    .dashboard {
      display: flex;
      height: 100vh;
    }

    .sidebar {
      background: #007bff;
      color: #fff;
      width: 250px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .sidebar h2 {
      margin-top: 0;
      font-size: 24px;
      text-align: center;
      margin-bottom: 20px;
      color: #fff; 
    }

    .sidebar ul {
      list-style-type: none;
      padding: 0;
    }

    .sidebar ul li {
      margin-bottom: 10px;
    }

    .sidebar ul li a {
      color: #fff;
      text-decoration: none;
      font-size: 18px;
      display: block;
      padding: 10px 20px;
      border-radius: 5px;
      transition: all 0.3s ease;
    }

    .sidebar ul li a:hover {
      background-color: #0056b3;
    }

    .main-content {
      flex: 1;
      padding: 20px;
    }

    .navbar {
      display: flex;
      justify-content: flex-end;
      align-items: center;
    }

    .navbar a {
      color: #333;
      text-decoration: none;
      margin-left: 10px;
      position: relative;
      transition: all 0.3s ease;
    }

    .navbar a i {
      margin-right: 5px;
    }

    .navbar a:hover {
      color: #007bff;
    }

    h2 {
      color: #333;
      text-align: center;
    }
  </style>
</head>
<body>
  <!-- Dashboard Layout -->
  <div class="dashboard">
    <!-- Sidebar -->
    <div class="sidebar">
      <h2>SMP Nurul Anwar Bekasi</h2>
      <ul>
        <li><a href="dashboardkaryawan.php">Home</a></li>
        <li><a href="permintaanatk.php">Permintaan ATK</a></li>
      </ul>
    </div>
    <!-- Main Content -->
    <div class="main-content">
      <!-- Navbar -->
      <div class="navbar">
        <a href="#"><i class="fa fa-user"></i>Profile</a>
        <a href="#" onclick="confirmLogout()"><i class="fa fa-sign-out"></i>Logout</a>
      </div>
      <!-- Page Content -->
      <h2>DASHBOARD PERMINTAAN ATK</h2>
    </div>
  </div>
  <!-- JavaScript for Logout Confirmation -->
  <script>
    function confirmLogout() {
      var confirmation = confirm("Apakah Anda ingin logout?");
      if (confirmation) {
        window.location.href = "loginkaryawan.php"; // Redirect to login page
      } else {
        // Do nothing or handle the cancellation
      }
    }
  </script>
</body>
</html>
