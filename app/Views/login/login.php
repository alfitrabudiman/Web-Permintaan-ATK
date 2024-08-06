<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem Permintaan ATK</title>
    <!-- Menghubungkan file CSS untuk styling halaman login -->
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <!-- Menampilkan judul login dan deskripsi sistem -->
            <h1>Login</h1>
            <p>Sistem Permintaan ATK SMP Nurul Anwar</p>
            <!-- Form login yang mengirimkan data dengan metode POST ke /login/auth -->
            <form method="post" action="/login/auth">
                <!-- Menyisipkan token CSRF untuk keamanan form -->
                <?= csrf_field() ?>
                <!-- Input untuk username -->
                <input type="text" name="username" placeholder="Username" required><br>
                <!-- Input untuk password -->
                <input type="password" name="password" placeholder="Password" required><br>
                <!-- Tombol submit untuk login -->
                <button type="submit">Login</button>
            </form>
            <!-- Menampilkan pesan flash jika ada, seperti pesan error atau informasi -->
            <?php if(session()->getFlashdata('msg')):?>
                <div class="flash-msg"><?= session()->getFlashdata('msg') ?></div>
            <?php endif;?>
        </div>
    </div>
</body>
</html>
