<?php
$this->load->view('be/template/header');
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gambar/ Foto</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <div style="margin: 5px;" align="right">
        <button href="#" data-toggle="modal" data-target="#AddGambarModal" class="btn btn-success">Tambah Gambar</button>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary">Gambar/ Foto</h6> -->
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Gambar/ Foto</th>
                            <th>Nama Asset</th>
                            <th>User</th>
                            <th>Dibuat</th>
                            <!-- <th>Aksi</th> -->
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Asset</th>
                            <th>Nama Asset</th>
                            <th>User</th>
                            <th>Tanggal</th>
                            <!-- <th>Aksi</th> -->
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach($image as $dataList){?>
                        <tr>
                            <td><div><img width="200" src="<?php echo base_url().$dataList->lokasi; ?>" alt=""></div></td>
                            <td><?php echo $dataList->nama_asset; ?></td>
                            <td><?php echo $dataList->nama_user; ?></td>
                            <td><?php echo $dataList->created; ?></td>
                            <!-- <td>-</td> -->
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view('be/template/footer');
?>