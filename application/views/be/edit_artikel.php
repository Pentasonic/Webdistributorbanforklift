<?php
$this->load->view('be/template/header');
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Artikel</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>


    <form action="<?php echo base_url(); ?>admin/editGalleryProcess" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Judul Artikel</span>
            </div>
            <input name="judul" type="text" class="form-control" placeholder="Judul Artikel" aria-label="Judul Artikel" aria-describedby="basic-addon1" value="<?= $gallery_data->judul; ?>">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Slug Artikel</span>
            </div>
            <input type="hidden" name="id_gallery" value="<?= $this->uri->segment(3); ?>">
            <input name="slug" id="slugCheck" type="text" class="form-control" placeholder="Slug Artikel" aria-label="Slug Artikel" aria-describedby="basic-addon1" value="<?= $gallery_data->slug; ?>">
            <div id="alert">
                <span style="color:red;">Slug Telah digunakan!</span>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Summary Artikel</span>
            </div>
            <input name="summary" type="text" class="form-control" placeholder="Summary Artikel" aria-label="Summary Artikel" aria-describedby="basic-addon1" value="<?= $gallery_data->summary; ?>">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Full Deskripsi</span>
            </div>
            <textarea name="artikel-full" class="form-control" aria-label="With textarea"><?= $gallery_data->deskripsi_gallery; ?></textarea>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Pilih File</span>
            </div>
            <input name="image-upload-slider" id="image-upload-slider" type="file" class="form-control" placeholder="File Gambar" aria-label="File Gambar" aria-describedby="basic-addon1">
            <input type="hidden" id="brand-logo-image-url" name="brand-logo-image-url">
        </div>
        <span style="font-size:10px;">Width : 370px x Height 220px</span><br>
        <img src="<?= base_url($gallery_data->lokasi) ?>" id="logoShow" />
        <div id="cropAreaLogo" style="width:100%; overflow-x:scroll;">
        </div>
        <center>
            <div style="margin-bottom:5px;" class="btn btn-success" id="selesaiLogo"><span>Selesai</span></div>
        </center>
</div>
<div class="modal-footer">
    <input id="ck" type="submit" class="btn btn-primary" value="Simpan">
    </form>
    <script>
        $("#alert").hide();
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
        $("#slugCheck").keyup(function(){
            var slug = $("#slugCheck").val();
            if(slug !== ''){

                $.ajax({
                type: 'POST',
                url: '<?php echo base_url() ?>admin/cekSlug',
                data: { slug: slug,tabel:'gallery' },
                dataType: 'json',
                success: function(data) {
                    if (data.used) {
                        console.log("Slug sudah digunakan!");
                        $("#alert").show(); 
                        $("#ck").hide()
                        // Slug telah digunakan, lakukan sesuai kebutuhan Anda
                    } else {
                        console.log("Slug tersedia");
                        $("#ck").show()
                        $("#alert").hide(); 
                        // Slug belum digunakan, lakukan sesuai kebutuhan Anda
                    }
                }
                });
            }
        });
    </script>
    <?php
    $this->load->view('be/template/footer');
    ?>