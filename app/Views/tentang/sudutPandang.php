<?= $this->extend('templateUser/tema'); ?>
<?= $this->section('konten'); ?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="<?= base_url('/') ?>">Home</a></li>
            <li>Sudut Pandang</li>
        </ol>
        <h2>Sudut Pandang</h2>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Featured Section ======= -->
<section id="featured" class="featured">
    <div class="container">
        <div class="section-title">
            <h2>Sudut Pandang</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>

        </div>
        <section id="team2" class="team2">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member2">
                            <img src="/templateUser/assets/img/blog/blog-1.jpg" alt="">
                            <h4>Judul Postingan</h4>

                            <p>
                                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                            </p>
                            <div class="social">
                                <a href="#" class="btn btn-primary btn-sm btn-block" style="color:white">Lihat Selengkapnya ...</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member2">
                            <img src="/templateUser/assets/img/blog/blog-2.jpg" alt="">
                            <h4>Judul Postingan</h4>

                            <p>
                                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                            </p>
                            <div class="social">
                                <a href="#" class="btn btn-primary btn-sm btn-block" style="color:white">Lihat Selengkapnya ...</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member2">
                            <img src="/templateUser/assets/img/blog/blog-3.jpg" alt="">
                            <h4>Judul Postingan</h4>

                            <p>
                                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                            </p>
                            <div class="social">
                                <a href="#" class="btn btn-primary btn-sm btn-block" style="color:white">Lihat Selengkapnya ...</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->


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

<?= $this->section('js'); ?>
<script>
    $(document).ready(function() {
        $('#table-2').DataTable({
            "paging": true,
            "ordering": false,
            "info": false
        });
    });
</script>
<?= $this->endSection(); ?>