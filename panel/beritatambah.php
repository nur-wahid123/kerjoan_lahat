<?php
include 'header.php'; ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Berita</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Berita</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Tambah Berita</h3>

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
                                    <input type="text" class="form-control" name="judul" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tanggal" class="mb-2">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tanggal" class="mb-2">Isi Berita</label>
                                    <textarea class="form-control" rows="5" id="isi" name="isi" required></textarea>
                                    <script>
                                        CKEDITOR.replace('isi');
                                    </script>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="kategori" class="mb-2">Kategori</label>
                                    <select class="form-control" name="kategori" required>
                                        <option value="Desa">Desa</option>
                                        <option value="Sekolah">Sekolah</option>
                                        <option value="Lomba">Lomba</option>
                                        <option value="Pembangunan">Pembangunan</option>
                                        <option value="Kunjungan">Kunjungan</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tanggal" class="mb-2">Foto Berita</label>
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
    </section>
</div>
<?php
if (isset($_POST['simpan'])) {
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasifoto, "../foto/" . $namafoto);
    $koneksi->query("INSERT INTO berita
		(judul,tanggal,isi,kategori,foto)
		VALUES('$_POST[judul]','$_POST[tanggal]','$_POST[isi]','$_POST[kategori]','$namafoto')") or die(mysqli_error($koneksi));
    echo "<script>alert('Data Berhasil Di Simpan');</script>";
    echo "<script>location='beritadaftar.php';</script>";
}
?>

<?php include 'footer.php'; ?>