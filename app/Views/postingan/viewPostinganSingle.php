<?= $this->extend('templateUser/tema'); ?>
<?= $this->section('konten'); ?>

<!-- ======= Blog Single Section ======= -->
<?php
if(!$artikel){
    echo "<script>alert('artikel belum ada')</script>";
    echo "<script>window.location.href = '/viewArtikel'</script>";
}
?>
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-8 entries">
                <article class="entry entry-single">
                    <div class="entry-img">
                        <img src="<?php echo $artikel['gambar'];?>" alt="banner" class="img-fluid">
                    </div>
                    <h2 class="entry-title">
                        <a href="blog-single.html"><?= $artikel["judul_berita"]?></a>
                    </h2>
                    <div class="entry-meta">
                    <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html"><?= $artikel["username"]?></a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="<?= $artikel['tanggal_publish']?>"><?= $artikel["tanggal_publish"]?></time></a></li>
                        <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li> -->
                    </ul>
                </div>
                <div class="entry-content">
                    <?= $artikel["isi"]?>
                </div>
                <div class="entry-footer">
                    <i class="bi bi-folder"></i>
                    <ul class="cats">
                    <li><a href="#"><?= $kategoriById["nama_kategori"]?></a></li>
                </ul>
                <i class="bi bi-tags"></i>
                <ul class="tags">
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">Tips</a></li>
                    <li><a href="#">Marketing</a></li>
                </ul>
            </div>
        </article><!-- End blog entry -->
        <div class="blog-author d-flex align-items-center">
            <img src="/<?php echo $artikel['foto_profil'];?>" class="rounded-circle float-left" alt="">
            <div>
                <h4><?= $artikel["username"]?></h4>
                <div class="social-links">
                    <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                    Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                </p>
            </div>
        </div><!-- End blog author bio -->
    </div><!-- End blog entries list -->
    <div class="col-lg-4">
        <div class="sidebar">
            <h3 class="sidebar-title">Categories</h3>
            <div class="sidebar-item categories">
            <ul>
            <?php
                foreach($kategori as $k){
            ?>
				<li><a href="#"><?= $k["nama_kategori"]?></a></li>
            <?php }?>
            </ul>
        </div><!-- End sidebar categories-->
    </div><!-- End blog sidebar -->
</div>
</div>
</section><!-- End Blog Single Section -->



<?= $this->endSection(); ?>