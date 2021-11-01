<?= $this->extend('templateUser/tema'); ?>
<?= $this->section('konten'); ?>

<!-- view artikel -->
<section id="featured-artikel" class="artikel mt-2">
    <div class="container">
        <?php
            foreach($postingan as $artikel){
        ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="img">
                        <img src="<?= $artikel['gambar'];?>" alt="image artikel" width="200px" height="200px">
                    </div>
                </div>
                <div class="col-12 col-md-9 col-lg-9">
                    <div class="judul">
                        <h2><?php echo $artikel["judul_berita"];?></h2>
                    </div>
                    <div class="ringkasan">
                        <h6><?php echo $artikel["ringkasan"];?></h6>
                    </div>
                    <div class="selengkapnya">
                        <a href="/artikel/<?php $artikel["slug_berita"]?>">Selengkapnya...</a>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php echo $pager->links("postingan","bootstrap_pagination");?>
    </div>
</section><!-- view artikel -->



<?= $this->endSection(); ?>