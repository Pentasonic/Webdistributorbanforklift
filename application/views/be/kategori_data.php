<?php
$this->load->view('be/template/header');
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kategori Data</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <div style="margin: 5px;" align="right">
        <button href="#" data-toggle="modal" data-target="#AddKategoriModal" class="btn btn-success">Tambah Kategori</button>
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
                            <th>Nama Kategori</th>
                            <th>User</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Kategori</th>
                            <th>User</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($kategori_data as $kategori) { ?>
                            <tr>
                                <th><?php echo $kategori->nama_kategori; ?></th>
                                <th><?php echo $kategori->nama_user; ?></th>
                                <th><?php echo $kategori->created; ?></th>
                                <th>
                                <button onclick="edit('<?= $kategori->id_kategori; ?>')" href="#" data-toggle="modal" data-target="#EditKategoriModal" class="btn btn-warning"><i class="bi bi-pencil"></i></button>
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
            url: '<?php echo base_url(); ?>admin/getDataKategori',
            method: 'post',
            dataType:'JSON',
            data: {
                id_kategori: id
            },
            success: function(res) {
                console.log(res.data);
                $('#nama').val(res.data.nama_kategori);
                $('#id').val(res.data.id_kategori);
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