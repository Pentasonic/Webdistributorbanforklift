<?php
$this->load->view('be/template/header');
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Produk</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <form action="<?php echo base_url(); ?>admin/EditProdukProcess" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Kode Produk</span>
            </div>
            <input type="hidden" name="id_produk_edit" value="<?= $this->uri->segment(3); ?>">
            <input name="produk-kode" type="text" class="form-control" placeholder="Kode Produk" aria-label="Kode Produk" aria-describedby="basic-addon1" value="<?= $data_produk->kode_produk; ?>">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Nama Produk</span>
            </div>
            <input name="produk-nama" type="text" class="form-control" placeholder="Nama Produk" aria-label="Nama Produk" aria-describedby="basic-addon1" value="<?= $data_produk->nama_produk; ?>">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Merk/ Brand</span>
            </div>
            <select name="merek" id="merek" class="form-control" placeholder="Merek Produk">
                <option value="<?= $data_produk->id_merek; ?>"><?= $data_produk->nama_merek; ?></option>
                <?php foreach($merek_data as $merek){?>
                <option value="<?= $merek->id_merek; ?>"><?= $merek->nama_merek; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Kategori Produk</span>
            </div>
            <select name="kategori" id="kategori" class="form-control" placeholder="Kategori Produk">
            <option value="<?= $data_produk->id_kategori; ?>"><?= $data_produk->nama_kategori; ?></option>
            <?php foreach($kategori_data as $kategori){?>
                <option value="<?= $kategori->id_kategori; ?>"><?= $kategori->nama_kategori; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Jenis Produk</span>
            </div>
            <select name="jenis" id="jenis" class="form-control" placeholder="Jenis Produk">
            <option value="<?= $data_produk->id_jenis_produk; ?>"><?= $data_produk->nama_jenis_produk; ?></option>
            <?php foreach($jenis_produk_data as $jenis_produk){?>
                <option value="<?= $jenis_produk->id_jenis_produk; ?>"><?= $jenis_produk->nama_jenis_produk; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Full Deskripsi</span>
            </div>
            <textarea name="produk-full" class="form-control" aria-label="With textarea"><?= $data_produk->full_deskripsi; ?></textarea>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Harga</span>
            </div>
            <input name="produk-harga" type="text" class="form-control" placeholder="Harga Produk" aria-label="Harga Produk" aria-describedby="basic-addon1" value="<?= $data_produk->harga_produk; ?>">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Satuan</span>
            </div>
            <input name="produk-satuan" type="text" class="form-control" placeholder="Satuan Produk" aria-label="Satuan Produk" aria-describedby="basic-addon1" value="<?= $data_produk->jenis_satuan; ?>">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Pilih File</span>
            </div>
            <input name="image-upload-slider" id="image-upload-slider" type="file" class="form-control" placeholder="File Gambar" aria-label="File Gambar" aria-describedby="basic-addon1">
            <input type="hidden" id="brand-logo-image-url" name="brand-logo-image-url">
        </div>
        <span style="font-size:10px;">Width : 619px x Height 619px</span><br>
        <img src="<?= base_url($data_produk->lokasi) ?>" id="logoShow" />
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
                    width: 619,
                    height: 619,
                },
                boundary: {
                    height: 700,
                    width: 700
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