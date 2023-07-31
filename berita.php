<?php include_once('layouts/header.php');
include_once('koneksi.php');
?>
<section class="consultation">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box">
                    <br><br>
                    <h2 class="section-title" style="color: white;">Berita </h2>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br>
<section class="slider-1 overlay-light">
    <div class="container">
        <div class="row">
            <?php
            function potong($string, $word_limit)
            {
                $words = explode(" ", $string);
                return implode(" ", array_splice($words, 0, $word_limit));
            }
            if (isset($_POST["cari"])) {
                $result = $koneksi->query("SELECT * FROM berita where judul like '%$_POST[keyword]%' order by tanggal desc, id desc");
            } else {
                $result = $koneksi->query("SELECT * FROM berita order by tanggal desc, id desc");
            }
            while ($data = $result->fetch_array()) :
                ?>
                <div class="col-sm-12 hidden-xs">
                    <div class="team-box">
                        <a href="beritadetail.php?id=<?php echo $data['id']; ?>"> <img class="img-responsive img-full" style="height: 300px;object-fit:cover" src="foto/<?= $data['foto'] ?>" alt="team"></a>
                        <div class="team-detail">
                            <ul>
                                <li>
                                    <h3><?php echo $data['judul']; ?></h3>
                                </li>
                                <li>
                                    <h4><?= tanggal($data['tanggal']) ?></h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

        </div>
    </div>
</section>
<?php include_once('layouts/footer.php') ?>