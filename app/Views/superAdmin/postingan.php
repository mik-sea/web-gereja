<?= $this->extend('templateAdmin/tema'); ?>
<?= $this->section('konten'); ?>
<!-- konten dimulai dengan class row atau section-header -->
<div class="section-header">
    <h1>Postingan Artikel</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Postingan Artikel</div>
        <!-- <div class="breadcrumb-item">Advanced Forms</div>  -->
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="section-header">
                <h1 style="font-size: 16px;">Daftar Tunggu Artikel</h1>
                <div class="section-header-breadcrumb">
                    <a href="<?= base_url('/tambahPostingan') ?>" class="breadcrumb-item btn btn-primary" data-toggle="tooltip" data-placement="top" data-title="Buat Postingan Baru"><i class="fas fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm" id="example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>Link</th>
                                <th>Kategori</th>
                                <th>Gambar</th>
                                <th>Author</th>
                                <th>Status</th>
                                <th width="10%">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;
                            foreach($postingan as $post): if($post["status"] == "pending"){ ?>
                                <tr>
                                    <td><?= $i++?></td>
                                    <td><?= $post["judul_berita"]?></td>
                                    <td><?= substr($post["isi"],0,100)?></td>
                                    <td><?= base_url("viewArtikel/".$post["id_berita"])?></td>
                                    <td><?= $post["nama_kategori"]?></td>
                                    <td><?= $post["gambar"]?></td>
                                    <td><?= $post["id_user"]?></td>
                                    <td><?= $post["status"]?></td>
                                    <td class="align-middle">
                                        <a href="<?= base_url('/update/status') . '/' . $post['id_berita']; ?>" class="btn btn-success btn-sm">
                                            <i class="fas fa-check" data-toggle="tooltip" data-placement="top" title="Checked"></i>
                                        </a>
                                        <a href="<?= base_url('viewArtikel') . '/' . $post['id_berita']; ?>" taget="_blank" rel="noopener noreferrer" class="btn btn-secondary btn-sm">
                                            <i class="fas fa-external-link-alt" data-toggle="tooltip" data-placement="top" title="View Artikel"></i>
                                        </a>
                                        <a href="#" data-href="<?= base_url('delete/postingan') . '/' . $post['id_berita']; ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#konfirmasi_hapus">
                                            <i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Hapus Postingan"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php }endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="section-header">
                <h1 style="font-size: 16px;">Daftar Publish Artikel</h1>
                <div class="section-header-breadcrumb">
                    <a href="<?= base_url('/tambahPostingan') ?>" class="breadcrumb-item btn btn-primary" data-toggle="tooltip" data-placement="top" data-title="Buat Postingan Baru"><i class="fas fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm" id="example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>Link</th>
                                <th>Kategori</th>
                                <th>Gambar</th>
                                <th>Author</th>
                                <th>Status</th>
                                <th width="10%">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;
                            foreach($postingan as $post): if($post["status"] == "publish"){ ?>
                                <tr>
                                    <td><?= $i++?></td>
                                    <td><?= $post["judul_berita"]?></td>
                                    <td><?= substr($post["isi"],0,100)?></td>
                                    <td><?= base_url("viewArtikel/".$post["id_berita"])?></td>
                                    <td><?= $post["nama_kategori"]?></td>
                                    <td><?= $post["gambar"]?></td>
                                    <td><?= $post["id_user"]?></td>
                                    <td><?= $post["status"]?></td>
                                    <td class="align-middle">
                                        <a href="<?= base_url('postingan/update') . '/' . $post['id_berita']; ?>" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i>
                                        </a>
                                        <a href="<?= base_url('viewArtikel') . '/' . $post['id_berita']; ?>" taget="_blank" rel="noopener noreferrer" class="btn btn-secondary btn-sm">
                                            <i class="fas fa-external-link-alt" data-toggle="tooltip" data-placement="top" title="View Artikel"></i>
                                        </a>
                                        <a href="#" data-href="<?= base_url('delete/postingan') . '/' . $post['id_berita']; ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#konfirmasi_hapus">
                                            <i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Hapus Postingan"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php }endforeach; ?>
                        </tbody>
                    </table>
                </div>
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

    $(document).ready(function() {
        $('#konfirmasi_hapus').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });
</script>
<?= $this->endSection(); ?>