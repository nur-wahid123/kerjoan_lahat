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
                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nik">NIK</label>
                                            <input type="hidden" name="iduser" value="<?= $profil['iduser']; ?>">
                                            <input type="text" class="form-control" name="nik" value="<?= $profil['nik']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nama">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="nama" value="<?= $profil['nama']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="tempatlahir">Tempat Lahir</label>
                                            <input type="text" class="form-control" name="tempatlahir" value="<?= $profil['tempatlahir']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="tanggallahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tanggallahir" value="<?= $profil['tanggallahir']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="jeniskelamin">Jenis Kelamin</label>
                                            <select name="jeniskelamin" id="jeniskelamin" class="form-control" required>
                                                <option value="Laki-Laki" <?= $profil['jeniskelamin'] == 'Laki-Laki' ? 'selected' : ''; ?>>Laki-Laki</option>
                                                <option value="Perempuan" <?= $profil['jeniskelamin'] == 'Perempuan' ? 'selected' : ''; ?>>Perempuan
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <select name="agama" id="agama" class="form-control" required>
                                                <option value="Islam" <?= $profil['agama'] == 'Islam' ? 'selected' : ''; ?>>Islam</option>
                                                <option value="Kristen Protestan" <?= $profil['agama'] == 'Kristen Protestan' ? 'selected' : ''; ?>>
                                                    Kristen Protestan</option>
                                                <option value="Kristen Katholik" <?= $profil['agama'] == 'Kristen Katholik' ? 'selected' : ''; ?>>
                                                    Kristen Katholik</option>
                                                <option value="Hindu" <?= $profil['agama'] == 'Hindu' ? 'selected' : ''; ?>>Hindu</option>
                                                <option value="Budha" <?= $profil['agama'] == 'Budha' ? 'selected' : ''; ?>>Budha</option>
                                                <option value="Konghucu" <?= $profil['agama'] == 'Konghucu' ? 'selected' : ''; ?>>Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat Lengkap / Tempat Tinggal Sekarang</label>
                                            <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control" required><?= $profil['alamat']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="pekerjaan">Pekerjaan</label>
                                            <input type="text" class="form-control" name="pekerjaan" value="<?= $profil['pekerjaan']; ?>" required>
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
                                            <input type="text" class="form-control" name="namasuratlain" placeholder="KTP / Kartu BPJS / KIS / Jamkesmas" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nama">Nama Lengkap Di Surat / Kartu Lain</label>
                                            <input type="text" class="form-control" name="namalain" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="tempatlahir">No. Surat Di Surat / Kartu Lain</label>
                                            <input type="number" class="form-control" name="nosuratlain" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat Lengkap / Tempat Tinggal Di Surat / Kartu Lain</label>
                                            <textarea name="alamatlain" id="alamat" cols="30" rows="5" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                            <label for="keterangansurat">Keperluan Surat</label>
                                            <textarea name="keterangansurat" id="keterangansurat" cols="30" rows="5" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <h2>Data Dokumen</h2>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Scan Kartu Keluarga</label>
                                                    <p>Ukuran Maksimal file adalah 1MB</p>
                                                    <input type="file" class="form-control" name="scankk" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Scan Surat Lain</label>
                                                    <p>Ukuran Maksimal file adalah 1MB</p>
                                                    <input type="file" class="form-control" name="scansuratlain" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                            <button type="submit" name="simpan" value="simpan" class="btn btn-success float-right pull-right float-end">Ajukan Permohonan Surat</button>
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
    $iduser = $_POST['iduser'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];

    $nosuratlain = $_POST['nosuratlain'];
    $namasuratlain = $_POST['namasuratlain'];
    $namalain = $_POST['namalain'];
    $alamatlain = $_POST['alamatlain'];

    $status = "Menunggu Persetujuan";
    $keterangansurat = $_POST['keterangansurat'];
    $maxFileSize = 1 * 1024 * 1024; // 1MB in bytes
    $lokasiscankk = $_FILES['scankk']['tmp_name'];
    if ($_FILES['scankk']['size'] <= $maxFileSize && $_FILES['scansuratlain']['size'] <= $maxFileSize) {
        if (!empty($lokasiscankk)) {
            $scankk = $_FILES['scankk']['name'];
            move_uploaded_file($lokasiscankk, "../foto/$scankk");
        } else {
            $scankk = "";
        }
        $lokasiscansuratlain = $_FILES['scansuratlain']['tmp_name'];
        if (!empty($lokasiscansuratlain)) {
            $scansuratlain = $_FILES['scansuratlain']['name'];
            move_uploaded_file($lokasiscansuratlain, "../foto/$scansuratlain");
        } else {
            $scansuratlain = "";
        }
        $koneksi->query("INSERT INTO suratbedanama
		(iduser,nik,nama,tempatlahir,tanggallahir,jeniskelamin,agama,alamat,pekerjaan,namasuratlain,namalain,nosuratlain,alamatlain,status,keterangansurat,scankk,scansuratlain)
		VALUES('$iduser','$nik','$nama','$tempatlahir','$tanggallahir','$jeniskelamin','$agama','$alamat','$pekerjaan','$namasuratlain','$namalain','$nosuratlain','$alamatlain','$status','$keterangansurat','$scankk','$scansuratlain')") or die(mysqli_error($koneksi));
        echo "<script>alert('Data Berhasil Di Simpan');</script>";
        echo "<script>location='suratbedanamadaftar.php';</script>";
    } else {
        echo "<script>alert('Ukuran foto harus kurang dari 1MB.');</script>";
    }
}
?>
<?php include 'footer.php'; ?>