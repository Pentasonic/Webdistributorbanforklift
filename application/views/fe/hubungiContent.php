<?php $this->load->view('fe/template/header'); ?>
<?php $this->load->view('fe/template/right'); ?>

<section>
    <div class="w-100 pt-170 pb-50 dark-layer3 opc7 position-relative">
        <div class="fixed-bg" style="background-image: url(<?php echo base_url($pages_data->lokasi) ?>);"></div>
        <div class="container">
            <div class="page-top-wrap w-100">
                <h1 class="mb-0">Hubungi Kami</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="https://distributorbanforklift.com/" title="">Beranda</a></li>
                    <li class="breadcrumb-item active">Hubungi Kami</li>
                </ol>
            </div><!-- Page Top Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-50 pb-50 position-relative">
        <div class="container">
            <div class="about-wrap w-100">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-sm-12 col-lg-12"><br>


                        <div class="contact-info-wrap text-center">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="contact-info-box w-100">
                                    <img width="100" src="<?php echo base_url('assets/frontend/images/icon/tele.png') ?>">
                                        <strong><?php echo $setting_data->contact_setting_phone; ?></strong>
                                        <span class="d-block"><?php echo $setting_data->contact_setting_wa; ?> (WA/ MOBILE)</span>

                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="contact-info-box w-100">
                                    <img width="100" src="<?php echo base_url('assets/frontend/images/icon/mail.png') ?>">
                                        <strong>Our Mail Box</strong>
                                        <p class="d-block" title=""><?php echo $setting_data->contact_setting_email; ?></p>

                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="contact-info-box w-100">
                                        <img width="100" src="<?php echo base_url('assets/frontend/images/icon/lokasi.png') ?>">
                                        <strong>Our Location</strong>
                                        <p class="mb-0"><?php echo $setting_data->contact_setting_lokasi_string; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br>

                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('fe/template/footer'); ?>