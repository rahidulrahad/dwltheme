<footer class="tm-footer">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        
                        <div class="tm-footer-content-box">
                            <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Proin eu posuere felis</h3>
                            <div class="tm-gray-bg">
                                <p>Classic is free HTML CSS website template provided by templatemo for everyone. Feel free to use it.</p>
                                <p>Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                                <p><strong>Danny Egg (Executive)</strong></p>    
                            </div>    
                        </div>
                                                
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        
                            <!-- <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Nulla tortor dolor</h3> -->
                            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-1' ); ?>            
                            <?php endif; ?>
                        
                    </div>

                    <!-- Add the extra clearfix for only the required viewport 
                        http://stackoverflow.com/questions/24590222/bootstrap-3-grid-with-different-height-in-each-item-is-it-solvable-using-only
                    -->
                    <div class="clearfix hidden-lg-up"></div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                       
                            <!-- <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Etiam mollis ornare</h3> -->
                            <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-2' ); ?>            
                            <?php endif; ?>
                        
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-footer-content-box">
                        
                            <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Fusce non turpis</h3>
                            <div class="tm-margin-b-30">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/tm-img-100x100-1.jpg" alt="Image" class="tm-footer-thumbnail">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/tm-img-100x100-2.jpg" alt="Image" class="tm-footer-thumbnail">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/tm-img-100x100-3.jpg" alt="Image" class="tm-footer-thumbnail">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/tm-img-100x100-4.jpg" alt="Image" class="tm-footer-thumbnail">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/tm-img-100x100-5.jpg" alt="Image" class="tm-footer-thumbnail">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/tm-img-100x100-6.jpg" alt="Image" class="tm-footer-thumbnail">
                            </div>
                            <p class="tm-margin-b-20">Curabitur dui massa, aliquam quis mi sed, tempor vulputate tellus. Sed vestibulum non neque.</p>
                            <a href="#" class="tm-btn tm-btn-gray text-uppercase">Browse</a>

                        </div>
                        
                    </div>


                </div>

                <div class="row">
                    <div class="col-xs-12 tm-copyright-col">
                        <p class="tm-copyright-text">Copyright 2016 Your Company Name</p>
                    </div>
                </div>
            </div>
</footer>
<?php wp_footer();?>

        <!-- load JS files -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        
       
</body>
</html>