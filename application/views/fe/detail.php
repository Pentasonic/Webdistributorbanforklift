<?php $this->load->view('fe/template/header'); ?>
<div id="detail" class="portfolio-area area-padding fix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>Detail Produk</h2>
                </div>
            </div>
        </div>

        <div class="row awesome-project-content portfolio-container">
            <!-- Detail Left -->
            <div class="col-md-5 col-sm-5 col-xs-12 portfolio-item filter-app portfolio-item">
                <div class="single-awesome-project">
                    <div class="">
                        <img width="100%" src="<?= base_url() ?><?= $product_data->lokasi; ?>" alt="" />
                    </div>
                </div>
            </div>
            <!-- Detail Left end -->
            <div class="container-fluid">

                <!-- Detail Right -->
                <div class="col-md-7 col-sm-7 col-xs-12 portfolio-item filter-app portfolio-item">
                    <div class="single-awesome-project">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="border-color: #ffff;background-color:#ffff;" id="basic-addon1">Kode Produk</span>
                            </div>
                            <input style="border: none;outline:0px;border-color: #ffff;background-color:#ffff;" disabled type="text" class="form-control" value="<?php echo $product_data->kode_produk; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="border-color: #ffff;background-color:#ffff;" id="basic-addon1">Nama Produk</span>
                            </div>
                            <input style="border: none;outline:0px;border-color: #ffff;background-color:#ffff;" disabled type="text" class="form-control" value="<?php echo $product_data->nama_produk; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="border-color: #ffff;background-color:#ffff;" id="basic-addon1">Harga Produk (Rp.)</span>
                            </div>
                            <input style="border: none;outline:0px;border-color: #ffff;background-color:#ffff;" disabled type="text" class="form-control" value="<?php echo $product_data->harga_produk; ?>">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="border-color: #ffff;background-color:#ffff;">Deskripsi</span>
                            </div>
                            <p  style="border-color: #ffff;background-color:#ffff;text-align:justify;" class="form-control" aria-label="With textarea"><?php echo $product_data->full_deskripsi; ?>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id sed in laborum odit enim quisquam facere sit obcaecati quidem nobis eligendi mollitia fuga magnam dolorem, nihil nisi, dolores, reprehenderit ipsa, Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores expedita porro odio atque minus ducimus ratione, ex debitis obcaecati iure tenetur sequi corrupti enim qui possimus ipsum maxime error impedit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti laboriosam esse aliquam voluptate illo minus accusantium architecto, perspiciatis earum libero ad repudiandae dolores perferendis dolore. Facilis architecto excepturi earum omnis.</p>
                        </div>
                        <!-- <span><b>Spesifikasi</b></span> -->
                        <?php
                        $data = json_decode($product_data->spesifikasi_produk_array);
                        if (isset($data)) {
                            $jml = count($data);
                            for ($i = 0; $i < $jml; $i++) {
                        ?>
                                <!-- <div style="margin-left: 50px;">- <?= $data[$i]; ?></div> -->
                        <?php
                            }
                        }else{
                            ?>
                            <!-- <div style="margin-left: 50px;">- <i>Tidak ada Spesifikasi</i></div> -->
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <!-- Detail Right end -->
            </div>
        </div>
    </div>
</div><!-- End Gallery Section -->
<?php $this->load->view('fe/template/footer'); ?>