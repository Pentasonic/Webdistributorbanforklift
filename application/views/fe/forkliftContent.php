<?php $this->load->view('fe/template/header'); ?>
<?php $this->load->view('fe/template/right'); ?>

<section>
    <div class="w-100 pt-170 pb-50 dark-layer3 opc7 position-relative">
        <div class="fixed-bg" style="background-image: url(<?php echo base_url() ?>assets/frontend/images/parallax1.jpg);"></div>
        <div class="container">
            <div class="page-top-wrap w-100">
                <h1 class="mb-0">Ban Forklift</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>" title="">Beranda</a></li>
                    <li class="breadcrumb-item active">Ban Forklift</li>
                </ol>
            </div><!-- Page Top Wrap -->
        </div>
    </div>
</section>

<section>
    <div class="w-100 pt-10 pb-10 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-definition">



                    </div>
                </div>

                <?php $this->load->view('fe/template/menuFilter'); ?>

                <div class="col-md-9 col-sm-12 col-lg-9 catalog-list">
                <div class="search-product">
                        <form action="<?php echo base_url() ?>site/search" method="post">
                            <input type="hidden" name="origin" value="<?= $this->uri->segment(2); ?>">
                            <div class="form-row align-items-center">

                                <div class="col-12 col-md-6">
                                    <select id="brand" name="brand" class="w-100 form-control">
                                        <option value="">Brand</option>
                                        <?php foreach($merek_data as $merek){?>
                                            <option value="<?= $merek->id_merek; ?>"><?= $merek->nama_merek; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="col-12 col-md-6">

                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" id="name_produk" name="search" placeholder="Cari berdasarkan nama produk">
                                        <div class="input-group-append">
                                            <button id="btn-filter" class="btn" type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="shop-wrap w-100">
                        <div class="row align-items-center justify-content-center">
                            <?php foreach($product_data_p1->result() as $produk){?>
                            <div class="col-md-4 col-sm-6 col-lg-3">
                                <div class="shop-box w-100">
                                    <div class="shop-img w-100 position-relative overflow-hidden">
                                        <img class="img-fluid w-100" src="<?= base_url($produk->lokasi) ?>" alt="<?= base_url($produk->lokasi) ?>">

                                        <a href="<?php echo base_url() ?>site/produkDetail/<?= $produk->id_produk; ?>" title="">Detail Produk</a>
                                    </div>
                                    <div class="shop-info w-100">
                                        <h3 class="mb-0"><a href="<?php echo base_url() ?>site/produkDetail/<?= $produk->id_produk; ?>" title=""><?= $produk->nama_produk; ?></a></h3>

                                        <span class="text-muted"><?= $produk->nama_merek; ?></span>

                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>

                    </div><!-- Shop Wrap -->
                    <div class="shop-filters-pagination-wrap mt-50 d-flex flex-wrap justify-content-between w-100">
                        <div class="pagination-wrap">

                            <ul class="pagination">
                            <?php 
                                $jml = count($product_data->result());
                                if($jml<=12){?>
                                <li class="page-item">
                                    <a class="page-link" onclick="prev()" title="">Prev</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="<?= base_url('site/forklift?page=')?>1" title="">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" onclick="next()" title="">Next</a>
                                </li>
                                <?php }else{
                                ?>
                                <li class="page-item">
                                    <a class="page-link" onclick="prev()" title="">Prev</a>
                                </li>
                                <?php for($jm = 0;$jm<(ceil($jml / 12));$jm++){ ?>
                                <li class="page-item active">
                                    <a class="page-link" href="<?= base_url('site/forklift?page=')?><?= $jm+1; ?>" title=""><?= $jm+1; ?></a>
                                </li>
                                <?php } ?>
                                <li class="page-item">
                                    <a class="page-link" onclick="next()" title="">Next</a>
                                </li>
                                <?php
                                } ?>
                            </ul>
                            <!-- <ul class="pagination"><li class="page-item active"><a class="page-link" href="#">1</a></li><li class="page-item"><a href="<?php echo base_url() ?>spare-part/page/2" data-ci-pagination-page="2">2</a></li><li class="page-item"><a href="<?php echo base_url() ?>spare-part/page/3" data-ci-pagination-page="3">3</a></li><li class="page-item"><a href="<?php echo base_url() ?>spare-part/page/4" data-ci-pagination-page="4">4</a></li><li class="page-item"><a href="<?php echo base_url() ?>spare-part/page/5" data-ci-pagination-page="5">5</a></li><li class="page-item"><a href="<?php echo base_url() ?>spare-part/page/2" data-ci-pagination-page="2" rel="next">Next</a></li></ul> -->

                            <!-- <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);" title=""><i class="fas fa-angle-left"></i></a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);" title="">1</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="javascript:void(0);" title="">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);" title="">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0);" title=""><i class="fas fa-angle-right"></i></a>
                                </li>
                            </ul> -->
                        </div>
                    </div><!-- Shop Filters Pagination Wrap -->

                </div>
            </div>


        </div>
    </div>
</section>

<?php $this->load->view('fe/template/footer'); ?>