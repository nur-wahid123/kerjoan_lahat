<?php include_once('layouts/header.php');
include_once('koneksi.php');
?>

<section class="consultation">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box">
                    <br><br>
                    <h2 class="section-title" style="color: white;">Berita Detail</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br>
<section class="faq overlay-light">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <?php
                $result = $koneksi->query("SELECT * FROM berita where id = '$_GET[id]' limit 1");
                while ($data = $result->fetch_array()) :
                    ?>
                    <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="border-radius: 10px;">
                        <img class="card-img-top" style="height: 350px;object-fit:cover;width:100%;" src="foto/<?= $data['foto'] ?>" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title text-primary"><a href="beritadetail.php?id=<?php echo $data['id']; ?>"><?php echo $data['judul']; ?></a></h2>
                            <p class="card-text"><small class="text-muted"><?php echo tanggal(date($data['tanggal'])); ?></small></p>
                            <br>
                            <?= $data['isi'] ?>
                            <br>
                            <p class="card-text"><i class="fa fa-tag text-success"></i> <?= $data['kategori'] ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<br><br>
<?php include_once('layouts/footer.php') ?>