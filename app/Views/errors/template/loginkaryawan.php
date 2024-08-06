<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>login karyawan</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    .login-form {
        width: 340px;
        margin: 50px auto;
        font-size: 16px;
    }
    .login-form form {
        background: #f9f9f9;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    }
    .login-form h2 {
        margin-bottom: 25px;
        text-align: center;
        color: #333;
    }
    .form-control, .btn {
        min-height: 45px;
        border-radius: 25px;
    }
    .btn {
        font-size: 18px;
        font-weight: bold;
        transition: all 0.3s;
    }
    .btn:hover {
        transform: scale(1.05);
    }
</style>
</head>
<body>
<div class="login-form">
    <form action="dashboardkaryawan.php" method="post">
        <h2>LOGIN</h2>       
        <h3 class="text-center"> SISTEM PERMINTAAN ATK</h3>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <h5 class="float-left">Are you Admin?</h5>
            <a href="login.php" class="btn btn-primary float-right">Yes</a>
        </div>      
    </form>
    <p class="text-center"><a href="register.php">Create an Account</a></p>
</div>
</body>
</html>
