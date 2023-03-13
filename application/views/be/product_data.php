<?php
$this->load->view('be/template/header');
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Product Data</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <div style="margin: 5px;" align="right">
        <a href="<?= base_url()?>admin/new_produk"class="btn btn-success">Tambah Produk</a>
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
                            <th>Kode</th>
                            <th>Nama Produk</th>
                            <th>summary_deskripsi</th>
                            <th>Harga</th>
                            <th>User</th>
                            <th>Status</th>
                            <th>Status Publikasi</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Gambar</th>
                            <th>Kode</th>
                            <th>Nama Produk</th>
                            <th>summary_deskripsi</th>
                            <th>Harga</th>
                            <th>User</th>
                            <th>status</th>
                            <th>Status Publikasi</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($produk_data as $produk) { ?>
                            <tr>
                                <td><a class="btn btn-info" href="<?php echo base_url() . $produk->lokasi; ?>"><i class="fas fa-eye"> Lihat</a></td>
                                <th><?php echo $produk->kode_produk; ?></th>
                                <th><?php echo $produk->nama_produk; ?></th>
                                <th><?php echo $produk->summary_deskripsi; ?></th>
                                <th><?php echo $produk->harga_produk; ?></th>
                                <th><?php echo $produk->nama_user; ?></th>
                                <th>
                                    <select onchange="ubah_status('<?php echo $produk->id_produk; ?>');" class="btn btn-info" name="" id="st_status<?php echo $produk->id_produk; ?>">
                                        <option value="<?php echo $produk->sts; ?>"><?php echo $produk->sts; ?></option>
                                        <option value="non aktif">non aktif</option>
                                        <option value="aktif">aktif</option>
                                    </select>

                                </th>
                                <th>
                                    <select onchange="ubah_status_public('<?php echo $produk->id_produk; ?>');" class="btn btn-info" name="" id="st_status_public<?php echo $produk->id_produk; ?>">
                                        <option value="<?php echo $produk->status_publikasi; ?>"><?php echo $produk->status_publikasi; ?></option>
                                        <option value="internal">internal</option>
                                        <option value="publik">public</option>
                                    </select>

                                </th>
                                <th><?php echo $produk->created; ?></th>
                                <th>
                                <a  href="<?= base_url('admin/edit_produk/'.$produk->id_produk); ?>"class="btn btn-warning"><i class="bi bi-pencil"></i></a>
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
            url: '<?php echo base_url(); ?>admin/getDataProduk',
            method: 'post',
            dataType:'JSON',
            data: {
                id_produk: id
            },
            success: function(res) {
                console.log(res.data);
                $('#Eproduk-kode').val(res.data.kode_produk);
                $('#Eproduk-nama').val(res.data.nama_produk);
                $('#Eproduk-summary').val(res.data.summary_deskripsi);
                $('#Eproduk-full').val(res.data.full_deskripsi);
                $('#Eproduk-harga').val(res.data.harga_produk);
                $('#Eproduk-satuan').val(res.data.jenis_satuan);
                $('#id_produk_edit').val(res.data.id_produk);
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