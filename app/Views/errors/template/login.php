<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login Admin</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.body {
    background-color: #098F91;
}
.login-form {
    width: 360px;
    margin: 100px auto;
    padding: 30px;
    background: #fff;
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    border: 2px solid #00EEF1; /* Ubah warna border menjadi biru muda */
}
.login-form h2 {
    margin-bottom: 30px;
    text-align: center;
    color: #333;
}
.login-form h3 {
    margin-bottom: 30px;
    text-align: center;
    color: #333;
}
.form-control {
    min-height: 45px;
    border-radius: 3px;
    box-shadow: none !important;
    border-color: #ddd;
}
.form-control:focus {
    border-color: #26a69a;
}
.btn {
    font-size: 16px;
    font-weight: bold;
    background-color: #26a69a;
    border-color: #26a69a;
    border-radius: 3px;
    padding: 10px 20px;
}
.btn:hover, .btn:focus {
    background-color: #219b92 !important;
    border-color: #219b92 !important;
}
.login-links {
    text-align: center;
    margin-top: 15px;
}
.login-links a {
    color: #26a69a;
}
.login-links a:hover {
    text-decoration: underline;
}
</style>
</head>
<body>
<div class="login-form">
    <h2>MASUK</h2>
    <h3>SEBAGAI ADMIN</h3>
    <form action="dashboard.php" method="post">        
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>   
    </form>
    <div class="login-links">
        <p><a href="register.php">Create an Account</a></p>
    </div>
</div>
</body>
</html>
