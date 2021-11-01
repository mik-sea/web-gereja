<?= $this->extend('templateUser/tema'); ?>
<?= $this->section('konten'); ?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="<?= base_url('/') ?>">Home</a></li>
            <li>Buku Renungan</li>
        </ol>
        <h2>Buku Renungan</h2>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Featured Section ======= -->
<section id="featured" class="featured">
    <div class="container">
        <div class="section-title">
            <h2>Buku Renungan</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-sm" id="table-2">
                    <thead>
                        <tr class="text-center">
                            <th class="align-middle">No</th>
                            <th class="align-middle text-start">Judul</th>
                            <th class="align-middle text-start" width="50%">Keterangan</th>
                            <th class="align-middle" width="20%">Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td class="align-middle">1</td>
                            <td class="align-middle text-start">Judul Buku Renungan</td>
                            <td class="align-middle text-start"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                            <td class="align-middle"><button class="btn btn-sm btn-success"><i class="bi bi-download"></i> Download</button></td>
                        </tr>

                        <tr class="text-center">
                            <td class="align-middle">2</td>
                            <td class="align-middle text-start">Judul Buku Renungan</td>
                            <td class="align-middle text-start"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                            <td class="align-middle"><button class="btn btn-sm btn-success"><i class="bi bi-download"></i> Download</button></td>
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
        $('#table-2').DataTable({
            "paging": true,
            "ordering": false,
            "info": false
        });
    });
</script>
<?= $this->endSection(); ?>