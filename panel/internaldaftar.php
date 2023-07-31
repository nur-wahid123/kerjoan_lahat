<?php
include 'header.php'; ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Akun Internal</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Akun Internal</li>
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
                            <h3 class="card-title">Data Akun Internal</h3>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th width="50">NO</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Level</th>
                                        <?php
                                        if ($sesi == 'superadmin') {
                                        ?>
                                            <th width="50">Aksi</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $result = $koneksi->query("SELECT * FROM user where statusaktif='Aktif' and level!='Penduduk'") or die(mysqli_error($koneksi));
                                    while ($data = $result->fetch_array()) {
                                    ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $data['username']; ?></td>
                                            <td><?= $data['nama']; ?></td>
                                            <td><?= $data['alamat']; ?></td>
                                            <td><?= $data['level']; ?></td>
                                            <?php if ($sesi == 'superadmin') { ?>
                                                <td>
                                                    <a href="internaledit.php?id=<?= $data['iduser'] ?>" class="btn btn-sm btn-primary m-1"><i class="fa fa-edit"></i></a>
                                                    <a href="internalhapus.php?id=<?= $data['iduser'] ?>" class="btn btn-sm btn-danger m-1" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')"><i class="fa fa-trash"></i></a>
                                                </td>
                                            <?php } ?>
                                        </tr>
                                    <?php
                                        $no++;
                                    } ?>
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