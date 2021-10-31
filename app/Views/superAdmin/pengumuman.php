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
            <div class="section-header">
                <h1 style="font-size: 16px;">Daftar Pengumuman</h1>
                <div class="section-header-breadcrumb">
                    <a href="<?= base_url('pengumuman/tambahPengumuman') ?>" class="breadcrumb-item btn btn-primary" data-toggle="tooltip" data-placement="top" data-title="Buat Pengumuman Baru"><i class="fas fa-plus"></i> Tambah Data</a>
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
                            <?php $no = 1; ?>
                            <?php foreach ($peng as $row) : ?>
                                <tr>
                                    <td class="align-middle"><?= $no++; ?></td>
                                    <td class="align-middle"><?= $row['judul']; ?></td>
                                    <td class="align-middle"><?php $teks = $row['isi'];
                                                                echo substr($teks, 0, 50) . '...'; ?></td>
                                    <td class="align-middle"><a href="<?= $row['link']; ?>" target="_blank"><?= $row['link']; ?></a></td>
                                    <td class="align-middle"><?= $row['jenis']; ?></td>
                                    <td class="align-middle"> <?php if ($row['gambar'] == null) {
                                                                    echo '';
                                                                } else { ?>
                                            <div class="gallery ml-3">
                                                <div class="gallery-item" data-image="/templateAdmin/assets/img/pengumuman/<?= $row['gambar'] ?>" data-title="Image 11"></div>
                                            </div>
                                        <?php } ?>
                                    </td>
                                    <td class="align-middle"><?= $row['nama_lengkap']; ?></td>
                                    <td class="align-middle"><span class="badge badge-<?php if ($row['status'] == 'Draft') {
                                                                                            echo 'warning';
                                                                                        } else {
                                                                                            echo 'success';
                                                                                        } ?>"><?= $row['status']; ?></span></td>
                                    <td class="align-middle"><a href="<?= base_url('pengumuman/update') . '/' . $row['id']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a> <a href="#" data-href="<?= base_url('pengumuman/delete') . '/' . base64_encode($row['id']); ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#konfirmasi_hapus"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a></td>
                                </tr>
                            <?php endforeach; ?>

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
    <?php if (session()->getFlashdata('pengBerhasil')) { ?>
        iziToast.success({
            title: 'Sukses!',
            message: 'Pengumuman Berhasil Ditambahkan',
            position: 'bottomRight'
        });
    <?php } ?>

    <?php if (session()->getFlashdata('pengEdit')) { ?>
        iziToast.success({
            title: 'Sukses!',
            message: 'Data Berhasil Di Edit',
            position: 'bottomRight'
        });
    <?php } ?>

    <?php if (session()->getFlashdata('pengHapus')) { ?>
        iziToast.success({
            title: 'Sukses!',
            message: 'Data Berhasil Di Hapus',
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