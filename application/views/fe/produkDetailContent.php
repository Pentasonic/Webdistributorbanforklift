<?php $this->load->view('fe/template/header'); ?>
<?php $this->load->view('fe/template/right'); ?>

<section>
    <div class="w-100 pt-170 pb-50 dark-layer3 opc7 position-relative">
        <div class="fixed-bg" style="background-image: url(<?php echo base_url($pages_data->lokasi) ?>);"></div>
        <div class="container">
            <div class="page-top-wrap w-100">
                <h1 class="mb-0">Produk Detail</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="https://distributorbanforklift.com/" title="">Beranda</a></li>
                    <li class="breadcrumb-item active">Produk Detail</li>
                </ol>
            </div><!-- Page Top Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-100 pb-100 position-relative">
        <div class="container">
            <div class="shop-detail-wrap w-100">
                <div class="shop-detail-inner w-100">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="shop-detail-imgs w-100">

                                <div><a href="<?= base_url($data_produk->lokasi) ?>" data-fancybox="gallery" title="">
                                        <img class="img-fluid" src="<?= base_url($data_produk->lokasi) ?>" alt="<?= $data_produk->lokasi?>"></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="shop-detail-info w-100">
                                <h1 class="mb-0"><?= $data_produk->nama_produk; ?></h1>

                                <div class="review-link">
                                    <span class="d-inline-block">Brand: <?= $data_produk->nama_merek; ?></span> <br>
                                </div>


                                <div><?= $data_produk->full_deskripsi; ?></div>

                                <a href="<?php echo base_url() ?>harga/<?= $this->uri->segment(2) ?>" class="thm-btn thm-bg mb-20 mt-20" id="submit" type="button"><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp; Cek Harga</a>

                            </div>
                        </div>
                    </div>
                </div>
                <!--  <div class="shop-detail-tabs mt-50 w-100">
                    
                      Space untukketerangan lainnya 
                </div>-->
            </div><!-- Shop Detail Wrap -->

            <div class="shop-wrap w-100">
                <br>
                <br>
                <h5>Produk Terkait</h5>
                <div class="row align-items-center justify-content-center">
                    <?php foreach($data_produk_terkait->result() as $terkait){?>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="shop-box w-100">
                            <div class="shop-img w-100 position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="<?= base_url($terkait->lokasi) ?>" alt="Shop Image 1">

                                <a href="<?php echo base_url() ?>produk/<?= $terkait->id_produk; ?>" title="">Detail Produk</a>
                            </div>
                            <div class="shop-info w-100">
                                <h3 class="mb-0"><a href="<?php echo base_url() ?>produk/<?= $terkait->id_produk; ?>" title=""><?= $terkait->nama_produk; ?></a></h3>

                                <span class="text-muted"><?= $terkait->nama_merek; ?></span>

                            </div>
                        </div>
                    </div>
                        <?php } ?>
                </div>

            </div>
        </div>

    </div>

</section>

<?php $this->load->view('fe/template/footer'); ?>