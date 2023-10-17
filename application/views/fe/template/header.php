<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title><?php echo $setting_data->judul_tab; ?></title>
    <!-- SEO start -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="<?php echo $setting_data->judul_tab; ?>">
    <meta name="description" content="<?php echo $setting_data->judul_tab; ?>">
    <meta name="keywords" content="Ban Forklift, Distibutor Ban Forklift">
    <meta name="copyright" content="&copy; 2022 <?php echo $setting_data->judul_tab; ?>">

    <!-- FACEBOOK OPEN GRAPH -->
    <meta property="og:url" content="<?php echo base_url() ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $setting_data->judul_tab; ?>">
    <meta property="og:description" content="<?php echo $setting_data->judul_tab; ?>">
    <meta property="og:image" content="<?php echo $setting_data->lokasi; ?>">

    <!-- TWITTER CARD -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@primeforkliftservice">
    <meta name="twitter:title" content="<?php echo $setting_data->judul_tab; ?>">
    <meta name="twitter:description" content="<?php echo $setting_data->judul_tab; ?>">
    <meta name="twitter:image" content="<?php echo $setting_data->lokasi; ?>">
    <meta name="twitter:url" content="<?php echo base_url() ?>">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url().$about_data->lokasi; ?>">



    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/color.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
</head>

<body>



    <main>

        <!-- HEADER -->
        <header class="stick style2 w-100">

            <div class="logo-info-bar-wrap w-100">
                <div class="container">
                    <div class="logo-info-bar-inner w-100 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="logo-social d-inline-flex flex-wrap justify-content-between align-items-center">
                            <div class="logo">
                                <a href="<?php echo base_url() ?>" title="Home"><img class="img-fluid" width="250" src="<?php echo base_url().$setting_data->lokasi; ?>" alt="Logo" srcset="<?php echo base_url().$setting_data->lokasi; ?>"></a>
                            </div><!-- Logo -->
                        </div>



                        <div>
                            <a class="get-quote thm-btn thm-bg" href="<?php echo base_url() ?>site/katalog" title="">KATALOG ONLINE<img src="<?php echo base_url() ?>assets/frontend/images/icon/arrow.png" alt="arrow"></a>
                        </div>
                    </div>
                </div>
            </div><!-- Logo Info Bar Wrap -->
            <!-- menu dekstop -->
            <div class="menu-wrap">
                <div class="container">
                    <nav class="d-inline-flex justify-content-center align-items-center w-100">
                        <?php $this->load->view('fe/template/menu'); ?>
                    </nav>
                </div>
            </div><!-- Menu Wrap -->

        </header><!-- Header -->
        <!-- menu mobile -->
        <div class="sticky-menu">
            <div class="container">
                <div class="sticky-menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <div class="logo">
                        <a href="<?php echo base_url() ?>" title="Home"><img class="img-fluid" width="250" src="<?php echo base_url() ?>assets/frontend/images/brand/logo.png" alt="Logo" srcset="<?php echo base_url() ?>assets/frontend/images/brand/logo.png"></a>

                    </div><!-- Logo -->
                    <nav class="d-inline-flex justify-content-between align-items-center">
                        <?php $this->load->view('fe/template/menu'); ?>
                    </nav>
                </div>
            </div>
        </div><!-- Sticky Menu -->

        <div class="rspn-hdr">
            <div class="lg-mn">
                <div class="logo"><a href="<?php echo base_url() ?>" title="Home"><img width="200" src="<?php echo base_url() ?>assets/frontend/images/brand/logo.png" alt="Logo"></a></div>
                <span class="rspn-mnu-btn"><i class="fa fa-bars"></i></span>
            </div>
            <div class="rsnp-mnu">
                <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
                <ul class="mb-0 list-unstyled w-100">
                    <li><a href="<?php echo base_url() ?>" title="">HOME</a></li>
                    <li><a href="<?php echo base_url() ?>" title="">BAN FORKLIFT</a></li>
                    <li><a href="<?php echo base_url() ?>" title="">BAN LOADER</a></li>
                    <li><a href="<?php echo base_url() ?>" title="">BAN TRUCK</a></li>
                    <li><a href="<?php echo base_url() ?>" title="">MOBILE PRESS BAN</a></li>
                    <li><a href="<?php echo base_url() ?>" title="">ARTIKEL</a></li>
                    <li><a href="<?php echo base_url() ?>" title="">HUBUNGI KAMI</a></li>
                </ul>
            </div><!-- Responsive Menu -->
        </div><!-- Responsive Header --> <!-- END of HEADER -->