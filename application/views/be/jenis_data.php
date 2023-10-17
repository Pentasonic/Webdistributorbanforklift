<?php
$this->load->view('be/template/header');
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Jenis Produk Data</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <div style="margin: 5px;" align="right">
    <button href="#" data-toggle="modal" data-target="#AddJenisModal" class="btn btn-success">Tambah Jenis Produk</button>
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
                            <th>Nama Jenis</th>
                            <th>User</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Jenis</th>
                            <th>User</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($jenis_data as $jenis) { ?>
                            <tr>
                                <th><?php echo $jenis->nama_jenis_produk; ?></th>
                                <th><?php echo $jenis->nama_user; ?></th>
                                <th><?php echo $jenis->created; ?></th>
                                <th>
                                <button onclick="edit('<?= $jenis->id_jenis_produk; ?>')" href="#" data-toggle="modal" data-target="#EditJenisModal" class="btn btn-warning"><i class="bi bi-pencil"></i></button>
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
    function edit(id){
        $.ajax({
            url: '<?php echo base_url(); ?>admin/getDataJenis',
            method: 'post',
            dataType:'JSON',
            data: {
                id_jenis: id
            },
            success: function(res) {
                console.log(res.data);
                $('#namajenis').val(res.data.nama_jenis_produk);
                $('#idjenis').val(res.data.id_jenis_produk);
            }
        });
    }
    function ubah_status(id) {
        var sts = $('#st_status' + id).val();
        // console.log(sts);
        $.ajax({
            url: '<?php echo base_url(); ?>admin/statusProduk',
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
            url: '<?php echo base_url(); ?>admin/statusPublicProduk',
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