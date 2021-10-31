<?= $this->extend('templateAdmin/tema'); ?>
<?= $this->section('konten'); ?>
<!-- konten dimulai dengan class row atau section-header -->
<div class="section-header">
    <h1>Hi, <?= session('nama_lengkap'); ?></h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <!-- <div class="breadcrumb-item"><a href="#">Forms</a></div>
        <div class="breadcrumb-item">Advanced Forms</div> -->
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
        $('#table-1').DataTable({
            "paging": true,
            "ordering": true,
            "info": true
        });
    });
</script>
<?= $this->endSection(); ?>