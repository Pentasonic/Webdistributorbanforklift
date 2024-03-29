<?php $this->load->view('fe/template/header'); ?>
<?php $this->load->view('fe/template/right'); ?>

<section>
    <div class="w-100 pt-170 pb-50 dark-layer3 opc7 position-relative">
        <div class="fixed-bg" style="background-image: url(<?php echo base_url($pages_data->lokasi) ?>);"></div>
        <div class="container">
            <div class="page-top-wrap w-100">
                <h1 class="mb-0">Mobile Press Ban</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="https://distributorbanforklift.com/" title="">Beranda</a></li>
                    <li class="breadcrumb-item active">Mobile Press Ban</li>
                </ol>
            </div><!-- Page Top Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-50 pb-50 position-relative">
        <div class="container">

            <div class="solutions-wrap w-100">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-12 col-lg-6"><img src="<?php echo base_url($pages_data_content->lokasi) ?>" class="img-fluid w-100" data-filename="content-2.jpg"><br></div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="solutions-content-wrap w-100">
                            <h2 class="mb-0">Mobile Press Ban</h2>
                            <ul class="solutions-list mb-0 list-unstyled w-100">
                                <li>
                                    <i class="">+</i>
                                    <h4 class="mb-0"><?= $pages_data_content->deskripsi_pages; ?></h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('fe/template/footer'); ?>