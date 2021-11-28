<?= $this->extend('templateUser/tema'); ?>
<?= $this->section('konten'); ?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="<?= base_url('/') ?>">Home</a></li>
            <li>Gallery</li>
        </ol>
        <h2>Gallery</h2>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Featured Section ======= -->
<section id="featured" class="featured">
    <div class="container">
        <div class="section-title">
            <h2>Gallery</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                    </div>
                </div>
                <div class="row portfolio-container">
                <?php foreach($data as $gallery):?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="<?= $gallery['gambar']?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p><?= $gallery['judul_berita']?></p>
                                <?php if($gallery["tipe_postingan"] == "berita"){ ?>
                                <div class="portfolio-links">
                                    <a href="/viewArtikel/<?= $gallery['id_berita']?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                    <a href="/viewArtikel/<?= $gallery['id_berita']?>" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                                <?php } else if($gallery["tipe_postingan"] == "gallery"){?>
                                    <div class="portfolio-links">
                                        <a href="/viewArtikel/<?= $gallery['id_berita']?>" title="More Details"><i class="bx bx-link"></i></a>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section><!-- End Portfolio Section -->
        <nav aria-label="Page navigation example">
            <?php echo $pager->links("gallery","bootstrap_pagination");?>
        </nav>
    </div>
</section><!-- End Featured Section -->
<?= $this->endSection(); ?>