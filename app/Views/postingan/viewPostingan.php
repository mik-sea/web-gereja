<?= $this->extend('templateUser/tema'); ?>
<?= $this->section('konten'); ?>

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
			<div class="container" data-aos="fade-up">
				<div class="row">
					<div class="col-lg-8 entries">
                        <?php
                        if($postingan !== []){
                            foreach($postingan as $artikel){
                        ?>
						<article class="entry">
							<div class="entry-img">
                            <img src="<?= $artikel['gambar'];?>" alt="image artikel" width="500px" height="500px">
							</div>
							<h2 class="entry-title">
								<a href="viewArtikel/<?= $artikel['id_berita']?>"><?php echo $artikel["judul_berita"];?></a>
							</h2>
							<div class="entry-meta">
								<ul>
									<li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#"><?= $artikel["id_user"]?></a></li>
									<li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="<?= $artikel['tanggal_publish']?>"><?= $artikel["tanggal_publish"]?></time></a></li>
									<!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li> -->
								</ul>
							</div>
							<div class="entry-content">
								<p><?php echo $artikel["ringkasan"];?></p>
								<div class="read-more">
									<a href="viewArtikel/<?= $artikel['id_berita']?>">Read More</a>
								</div>
							</div>
						</article><!-- End blog entry -->
                        <?php }}else{?>
                            <h2 class="entry-title">
								Data Belum Ada!!!
							</h2>
                        <?php }?>
						<div class="blog-pagination justify-content-center">
                            <?php echo $pager->links("postingan","bootstrap_pagination");?>
						</div>

					</div><!-- End blog entries list -->

					<div class="col-lg-4">

						<div class="sidebar">

							<h3 class="sidebar-title">Search</h3>
							<div class="sidebar-item search-form">
								<form action="">
									<input type="text">
									<button type="submit"><i class="bi bi-search"></i></button>
								</form>
							</div><!-- End sidebar search formn-->

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

							<!-- <h3 class="sidebar-title">Recent Posts</h3>
							<div class="sidebar-item recent-posts">
								<div class="post-item clearfix">
									<img src="assets/img/blog/blog-recent-1.jpg" alt="">
									<h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
									<time datetime="2020-01-01">Jan 1, 2020</time>
								</div>

								<div class="post-item clearfix">
									<img src="assets/img/blog/blog-recent-2.jpg" alt="">
									<h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
									<time datetime="2020-01-01">Jan 1, 2020</time>
								</div>

								<div class="post-item clearfix">
									<img src="assets/img/blog/blog-recent-3.jpg" alt="">
									<h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
									<time datetime="2020-01-01">Jan 1, 2020</time>
								</div>

								<div class="post-item clearfix">
									<img src="assets/img/blog/blog-recent-4.jpg" alt="">
									<h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
									<time datetime="2020-01-01">Jan 1, 2020</time>
								</div>

								<div class="post-item clearfix">
									<img src="assets/img/blog/blog-recent-5.jpg" alt="">
									<h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
									<time datetime="2020-01-01">Jan 1, 2020</time>
								</div>

							</div>End sidebar recent posts -->

							<!-- <h3 class="sidebar-title">Tags</h3>
							<div class="sidebar-item tags">
								<ul>
									<li><a href="#">App</a></li>
									<li><a href="#">IT</a></li>
									<li><a href="#">Business</a></li>
									<li><a href="#">Mac</a></li>
									<li><a href="#">Design</a></li>
									<li><a href="#">Office</a></li>
									<li><a href="#">Creative</a></li>
									<li><a href="#">Studio</a></li>
									<li><a href="#">Smart</a></li>
									<li><a href="#">Tips</a></li>
									<li><a href="#">Marketing</a></li>
								</ul>
							</div>End sidebar tags -->

						</div><!-- End sidebar -->

					</div><!-- End blog sidebar -->

				</div>

			</div>
		</section><!-- End Blog Section -->



<?= $this->endSection(); ?>