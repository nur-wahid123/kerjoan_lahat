<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kabupaten Lahat</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../assets/assets_admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../assets/assets_admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="../assets/assets_admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="../assets/assets_admin/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="../assets/assets_admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../assets/assets_admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="../assets/assets_admin/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../assets/assets_admin/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <script src="../assets/ckeditor/ckeditor.js"></script>
</head>
<?php
include_once('../koneksi.php');
$sesi = $_SESSION['pengguna']['level'];
if ($_SESSION['pengguna']['nama'] == 'superadmin') $sesi = 'superadmin';
$iduser = $_SESSION['pengguna']['iduser'];
$ambilprofil = $koneksi->query("SELECT * FROM user WHERE iduser='$iduser'");
$profil = $ambilprofil->fetch_assoc();
if ($sesi == 'Admin') {
    $warna = '';
} elseif ($sesi == 'Penduduk') {
    $warna = '#055079';
} else {
    $warna = '#5c0907';
}
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="../assets/assets_admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">ADMIN PANEL</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="home.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <?php if ($sesi == 'Admin') { ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        Berita
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="beritatambah.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Berita Tambah</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="beritadaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Daftar Berita </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-chart-pie"></i>
                                    <p>
                                        Pengajuan
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="suratskckdaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>S. Pengantar SKCK</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="suratbelummenikahdaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>S. Ket. Belum Menikah</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="suratktpdaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>S. Ket. KTP</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="suratbedanamadaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>S. Ket. Beda Nama</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="suratdomisilidaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>S. Ket. Domisili</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                        Akun Penduduk
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="penduduktambah.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tambah Penduduk</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pendudukdaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Daftar Penduduk</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="pesan.php" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Pesan & Saran
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="ubahprofil.php" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                        Profil
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="logout.php" class="nav-link">
                                    <i class="nav-icon fas fa-table" onclick="return confirm('Apakah Anda Yakin Ingin Keluar ?')"></i>
                                    <p>
                                        Logout
                                    </p>
                                </a>
                            </li>
                        <?php } elseif ($sesi == 'Penduduk') { ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        S. Ket. Domisili
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="suratdomisilitambah.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p> Tambah Pengajuan</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="suratdomisilidaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p> Riwayat Pengajuan</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        S. Pengantar SKCK
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="suratskcktambah.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tambah Pengajuan</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="suratskckdaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Riwayat Pengajuan</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        S. Ket. Belum Menikah
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="suratbelummenikahtambah.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tambah Pengajuan</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="suratbelummenikahdaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Riwayat Pengajuan</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        S. Ket. Beda Nama
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="suratbedanamatambah.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tambah Pengajuan</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="suratbedanamadaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Riwayat Pengajuan</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        S. Ket. KTP
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="suratktptambah.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tambah Pengajuan</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="suratktpdaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Riwayat Pengajuan</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="ubahprofil.php" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                        Profil
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="logout.php" class="nav-link">
                                    <i class="nav-icon fas fa-table" onclick="return confirm('Apakah Anda Yakin Ingin Keluar ?')"></i>
                                    <p>
                                        Logout
                                    </p>
                                </a>
                            </li>
                        <?php } elseif ($sesi == 'superadmin') { ?>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        Berita
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="beritatambah.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Berita Tambah</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="beritadaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Daftar Berita </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-chart-pie"></i>
                                    <p>
                                        Pengajuan
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="suratskckdaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>S. Pengantar SKCK</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="suratbelummenikahdaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>S. Ket. Belum Menikah</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="suratktpdaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>S. Ket. KTP</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="suratbedanamadaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>S. Ket. Beda Nama</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="suratdomisilidaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>S. Ket. Domisili</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tree"></i>
                                    <p>
                                        Akun Internal
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="internaltambah.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tambah Internal</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="internaldaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Daftar Internal</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                        Akun Penduduk
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="penduduktambah.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tambah Penduduk</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pendudukdaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Daftar Penduduk</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="pesan.php" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Pesan & Saran
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="ubahprofil.php" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                        Profil
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="logout.php" class="nav-link">
                                    <i class="nav-icon fas fa-table" onclick="return confirm('Apakah Anda Yakin Ingin Keluar ?')"></i>
                                    <p>
                                        Logout
                                    </p>
                                </a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a href="beritadaftar.php" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Berita
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        Pengajuan
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="suratskckdaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>S. Pengantar SKCK</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="suratbelummenikahdaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>S. Ket. Belum Menikah</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="suratktpdaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>S. Ket. KTP</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="suratbedanamadaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>S. Ket. Beda Nama</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="suratdomisilidaftar.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>S. Ket. Domisili</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="laporandaftar.php" class="nav-link">
                                    <i class="nav-icon fas fa-chart-pie"></i>
                                    <p>
                                        Laporan Pengajuan
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="rekapsurat.php" class="nav-link">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        Rekap Surat
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="internaldaftar.php" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                        Akun Internal
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pendudukdaftar.php" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Akun Penduduk
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pesan.php" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Pesan & Saran
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="ubahprofil.php" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                        Profil
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="logout.php" class="nav-link">
                                    <i class="nav-icon fas fa-table" onclick="return confirm('Apakah Anda Yakin Ingin Keluar ?')"></i>
                                    <p>
                                        Logout
                                    </p>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>