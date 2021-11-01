<?= $this->extend('templateUser/tema'); ?>
<?= $this->section('konten'); ?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="<?= base_url('/') ?>">Home</a></li>
            <li>Keanggotaan</li>
        </ol>
        <h2>Keanggotaan</h2>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Featured Section ======= -->
<section id="featured" class="featured">
    <div class="container">
        <div class="section-title">
            <h2>Keanggotaan</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <!-- ======= Testimonials Section ======= -->
        <section id="testimoni" class="testimonials">

            <div class="container" data-aos="fade-up">


                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">


                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="count-box">

                                    <span id="angka">11200</span>
                                    <p><strong>Total Jemaat Resort Jawa</strong></p>
                                    <a href="#">Lihat Selengkapnya &raquo;</a>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="count-box">

                                    <span id="angka">1150</span>
                                    <p><strong>Jemaat Jakarta</strong></p>
                                    <a href="#">Lihat Selengkapnya &raquo;</a>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="count-box">

                                    <span id="angka">240</span>
                                    <p><strong>Jemaat Cikarang</strong></p>
                                    <a href="#">Lihat Selengkapnya &raquo;</a>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="count-box">

                                    <span id="angka">560</span>
                                    <p><strong>Jemaat Depok</strong></p>
                                    <a href="#">Lihat Selengkapnya &raquo;</a>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="count-box">

                                    <span id="angka">660</span>
                                    <p><strong>Jemaat Tangerang</strong></p>
                                    <a href="#">Lihat Selengkapnya &raquo;</a>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="count-box">

                                    <span id="angka">657</span>
                                    <p><strong>Jemaat Bandung</strong></p>
                                    <a href="#">Lihat Selengkapnya &raquo;</a>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="count-box">

                                    <span id="angka">560</span>
                                    <p><strong>Jemaat Bandung Timur</strong></p>
                                    <a href="#">Lihat Selengkapnya &raquo;</a>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="count-box">

                                    <span id="angka">879</span>
                                    <p><strong>Jemaat Sepatan</strong></p>
                                    <a href="#">Lihat Selengkapnya &raquo;</a>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="count-box">

                                    <span id="angka">123</span>
                                    <p><strong>Jemaat Sawangan</strong></p>
                                    <a href="#">Lihat Selengkapnya &raquo;</a>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="count-box">

                                    <span id="angka">178</span>
                                    <p><strong>Jemaat Bandung Selatan</strong></p>
                                    <a href="#">Lihat Selengkapnya &raquo;</a>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->


                    </div>
                    <div class="swiper-pagination"></div>
                </div>

        </section>


        <div class="row">
            <div class="col-lg-12">
                <table class="table table-sm" id="example-2">
                    <thead>
                        <tr class="text-center" style="background-color: #e96b56;">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>

                            <th>Region</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>1</td>
                            <td>Carrot</td>
                            <td>Laki-laki</td>

                            <td>Jakarta</td>
                        </tr>
                        <tr class="text-center">
                            <td>2</td>
                            <td>Jannie</td>
                            <td>Perempuan</td>

                            <td>Bandung</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section><!-- End Featured Section -->


<?= $this->endSection(); ?>
<?= $this->section('js'); ?>
<script>
    $(document).ready(function() {
        $('#example-2').DataTable({
            "paging": true,
            "ordering": true,
            "info": true
        });
    });
</script>
<?= $this->endSection(); ?>