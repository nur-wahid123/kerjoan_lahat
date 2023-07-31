<?php include_once('layouts/header.php');
include_once('koneksi.php');
?>
<main>


    <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center pt-50">
                        <h2>Berita</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <?php
                    function potong($string, $word_limit)
                    {
                        $words = explode(" ", $string);
                        return implode(" ", array_splice($words, 0, $word_limit));
                    }
                    if (isset($_POST["cari"])) {
                        $result = $koneksi->query("SELECT * FROM berita where judul like '%$_POST[keyword]%' and kategori='$_GET[id]' order by tanggal desc, id desc");
                    } else {
                        $result = $koneksi->query("SELECT * FROM berita where kategori='$_GET[id]' order by tanggal desc, id desc");
                    }
                    while ($data = $result->fetch_array()) :
                    ?>
                        <div class="blog_left_sidebar">
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="foto/<?= $data['foto'] ?>" alt="">
                                    <a class="blog_item_date">
                                        <h3><?= tanggal($data['tanggal']) ?></h3>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="beritadetail.php?id=<?php echo $data['id']; ?>"><?php echo $data['judul']; ?>
                                        <h2><?php echo $data['judul']; ?></h2>
                                    </a>
                                    <br>
                                    <a href="beritadetail.php?id=<?php echo $data['id']; ?>" class="btn btn-primary float-right text-white">Baca Selengkapnya</a>
                                    <br>
                                    <br>
                                </div>
                            </article>
                        </div>
                    <?php endwhile; ?>

                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form method="post">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="keyword" placeholder='Cari'>
                                        <div class="input-group-append">
                                            <button class="btns" type="submit" name="cari" value="cari"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Kategori</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="beritakategori.php?id=desa" class="d-flex">
                                        <p>Desa</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="beritakategori.php?id=sekolah" class="d-flex">
                                        <p>Sekolah</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="beritakategori.php?id=pembangunan" class="d-flex">
                                        <p>Lomba</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="beritakategori.php?id=kunjungan" class="d-flex">
                                        <p>Pembangunan</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="beritakategori.php?id=kunjungan" class="d-flex">
                                        <p>Kunjungan</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

</main>
<?php include_once('layouts/footer.php') ?>