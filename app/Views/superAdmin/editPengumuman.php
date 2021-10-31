<?= $this->extend('templateAdmin/tema'); ?>
<?= $this->section('konten'); ?>
<!-- konten dimulai dengan class row atau section-header -->
<div class="section-header">
    <h1>Pengumuman</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Pengumuman</div>
        <!-- <div class="breadcrumb-item">Advanced Forms</div>  -->
    </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">

                <h4>Tambah Pengumuman</h4>
            </div>
            <div class="card-body">
                <form id="myForm" action="<?= base_url('pengumuman/edit') ?>" class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="judul" value="<?= $idpeng->judul ?>" required>
                            <div class="invalid-feedback">
                                Mohon Judul Diisi
                            </div>
                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control selectric" name="jenis" required>
                                <option value="">Pilih</option>
                                <option value="Banner" <?php if ($idpeng->jenis == 'Banner') {
                                                            echo 'selected';
                                                        } ?>>Banner</option>
                                <option value="Event" <?php if ($idpeng->jenis == 'Event') {
                                                            echo 'selected';
                                                        } ?>>Event</option>
                            </select>
                            <div class="invalid-feedback">
                                Mohon Memilih Kategori
                            </div>
                        </div>

                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Isi</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea class="form-control konten" rows="15" name="isi" required><?= $idpeng->isi; ?> </textarea>

                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
                        <div class="col-sm-12 col-md-7">
                            <div id="image-preview" class="image-preview">
                                <label for="image-upload" id="image-label">Choose File</label>
                                <input type="file" name="gambar" id="image-upload" value="<?= $idpeng->gambar ?>" />
                            </div>
                        </div>
                    </div>
                    <input type="text" name="id_akun" value="<?= session('id_akun') ?>" hidden />
                    <input type="text" name="id" value="<?= $idpeng->id; ?>" hidden />
                    <input type="text" name="old" value="<?= $idpeng->gambar; ?>" hidden />
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Link</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="link" value="<?= $idpeng->link ?>">
                            <div>
                                <i> * Boleh dikosongkan jika tidak ada</i>
                            </div>
                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control selectric" name="status" required>
                                <option value="">Pilih</option>
                                <option value="Draft" <?php if ($idpeng->status == 'Draft') {
                                                            echo 'selected';
                                                        } ?>>Draft</option>
                                <option value="Publish" <?php if ($idpeng->status == 'Publish') {
                                                            echo 'selected';
                                                        } ?>>Publish</option>
                            </select>
                            <div class="invalid-feedback">
                                Mohon Status Dipilih
                            </div>
                        </div>

                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-warning" type="submit">Update</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>



<?= $this->section('modal'); ?>
<!-- tempat menyimpan modal -->
<!-- modal hapus -->
<div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi_hapus">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="far fa-trash"></i> Yakin ingin menghapus ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a type="submit" class="btn btn-danger btn-ok">Hapus</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>


<?= $this->section('js'); ?>
<!-- tempat menyimpan js/jquery/json -->
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "paging": true,
            "ordering": true,
            "info": true
        });
    });
</script>

<script>
    <?php if (session()->getFlashdata('pengBerhasil')) { ?>
        iziToast.success({
            title: 'Sukses!',
            message: 'Pengumuman Berhasil Ditambahkan',
            position: 'bottomRight'
        });
    <?php } ?>

    <?php if ($validasi->hasError('gambar') == true) { ?>
        iziToast.error({
            title: 'Maaf!',
            message: 'Format Gambar yang didukung adalah png, jpg, jpeg dengan ukuran maksimal 1024Kb',
            position: 'bottomRight',
            timeOut: 8000
        });
    <?php } ?>

    $(document).ready(function() {
        $('#konfirmasi_hapus').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });
</script>
<?= $this->endSection(); ?>