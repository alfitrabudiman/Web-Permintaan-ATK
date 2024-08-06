<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard permintaan atk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 500;
            color: #333;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .navbar-toggler {
            border: none;
            outline: none;
        }

        .navbar-toggler-icon {
            background-color: #333;
        }

        .navbar-nav .nav-item .nav-link {
            color: #333;
            font-size: 1.2rem;
            transition: all 0.3s;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #007bff;
        }

        .slider {
            width: 260px;
            height: 100vh;
            position: fixed;
            background: linear-gradient(120deg, #00b4db, #0083b0);
            /* Gradien warna latar belakang */
            transition: all 0.3s;
            z-index: 9;
            overflow-y: auto;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .slider-head {
            padding: 24px 20px;
            border-bottom: 1px solid #fff;
        }

        .slider-head .navbar-brand {
            margin-bottom: 0;
            color: #fff;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .slider-head .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .slider-body {
            padding: 20px;
        }

        .slider-body .nav-link {
            color: #fff;
            font-size: 1.2rem;
            transition: all 0.3s;
        }

        .slider-body .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
        }

        .slider-body .nav-link .fa {
            margin-right: 10px;
        }

        /* Warna untuk link spesifik */
        .nav-item:nth-child(odd) .nav-link {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .nav-item:nth-child(odd) .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.4);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">SMP Nurul Anwar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" onclick="confirmLogout()"><i class="fa fa-sign-out"></i>
                            Logout</a>
                    </div>

                    <script>
                        function confirmLogout() {
                            var confirmation = confirm("Apakah Anda ingin logout?");
                            if (confirmation) {
                                window.location.href = "login.php"; // Redirect to login page
                            } else {
                                // Do nothing or handle the cancellation
                            }
                        }
                    </script>

                </li>
            </ul>
        </div>
    </nav>
    <div class="slider" id="sliders">
        <div class="slider-head">
            <img src="/ci-lesson-atk/public/user.png" class="avatar" alt="Avatar"> Admin
        </div>
        <div class="slider-body">
            <nav class="nav flex-column">
                <a class="nav-link active" href="kelolaatk.php"><i class="fa fa-gears"></i>Kelola ATK</a>
                <a class="nav-link" href="kelolakaryawan.php"><i class="fa fa-gears"></i>Kelola Karyawan</a>
                <a class="nav-link" href="kelolaadmin.php"><i class="fa fa-users"></i>Kelola Admin</a>
                <a class="nav-link" href="keloladepartemen.php"><i class="fa fa-home"></i>Kelola Departemen</a>
                <a class="nav-link" href="#"><i class="fa fa-gears"></i>Kelola Permintaan ATK</a>
                <a class="nav-link" href="#"><i class="fa fa-gears"></i> Laporan Permintaan ATK</a>
            </nav>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>