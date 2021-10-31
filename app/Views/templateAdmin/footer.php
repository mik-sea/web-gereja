<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; <?php $date = date('Y');
                            echo $date; ?> <a href="<?= base_url(); ?>">ONKP Resort Jawa</a>
    </div>
    <div class="footer-right">
        1.0.0
    </div>
</footer>
</div>
</div>
<?= $this->renderSection('modal'); ?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="/templateAdmin/assets/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="/templateAdmin/tes/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="/templateAdmin/tes/chart.js/dist/Chart.min.js"></script>
<script src="/templateAdmin/tes/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="/templateAdmin/tes/summernote/dist/summernote-bs4.js"></script>
<script src="/templateAdmin/tes/chocolat/dist/js/jquery.chocolat.min.js"></script>

<!-- JS DATATABLE -->

<script src="/templateAdmin/assets/modules/datatables.min.js"></script>

<!-- Template JS File -->
<script src="/templateAdmin/assets/js/scripts.js"></script>
<script src="/templateAdmin/assets/js/custom.js"></script>
<script src="/templateAdmin/pages/iziToast.min.js"></script>
<script src="/templateAdmin/assets/modules/sweetalert.min.js"></script>
<script src="/templateAdmin/tes/chocolat/dist/js/jquery.chocolat.min.js"></script>
<script src="/templateAdmin/tes/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="/templateAdmin/tes/bootstrap-daterangepicker/daterangepicker.js"></script>

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

<?= $this->renderSection('js'); ?>
</body>

</html>