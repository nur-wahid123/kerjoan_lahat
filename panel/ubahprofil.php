<?php
include_once('../koneksi.php');
include 'header.php';
$iduser = $_SESSION['pengguna']['iduser'];
$ambildata = $koneksi->query("SELECT * FROM user WHERE iduser='$iduser'");
$data = $ambildata->fetch_assoc();
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ubah Profil</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Ubah Profil</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Ubah Profil</h3>

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
                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nik">NIK</label>
                                            <input type="number" value="<?= $data['nik'] ?>" class="form-control" name="nik" id="nik" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="tanggal" class="mb-2">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="tempatlahir">Tempat Lahir</label>
                                            <input type="text" value="<?= $data['tempatlahir'] ?>" class="form-control" name="tempatlahir" id="tempatlahir" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="tanggallahir">Tanggal Lahir</label>
                                            <input type="date" value="<?= $data['tanggallahir'] ?>" class="form-control" name="tanggallahir" id="tanggallahir" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="jeniskelamin">Jenis Kelamin</label>
                                            <select name="jeniskelamin" id="jeniskelamin" class="form-control" required>
                                                <option <?php if ($data['jeniskelamin'] == 'Laki-Laki') echo 'selected'; ?> value="Laki-Laki">Laki-Laki</option>
                                                <option <?php if ($data['jeniskelamin'] == 'Perempuan') echo 'selected'; ?> value="Perempuan">Perempuan
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <select name="agama" id="agama" class="form-control" required>
                                                <option <?php if ($data['agama'] == 'Islam') echo 'selected'; ?> value="Islam">Islam</option>
                                                <option <?php if ($data['agama'] == 'Kristen Khatolik') echo 'selected'; ?> value="Kristen Khatolik">Kristen Khatolik</option>
                                                <option <?php if ($data['agama'] == 'Kristen Protestan') echo 'selected'; ?> value="Kristen Protestan">Kristen Protestan</option>
                                                <option <?php if ($data['agama'] == 'Budha') echo 'selected'; ?> value="Budha">Budha</option>
                                                <option <?php if ($data['agama'] == 'Hindu') echo 'selected'; ?> value="Hindu">Hindu</option>
                                                <option <?php if ($data['agama'] == 'Konghucu') echo 'selected'; ?> value="Konghucu">Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="pekerjaan">Pekerjaan</label>
                                            <input type="text" value="<?= $data['pekerjaan'] ?>" class="form-control" name="pekerjaan" id="pekerjaan" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="statusperkawinan">Status Perkawinan</label>
                                            <select name="statusperkawinan" id="statusperkawinan" class="form-control" required>
                                                <option <?php if ($data['statusperkawinan'] == 'Belum Menikah') echo 'selected'; ?> value="Belum Menikah">Belum Menikah</option>
                                                <option <?php if ($data['statusperkawinan'] == 'Menikah') echo 'selected'; ?> value="Menikah">Menikah</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat Lengkap / Tempat Tinggal Sekarang</label>
                                            <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" required><?= $data['alamat'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="tanggal" class="mb-2">Username</label>
                                            <input type="text" class="form-control" name="username" value="<?= $data['username'] ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="tanggal" class="mb-2">Password</label>
                                            <input type="text" class="form-control" name="password" value="">
                                            <span class="text-danger">Kosongkan jika tidan ingin mengganti password</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <button type="submit" class="btn btn-success float-right pull-right" name="simpan">Simpan</button>
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
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];
    $statusperkawinan = $_POST['statusperkawinan'];
    if (!empty($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $password = $data['password'];
    }
    $koneksi->query("UPDATE user SET username='$_POST[username]',password='$password',nama='$nama',tempatlahir='$tempatlahir',tanggallahir='$tanggallahir',jeniskelamin='$jeniskelamin',agama='$agama',alamat='$alamat',pekerjaan='$pekerjaan',statusperkawinan='$statusperkawinan' WHERE iduser='$iduser'") or die(mysqli_error($koneksi));
    echo "<script>alert('Data Berhasil Di Ubah');</script>";
    echo "<script>location='ubahprofil.php';</script>";
}
?>

<?php include 'footer.php'; ?>