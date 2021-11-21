<?= $this->extend('templateAdmin/tema'); ?>
<?= $this->section('konten'); ?>
<!-- konten dimulai dengan section -->


<section>
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Gallery</h4>
                        </div>
                        <div class="card-body card-block">
                            <form action="<?= base_url("#")?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            <?= csrf_field(); ?>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="hf-judul" class=" form-control-label">Judul</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="hf-judul" name="judul" placeholder="Masukkan Judul" class="form-control">
                                        <span class="help-block">Judul berita/layanan</span>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="hf-file" class=" form-control-label">Upload Gambar</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <?php
                                        if (session()->getFlashData('msgerr')) {
                                            echo "<div class='alert alert-danger' role='alert'>" . session()->getFlashData('msgerr') . "</div>";
                                        }
                                        ?>
                                        <input type="file" id="hf-file" name="file" class="form-control" accept=".jpg,.jpeg,.png">
                                        <span class="help-block">Ext : jpg/png</span>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Kategori, Jenis</label>
                                    </div>
                                    <div class="col-3">
                                        <select name="kategori" id="kategori" class="form-control">
                                            <!-- data dari database -->
                                            <option value="0">Please select</option>
                                            <?php
                                            foreach ($kategori as $k) {
                                            ?>
                                                <option value="<?php echo $k['id_kategori']; ?>"><?php echo $k['nama_kategori']; ?></option>
                                            <?php } ?>
                                            <option value="addKategori">Tambah kategori</option>
                                        </select>
                                        <span class="help-block">Kategori</span>
                                    </div>
                                    <div class="col-3">
                                        <select name="jenis" id="jenis" class="form-control">
                                        </select>
                                        <span class="help-block">Jenis</span>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Ringkasan</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="ringkasan" id="textarea-input" rows="3" placeholder="Content..." class="form-control"></textarea>
                                        <span class="help-block">Ringkasan berita</span>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class="form-control-label">Isi Berita</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="isi" class="form-control konten" rows="10"></textarea>
                                        <span class="help-block">Isi berita</span>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
<?= $this->section('modal'); ?>

<?= $this->endSection(); ?>