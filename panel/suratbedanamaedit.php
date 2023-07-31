<?php
include 'header.php';
$ambildata = $koneksi->query("SELECT * FROM suratbedanama WHERE idsuratbedanama ='$_GET[id]'");
$data = $ambildata->fetch_assoc();
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Edit Data</h3>

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
                                            <input type="text" class="form-control" name="nik" value="<?= $data['nik']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nama">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="nama" value="<?= $data['nama']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="tempatlahir">Tempat Lahir</label>
                                            <input type="text" class="form-control" name="tempatlahir" value="<?= $data['tempatlahir']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="tanggallahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tanggallahir" value="<?= $data['tanggallahir']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="jeniskelamin">Jenis Kelamin</label>
                                            <select name="jeniskelamin" id="jeniskelamin" class="form-control" required>
                                                <option value="Laki-Laki" <?= $data['jeniskelamin'] == 'Laki-Laki' ? 'selected' : ''; ?>>Laki-Laki</option>
                                                <option value="Perempuan" <?= $data['jeniskelamin'] == 'Perempuan' ? 'selected' : ''; ?>>Perempuan
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <select name="agama" id="agama" class="form-control" required>
                                                <option value="Islam" <?= $data['agama'] == 'Islam' ? 'selected' : ''; ?>>Islam</option>
                                                <option value="Kristen Protestan" <?= $data['agama'] == 'Kristen Protestan' ? 'selected' : ''; ?>>
                                                    Kristen Protestan</option>
                                                <option value="Kristen Katholik" <?= $data['agama'] == 'Kristen Katholik' ? 'selected' : ''; ?>>
                                                    Kristen Katholik</option>
                                                <option value="Hindu" <?= $data['agama'] == 'Hindu' ? 'selected' : ''; ?>>Hindu</option>
                                                <option value="Budha" <?= $data['agama'] == 'Budha' ? 'selected' : ''; ?>>Budha</option>
                                                <option value="Konghucu" <?= $data['agama'] == 'Konghucu' ? 'selected' : ''; ?>>Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat Lengkap / Tempat Tinggal Sekarang</label>
                                            <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control" required><?= $data['alamat']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="pekerjaan">Pekerjaan</label>
                                            <input type="text" class="form-control" name="pekerjaan" value="<?= $data['pekerjaan']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <h6>Data Surat / Kartu lain</h6>
                                        <br>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nik">Nama Surat / Kartu Lain</label>
                                            <input type="text" class="form-control" name="namasuratlain" value="<?= $data['namasuratlain']; ?>" placeholder="KTP / Kartu BPJS / KIS / Jamkesmas" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nama">Nama Lengkap Di Surat / Kartu Lain</label>
                                            <input type="text" class="form-control" name="namalain" value="<?= $data['namalain']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="tempatlahir">No. Surat Di Surat / Kartu Lain</label>
                                            <input type="number" class="form-control" name="nosuratlain" value="<?= $data['nosuratlain']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat Lengkap / Tempat Tinggal Di Surat / Kartu Lain</label>
                                            <textarea name="alamatlain" id="alamat" cols="30" rows="5" class="form-control" required><?= $data['alamatlain']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                            <label for="keterangansurat">Keperluan Surat</label>
                                            <textarea name="keterangansurat" id="keterangansurat" cols="30" rows="5" class="form-control" required><?= $data['keterangansurat']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <h2>Data Dokumen</h2>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Scan Kartu Keluarga</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p>Ukuran Maksimal file adalah 1MB</p>
                                                            <input type="file" class="form-control" name="scankk">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a class="btn btn-success float-left" href="../foto/<?= $data['scankk'] ?>" target="_blank">Download</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Scan KTP</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p>Ukuran Maksimal file adalah 1MB</p>
                                                            <input type="file" class="form-control" name="scansuratlain">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a class="btn btn-success float-left" href="../foto/<?= $data['scansuratlain'] ?>" target="_blank">Download</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
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
if (isset($_POST['simpan'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    $nosuratlain = $_POST['nosuratlain'];
    $namasuratlain = $_POST['namasuratlain'];
    $namalain = $_POST['namalain'];
    $alamatlain = $_POST['alamatlain'];

    $status = "Menunggu Persetujuan";
    $pekerjaan = $_POST['pekerjaan'];
    $keterangansurat = $_POST['keterangansurat'];
    $lokasiscankk = $_FILES['scankk']['tmp_name'];
    if (!empty($lokasiscankk)) {
        $scankk = $_FILES['scankk']['name'];
        move_uploaded_file($lokasiscankk, "../foto/$scankk");
    } else {
        $scankk = $data['scankk'];
    }
    $lokasiscansuratlain = $_FILES['scansuratlain']['tmp_name'];
    if (!empty($lokasiscansuratlain)) {
        $scansuratlain = $_FILES['scansuratlain']['name'];
        move_uploaded_file($lokasiscansuratlain, "../foto/$scansuratlain");
    } else {
        $scansuratlain = $data['scansuratlain'];
    }
    $koneksi->query("UPDATE suratbedanama SET nik='$nik',nik='$nik',nama='$nama',tempatlahir='$tempatlahir',tanggallahir='$tanggallahir',jeniskelamin='$jeniskelamin',agama='$agama',alamat='$alamat',pekerjaan='$pekerjaan',nosuratlain='$nosuratlain',namasuratlain='$namasuratlain',namalain='$namalain',alamatlain='$alamatlain',status='$status',keterangansurat='$keterangansurat',scankk='$scankk',scansuratlain='$scansuratlain' WHERE idsuratbedanama='$_GET[id]'") or die(mysqli_error($koneksi));
    echo "<script>alert('Data Berhasil Di Simpan');</script>";
    echo "<script>location='suratbedanamaedit.php?id=$_GET[id]';</script>";
}
?>
<?php include 'footer.php'; ?>