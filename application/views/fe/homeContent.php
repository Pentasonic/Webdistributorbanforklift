<?php $this->load->view('fe/template/header'); ?>
<?php $this->load->view('fe/template/right'); ?>

<!-- MAIN VIEW -->
<section>
    <div class="w-100 position-relative">
        <div class="feat-wrap style2 position-relative w-100">
            <div class="feat-caro">
                <!-- <div class="feat-item text-left">
                    <div class="feat-img position-absolute"><img src="<?php echo base_url() ?>uploads/slides/d7c1f12a38971899bd849487020f5d6f_thumb.jpg" alt="Slider"></div>
                    <div class="container">
                        <div class="feat-cap">
                            <h2 class="mb-4" style="color: #000000;"><b>Dealer&nbsp;Resmi </b><br>Spare Parts &amp; Service&nbsp;<br>Forklift Mitsubishi &amp; Nichiyu</h2>
                            <div class="feat-cap-innr">
                                <a class="thm-btn thm-bg" href="<?php echo base_url() ?>service" title="">Selengkapnya<img style="display:inline;" src="<?php echo base_url() ?>assets/frontend/images/icon/arrow.png" alt="arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feat-item text-left">
                    <div class="feat-img position-absolute"><img src="<?php echo base_url() ?>uploads/slides/093a83590de4012e6e99e01047cbb56a_thumb.jpg" alt="Slider"></div>
                    <div class="container">
                        <div class="feat-cap">
                            <h2 class="mb-4" style="color: #000000;">Dipercaya menangani <br>Maintenance Forklift <br><b>Lebih dari 100 unit&nbsp;<br></b>setiap bulannya</h2>
                            <div class="feat-cap-innr">
                                <a class="thm-btn thm-bg" href="<?php echo base_url() ?>service" title="">Selengkapnya<img style="display:inline;" src="<?php echo base_url() ?>assets/frontend/images/icon/arrow.png" alt="arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feat-item text-left">
                    <div class="feat-img position-absolute"><img src="<?php echo base_url() ?>uploads/slides/7ded0a1b8d20891aca6edc73f8d0be54_thumb.jpg" alt="Slider"></div>
                    <div class="container">
                        <div class="feat-cap">
                            <h2 class="mb-4" style="color: #000000;">Dapatkan Forklift bekas, <br>Harga <b>Minimum </b><br>Performa <b>Maksimum</b></h2>
                            <div class="feat-cap-innr">
                                <a class="thm-btn thm-bg" href="<?php echo base_url() ?>sub-forklift-bekas" title="">Selengkapnya<img style="display:inline;" src="<?php echo base_url() ?>assets/frontend/images/icon/arrow.png" alt="arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feat-item text-left">
                    <div class="feat-img position-absolute"><img src="<?php echo base_url() ?>uploads/slides/10534b103703ceaeaf7346483c20ee7d_thumb.jpg" alt="Slider"></div>
                    <div class="container">
                        <div class="feat-cap">
                            <h2 class="mb-4" style="color: #000000;">Diskon spesial <br>untuk <b>Battery </b><br>dan <b>Attachment Forklift</b></h2>
                            <div class="feat-cap-innr">
                                <a class="thm-btn thm-bg" href="<?php echo base_url() ?>spare-parts/battery-forklift" title="">Selengkapnya<img style="display:inline;" src="<?php echo base_url() ?>assets/frontend/images/icon/arrow.png" alt="arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <?php foreach($slider_data as $slider){ ?>
                <div class="feat-item text-left">
                    <div class="feat-img position-absolute"><img src="<?php echo base_url($slider->lokasi) ?>" alt="Slider"></div>
                    <div class="container">
                        <div class="feat-cap">
                            <h2 class="mb-4" style="color: #000000;"><b><?= $slider->judul_slider; ?></b> <br><?= $slider->deskripsi_slider; ?></h2>
                            <div class="feat-cap-innr">
                                <a class="thm-btn thm-bg" href="<?= $slider->url_link_pintasan;?>" title=""><?= $slider->link_pintasan;?><img style="display:inline;" src="<?php echo base_url() ?>assets/frontend/images/icon/arrow.png" alt="arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div><!-- Featured Area Wrap -->
    </div>
</section>

<section>
    <div class="w-100 pt-100 pb-100 position-relative">
        <div class="container">
            <div class="about-wrap style2 w-100">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12">
                        <div class="about-us w-100" style="background: #e1e1e1 url('<?php echo base_url() ?>') bottom right no-repeat;">
                            <h1 class="title-at-home">Prime Forklift Service</h1>
                            <h2 class=""><strong class="thm-clr d-block">Tentang Kami</strong></h2>
                            <p class="mt-3"><?php echo $about_data->deksripsi; ?>
                            </p> <a class="thm-btn thm-bg" href="<?php echo base_url() ?>site/hubungi" title="">Selengkapnya<img src="<?php echo base_url() ?>assets/frontend/images/icon/arrow.png" alt="arrow"></a>
                        </div>

                    </div>
                </div>
            </div><!-- About Wrap -->
        </div>
    </div>
</section>

<section class="brand-at-home">
    <div class="w-100 pb-100 pt-100 position-relative brand-at-home-wrap">
        <div class="container">
            <div class="clients-wrap w-100">
                <div class="row">
                    <div class="clients-wrap w-100 text-center">
                        <h5>BRAND PARTNER</h5>
                        <div class="row justify-content-center pt-30">
                            <?php foreach($merek_data as $merek){?>
                            <div class="col-md-3 col-6 col-lg-3">
                                <div class="w-100 brand-partner-wrap">
                                    <a href="<?php echo base_url() ?>" title=""><img class="img-fluid" src="<?= base_url($merek->lokasi) ?>" alt="<?= $merek->lokasi; ?>"></a>
                                </div>
                            </div>
                                <?php } ?>
                        </div>
                    </div>
                    <div class="clients-wrap w-100 text-center pt-80">
                        <h5>BLOG & BERITA</h5>
                        <div class="row justify-content-center pt-30">
                            <?php foreach($gallery_data->result() as $artikel){ ?>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="post-box w-100">
                                    <div class="post-img overflow-hidden w-100">
                                        <a href="<?php echo base_url() ?>site/artikelDetail/<?= $artikel->id_gallery; ?>" title=""><img class="img-fluid w-100" src="<?= base_url($artikel->lokasi)?>" alt="Post Image 1"></a>
                                    </div>
                                    <div class="post-info w-100" style="text-align: left;">
                                        <a href="<?php echo base_url() ?>site/artikelDetail/<?= $artikel->id_gallery; ?>" style="text-align: left;margin-top:-15px;font-weight:600;"><?= $artikel->judul; ?></a href="">
                                        <br>
                                        <span style="text-align: left;margin-top:-5px;font-size:12px;"><?php
$words = explode(" ", $artikel->summary);
$limited = implode(" ", array_splice($words, 0, 8));
echo $limited;?></span>
                                        <br>
                                        <a style="font-size:11px;color:#ff7500;" href="">Baca Sekarang</a>
                                        <br>
                                        <img src="<?php echo base_url() ?>assets/frontend/images/icon/clock.png" alt="">
                                        <span style="font-size:11px;color:#BFBEBE;"><?= date('d F Y', strtotime($artikel->created)); ?></span>
                                    </div>
                                </div>
                            </div>
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Clients Wrap -->
    </div>
</section>

<section>
    <div class="w-100 pt-100 pb-100 blue-layer opc7 position-relative">
        <div class="fixed-bg" style="background-image: url(<?php echo base_url() ?>assets/frontend/images/parallax1.jpg);"></div>
        <div class="particles-js" id="prtcl"><canvas class="particles-js-canvas-el" width="1903" height="648" style="width: 100%; height: 100%;"></canvas></div>
        <div class="container">
            <div class="sec-title w-100  text-center">
                <div class="sec-title-inner d-inline-block">
                    <h3 class="mb-0">KEUNGGULAN KAMI</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="serv-wrap product-category text-center w-100 ">
                <div class="row">
                    <div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3">
                        <div class="position-relative overflow-hidden w-100">
                            <a href="<?php echo base_url() ?>spare-parts/spare-parts-forklift">
                                <img style="border-radius: 5px;" src="<?php echo base_url() ?>assets/frontend/images/icon/press.png" width="100%" class="mb-4">
                            </a>
                            <!-- <div class="serv-box-inner">
                                <h3 class="mb-0"><a href="<?php echo base_url() ?>spare-parts/spare-parts-forklift" title="">Mobile Press Ban</a></h3>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3">
                        <div class="position-relative overflow-hidden w-100">
                            <a href="<?php echo base_url() ?>katalog-forklift">
                                <img style="border-radius: 5px;" src="<?php echo base_url() ?>assets/frontend/images/icon/layanan.png" width="100%" class="mb-4">
                            </a>
                            <!-- <div class="serv-box-inner">
                                <h3 class="mb-0"><a href="<?php echo base_url() ?>katalog-forklift" title="">Layanan Cepat</a></h3>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3">
                        <div class="position-relative overflow-hidden w-100">
                            <a href="<?php echo base_url() ?>spare-parts/battery-forklift">
                                <img style="border-radius: 5px;" src="<?php echo base_url() ?>assets/frontend/images/icon/pengiriman.png" width="100%" class="mb-4">
                            </a>
                            <!-- <div class="serv-box-inner">
                                <h3 class="mb-0"><a href="<?php echo base_url() ?>spare-parts/battery-forklift" title="">Gratis Pengiriman</a></h3>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3">
                        <div class="position-relative overflow-hidden w-100">
                            <a href="<?php echo base_url() ?>spare-parts/attachment-forklift">
                                <img style="border-radius: 5px;" src="<?php echo base_url() ?>assets/frontend/images/icon/asli.png" width="100%" class="mb-4">
                            </a>
                            <!-- <div class="serv-box-inner">
                                <h3 class="mb-0"><a href="<?php echo base_url() ?>spare-parts/attachment-forklift" title="">Keaslian Produk</a></h3>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('fe/template/footer'); ?>