<?php
$this->load->view('be/template/header');
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Setting Social</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <h4>Media Social Account Available</h4>
    <hr>
    <?php
    $account_count = count(json_decode($setting_data->footer_setting_global_medsos_list_array));
    $account_data = json_decode($setting_data->footer_setting_global_medsos_list_array);
    for ($i = 0; $i < $account_count; $i++) { ?>
        <div id="soc_id<?= $i; ?>" style="margin: 5px;">
            <i class="<?php echo $account_data[$i]->bi_icon_class; ?>"></i>
            <?php echo $account_data[$i]->url_link; ?>
            <button onclick="soc_edit('<?= $i; ?>')" class="btn btn-sm-danger"><i style="color: red;" class="bi bi-pencil"></i></button>
        </div>
    <?php } ?>
    <div>
        <!-- <button class="btn btn-success">Tambah Account</button> -->
    </div>
    <!-- <br><br>
    <h4>Intagram Image Available</h4>
    <hr>
    <div id="ls">
    <?php
    $image_ig_count = count(json_decode($setting_data->footer_setting_global_asset_ig_image_array));
    $image_data = json_decode($setting_data->footer_setting_global_asset_ig_image_array);
    for ($i = 0; $i < $image_ig_count; $i++) { ?>
        <!-- Gallery-item start -->
        <div id="ig_img<?= $i; ?>" class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
            <div class="single-awesome-project">
                <div class="awesome-img">
                    <a href="#"><img id="ig_url<?= $i; ?>" src="<?php echo $image_data[$i]->url_image_ig; ?>" alt="" /></a>
                    <div class="add-actions text-center">
                        <div class="project-dec">
                            <a class="portfolio-lightbox" data-gallery="myGallery" href="<?php echo $image_data[$i]->url_image_ig; ?>">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <span class="btn btn-danger" style="cursor: pointer;margin:5px;" onclick="ig_remove('<?= $i; ?>')"><i class="bi bi-trash"></i> Hapus</span>
        </div>
        <!-- Gallery-item end -->
    <?php } ?>
    </div>
    <div>
        <button id="inc" class="btn btn-success">Tambah URL IG Gambar</button>
    </div> -->
</div>
<script>
    var jml_img_ig = '<?= $image_ig_count; ?>';
    $('#inc').click(function() {
        $('#ls').append(`<div id="ig_url` + jml_img_ig + `">
                        <input id="itemInput` + jml_img_ig + `" type="text"><span onclick="igsavebtn('` + jml_img_ig + `')" class="btn btn-primary">save</span>
                    </div>`);
                    jml_img_ig++;
    });
    function igsavebtn(id){
        var arr = [];
        var data_src_now = $('#itemInput' + id).val();
        for(var i=0; i<jml_img_ig;i++){
            var data_src = $('#itemInput' + i).val();
            if(data_src === undefined){
                data_src = $('#ig_url'+i).attr('src');
            }
            var data = {"url_image_ig":""+data_src+""};
            if(data_src != ""){

                arr.push(data);
            }
        }
        console.log(arr);
        $('#ig_url'+id).remove();
        $('#itemInput' + id).remove();
        $.ajax({
            url: '<?php echo base_url(); ?>admin/igList',
            method: 'post',
            data: {
                igList: JSON.stringify(arr)
            },
            success: function(res) {
                console.log(res);
            }
        });

        $('#ls').append(`<div id="ig_img`+id+`" class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
            <div class="single-awesome-project">
                <div class="awesome-img">
                    <a href="#"><img id="ig_url`+id+`" src="`+data_src_now+`" alt="" /></a>
                    <div class="add-actions text-center">
                        <div class="project-dec">
                            <a class="portfolio-lightbox" data-gallery="myGallery" href="`+data_src_now+`">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <span class="btn btn-danger" style="cursor: pointer;margin:5px;" onclick="ig_remove('`+id+`')"><i class="bi bi-trash"></i> Hapus</span>
        </div>`);
    }
    function ig_remove(id){
        var arr = [];
        $('#ig_img'+id).remove();
        for(var i=0; i<jml_img_ig;i++){
            var data_src = $('#ig_url' + i).attr('src');
            var data = {"url_image_ig":""+data_src+""};
            arr.push(data);
        }
        // console.log(arr);
        var aff_after = [];
        var hapus = $('#ig_url' + id).attr('src');
        for (var j = 0; j < jml_img_ig; j++) {
            if (arr[j].url_image_ig != "undefined") {
                aff_after.push(arr[j]);
            }
            
        }
        // console.log(JSON.stringify(aff_after));
        $.ajax({
            url: '<?php echo base_url(); ?>admin/igList',
            method: 'post',
            data: {
                igList: JSON.stringify(aff_after)
            },
            success: function(res) {
                console.log(res);
            }
        });
    }

    function soc_edit(id){
        console.log(id);
    }
</script>
<?php
$this->load->view('be/template/footer');
?>