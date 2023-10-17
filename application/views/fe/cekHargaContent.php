<?php $this->load->view('fe/template/header'); ?>
<?php $this->load->view('fe/template/right'); ?>

<section>
    <div class="w-100 pt-170 pb-50 dark-layer3 opc7 position-relative">
        <div class="fixed-bg" style="background-image: url(<?php echo base_url($pages_data->lokasi) ?>);"></div>
        <div class="container">
            <div class="page-top-wrap w-100">
                <h1 class="mb-0">Cek Harga</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="https://distributorbanforklift.com/" title="">Beranda</a></li>
                    <li class="breadcrumb-item active">Cek Harga</li>
                </ol>
            </div><!-- Page Top Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-10 pb-100 position-relative">
        <div class="container">

            <div class="about-wrap w-100">
                <div class="row justify-content-center">


                    <div class="col-md-12 col-sm-12 col-lg-8">

                        <div class="w-100 pb-100 position-relative">
                            <div class="container">
                                <div class="sec-title v2 text-center w-100 pt-50">
                                    <div class="d-inline-block">

                                        <h2 class="mb-0">Silahkan lengkapi fomulir di bawah untuk meminta penawaran atau menanyakan harga</h2>

                                    </div>
                                </div>

                                <form class="contact-form text-center w-100" action="<?= base_url('site/saveFeedback') ?>" method="post" id="email-form">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="product-snip mb-10">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-3 col-lg-2">
                                                        <img class="img-fluid w-100" src="<?= base_url($data_produk->lokasi) ?>" alt="Shop Image 11">

                                                    </div>
                                                    <div class="col-md-10 col-sm-9 col-lg-10 text-left">
                                                        Produk terkait:
                                                        <h4 class="mb-0"><a href="javascript:void(0);" title=""><?= $data_produk->nama_produk; ?></a></h4>
                                                        <span class="text-muted"><?= $data_produk->nama_merek; ?></span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="form-group w-100">
                                                <div class="response w-100"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <input hidden class="fname " type="text" name="minat" value="<?= $data_produk->nama_produk." Kode : ".$data_produk->kode_produk; ?>">
                                        </div>
                                        <div class="col-md-12 col-sm-6 col-lg-6">
                                            <label class="d-block">Nama</label>
                                            <input class="fname " type="text" name="name">
                                        </div>
                                        <div class="col-md-12 col-sm-6 col-lg-6">
                                            <label class="d-block">Email</label>
                                            <input class="email " type="email" name="email">
                                        </div>
                                        <div class="col-md-12 col-sm-6 col-lg-6">
                                            <label class="d-block">Telpon</label>
                                            <input class="phone " type="text" name="no_telp">
                                        </div>
                                        <div class="col-md-12 col-sm-6 col-lg-6">
                                            <label class="d-block">Nama Perusahaan</label>
                                            <input class="fname " type="text" name="nama_perusahaan">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <label class="d-block">Tuliskan pesan</label>
                                            <textarea class="contact_message " name="message"></textarea>
                                            <button class="thm-btn thm-bg" id="submit" type="submit">Dapatkan Harga<img src="<?php echo base_url() ?>assets/frontend/images/icon/arrow.png" alt="arrow"></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<?php $this->load->view('fe/template/footer'); ?>