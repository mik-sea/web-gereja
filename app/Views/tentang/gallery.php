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
                                <h4><?= $gallery['judul']?></h4>
                                <p><?= $gallery['ringkasan']?></p>
                                <div class="portfolio-links">
                                    <a href="/templateUser/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section><!-- End Portfolio Section -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</section><!-- End Featured Section -->
<?= $this->endSection(); ?>