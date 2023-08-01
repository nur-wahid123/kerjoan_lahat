<?php
include 'header.php'; ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pengajuan Surat KTP</h1>
                    <br>
                    <?php
                    if ($sesi == 'Penduduk') { ?>
                        <a class="btn btn-success" href="suratktptambah.php">Tambah Data</a>
                    <?php } ?>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Pengajuan Surat KTP</li>
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
                            <h3 class="card-title">Data Pengajuan Surat KTP</h3>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th width="50">NO</th>
                                        <th>NIK</th>
                                        <th>NAMA</th>
                                        <th>WAKTU PENGAJUAN</th>
                                        <th>STATUS</th>
                                        <?php if ($sesi == 'Admin' || $sesi == 'superadmin' || $sesi == 'Kepala Desa') { ?>
                                            <th width="50">AKSI</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    if ($sesi == 'Penduduk') {
                                        $result = $koneksi->query("SELECT * FROM suratktp where iduser='$iduser'") or die(mysqli_error($koneksi));
                                    } else {
                                        $result = $koneksi->query("SELECT * FROM suratktp") or die(mysqli_error($koneksi));
                                    }
                                    while ($data = $result->fetch_array()) {
                                    ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $data['nik']; ?></td>
                                            <td><?= $data['nama']; ?></td>
                                            <?php
                                            $tanggaldanwaktu = new DateTime($data['dibuat']);
                                            $tanggal = $tanggaldanwaktu->format("Y-m-d");
                                            $waktu = $tanggaldanwaktu->format("H-i");
                                            ?>
                                            <td><?= tanggal($tanggal) . ' - Pukul : ' . $waktu ?> W.I.B</td>
                                            <?php
                                            if ($data['status'] == "Di Setujui") {
                                                $warna = "success";
                                            } elseif ($data['status'] == "Di Tolak") {
                                                $warna = "danger";
                                            } else {
                                                $warna = "primary";
                                            }
                                            if ($sesi == 'Admin' || $sesi == 'superadmin' or $sesi == 'Kepala Desa') { ?>
                                                <td>
                                                    <a href="suratktpverifikasi.php?id=<?= $data['idsuratktp'] ?>" class="btn btn-sm btn-<?= $warna ?>"><?= $data['status']; ?></i></a>
                                                    <?php
                                                    if ($data['status'] == "Di Tolak") {
                                                        echo '- ' . $data['keterangan'];
                                                    }
                                                    ?>
                                                    <?php
                                                    if ($data['status'] == "Di Setujui") {
                                                    ?>
                                                        <a target="_blank" href="suratktpcetak.php?id=<?= $data['idsuratktp'] ?>" class="btn btn-sm btn-primary m-1">Download Surat</a>
                                                    <?php } ?>
                                                </td>
                                            <?php } elseif ($sesi == 'Penduduk') { ?>
                                                <td><?php
                                                    if ($data['status'] == "Di Tolak") {
                                                        echo $data['status'] . ' - ' . $data['keterangan'];
                                                    }
                                                    ?>
                                                    <?php if ($data['status'] == "Di Setujui") {
                                                        echo $data['keterangan'] . '<br>';
                                                    ?>
                                                        <a target="_blank" href="suratktpcetak.php?id=<?= $data['idsuratktp'] ?>" class="btn btn-sm btn-primary m-1">Download Surat</a>
                                                    <?php
                                                    } ?>
                                                    <?php
                                                    if ($data['status'] == "Menunggu Persetujuan") {
                                                        echo $data['status'];
                                                    }
                                                    ?>
                                                </td>
                                            <?php } ?>
                                            <?php if ($sesi == 'Admin' || $sesi == 'superadmin' || $sesi == 'Kepala Desa') { ?>
                                                <td>
                                                    <a href="suratktpedit.php?id=<?= $data['idsuratktp'] ?>" class="btn btn-sm btn-primary m-1">Edit</a>
                                                    <a href="suratktphapus.php?id=<?= $data['idsuratktp'] ?>" class="btn btn-sm btn-danger m-1" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">Hapus</a>
                                                </td>
                                            <?php } ?>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php'; ?>