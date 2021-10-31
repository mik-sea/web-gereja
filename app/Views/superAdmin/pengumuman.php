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
                            <h4>Tambah Pengumuman</h4>
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                            </form>
                        </div>
                    </div>


                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h4>List Pengumuman</h4>
                        </div>
                        <div class="card-body card-block">
                            <table class="table table-sm table-triped table-hover" id="example" style="font-size: 12px;">
                                <thead class="bg-primary" style="color: white;">
                                    <tr>
                                        <th>#</th>
                                        <th>Judul</th>
                                        <th>Isi</th>
                                        <th>Gambar</th>
                                        <th>Link</th>
                                        <th>kategori</th>
                                        <th>Author</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Drs. Berni Alam Pakpahan</td>
                                        <td>Rosenti Marpaung</td>
                                        <td>Ampanulappak</td>
                                        <td>Amani Hutasada</td>
                                    </tr>
                                </tbody>
                            </table>
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
<?= $this->section('js'); ?>

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