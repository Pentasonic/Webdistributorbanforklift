<?php $this->load->view('fe/template/header'); ?>
<?php $this->load->view('fe/template/right'); ?>

<section>
    <div class="w-100 pt-170 pb-50 dark-layer3 opc7 position-relative">
        <div class="fixed-bg" style="background-image: url(https://awsimages.detik.net.id/community/media/visual/2022/12/05/teks-editorial-pengertian-ciri-ciri-dan-struktur-penulisan_169.jpeg?w=700&q=90);"></div>
        <div class="container">
            <div class="page-top-wrap w-100">
                <h1 class="mb-0">Artikel</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="https://reviberkahmakmur.co.id/" title="">Beranda</a></li>
                    <li class="breadcrumb-item active">Artikel</li>
                </ol>
            </div><!-- Page Top Wrap -->
        </div>
    </div>
</section>
<section class="content-section">

    <div class="w-100 pt-100 pb-100 position-relative">
        <div class="container">

            <div class="about-wrap w-100">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-sm-12 col-lg-10">
                        <div class="about-content-wrap w-100">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="content-area w-100">
                                        <h1 class=""><?= $gallery_data->judul; ?></h1>

                                        <img class="img-fluid w-100 mt-30" src="<?= base_url($gallery_data->lokasi) ?>" alt="<?= $gallery_data->lokasi; ?>">

                                        <div><?= $gallery_data->deskripsi_gallery; ?></div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<?php $this->load->view('fe/template/footer'); ?>