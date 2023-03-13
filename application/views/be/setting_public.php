<?php
$this->load->view('be/template/header');
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Setting Public/ Slider Hero</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <div style="margin: 5px;" align="right">
        <a href="<?php echo base_url(); ?>admin/new_slider" class="btn btn-success">Tambah Slider</a>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Pintasan</th>
                            <th>Alamat Pintasan</th>
                            <th>User</th>
                            <th>Status Pintasan</th>
                            <th>Status Slider</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Pintasan</th>
                            <th>Alamat Pintasan</th>
                            <th>User</th>
                            <th>Status Slider Pintasan</th>
                            <th>status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        
                        <?php
                         foreach ($slider_data as $slider) { ?>
                            <tr>
                                <td><a class="btn btn-info" href="<?php echo base_url() . $slider->lokasi; ?>"><i class="fas fa-eye"> Lihat</a></td>
                                <th><?php echo $slider->judul_slider; ?></th>
                                <th><?php echo $slider->deskripsi_slider; ?></th>
                                <th><?php echo $slider->link_pintasan; ?></th>
                                <th><?php echo $slider->url_link_pintasan; ?></th>
                                <th><?php echo $slider->nama_user; ?></th>
                                <th>
                                    <select onchange="ubah_pintasan('<?php echo $slider->id_slider; ?>');" class="btn btn-info" name="" id="st_pintasan<?php echo $slider->id_slider; ?>">
                                        <option value="<?php echo $slider->status_link_pintasan; ?>"><?php echo $slider->status_link_pintasan; ?></option>
                                        <option value="non aktif">non aktif</option>
                                        <option value="aktif">aktif</option>
                                    </select>
                                </th>
                                <th>
                                    <select onchange="ubah_status('<?php echo $slider->id_slider; ?>');" class="btn btn-info" name="" id="st_status<?php echo $slider->id_slider; ?>">
                                        <option value="<?php echo $slider->statusa; ?>"><?php echo $slider->statusa; ?></option>
                                        <option value="non aktif">non aktif</option>
                                        <option value="aktif">aktif</option>
                                    </select>
                                </th>
                                <th>
                                    <a href="<?= base_url('admin/edit_slider/'.$slider->id_slider); ?>" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                </th>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function edit(id) {
        $.ajax({
            url: '<?php echo base_url(); ?>admin/getDataSlider',
            method: 'post',
            dataType:'JSON',
            data: {
                id_slider: id
            },
            success: function(res) {
                console.log(res.data);
                $('#Epublic-judul').val(res.data.judul_slider);
                $('#Epublic-pintasan').val(res.data.link_pintasan);
                $('#Epublic-url').val(res.data.url_link_pintasan);
                $('#Epublic-desc').val(res.data.nama_asset);
                $('#id_slider_edit').val(res.data.id_slider);
            }
        });
    }

    function ubah_pintasan(id) {
        var sts = $('#st_pintasan' + id).val();
        // console.log(sts);
        $.ajax({
            url: '<?php echo base_url(); ?>admin/pintasanSlider',
            method: 'post',
            data: {
                id: id,
                status: sts
            },
            success: function(res) {
                console.log(res);
            }
        });
    }

    function ubah_status(id) {
        var sts = $('#st_status' + id).val();
        // console.log(sts);
        $.ajax({
            url: '<?php echo base_url(); ?>admin/statusSlider',
            method: 'post',
            data: {
                id: id,
                status: sts
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