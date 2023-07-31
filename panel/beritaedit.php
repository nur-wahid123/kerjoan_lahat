<?php
include 'header.php';
$ambildata = $koneksi->query("SELECT * FROM berita WHERE id='$_GET[id]'");
$data = $ambildata->fetch_assoc();
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Berita</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Berita</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Edit Berita</h3>

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
                                <div class="form-group mb-3">
                                    <label for="tanggal" class="mb-2">Judul Berita</label>
                                    <input type="text" class="form-control" value="<?= $data['judul'] ?>" name="judul" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tanggal" class="mb-2">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" value="<?= $data['tanggal'] ?>" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tanggal" class="mb-2">Isi Berita</label>
                                    <textarea class="form-control" rows="5" id="isi" name="isi" required><?= $data['isi'] ?></textarea>
                                    <script>
                                        CKEDITOR.replace('isi');
                                    </script>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="kategori" class="mb-2">Kategori</label>
                                    <select class="form-control" name="kategori" required>
                                        <option <?php if ($data['kategori'] == 'Desa') echo 'selected'; ?> value="Desa">Desa</option>
                                        <option <?php if ($data['kategori'] == 'Sekolah') echo 'selected'; ?> value="Sekolah">Sekolah</option>
                                        <option <?php if ($data['kategori'] == 'Lomba') echo 'selected'; ?> value="Lomba">Lomba</option>
                                        <option <?php if ($data['kategori'] == 'Pembangunan') echo 'selected'; ?> value="Pembangunan">Pembangunan</option>
                                        <option <?php if ($data['kategori'] == 'Kunjungan') echo 'selected'; ?> value="Kunjungan">Kunjungan</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tanggal" class="mb-2">Foto Berita</label>
                                    <input type="file" class="form-control" name="foto" required>
                                </div>
                                <div class="form-group mb-3">
                                    <img src="../foto/<?= $data['foto'] ?>" width="150px" style="border-radius:10px">
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-success float-right pull-right" name="simpan">Simpan</button>
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
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasifoto, "../foto/" . $namafoto);
    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "../foto/$namafoto");
        $koneksi->query("UPDATE berita SET judul='$_POST[judul]',tanggal='$_POST[tanggal]',isi='$_POST[isi]',kategori='$_POST[kategori]', foto='$namafoto' WHERE id='$_GET[id]'") or die(mysqli_error($koneksi));
    } else {
        $koneksi->query("UPDATE berita SET judul='$_POST[judul]',tanggal='$_POST[tanggal]',isi='$_POST[isi]',kategori='$_POST[kategori]' WHERE id='$_GET[id]'") or die(mysqli_error($koneksi));
    }
    echo "<script>alert('Data Berhasil Di Simpan');</script>";
    echo "<script>location='beritadaftar.php';</script>";
}
?>

<?php include 'footer.php'; ?>