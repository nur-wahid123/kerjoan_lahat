<?php
include 'header.php'; ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="post">
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
                                                <option value="Belum Menikah">Belum Menikah</option>
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
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="statusperkawinan">Level</label>
                                            <select name="level" class="form-control" required>
                                                <option value="Admin">Admin</option>
                                                <option value="Kepala Desa">Kepala Desa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" name="simpan" value="simpan" class="btn btn-success float-right pull-right float-end">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include './kirimemail.php';
if (isset($_POST['simpan'])) {
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
    $level = $_POST['level'];
    $statusaktif = 'Aktif';
    $to = $username;
    $subject = "Surat Pemberitahuan";
    $message = "Selamat akun $level anda telah diaktifkan \nBerikut adalah username serta password anda untuk melakukan Login Pada website\n \nUsername\t: $username\nPassword\t: $password\n\nTerima Kasih Atas Pendaftaran Anda";
    $header = "Akun Telah Di Aktifkan";
    send_email(1,$to,$subject,$message,$header);
    $koneksi->query("INSERT INTO user
		(username,password,nik,nama,tempatlahir,tanggallahir,jeniskelamin,agama,alamat,pekerjaan,statusperkawinan,level,statusaktif)
		VALUES('$username','$password','$nik','$nama','$tempatlahir','$tanggallahir','$jeniskelamin','$agama','$alamat','$pekerjaan','$statusperkawinan','$level','$statusaktif')") or die(mysqli_error($koneksi));
    echo "<script>alert('Data Berhasil Di Simpan');</script>";
    echo "<script>location='internaldaftar.php';</script>";
}
?>
<?php include 'footer.php'; ?>