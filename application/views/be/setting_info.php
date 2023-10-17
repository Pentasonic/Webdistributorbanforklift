<?php
$this->load->view('be/template/header');
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Setting Informasi</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <h4>Setting About</h4>
    <form id="form-info" action="<?php echo base_url(); ?>admin/saveInfo" method="POST">

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Judul</span>
            </div>
            <input name="info-judul" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $about_data->judul; ?>">
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Deskripsi</span>
            </div>
            <textarea name="info-deskripsi" class="form-control" aria-label="With textarea"><?php echo $about_data->deksripsi; ?></textarea>
        </div>
        <span>Konsentrasi Produksi</span>
        <ul id="ls">
            <?php
            $list = json_decode($about_data->child_array);
            if (!empty($about_data->child_array)) {
                $jml = count($list);
                if (isset($list)) {
                    for ($i = 0; $i < $jml; $i++) {
            ?>
                        <li id="liData<?php echo $i; ?>">
                            <i class="bi bi-check"></i> <span id="ls_data<?php echo $i; ?>"><?php echo $list[$i]; ?></span><span onclick="remv('<?php echo $i; ?>')" style="color:red;" class="btn btn-sm-danger"><i class="bi bi-trash"></i></span>
                        </li>
            <?php
                    }
                }
            } else {
                $jml = 0;
            }
            ?>
        </ul>
        <div>
            <span id="inc" class="btn btn-success">Tambah Konsentrasi Produk</span>
        </div>
        <hr>
        <h4>Setting Kontak</h4>
        <hr>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Telephone</span>
            </div>
            <input name="info-telephone" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $setting_data->contact_setting_phone; ?>">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">WhatsApp</span>
            </div>
            <input name="info-wa" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $setting_data->contact_setting_wa; ?>">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Email</span>
            </div>
            <input name="info-email" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $setting_data->contact_setting_email; ?>">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Website</span>
            </div>
            <input name="info-website" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $setting_data->contact_setting_website; ?>">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Lokasi</span>
            </div>
            <input name="info-lokasi" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $setting_data->contact_setting_lokasi_string; ?>">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Work Time</span>
            </div>
            <input name="info-wt" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $setting_data->contact_setting_work_time; ?>">
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Maps</span>
            </div>
            <textarea name="info-maps" class="form-control" aria-label="With textarea"><?php echo $setting_data->contact_setting_maps_lat_lag; ?></textarea>
        </div>
        <div style="margin: 15px;">
            <input type="submit" class="btn btn-success" value="Simpan Setting Informasi">
        </div>
    </form>
</div>
<script>
    var noitem = <?php echo $jml; ?>;
    $('#inc').click(function() {
        $('#ls').append(`<li id="liData` + noitem + `">
                        <input id="itemInput` + noitem + `" type="text"><span onclick="itemsavebtn('` + noitem + `')" class="btn btn-primary">save</span>
                    </li>`);
        noitem++;
    });

    function itemsavebtn(indexitem) {
        var arr = [];
        var value = $('#itemInput' + indexitem).val();
        $('#liData' + indexitem).html(`<i class="bi bi-check"></i> <span id="ls_data` + (parseInt(indexitem)) + `">` + value + `</span><span style="color:red;" class="btn btn-sm-danger"><i class="bi bi-trash"></i></span>`);
        for (var i = 0; i < noitem; i++) {
            var data = $('#ls_data' + i).text();
            arr.push(data);
        }
        console.log(JSON.stringify(arr));
        $.ajax({
            url: '<?php echo base_url(); ?>admin/aboutList',
            method: 'post',
            data: {
                dataList: JSON.stringify(arr)
            },
            success: function(res) {
                console.log(res);
            }
        });
    }

    function remv(indexitem) {
        $('#liData' + indexitem).remove();
        var arr = [];
        for (var i = 0; i < noitem; i++) {
            var data = $('#ls_data' + i).text();
            arr.push(data);
            
        }
        var aff_after = [];
        var hapus = $('#ls_data' + indexitem).text();
        for (var j = 0; j < noitem; j++) {
            if (arr[j] != "") {
                aff_after.push(arr[j]);
            }
            
        }
        console.log(JSON.stringify(aff_after));
        $.ajax({
            url: '<?php echo base_url(); ?>admin/aboutList',
            method: 'post',
            data: {
                dataList: JSON.stringify(aff_after)
            },
            success: function(res) {
                console.log(res);
            }
        });
    }

    
</script>
<?php
$this->load->view('be/template/footer');
?>