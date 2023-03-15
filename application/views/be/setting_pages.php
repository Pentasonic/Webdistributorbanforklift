<?php
$this->load->view('be/template/header');
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Setting Pages</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <div style="margin: 5px;" align="right">
        <!-- <a href="<?php echo base_url(); ?>admin/new_slider" class="btn btn-success">Tambah Slider</a> -->
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
                            <th>Pages</th>
                            <th>Deskripsi</th>
                            <th>User</th>
                            <th>Status Slider</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Gambar</th>
                            <th>Pages</th>
                            <th>Deskripsi</th>
                            <th>User</th>
                            <th>status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        
                        <?php
                         foreach ($pages_data as $pages) { ?>
                            <tr>
                                <td><a class="btn btn-info" href="<?php echo base_url() . $pages->lokasi; ?>"><i class="fas fa-eye"> Lihat</a></td>
                                <th><?php echo $pages->judul_pages; ?></th>
                                <th><?php echo $pages->deskripsi_pages; ?></th>
                                <!-- <th><?php echo $pages->link_pintasan; ?></th>
                                <th><?php echo $pages->url_link_pintasan; ?></th> -->
                                <th><?php echo $pages->nama_user; ?></th>
                                <th>
                                    <select onchange="ubah_status('<?php echo $pages->id_pages; ?>');" class="btn btn-info" name="" id="st_status<?php echo $pages->id_pages; ?>">
                                        <option value="<?php echo $pages->statusa; ?>"><?php echo $pages->statusa; ?></option>
                                        <option value="non aktif">non aktif</option>
                                        <option value="aktif">aktif</option>
                                    </select>
                                </th>
                                <th>
                                    <a href="<?= base_url('admin/edit_pages/'.$pages->id_pages); ?>" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
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

    function ubah_status(id) {
        var sts = $('#st_status' + id).val();
        // console.log(sts);
        $.ajax({
            url: '<?php echo base_url(); ?>admin/statusPages',
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