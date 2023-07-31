<?php
include 'header.php'; ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Rekap Surat</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Rekap Surat</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Rekap Surat</h3>
                        </div>
                        <div class="card-body">
                            <?php
                            if (isset($_POST['submit'])) {
                                $tanggalawal = $_POST['tanggalawal'];
                                $tanggalakhir = $_POST['tanggalakhir'];

                                $ambilsuratbedanama_diterima = $koneksi->query("SELECT * FROM suratbedanama where date(dibuat) >= '$tanggalawal' and date(dibuat) <= '$tanggalakhir' and status ='Di Setujui' ") or die(mysqli_error($koneksi));
                                $suratbedanama_diterima = $ambilsuratbedanama_diterima->num_rows;

                                $ambilsuratbedanama_ditolak = $koneksi->query("SELECT * FROM suratbedanama where date(dibuat) >= '$tanggalawal' and date(dibuat) <= '$tanggalakhir' and status ='Di Tolak' ") or die(mysqli_error($koneksi));
                                $suratbedanama_ditolak = $ambilsuratbedanama_ditolak->num_rows;
                                // 
                                $ambilsuratbelummenikah_diterima = $koneksi->query("SELECT * FROM suratbelummenikah where date(dibuat) >= '$tanggalawal' and date(dibuat) <= '$tanggalakhir' and status ='Di Setujui' ") or die(mysqli_error($koneksi));
                                $suratbelummenikah_diterima = $ambilsuratbelummenikah_diterima->num_rows;

                                $ambilsuratbelummenikah_ditolak = $koneksi->query("SELECT * FROM suratbelummenikah where date(dibuat) >= '$tanggalawal' and date(dibuat) <= '$tanggalakhir' and status ='Di Tolak' ") or die(mysqli_error($koneksi));
                                $suratbelummenikah_ditolak = $ambilsuratbelummenikah_ditolak->num_rows;
                                // 
                                $ambilsuratdomisili_diterima = $koneksi->query("SELECT * FROM suratdomisili where date(dibuat) >= '$tanggalawal' and date(dibuat) <= '$tanggalakhir' and status ='Di Setujui' ") or die(mysqli_error($koneksi));
                                $suratdomisili_diterima = $ambilsuratdomisili_diterima->num_rows;

                                $ambilsuratdomisili_ditolak = $koneksi->query("SELECT * FROM suratdomisili where date(dibuat) >= '$tanggalawal' and date(dibuat) <= '$tanggalakhir' and status ='Di Tolak' ") or die(mysqli_error($koneksi));
                                $suratdomisili_ditolak = $ambilsuratdomisili_ditolak->num_rows;
                                // 
                                $ambilsuratktp_diterima = $koneksi->query("SELECT * FROM suratktp where date(dibuat) >= '$tanggalawal' and date(dibuat) <= '$tanggalakhir' and status ='Di Setujui' ") or die(mysqli_error($koneksi));
                                $suratktp_diterima = $ambilsuratktp_diterima->num_rows;

                                $ambilsuratktp_ditolak = $koneksi->query("SELECT * FROM suratktp where date(dibuat) >= '$tanggalawal' and date(dibuat) <= '$tanggalakhir' and status ='Di Tolak' ") or die(mysqli_error($koneksi));
                                $suratktp_ditolak = $ambilsuratktp_ditolak->num_rows;
                                // 
                                $ambilsuratskck_diterima = $koneksi->query("SELECT * FROM suratskck where date(dibuat) >= '$tanggalawal' and date(dibuat) <= '$tanggalakhir' and status ='Di Setujui' ") or die(mysqli_error($koneksi));
                                $suratskck_diterima = $ambilsuratskck_diterima->num_rows;

                                $ambilsuratskck_ditolak = $koneksi->query("SELECT * FROM suratskck where date(dibuat) >= '$tanggalawal' and date(dibuat) <= '$tanggalakhir' and status ='Di Tolak' ") or die(mysqli_error($koneksi));
                                $suratskck_ditolak = $ambilsuratskck_ditolak->num_rows;
                                // 
                            } else {
                                $hariini = date('Y-m-d');
                                $tanggalawal = "";
                                $tanggalakhir = "";

                                $ambilsuratbedanama_diterima = $koneksi->query("SELECT * FROM suratbedanama where  status ='Di Setujui' ") or die(mysqli_error($koneksi));
                                $suratbedanama_diterima = $ambilsuratbedanama_diterima->num_rows;

                                $ambilsuratbedanama_ditolak = $koneksi->query("SELECT * FROM suratbedanama where  status ='Di Tolak' ") or die(mysqli_error($koneksi));
                                $suratbedanama_ditolak = $ambilsuratbedanama_ditolak->num_rows;
                                // 
                                $ambilsuratbelummenikah_diterima = $koneksi->query("SELECT * FROM suratbelummenikah where  status ='Di Setujui' ") or die(mysqli_error($koneksi));
                                $suratbelummenikah_diterima = $ambilsuratbelummenikah_diterima->num_rows;

                                $ambilsuratbelummenikah_ditolak = $koneksi->query("SELECT * FROM suratbelummenikah where  status ='Di Tolak' ") or die(mysqli_error($koneksi));
                                $suratbelummenikah_ditolak = $ambilsuratbelummenikah_ditolak->num_rows;
                                // 
                                $ambilsuratdomisili_diterima = $koneksi->query("SELECT * FROM suratdomisili where  status ='Di Setujui' ") or die(mysqli_error($koneksi));
                                $suratdomisili_diterima = $ambilsuratdomisili_diterima->num_rows;

                                $ambilsuratdomisili_ditolak = $koneksi->query("SELECT * FROM suratdomisili where  status ='Di Tolak' ") or die(mysqli_error($koneksi));
                                $suratdomisili_ditolak = $ambilsuratdomisili_ditolak->num_rows;
                                // 
                                $ambilsuratktp_diterima = $koneksi->query("SELECT * FROM suratktp where  status ='Di Setujui' ") or die(mysqli_error($koneksi));
                                $suratktp_diterima = $ambilsuratktp_diterima->num_rows;

                                $ambilsuratktp_ditolak = $koneksi->query("SELECT * FROM suratktp where  status ='Di Tolak' ") or die(mysqli_error($koneksi));
                                $suratktp_ditolak = $ambilsuratktp_ditolak->num_rows;
                                // 
                                $ambilsuratskck_diterima = $koneksi->query("SELECT * FROM suratskck where  status ='Di Setujui' ") or die(mysqli_error($koneksi));
                                $suratskck_diterima = $ambilsuratskck_diterima->num_rows;

                                $ambilsuratskck_ditolak = $koneksi->query("SELECT * FROM suratskck where  status ='Di Tolak' ") or die(mysqli_error($koneksi));
                                $suratskck_ditolak = $ambilsuratskck_ditolak->num_rows;
                                // 
                            }
                            $totalditerima = $suratbedanama_diterima + $suratbelummenikah_diterima + $suratdomisili_diterima + $suratktp_diterima + $suratskck_diterima;
                            $totalditolak = $suratbedanama_ditolak + $suratbelummenikah_ditolak + $suratdomisili_ditolak + $suratktp_ditolak + $suratskck_ditolak;
                            ?>
                            <form method="post">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <label class="mb-2">Tanggal Awal</label>
                                                <input type="date" class="form-control" name="tanggalawal" value="<?= $tanggalawal ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <label class="mb-2">Tanggal Akhir</label>
                                                <input type="date" class="form-control" name="tanggalakhir" value="<?= $tanggalakhir ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <button type="submit" name="submit" value="submit" class="btn btn-primary text-white" style="margin-top:30px">Cari</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </form>
                            <div class="table-responsive">
                                <table class="table table-hover table-striped table-bordered text-dark" id="example2">
                                    <thead>
                                        <tr>
                                            <th>Surat</th>
                                            <th>Di Tolak</th>
                                            <th>Di Terima</th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td>
                                            S. Pengantar SKCK
                                        </td>
                                        <td>
                                            <?= $suratskck_diterima ?>
                                        </td>
                                        <td>
                                            <?= $suratskck_ditolak ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            S. Ket. Belum Menikah
                                        </td>
                                        <td>
                                            <?= $suratbelummenikah_diterima ?>
                                        </td>
                                        <td>
                                            <?= $suratbelummenikah_ditolak ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            S. Ket. KTP
                                        </td>
                                        <td>
                                            <?= $suratktp_diterima ?>
                                        </td>
                                        <td>
                                            <?= $suratktp_ditolak ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            S. Ket. Beda Nama
                                        </td>
                                        <td>
                                            <?= $suratbedanama_diterima ?>
                                        </td>
                                        <td>
                                            <?= $suratbedanama_ditolak ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            S. Ket. Domisili </td>
                                        </td>
                                        <td>
                                            <?= $suratdomisili_diterima ?>
                                        </td>
                                        <td>
                                            <?= $suratdomisili_ditolak ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Total</b>
                                        </td>
                                        <td>
                                            <b><?= $totalditerima ?></b>
                                        </td>
                                        <td>
                                            <b><?= $totalditolak ?></b>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php'; ?>