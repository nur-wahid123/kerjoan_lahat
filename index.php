<?php include_once('layouts/header.php');
?>
<header id="header" class="header overlay-dark">
   <div class="container">
      <div class="row">
         <div class="col-sm-6 col-sm-offset-3">
            <div class="intro-box c-table">
               <div class="intro ct-cell">
                  <h1>Pengajuan Surat Online </h1>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>

<br><br>

<!-- Why choose us -->
<section id="sambutan" class="choose overlay-light">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <div class="title-box">
               <h2 class="section-title">Kata Sambutan</h2>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-sm-12">
            <div class="choose-box">

               <h3 class="choose-title"> Website ini dimaksudkan sebagai sarana publikasi untuk memberikan Informasi dan gambaran tentang potensi Kabupaten Lahat serta meningkatkan pelayanan kepada masyarakat untuk mengakses informasi. Melalui keberadaan website ini kiranya masyarakat dapat mengetahui seluruh informasi tentang kebijakan Pemerintah Kabupaten Lahat.
               </h3>
            </div>
         </div>
      </div>
   </div>
</section>

<section id="galeri" class="practice">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <div class="title-box">
               <h2 class="section-title">Galeri Kegiatan</h2>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-sm-6 col-md-6">
            <div class="practice-box">
               <img class="img-responsive img-full" src="assets/assets_home/assets/images/gb1.jpeg">
            </div>
         </div>
         <div class="col-sm-6 col-md-6">
            <div class="practice-box">
               <img class="img-responsive img-full" src="assets/assets_home/assets/images/gb2.jpeg">
            </div>
         </div>
         <div class="col-sm-6 col-md-6">
            <div class="practice-box">
               <img class="img-responsive img-full" src="assets/assets_home/assets/images/gb6.jpg">
            </div>
        <!-- </div>
         <div class="col-sm-6 col-md-6">
            <div class="practice-box">
               <img class="img-responsive img-full" src="assets/assets_home/assets/images/bg2.jpg">
            </div>
         </div> -->
      </div>
   </div>
</section>

<!-- Slider 1 -->
<section id="visimisi" class="slider-1 overlay-light">
   <div class="container">
      <div class="row">
         <div class="col-sm-4 hidden-xs">
            <img class="img-responsive img-full mb0" style="" src="assets/assets_home/assets/images/logobaru.png" alt="familly">
         </div>
         <div class="col-sm-7 col-sm-offset-1">
            <div id="slider_1" class="owl-carousel">
               <div class="item">
                  <div class="slider-1-item-box">
                     <h2>Visi</h2>
                     <p>
                        Terwujudnya pelayanan administrasi kependudukan yang prima, cepat, tepat, akurat berbasis SIAK yang berakhlak,  mandiri, berkeadilan dan berkelanjutan </p>
                  </div>
               </div>
               <div class="item">
                  <div class="slider-1-item-box">
                     <h2>Misi </h2>
                     <ol>
                        <p>Mewujudkan tertib administrasi kependudukan berbasis SIAK yang akuntabel</p>
                        <p>Melaksanakan pemutakhiran data kependudukan</p>
                        <p>Meningkatkan kualitas sumber daya manusia dibidang pelayanan administrasi kependudukan yang berakhlak, sehat, cerdas, terampil, dan berkepribadian luhur</p>
                        <p>Meningkatkan infrastruktur pelayanan administrasi kependudukan berbasis pada teknologi inotasi dan SIAK</p>
                        <p>Meningkatkan pelayanan administrasi kependudukan yang optimal dan responsive berdasarkan kebutuhan masyarakat</p>
                        <p>Mewujudkan database kependudukan yang akurat, valid, dan dapat dipertanggungjawabkan</p>
                        <p>Mewujudkan tatanan pelayanan</p>
                        <p>Mewujudkan pendataan kelengkapan sarana dan prasarana</p>
                     </ol>

                  </div>
               </div>
               <div class="item">
                  <div class="slider-1-item-box">
                     <h2>Sejarah </h2>
                     <p>SEJARAH hari jadi Kabupaten Lahat di Sumatera Selatan berdasarkan hasil penelitian yang dilakukan Panitia Penetapan Hari Jadi Kabupaten daerah tingkat II Lahat 4 Oktober 1995 sampai dengan 26 April 1996 tidak bisa lepas dari perjalanan sejarah pemerintah Hindia Belanda atau Goverment oostkust Van Sumatera yang berkuasa dari 1823 sampai dengan 1918 di Indonesia termasuk di Sumatera Selatan.</p>
                     <br>
                     <p>Pemerintah Hindia Belanda pada tahun 1823 tercatat mulai menguasai kesultanan palembang saat dipimpin Sultan Mahmud Badarudin II. Usai menduduki Kesultanan Palembang Belanda mengasingkan Sultan Mahmud Badarudin IIke Batavia (Betawi) satau Jakarta sekarang. Selanjutnya Sultan Mahmud Badarudin II disasingkan lagi ke Ternate sampai akhir hayatnya.</p>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Team -->
<section id="berita" class="team">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <div class="title-box">
               <h2 class="section-title">Berita</h2>
            </div>
         </div>
      </div>

      <div class="row">
         <?php
         $result = $koneksi->query("SELECT * FROM berita order by id desc limit 3");
         while ($data = $result->fetch_array()) :
            ?>
            <div class="col-sm-6">
               <div class="team-box">
                  <a href="beritadetail.php?id=<?php echo $data['id']; ?>"><img style="height: 300px;object-fit:cover" class="img-responsive img-full" src="foto/<?= $data['foto'] ?>" alt="team"></a>
                  <div class="team-detail">
                     <ul>
                        <li>
                           <h3><?php echo $data['judul']; ?></h3>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         <?php endwhile; ?>
      </div>
   </div>
</section>

<!-- Contact -->
<section id="contact" class="contact">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <div class="title-box">
               <h2 class="section-title">Kontak</h2>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-sm-6">
            <img style="height: 100px;" src="assets/assets_home/assets/images/logobaru.png" alt="logo" class="contact-logo">
            <ul>
               <li><span class="ion-location"></span>Kabupaten Lahat, Sumatera Selatan</li>
               <li><span class="ion-android-call"></span>082177205768</li>
               <li><span class="ion-paper-airplane"></span>kablahat@gmail.com</li>
            </ul>
         </div>
         <div class="col-sm-6">
            <form id="contactForm" method="post">
               <div class="input-group">
                  <span class="input-group-addon">
                  </span>
                  <input class="form-control" type="text" placeholder="Nama" name="nama" required>
               </div>
               <div class="input-group">
                  <span class="input-group-addon">
                  </span>
                  <input class="form-control" name="email" type="email" placeholder="Email" required>
               </div>
               <div class="input-group">
                  <span class="input-group-addon">
                  </span>
                  <input class="form-control" name="nohp" type="number" placeholder="No. Telepon" required>
               </div>
               <div class="input-group">
                  <span class="input-group-addon custom-addon">
                  </span>
                  <textarea class="form-control" rows="8" placeholder="Pesan / Saran Anda" name="pesan"></textarea>
               </div>
               <button id="cfsubmit" type="submit" class="btn btn-default btn-block">Kirim <span class="ion-paper-airplane"></span></button>
            </form>

            <div id="contactFormResponse"></div>
         </div>
      </div>
   </div>
</section>

<!-- Subscribe -->
<div id="subscribe" class="subscribe">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 text-center">
            <h2>Kabupaten Lahat</h2>
         </div>
         <div class="col-sm-6">
            <!-- SUCCESS OR ERROR MESSAGES -->
            <div id="subscription-response"></div>
         </div>
      </div>
   </div>
</div>
<?php include_once('layouts/footer.php') ?>