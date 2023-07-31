<?php
include 'header.php'; ?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Pengumuman</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped" id="example">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Judul</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $result = $koneksi->query("SELECT * FROM pengumuman order by tanggal desc, id desc");
                                    while ($data = $result->fetch_array()) :
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['tanggal'] ?></td>
                                            <td><?= $data['judul'] ?>
                                            </td>
                                            <td><img src="../foto/<?= $data['foto'] ?>" width="150px" style="border-radius:10px"></td>
                                            <td>
                                                <a class="btn btn-primary" href="pengumumanedit.php?id=<?= $data['id'] ?>">Edit</a>
                                                <a class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" href="pengumumanhapus.php?id=<?= $data['id'] ?>">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>