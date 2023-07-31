<?php
include 'header.php'; ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Laporan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Laporan</li>
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
                            <h3 class="card-title">Daftar Laporan</h3>
                        </div>
                        <div class="card-body">
                            <?php
                            $hariini = date('Y-m-d');
                            if (isset($_POST['submit'])) {
                                $tahun = $_POST['tahun'];
                                $bulan = $_POST['bulan'];
                            } else {
                                $tahun = date('Y', strtotime($hariini));
                                $bulan = date('m', strtotime($hariini));
                            }
                            ?>
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tahun</label>
                                            <select class="form-control" name="tahun" required>
                                                <?php
                                                $nomor = 1;
                                                $tahunawal = 2017;
                                                $tahunakhir = date('Y');
                                                while ($tahunakhir >= $tahunawal) {
                                                    ?>
                                                    <option <?php if ($tahun == $tahunakhir) echo 'selected'; ?> value="<?= $tahunakhir ?>"><?= $tahunakhir ?></option>
                                                <?php
                                                    $tahunakhir = $tahunakhir - 1;
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Bulan</label>
                                            <select name="bulan" class="form-control" id="">
                                                <option value="0">Pilih Bulan</option>
                                                <option <?php if ($bulan == '01') echo 'selected'; ?> value="01">Januari</option>
                                                <option <?php if ($bulan == '02') echo 'selected'; ?> value="02">Februari</option>
                                                <option <?php if ($bulan == '03') echo 'selected'; ?> value="03">Maret</option>
                                                <option <?php if ($bulan == '04') echo 'selected'; ?> value="04">April</option>
                                                <option <?php if ($bulan == '05') echo 'selected'; ?> value="05">Mei</option>
                                                <option <?php if ($bulan == '06') echo 'selected'; ?> value="06">Juni</option>
                                                <option <?php if ($bulan == '07') echo 'selected'; ?> value="07">Juli</option>
                                                <option <?php if ($bulan == '08') echo 'selected'; ?> value="08">Agustus</option>
                                                <option <?php if ($bulan == '09') echo 'selected'; ?> value="09">September</option>
                                                <option <?php if ($bulan == '10') echo 'selected'; ?> value="10">Oktober</option>
                                                <option <?php if ($bulan == '11') echo 'selected'; ?> value="11">November</option>
                                                <option <?php if ($bulan == '12') echo 'selected'; ?> value="12">Desember</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <button type="submit" name="submit" value="submit" class="btn btn-primary text-white" style="margin-top:30px">Cari</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table id="example2" class="table table-bordered table-hover">
                                    <tr>
                                        <td width="90%">
                                            S. Ket. KTP
                                        </td>
                                        <td><a class="btn btn-success btn-sm m-1 text-white" href="laporancetak.php?id=suratktp&tahun=<?= $tahun ?>&bulan=<?= $bulan ?>" target="_blank"><i class="fa fa-download"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td width="90%">
                                            S. Pengantar SKCK
                                        </td>
                                        <td><a class="btn btn-success btn-sm m-1 text-white" href="laporancetak.php?id=suratskck&tahun=<?= $tahun ?>&bulan=<?= $bulan ?>" target="_blank"><i class="fa fa-download"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td width="90%">
                                            S. Ket. Belum Menikah</td>
                                        <td><a class="btn btn-success btn-sm m-1 text-white" href="laporancetak.php?id=suratbelummenikah&tahun=<?= $tahun ?>&bulan=<?= $bulan ?>" target="_blank"><i class="fa fa-download"></i></a></td>
                                    </tr>
                                    <!-- <tr>
                                        <td width="90%">
                                            S. Ket. Tidak Mampu
                                        </td>
                                        <td><a class="btn btn-success btn-sm m-1 text-white" href="laporancetak.php?id=surattidakmampu&tahun=<?= $tahun ?>&bulan=<?= $bulan ?>" target="_blank"><i class="fa fa-download"></i></a></td>
                                    </tr> -->
                                    <!-- <tr>
                                        <td width="90%">
                                            S. Ket. Jalan
                                        </td>
                                        <td><a class="btn btn-success btn-sm m-1 text-white" href="laporancetak.php?id=suratktp&tahun=<?= $tahun ?>&bulan=<?= $bulan ?>" target="_blank"><i class="fa fa-download"></i></a></td>
                                    </tr> -->
                                    <tr>
                                        <td width="90%">
                                            S. Ket. Beda Nama
                                        </td>
                                        <td><a class="btn btn-success btn-sm m-1 text-white" href="laporancetak.php?id=suratbedanama&tahun=<?= $tahun ?>&bulan=<?= $bulan ?>" target="_blank"><i class="fa fa-download"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td width="90%">
                                            S. Ket. Domisili </td>
                                        </td>
                                        <td><a class="btn btn-success btn-sm m-1 text-white" href="laporancetak.php?id=suratdomisili&tahun=<?= $tahun ?>&bulan=<?= $bulan ?>" target="_blank"><i class="fa fa-download"></i></a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<?php include 'footer.php'; ?>