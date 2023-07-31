<?php
include 'header.php'; ?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Pengumuman</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label for="tanggal" class="mb-2">Judul Pengumuman</label>
                                <input type="text" class="form-control" name="judul" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="tanggal" class="mb-2">Tanggal</label>
                                <input type="date" value="<?= date('Y-m-d') ?>" class="form-control" name="tanggal" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="tanggal" class="mb-2">Isi Pengumuman</label>
                                <textarea class="form-control" rows="5" id="isi" name="isi" required></textarea>
                                <script>
                                    CKEDITOR.replace('isi');
                                </script>
                            </div>
                            <div class="form-group mb-3">
                                <label for="tanggal" class="mb-2">Foto Pengumuman</label>
                                <input type="file" class="form-control" name="foto" required>
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
</div>
<?php
if (isset($_POST['simpan'])) {
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasifoto, "../foto/" . $namafoto);
    $koneksi->query("INSERT INTO pengumuman
		(judul,tanggal,isi,foto)
		VALUES('$_POST[judul]','$_POST[tanggal]','$_POST[isi]','$namafoto')") or die(mysqli_error($koneksi));
    echo "<script>alert('Data Berhasil Di Simpan');</script>";
    echo "<script>location='pengumumandaftar.php';</script>";
}
?>

<?php include 'footer.php'; ?>