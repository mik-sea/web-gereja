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
                <form id="myForm" action="<?= base_url('pengumuman/save') ?>" class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="judul" required>
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
                                <option value="Banner">Banner</option>
                                <option value="Event">Event</option>
                            </select>
                            <div class="invalid-feedback">
                                Mohon Memilih Kategori
                            </div>
                        </div>

                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Isi</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea class="form-control konten" rows="15" name="isi" required> </textarea>

                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
                        <div class="col-sm-12 col-md-7">
                            <div id="image-preview" class="image-preview">
                                <label for="image-upload" id="image-label">Choose File</label>
                                <input type="file" name="gambar" id="image-upload" />
                            </div>
                        </div>
                    </div>
                    <input type="text" name="author" value="<?= session('nama_lengkap') ?>" hidden />
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control selectric" name="status" required>
                                <option value="">Pilih</option>
                                <option value="Draft">Draft</option>
                                <option value="Publish">Publish</option>
                            </select>
                            <div class="invalid-feedback">
                                Mohon Status Dipilih
                            </div>
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

<div class="row">
    <div class="col-12">
        <div class="card">
            <!-- <div class="card-header justify-content-end">

                <a href="" class="btn btn-sm btn-primary"> Tambah Data</a>
            </div> -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-sm" id="example">
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
                                <th>Action</th>

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
                                    <td class="align-middle"><?= $row['link']; ?></td>
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
                                    <td class="align-middle"><a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a> <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Hapus"></i></a></td>
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
<?= $this->endSection(); ?>