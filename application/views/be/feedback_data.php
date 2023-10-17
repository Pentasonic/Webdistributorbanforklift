<?php
$this->load->view('be/template/header');
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Feedback Data</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
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
                            <th>Nama User</th>
                            <th>Email</th>
                            <th>Nomor Telepon</th>
                            <th>Nama Perusahaan</th>
                            <th>Message</th>
                            <th>Minat</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama User</th>
                            <th>Email</th>
                            <th>Nomor Telepon</th>
                            <th>Nama Perusahaan</th>
                            <th>Message</th>
                            <th>Minat</th>
                            <th>Tanggal</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($feedback_data as $feedback) { ?>
                            <tr>
                                <td><?php echo $feedback->nama_visitor; ?></td>
                                <td><?php echo $feedback->email_visitor; ?></td>
                                <td><?php echo $feedback->no_telp_visitor; ?></td>
                                <td><?php echo $feedback->nama_perusahaan; ?></td>
                                <td><?php echo $feedback->message_visitor; ?></td>
                                <td><?php echo $feedback->minat_id_produk; ?></td>
                                <td><?php echo $feedback->created; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<?php
$this->load->view('be/template/footer');
?>