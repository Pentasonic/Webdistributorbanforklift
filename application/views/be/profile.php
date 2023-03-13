<?php
$this->load->view('be/template/header');
?>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <form id="form-brand" action="<?php echo base_url(); ?>admin/saveProfile" method="POST" enctype="multipart/form-data">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Nama User</span>
            </div>
            <input name="user-nama" type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Nama Lengkap" aria-describedby="basic-addon1" value="<?php echo $user_data->nama_user; ?>" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Jenis Kelamin</span>
            </div>
            <select name="user-jk" id="">
                <option value="<?php echo $user_data->jenis_kelamin; ?>"><?php if($user_data->jenis_kelamin == "L"){echo "Laki - laki"; }else{echo "Perempuan"; }; ?></option>
                <option value="L">Laki - laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Email</span>
            </div>
            <input name="user-email" type="text" class="form-control" placeholder="contoh@gmail.com" aria-label="contoh@gmail.com" aria-describedby="basic-addon1" value="<?php echo $user_data->username; ?>" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Password</span>
            </div>
            <input name="user-password" type="password" class="form-control" placeholder="23QwertyPassword" aria-label="23QwertyPassword" aria-describedby="basic-addon1" value="" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Simpan">
    </form>
</div>
<?php
$this->load->view('be/template/footer');
?>