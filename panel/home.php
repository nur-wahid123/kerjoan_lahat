<?php
include_once('../koneksi.php');
include 'header.php';
if ($sesi != 'Penduduk') {

    $suratskck = $koneksi->query("SELECT * FROM suratskck");
    $jumlahsuratskck = $suratskck->num_rows;

    $suratbelummenikah = $koneksi->query("SELECT * FROM suratbelummenikah");
    $jumlahsuratbelummenikah = $suratbelummenikah->num_rows;

    $suratktp = $koneksi->query("SELECT * FROM suratktp");
    $jumlahsuratktp = $suratktp->num_rows;

    $suratbedanama = $koneksi->query("SELECT * FROM suratbedanama");
    $jumlahsuratbedanama = $suratbedanama->num_rows;

    $suratdomisili = $koneksi->query("SELECT * FROM suratdomisili");
    $jumlahsuratdomisili = $suratdomisili->num_rows;
} else {

    $suratskck = $koneksi->query("SELECT * FROM suratskck where iduser='$iduser'");
    $jumlahsuratskck = $suratskck->num_rows;

    $suratbelummenikah = $koneksi->query("SELECT * FROM suratbelummenikah where iduser='$iduser'");
    $jumlahsuratbelummenikah = $suratbelummenikah->num_rows;

    $suratktp = $koneksi->query("SELECT * FROM suratktp where iduser='$iduser'");
    $jumlahsuratktp = $suratktp->num_rows;

    $suratbedanama = $koneksi->query("SELECT * FROM suratbedanama where iduser='$iduser'");
    $jumlahsuratbedanama = $suratbedanama->num_rows;

    $suratdomisili = $koneksi->query("SELECT * FROM suratdomisili where iduser='$iduser'");
    $jumlahsuratdomisili = $suratdomisili->num_rows;
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-12 connectedSortable">
                    <div class="card">
                        <div class="card-body">
                            <center>
                                <img src="../assets/welcome.png" style="width:80%;border-radius:10%;" alt="">
                            </center>
                        </div>
                    </div>
                </section>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?= $jumlahsuratskck ?></h3>

                            <p>Jumlah Pengajuan Surat SKCK</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="suratskckdaftar.php" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?= $jumlahsuratdomisili ?></h3>

                            <p>Jumlah Pengajuan Domisili</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="suratdomisilidaftar.php" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?= $jumlahsuratbedanama ?></h3>

                            <p>Jumlah Pengajuan Surat Beda Nama</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="suratbedanamadaftar.php" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?= $jumlahsuratbelummenikah ?></h3>

                            <p>Jumlah Pengajuan Surat Belum Menikah</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="suratbelummenikahdaftar.php" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3><?= $jumlahsuratktp ?></h3>

                                    <p>Jumlah Pengajuan KTP</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="suratktpdaftar.php" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php'; ?>