<!DOCTYPE html>
<html lang="en">
<?php include 'koneksi.php'; ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/assets_admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/assets_admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/assets_admin/dist/css/adminlte.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/admin/images/logobaru.png">
    <style>
        body {
            background-image: url("foto/login3.jpg");
            height: 1000px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h3><b>LOGIN</b></h3>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" name="login" value="login" class="btn btn-primary btn-block">LOGIN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $ambil = $koneksi->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
        $akunyangcocok = $ambil->num_rows;
        if ($akunyangcocok == 1) {
            $akun = $ambil->fetch_assoc();
            if ($akun['statusaktif'] == 'Tidak Aktif') {
                echo "<script> alert('Akun anda belum aktif, mohon menunggu konfirmasi admin');</script>";
                echo "<script> location ='loginadmin.php';</script>";
            } else {
                $_SESSION["pengguna"] = $akun;
                echo "<script> alert('Login Berhasil');</script>";
                echo "<script> location ='panel/home.php';</script>";
            }
        } else {
            echo "<script> alert('Login Gagal, Username atau Password anda salah');</script>";
            echo "<script> location ='loginadmin.php';</script>";
        }
    }
    ?>

    <!-- jQuery -->
    <script src="assets/assets_admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/assets_admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/assets_admin/dist/js/adminlte.min.js"></script>
</body>

</html>