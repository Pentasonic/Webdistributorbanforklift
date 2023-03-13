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
<section>
    <div class="w-100 pt-100 pb-50 position-relative">
        <div class="container">
            <div class="blog-wrap w-100">
                <div class="row justify-content-center">
                    <?php foreach($gallery_data->result() as $artikel){?>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="post-box w-100 text-center">
                            <div class="post-img overflow-hidden w-100">
                                <a href="<?php echo base_url() ?>site/artikelDetail/<?= $artikel->id_gallery; ?>" title=""><img class="img-fluid w-100" src="<?= base_url($artikel->lokasi)?>" alt="Post Image 1"></a>
                            </div>
                            <div class="post-info w-100">
                                <h3 class="mb-0"><a href="<?php echo base_url() ?>site/artikelDetail/<?= $artikel->id_gallery; ?>" title=""><?= $artikel->judul; ?></a></h3>
                                <p class="mb-0">
                                <p><?php
$words = explode(" ", $artikel->summary);
$limited = implode(" ", array_splice($words, 0, 8));
echo $limited;?></p>
                                </p>

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