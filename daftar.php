<!DOCTYPE html>
<html lang="en">
<?php include 'koneksi.php'; ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DAFTAR</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/assets_admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/assets_admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/assets_admin/dist/css/adminlte.min.css">
    <style>
        body {
            background-image: url("foto/login1.jpg");
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
                <h3><b>DAFTAR</b></h3>
            </div>
            <div class="card-body">
                <div class="col-xl-12">
                    <form method="post" style="width:100%;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="number" class="form-control" name="nik" id="nik" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" id="nama" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tempatlahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempatlahir" id="tempatlahir" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggallahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggallahir" id="tanggallahir" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jeniskelamin">Jenis Kelamin</label>
                                    <select name="jeniskelamin" id="jeniskelamin" class="form-control" required>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <select name="agama" id="agama" class="form-control" required>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">
                                            Kristen Protestan</option>
                                        <option value="Kristen Katholik">
                                            Kristen Katholik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="statusperkawinan">Status Perkawinan</label>
                                    <select name="statusperkawinan" id="statusperkawinan" class="form-control" required>
                                        <option value="Belum Menikah" selected>Belum Menikah</option>
                                        <option value="Menikah">Menikah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="alamat">Alamat Lengkap / Tempat Tinggal Sekarang</label>
                                    <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6" id="username">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="email" class="form-control" name="username" required>
                                    <p style="color: red;">*masukkan alamat email yang valid</p>
                                </div>
                            </div>
                            <div class="col-md-6" id="password">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3" id="password">
                                <div class="text-center">
                                    <button type="submit" name="daftar" value="daftar" class="btn btn-success btn-block">Daftar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <br>
                    <center>
                        <a class="text-primary" href="login.php">Sudah punya akun ? silahkan daftar</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <?php
    include './panel/kirimemail.php';
    if (isset($_POST['daftar'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $tempatlahir = $_POST['tempatlahir'];
        $tanggallahir = $_POST['tanggallahir'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $agama = $_POST['agama'];
        $alamat = $_POST['alamat'];
        $pekerjaan = $_POST['pekerjaan'];
        $statusperkawinan = $_POST['statusperkawinan'];
        $level = "Penduduk";
        $statusaktif = 'Tidak Aktif';
        $ambil = $koneksi->query("SELECT*FROM user 
    WHERE username='$username'");
        $yangcocok = $ambil->num_rows;
        if ($yangcocok >= 1) {
            echo "<script>alert('Pendaftaran Gagal, username sudah terdaftar')</script>";
            echo "<script>location='daftar.php';</script>";
        } else {
            $ambilnik = $koneksi->query("SELECT*FROM user 
        WHERE nik='$nik'");
            $yangcocoknik = $ambilnik->num_rows;
            if ($yangcocoknik == 1) {
                echo "<script>alert('Pendaftaran Gagal, username sudah terdaftar')</script>";
                echo "<script>location='daftar.php';</script>";
            } else {
                send_email(1, $username, "Surat Pemberitahuan", "Akun anda telah dibuat, tunggu verifikasi serta aktivasi akun dari petugas \nPemberitahuan akan dikirimkan melalui e-mail yang digunakan untuk username \nTerima Kasih", "Pemberitahuan Akun Baru");
                $koneksi->query("INSERT INTO user
		(username,password,nik,nama,tempatlahir,tanggallahir,jeniskelamin,agama,alamat,pekerjaan,statusperkawinan,level,statusaktif)
		VALUES('$username','$password','$nik','$nama','$tempatlahir','$tanggallahir','$jeniskelamin','$agama','$alamat','$pekerjaan','$statusperkawinan','$level','$statusaktif')") or die(mysqli_error($koneksi));
                echo "<script>alert('Pendaftaran berhasil, mohon menunggu konfirmasi admin agar akun anda dapat di akses');</script>";
                echo "<script>location='login.php';</script>";
            }
        }
    }
    ?>
    <script src="assets/assets_admin/plugins/jquery/jquery.min.js"></script>
    <script src="assets/assets_admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/assets_admin/dist/js/adminlte.min.js"></script>
</body>

</html>