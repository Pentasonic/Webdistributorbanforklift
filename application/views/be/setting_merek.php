<?php
$this->load->view('be/template/header');
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Setting Merek</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <div style="margin: 5px;" align="right">
        <a href="<?= base_url()?>admin/new_merek" class="btn btn-success">Tambah Merek</a>
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
                            <th>File</th>
                            <th>Merek</th>
                            <th>User</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>File</th>
                            <th>Merek</th>
                            <th>User</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($merek_data as $merek) { ?>
                            <tr>
                                <td><a class="btn btn-info" href="<?php echo base_url() . $merek->lokasi; ?>"><i class="fas fa-eye"> Lihat</a></td>
                                <td><?php echo $merek->nama_merek; ?></td>
                                <td><?php echo $merek->nama_user; ?></td>
                                <td><?php echo $merek->created; ?></td>
                                <td>
                                <a  href="<?= base_url('admin/edit_merek/'.$merek->id_merek); ?>"class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                </td>
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
            url: '<?php echo base_url(); ?>admin/statusMerek',
            method: 'post',
            data: {
                id:id,status:sts
            },
            success: function(res) {
                console.log(res);
            }
        });
    }
    function ubah_status_public(id) {
        var sts = $('#st_status_public' + id).val();
        // console.log(sts);
        $.ajax({
            url: '<?php echo base_url(); ?>admin/statusPublicMerek',
            method: 'post',
            data: {
                id:id,status:sts
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