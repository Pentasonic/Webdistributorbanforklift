        <!-- END of MAIN VIEW -->

        <!-- FOOTER -->
        <footer>
            <div class="w-100 pt-50 pb-50 position-relative">

                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="<?php echo base_url().$about_data->lokasi; ?>" alt="">
                        </div>
                        <div class="col-md-4">
                            <h4 class="subtitle"><?php echo $about_data->judul; ?></h4>
                            <p style="text-align:justify;"><?php echo $about_data->deksripsi; ?></p>
                            <br>
                            <div class="social-links">
                            <?php
                                $account_count = count(json_decode($setting_data->footer_setting_global_medsos_list_array));
                                $account_data = json_decode($setting_data->footer_setting_global_medsos_list_array);
                                $title = ["Twitter","Facebook","Instagram","Linkedin"];
                                $class = ["fab fa-twitter","fab fa-facebook-f","fab fa-instagram","fab fa-linkedin"];
                                for ($i = 0; $i < $account_count; $i++) { ?>
                                    <a href="<?php echo $account_data[$i]->url_link; ?>" title="<?= $title[$i]; ?>" target="_blank"><i class="<?= $class[$i]; ?>"></i></a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4 class="subtitle">HUBUNGI KAMI</h4>
                            <p><?php echo $setting_data->contact_setting_phone; ?>
                                <br>
                                <?php echo $setting_data->contact_setting_email; ?>
                            </p>
                            <span class="subtitle">MARKETPLACE</span><br>
                            <a target="_blank" href="https://www.tokopedia.com/distributorbanforklift"><img style="width:150px;" src="<?php echo base_url(); ?>assets/frontend/images/brand/toped.png" alt=""></a>
                            <a target="_blank" href="https://www.blibli.com/merchant/distributor-ban-forklift-official-store/DIB-70128?excludeProductList=false&promoTab=false&category=53704&pickupPointCode=PP-3441638&brand=Ascendo"><img style="width:150px;" src="<?php echo base_url(); ?>assets/frontend/images/brand/blibli.png" alt=""></a>
                            <br>
                        </div>
                        <div class="col-md-3">
                            <h4 class="subtitle">LOKASI KAMI</h4>
                            <p><?php echo $setting_data->contact_setting_lokasi_string; ?><br>
                            <?php echo $setting_data->contact_setting_website; ?></p>
                            <iframe src="<?php echo $setting_data->contact_setting_maps_lat_lag; ?>" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="copyright w-100 text-center bg-color6 position-relative">
            <div class="container">
                <p class="mb-0">Copyright by <a href="index.html" title=""><?php echo $setting_data->judul_tab; ?></a>. All Rights
                    Reserved</p>
            </div>
        </div><!-- Copyright --> <!-- END of FOOTER -->

        </main><!-- Main Wrapper -->

        <script>
            function reloadThePage() {
                location.reload();
            }
        </script>



        <!--End of Tawk.to Script-->
        <script src="<?php echo base_url() ?>assets/frontend/js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/frontend/js/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/frontend/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/frontend/js/wow.min.js"></script>
        <script src="<?php echo base_url() ?>assets/frontend/js/jquery.fancybox.min.js"></script>
        <script src="<?php echo base_url() ?>assets/frontend/js/perfect-scrollbar.min.js"></script>
        <script src="<?php echo base_url() ?>assets/frontend/js/slick.min.js"></script>
        <script src="<?php echo base_url() ?>assets/frontend/js/custom-scripts.js"></script>
        <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

        <script type="text/javascript">
            $(document).on('input', '#name_produk', function(val) {
                if (val !== '') {
                    $('.search-product').find('form').attr('action', '<?php echo base_url() ?>search')
                } else if (val == '') {
                    $('.search-product').find('form').attr('action', '<?php echo base_url() ?>produk/search')
                }
            });
        </script>

        <script type="text/javascript">
            var table;

            $(document).ready(function() {

                //datatables
                table = $('#table').DataTable({

                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.

                    // Load data for the table's content from an Ajax source
                    "ajax": {
                        "url": "<?php echo base_url() ?>customers/ajax_list",
                        "type": "POST",
                        "data": function(data) {
                            data.country = $('#country').val();
                            data.FirstName = $('#FirstName').val();
                            data.LastName = $('#LastName').val();
                            data.address = $('#address').val();
                        }
                    },

                    //Set column definition initialisation properties.
                    "columnDefs": [{
                        "targets": [0], //first column / numbering column
                        "orderable": false, //set not orderable
                    }, ],

                });

                $('#btn-filter').click(function() { //button filter event click
                    // table.ajax.reload(); //just reload table
                });
                $('#btn-reset').click(function() { //button reset event click
                    $('#form-filter')[0].reset();
                    table.ajax.reload(); //just reload table
                });

            });
        </script>

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/623995241ffac05b1d7fcc63/1fuoet6bd';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>



        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- <iframe src="https://tawk.to/chat/623995241ffac05b1d7fcc63/1fuoet6bd" style="width:100%;min-height:500px;"></iframe> -->
                    </div>
                </div>
            </div>
        </div>

        </body>

        </html>