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
            <span id="item<?= $i; ?>"><?php echo $account_data[$i]->url_link; ?></span>
            <div style="display:inline;" id="act<?= $i; ?>">
                <button onclick="soc_edit('<?= $i; ?>')" class="btn btn-sm-danger"><i style="color: red;" class="bi bi-pencil"></i></button>
            </div>
        </div>
    <?php } ?>
    <input type="hidden" value="<?= $account_count; ?>" id="jmlSoc">
    <div>
    </div>
</div>
<script>
    

    function soc_edit(id){
        let data = $("#item"+id).text();
        $("#item"+id).html(`<input type="text" id="val_soc`+id+`" value="`+data+`">`);
        $("#act"+id).html(`<button onclick="acc_edit(`+id+`)" class="btn btn-sm-danger"><i style="color: red;" class="bi bi-check"></i></button>`);
        console.log(id);
    }
    
    function acc_edit(id){
        console.log(id);
        let fill =  $("#val_soc"+id).val();
        console.log(fill);
        $("#item"+id).html(fill);
        $("#act"+id).html(`<button onclick="acc_edit('<?= $id; ?>')" class="btn btn-sm-danger"><i style="color: red;" class="bi bi-pencil"></i></button>`);
        var arr = [];
        var data_src_now = $("#val_soc"+id).val();
        var jml_img_ig = $("#jmlSoc").val();
        var icon_l = ["bi bi-twitter","bi bi-facebook","bi bi-instagram","bi bi-linkedin"];
        var asset_l = ["https://yms.com/asset/twitter","https://yms.com/asset/facebook","https://yms.com/asset/instagram","https://yms.com/asset/linkedin"];
        for(var i=0; i<jml_img_ig;i++){
            if(i == id){

                var data = {"bi_icon_class":""+icon_l[i]+"","asset_icon_url":""+asset_l[i]+"","url_link":""+fill+""};
                if(data_src != ""){
    
                    arr.push(data);
                }
            }else{
                var data_src = $("#item"+i).text();
                var data = {"bi_icon_class":""+icon_l[i]+"","asset_icon_url":""+asset_l[i]+"","url_link":""+data_src+""};
                if(data_src != ""){
    
                    arr.push(data);
                }

            }
        }
        console.log(arr);
        $.ajax({
            url: '<?php echo base_url(); ?>admin/socList',
            method: 'post',
            data: {
                socList: JSON.stringify(arr)
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
