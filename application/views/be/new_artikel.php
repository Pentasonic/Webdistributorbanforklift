<?php
$this->load->view('be/template/header');
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Artikel</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>


    <form action="<?php echo base_url(); ?>admin/AddGalleryProcess" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Judul Artikel</span>
            </div>
            <input name="judul" type="text" class="form-control" placeholder="Judul Artikel" aria-label="Judul Artikel" aria-describedby="basic-addon1" value="">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Summary Artikel</span>
            </div>
            <input name="summary" type="text" class="form-control" placeholder="Summary Artikel" aria-label="Summary Artikel" aria-describedby="basic-addon1" value="">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Full Deskripsi</span>
            </div>
            <textarea name="artikel-full" class="form-control" aria-label="With textarea"></textarea>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Pilih File</span>
            </div>
            <input name="image-upload-slider" id="image-upload-slider" type="file" class="form-control" placeholder="File Gambar" aria-label="File Gambar" aria-describedby="basic-addon1">
            <input type="hidden" id="brand-logo-image-url" name="brand-logo-image-url">
        </div>
        <span style="font-size:10px;">Width : 370px x Height 220px</span><br>
        <img id="logoShow" />
        <div id="cropAreaLogo" style="width:100%; overflow-x:scroll;">
        </div>
        <center>
            <div style="margin-bottom:5px;" class="btn btn-success" id="selesaiLogo"><span>Selesai</span></div>
        </center>
</div>
<div class="modal-footer">
    <input type="submit" class="btn btn-primary" value="Simpan">
    </form>
    <script>
        $("#selesaiLogo").hide();
        $("#image-upload-slider").on('change', function() {
            // $("#logoShow").hide();
            $cropLogo = $("#cropAreaLogo").croppie({
                enableExif: true,
                viewport: {
                    width: 370,
                    height: 220,
                },
                boundary: {
                    height: 250,
                    width: 400
                }
            });
            var reader = new FileReader();
            reader.onload = function(event) {
                $cropLogo.croppie('bind', {
                    url: event.target.result
                }).then(function() {
                    $("#selesaiLogo").show();
                    console.log("Selesai Croping Logo");
                });
            }
            reader.readAsDataURL(this.files[0]);
        });
        $("#selesaiLogo").on('click', function() {
            $cropLogo.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(resultCrop) {
                $.ajax({
                    url: '<?php echo base_url() ?>admin/save_image_crop',
                    type: 'post',
                    data: {
                        imageCrop: resultCrop
                    },
                    dataType: 'json',
                    success: function(res) {
                        console.log(res);
                        $("#brand-logo-image-url").val(res.img_url);
                        $("#logoShow").show();
                        $("#cropAreaLogo").hide();
                        $("#selesaiLogo").hide();
                        $("#logoShow").attr('src', '<?php echo base_url(); ?>' + res.img_url);
                    }
                });
            });
        });
        tinymce.init({selector:'textarea',content_style:'width: 100%; max-width: 1200px;'});
    </script>
    <?php
    $this->load->view('be/template/footer');
    ?>