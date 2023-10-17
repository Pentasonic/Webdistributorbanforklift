</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?php echo base_url(); ?>login/logoutProcess">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Add Gambar Modal-->
<div class="modal fade bd-example-modal-xl" id="AddGambarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Gambar</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>admin/AddGambarProcess" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Pilih File</span>
                        </div>
                        <input name="image-upload" type="file" class="form-control" placeholder="File Gambar" aria-label="File Gambar" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Deskripsi gambar</span>
                        </div>
                        <textarea name="image-desc" class="form-control" aria-label="With textarea"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Tambah">
                </form>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- Add Gambar Slider Modal-->
<div class="modal fade bd-example-modal-xl" id="AddSliderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Gambar Slider</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>admin/AddSliderProcess" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Judul Slider</span>
                        </div>
                        <input name="public-judul" type="text" class="form-control" placeholder="Judul Slider" aria-label="Judul Slider" aria-describedby="basic-addon1" value="<?php echo $setting_data->judul_tab; ?>">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nama Pintasan</span>
                        </div>
                        <input name="public-pintasan" type="text" class="form-control" placeholder="Contoh : Mulai/ Lihat" aria-label="Contoh : Mulai/ Lihat" aria-describedby="basic-addon1" value="<?php echo $setting_data->judul_tab; ?>">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">URL Pintasan</span>
                        </div>
                        <input name="public-url" type="text" class="form-control" placeholder="Contoh : #/ https://...." aria-label="Contoh : #/ https://...." aria-describedby="basic-addon1" value="<?php echo $setting_data->judul_tab; ?>">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Pilih File</span>
                        </div>
                        <input name="image-upload-slider" type="file" class="form-control" placeholder="File Gambar" aria-label="File Gambar" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Deskripsi gambar</span>
                        </div>
                        <textarea name="public-desc" class="form-control" aria-label="With textarea"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Tambah">
                </form>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Gambar Slider Modal-->
<div class="modal fade bd-example-modal-xl" id="EditSliderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Gambar Slider</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>admin/EditSliderProcess" method="post" enctype="multipart/form-data">
                <input type="hidden" id="id_slider_edit" name="id_slider_edit">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Judul Slider</span>
                        </div>
                        <input name="Epublic-judul" id="Epublic-judul" type="text" class="form-control" placeholder="Judul Slider" aria-label="Judul Slider" aria-describedby="basic-addon1" value="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nama Pintasan</span>
                        </div>
                        <input name="Epublic-pintasan" id="Epublic-pintasan" type="text" class="form-control" placeholder="Contoh : Mulai/ Lihat" aria-label="Contoh : Mulai/ Lihat" aria-describedby="basic-addon1" value="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">URL Pintasan</span>
                        </div>
                        <input name="Epublic-url" id="Epublic-url" type="text" class="form-control" placeholder="Contoh : #/ https://...." aria-label="Contoh : #/ https://...." aria-describedby="basic-addon1" value="">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Deskripsi gambar</span>
                        </div>
                        <textarea name="Epublic-desc" id="Epublic-desc" class="form-control" aria-label="With textarea"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- Add User Modal-->
<div class="modal fade" id="AddUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>admin/AddUserProcess" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nama User</span>
                        </div>
                        <input name="user-nama" type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Nama Lengkap" aria-describedby="basic-addon1" value="<?php echo $setting_data->judul_tab; ?>">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Jenis Kelamin</span>
                        </div>
                        <select name="user-jk" id="">
                            <option value="L">Pilih Jenis Kelamin</option>
                            <option value="L">Laki - laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        <!-- <input name="public-pintasan" type="text" class="form-control" placeholder="Jenis Kelamin" aria-label="Jenis Kelamin" aria-describedby="basic-addon1" value="<?php echo $setting_data->judul_tab; ?>"> -->
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Email</span>
                        </div>
                        <input name="user-email" type="text" class="form-control" placeholder="contoh@gmail.com" aria-label="contoh@gmail.com" aria-describedby="basic-addon1" value="<?php echo $setting_data->judul_tab; ?>">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Password</span>
                        </div>
                        <input name="user-password" type="password" class="form-control" placeholder="23QwertyPassword" aria-label="23QwertyPassword" aria-describedby="basic-addon1" value="<?php echo $setting_data->judul_tab; ?>">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Level</span>
                        </div>
                        <select name="user-level" id="">
                            <option value="staff">Pilih Level User</option>
                            <option value="admin">Admin</option>
                            <option value="staff">Staff</option>
                        </select>
                        <!-- <input name="public-url" type="text" class="form-control" placeholder="Level" aria-label="Level" aria-describedby="basic-addon1" value="<?php echo $setting_data->judul_tab; ?>"> -->
                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Tambah">
                </form>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- Add Kategori Modal-->
<div class="modal fade" id="AddKategoriModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>admin/AddKategoriProcess" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nama Kategori</span>
                        </div>
                        <input name="nama" type="text" class="form-control" placeholder="Nama Kategori" aria-label="Nama Kategori" aria-describedby="basic-addon1" value="<?php echo $setting_data->judul_tab; ?>">
                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Tambah">
                </form>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Kategori Modal-->
<div class="modal fade" id="EditKategoriModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>admin/EditKategoriProcess" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nama Kategori</span>
                        </div>
                        <input type="hidden" name="id" id="id">
                        <input name="nama" id="nama" type="text" class="form-control" placeholder="Nama Kategori" aria-label="Nama Kategori" aria-describedby="basic-addon1" value="">
                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- Add Jenis Modal-->
<div class="modal fade" id="AddJenisModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Jenis Produk</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>admin/AddJenisProcess" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Jenis Produk</span>
                        </div>
                        <input name="nama" type="text" class="form-control" placeholder="Jenis Produk" aria-label="Jenis Produk" aria-describedby="basic-addon1" value="<?php echo $setting_data->judul_tab; ?>">
                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Tambah">
                </form>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Jenis Modal-->
<div class="modal fade" id="EditJenisModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Jenis Produk</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>admin/EditJenisProcess" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Jenis Produk</span>
                        </div>
                        <input type="hidden" name="idjenis" id="idjenis">
                        <input name="namajenis" id="namajenis" type="text" class="form-control" placeholder="Jenis Produk" aria-label="Jenis Produk" aria-describedby="basic-addon1" value="<?php echo $setting_data->judul_tab; ?>">
                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- Add Produk Modal-->
<div class="modal fade bd-example-modal-xl" id="AddProdukModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>admin/AddProdukProcess" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Kode Produk</span>
                        </div>
                        <input name="produk-kode" type="text" class="form-control" placeholder="Kode Produk" aria-label="Kode Produk" aria-describedby="basic-addon1" value="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nama Produk</span>
                        </div>
                        <input name="produk-nama" type="text" class="form-control" placeholder="Nama Produk" aria-label="Nama Produk" aria-describedby="basic-addon1" value="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Summary Deskripsi</span>
                        </div>
                        <textarea name="produk-summary" class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Full Deskripsi</span>
                        </div>
                        <textarea name="produk-full" class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Harga</span>
                        </div>
                        <input name="produk-harga" type="text" class="form-control" placeholder="Harga Produk" aria-label="Harga Produk" aria-describedby="basic-addon1" value="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Satuan</span>
                        </div>
                        <input name="produk-satuan" type="text" class="form-control" placeholder="Satuan Produk" aria-label="Satuan Produk" aria-describedby="basic-addon1" value="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Gambar Produk (.jpeg)</span>
                        </div>
                        <input name="produk-image" type="file" class="form-control" placeholder="Produk" aria-label="Produk" aria-describedby="basic-addon1">
                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Tambah">
                </form>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Produk Modal-->
<div class="modal fade bd-example-modal-xl" id="EditProdukModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>admin/EditProdukProcess" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_produk_edit" id="id_produk_edit">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Kode Produk</span>
                        </div>
                        <input name="Eproduk-kode" id="Eproduk-kode" type="text" class="form-control" placeholder="Kode Produk" aria-label="Kode Produk" aria-describedby="basic-addon1" value="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nama Produk</span>
                        </div>
                        <input name="Eproduk-nama" id="Eproduk-nama" type="text" class="form-control" placeholder="Nama Produk" aria-label="Nama Produk" aria-describedby="basic-addon1" value="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Summary Deskripsi</span>
                        </div>
                        <textarea name="Eproduk-summary" id="Eproduk-summary" class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Full Deskripsi</span>
                        </div>
                        <textarea name="Eproduk-full" id="Eproduk-full" class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Harga</span>
                        </div>
                        <input name="Eproduk-harga" id="Eproduk-harga" type="text" class="form-control" placeholder="Harga Produk" aria-label="Harga Produk" aria-describedby="basic-addon1" value="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Satuan</span>
                        </div>
                        <input name="Eproduk-satuan" id="Eproduk-satuan" type="text" class="form-control" placeholder="Satuan Produk" aria-label="Satuan Produk" aria-describedby="basic-addon1" value="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Gambar Produk (.jpeg)</span>
                        </div>
                        <input name="Eproduk-image" id="Eproduk-image" type="file" class="form-control" placeholder="Produk" aria-label="Produk" aria-describedby="basic-addon1">
                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- Add Gallery Modal-->
<div class="modal fade bd-example-modal-xl" id="AddGalleryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Gallery</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>admin/AddGalleryProcess" method="post" enctype="multipart/form-data">
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Deskripsi Gallery</span>
                        </div>
                        <textarea name="gallery-full" class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Gambar gallery (.jpeg)</span>
                        </div>
                        <input name="gallery-image" type="file" class="form-control" placeholder="Gallery" aria-label="gallery" aria-describedby="basic-addon1">
                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Tambah">
                </form>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<!-- <script src="<?php echo base_url(); ?>assets/backend/admin/vendor/jquery/jquery.min.js"></script> -->

<script src="<?php echo base_url(); ?>assets/backend/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url(); ?>assets/backend/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>assets/backend/admin/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url(); ?>assets/backend/admin/vendor/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/admin/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url(); ?>assets/backend/admin/js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/admin/js/demo/chart-pie-demo.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/admin/js/demo/datatables-demo.js"></script>


</body>

</html>