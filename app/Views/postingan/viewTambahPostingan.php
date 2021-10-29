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
                            <h4>Tambah Postingan</h4>
                        </div>
                        <div class="card-body card-block">
                            <form action="/addPostingan" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
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
<?= $this->section('js'); ?>
<script>
    function example_image_upload_handler(blobInfo, success, failure, progress) {
        var xhr, formData;

        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', '/sendImage');

        xhr.upload.onprogress = function(e) {
            progress(e.loaded / e.total * 100);
        };

        xhr.onload = function() {
            var json;

            if (xhr.status === 403) {
                failure('HTTP Error: ' + xhr.status, {
                    remove: true
                });
                return;
            }

            if (xhr.status < 200 || xhr.status >= 300) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }

            json = JSON.parse(xhr.responseText);

            if (!json || typeof json.location != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }

            success(json.location);
            // console.log(json);
        };

        xhr.onerror = function() {
            failure('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
        };

        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());

        xhr.send(formData);
    };
    tinymce.init({
        selector: '.konten',
        menubar: true,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | bold italic strikethrough forecolor backcolor | link image | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat code',
        /* we override default upload handler to simulate successful upload*/
        images_upload_handler: example_image_upload_handler,
        images_file_types: 'jpg,jpeg,png,svg,webp',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
</script>
<script>
    $("#kategori").change(function() {
        let id_kategori = $("#kategori").val();
        if (id_kategori == "addKategori") {
            window.location.href = '/addKategori';
        } else if (id_kategori == 0) {
            $("#jenis").html(`<option value="0">Please select</option>`)
        } else {
            var settings = {
                "url": "http://localhost:8080/jenis/" + id_kategori,
                "method": "POST",
                "timeout": 0,
                "dataType": "JSON",
            };

            $.ajax(settings).done(function(response) {
                let html;
                response.forEach(function(res) {
                    html += `<option value='${res.id_jenis}'>${res.jenis_kategori}</option>`
                })
                $("#jenis").html(`<option value="0">Please select</option>` + html + `<option value='addJenis'>Tambah Jenis</option>`)
            });
        }
    })
    $("#jenis").change(function() {
        let id_jenis = $("#jenis").val();
        if (id_jenis == "addJenis") {
            window.location.href = "/addJenis"
        }
    })
</script>
<?= $this->endSection(); ?>