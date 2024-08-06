<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Permintaan ATK - SMP Nurul Anwar Bekasi</title>
  <link rel="stylesheet" href="styles.css">
</head>
<style>
     body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f8f9fa;
}

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

h2, h3 {
  color: #000000;
  text-align: center;
  margin-bottom: 20px;
}

/* Penyesuaian tampilan */
form {
  max-width: 400px;
  margin: 0 auto;
  background: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 10px;
  color: #333;
  font-weight: bold;
}

input[type="text"],
input[type="date"] {
  width: calc(100% - 20px);
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  transition: border-color 0.3s ease;
}

input[type="text"]:focus,
input[type="date"]:focus {
  border-color: #007bff;
  outline: none;
}

/* tampilan status */
select#status {
  width: calc(100% - 20px);
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  transition: border-color 0.3s ease;
}

select#status option[value="pending"] {
  background-color: #ffc107;
  color: #333;
}

select#status option[value="done"] {
  background-color: #28a745;
  color: #fff;
}

select#status:hover {
  border-color: #007bff;
}

select#status:focus {
  border-color: #007bff;
  outline: none;
}


input[type="submit"] {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 18px;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #0056b3;
}
</style>
<body>
<div class="dashboard">
    <!-- Sidebar -->
    <div class="sidebar">
    <h2>SMP Nurul Anwar Bekasi</h2>
    <ul>
        <li><a href="<?= base_url('dashboardkaryawan') ?>">Home</a></li>
        <li><a href="<?= base_url('permintaanatk') ?>">Permintaan ATK</a></li>
    </ul>
</div>
    <!-- Main Content -->
    <div class="main-content">
      <h2>FORM PERMINTAAN ATK HEADER</h2>
      <h3>ISI DATA DIRI ANDA</h3>
      <form action="<?= base_url('permintaan/store') ?>" method="post">
    <label for="id_header">Id Header:</label><br>
    <input type="text" id="id_header" name="id_header" required><br>

    <label for="id_karyawan">Id Karyawan:</label><br>
    <input type="text" id="id_karyawan" name="id_karyawan" required><br>

    <label for="nama_karyawan">Nama Karyawan:</label><br>
    <input type="text" id="nama_karyawan" name="nama_karyawan" required><br><br>

    <label for="id_departemen">Id Departemen:</label><br>
    <input type="text" id="id_departemen" name="id_departemen" required><br>

    <label for="tanggal_permintaan">Tanggal Permintaan:</label><br>
    <input type="date" id="tanggal_permintaan" name="tanggal_permintaan" required><br>

    <input type="submit" value="Submit"> 
</form>

    </div>
</div>
</body>
</html>
