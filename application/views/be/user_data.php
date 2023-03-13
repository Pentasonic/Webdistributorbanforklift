<?php
$this->load->view('be/template/header');
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User Data</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <div style="margin: 5px;" align="right">
        <button href="#" data-toggle="modal" data-target="#AddUserModal" class="btn btn-success">Tambah User</button>
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
                            <th>Name User</th>
                            <th>Username</th>
                            <th>Jenis Kelamin</th>
                            <th>Level</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name User</th>
                            <th>Username</th>
                            <th>Jenis Kelamin</th>
                            <th>Level</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($user_data as $user) { ?>
                            <tr>
                                <td><?php echo $user->nama_user; ?></td>
                                <td><?php echo $user->username; ?></td>
                                <td><?php echo $user->jenis_kelamin; ?></td>
                                <td><?php echo $user->level; ?></td>
                                <td>
                                    <select onchange="ubah_status('<?php echo $user->id_user; ?>');" class="btn btn-info" name="" id="st_status<?php echo $user->id_user; ?>">
                                        <option value="<?php echo $user->status; ?>"><?php echo $user->status; ?></option>
                                        <option value="non aktif">non aktif</option>
                                        <option value="aktif">aktif</option>
                                    </select>

                                </td>
                                <td><?php echo $user->created; ?></td>
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
            url: '<?php echo base_url(); ?>admin/statusUser',
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