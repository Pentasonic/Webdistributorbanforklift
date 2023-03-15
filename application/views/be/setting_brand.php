<?php
$this->load->view('be/template/header');
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Setting Brand</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <form id="form-brand" action="<?php echo base_url(); ?>admin/saveBrand" method="POST" enctype="multipart/form-data">

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Judul Tab Website</span>
            </div>
            <input name="brand-tab" type="text" class="form-control" placeholder="Nama Perusahaan" aria-label="Nama Perusahaan" aria-describedby="basic-addon1" value="<?php echo $setting_data->judul_tab; ?>">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Judul Website</span>
            </div>
            <input name="brand-tiitle" type="text" class="form-control" placeholder="Nama Website" aria-label="Nama Website" aria-describedby="basic-addon1" value="<?php echo $setting_data->judul_website; ?>">
        </div>
        <div>
            <span>Logo</span>
            <img id="logoShow" width="100" src="<?php echo base_url() . $setting_data->lokasi; ?>" alt="">
        </div>
        <span style="font-size:10px;">Width : 465px x Height 92px</span>
        <div id="cropAreaLogo">
        </div>
        <center>
            <div style="margin-bottom:5px;" class="btn btn-success" id="selesaiLogo"><span>Selesai</span></div>
        </center>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Logo Website</span>
            </div>
            <input name="brand-logo-image" id="brand-logo-image" type="file" class="form-control" placeholder="Logo" aria-label="Logo" aria-describedby="basic-addon1">
            <input type="hidden" id="brand-logo-image-url" name="brand-logo-image-url">
        </div>
        <div>
            <span>Footer Logo Image</span>
            <img id="footerShow" width="100" src="<?php echo base_url() . $about_data->lokasi; ?>" alt="">
        </div>
        <span style="font-size:10px;">Width : 100px x Height 100px</span>
        <div id="cropAreaFooter">
        </div>
        <center>
            <div style="margin-bottom:5px;" class="btn btn-success" id="selesaiFooter"><span>Selesai</span></div>
        </center>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Footer Logo Image</span>
            </div>
            <input name="brand-about-image" id="brand-about-image" type="file" class="form-control" placeholder="Footer" aria-label="Footer" aria-describedby="basic-addon1">
            <input type="hidden" id="brand-about-image-url" name="brand-about-image-url">
        </div>
        <div style="margin: 5px;">
            <button type="submit" id="btn-submit-brand" class="btn btn-success">Simpan Setting Brand</button>
        </div>
    </form>
</div>
<script>
    $("#selesaiLogo").hide();
    $("#selesaiFooter").hide();
    $("#brand-logo-image").on('change', function() {
        $("#logoShow").hide();
        $cropLogo = $("#cropAreaLogo").croppie({
            enableExif: true,
            viewport: {
                width: 465,
                height: 92,
            },
            boundary: {
                height: 500,
                width: 500
            }
        });
        var reader = new FileReader();
        reader.onload = function(event) {
            $cropLogo.croppie('bind', {
                url: event.target.result
            }).then(function() {
                console.log("Selesai Croping Logo");
            });
        }
        reader.readAsDataURL(this.files[0]);
        $("#selesaiLogo").show();
    });
    $("#brand-about-image").on('change', function() {
        console.log("is");
        $("#footerShow").hide();
        $cropFooter = $("#cropAreaFooter").croppie({
            enableExif: true,
            viewport: {
                width: 100,
                height: 100,
            },
            boundary: {
                height: 300,
                width: 300
            }
        });
        var reader = new FileReader();
        reader.onload = function(event) {
            $cropFooter.croppie('bind', {
                url: event.target.result
            }).then(function() {
                console.log("Selesai Croping Footer");
            });
        }
        reader.readAsDataURL(this.files[0]);
        $("#selesaiFooter").show();
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
                    $("#logoShow").attr('src','<?php echo base_url(); ?>'+res.img_url);
                }
            });
        });
    });
    $("#selesaiFooter").on('click', function() {
        $cropFooter.croppie('result', {
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
                    $("#brand-about-image-url").val(res.img_url);
                    $("#footerShow").show();
                    $("#cropAreaFooter").hide();
                    $("#selesaiFooter").hide();
                    $("#footerShow").attr('src','<?php echo base_url(); ?>'+res.img_url);
                }
            });
        });
    });
</script>
<?php
$this->load->view('be/template/footer');
?>