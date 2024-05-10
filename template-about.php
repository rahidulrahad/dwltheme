<?php 
/* Template Name: Template about */

get_header(); ?>

        <div class="tm-about-img-container">
            
        </div>

        <section class="tm-section">
            <div class="container-fluid">
                <div class="row tm-2-rows-sm-swap">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-2-rows-sm-down-2">
                        
                        <!-- <h3 class="tm-gold-text">Sidebar Links</h3>
                        
                        <nav>
                            <ul class="nav">
                                <li><a href="#" class="tm-text-link">Lorem ipsum dolor sit</a></li>
                                <li><a href="#" class="tm-text-link">Tincidunt non faucibus placerat</a></li>
                                <li><a href="#" class="tm-text-link">Vestibulum tempor ac lectus</a></li>
                                <li><a href="#" class="tm-text-link">Fusce non turpis euismod</a></li>
                                <li><a href="#" class="tm-text-link">Nam in augue consectetur</a></li>
                                <li><a href="#" class="tm-text-link">Text Link Color #006699</a></li>
                            </ul>
                        </nav>    -->
                        <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                        <?php dynamic_sidebar( 'sidebar-2' ); ?>            
                        <?php endif; ?> 

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 tm-2-rows-sm-down-1">
                        <h3 class="tm-gold-text">Pellentesque fermentum mauris</h3>
                        <p>Vivamus accumsan blandit ligula. Sed lobortis efficitur sapien</p>
                        <p>Quisque vel sem eu turpis ullamcorper euismod. Praesent quis nisi ac augue luctus viverra. Sed et dui nisi. Fusce vitae dapibus justo. Pellentesque accumsan est ac posuere imperdiet. Curabitur eros mi, lacinia at euismod quis, dapibus vel ligula. Ut sodales erat vitae nunc tempor mollis. Donec tempor lobortis tortor, in feugiat massa facilisis sed. Ut dignissim viverra pretium. In eu justo maximus turpis feugiat finibus scelerisque nec eros.</p>
                        <p>
                        Classic Template provides a great flexibility to arrange the content in any way you like. Please tell your friends about templatemo. Nam sem neque, finibus id sem pharetra, cursus porttitor ligula. Praesent aliquam fermentum dui, vitae venenatis libero vulputate ac. Fusce bibendum scelerisque magna eget iaculis.</p>
                    </div>
                </div>
                
                <div class="row tm-margin-t-mid">
                    <div class="col-xs-12">
                        <h3 class="tm-gold-text">Pellentesque fermentum mauris</h3>
                        <p>Vivamus accumsan blandit ligula. Sed lobortis efficitur sapien</p>
                        <p>Nulla ultrices nibh ac accumsan lobortis. Nulla facilisi. Praesent velit ante, congue ac dignissim in, vehicula sit amet urna. Fusce in dapibus quam, eget finibus velit. Nullam erat odio, vulputate id est ut, consequat rutrum justo. Vivamus vel leo vel nunc tincidunt mattis. Sed neque diam, semper suscipit dictum a, sodales ac metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat. Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id.</p>
                    </div>
                </div>

                <div class="row tm-margin-t-mid">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-sm-m-b">
                        <h3 class="tm-gold-text">Pellentesque fermentum mauris</h3>
                        <p>Vivamus vel leo vel nunc tincidunt mattis. Sed neque diam, semper suscipit dictum a, sodales ac metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat.</p>
                        <p>Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id. Fusce sagittis ultricies felis, non luctus mauris lacinia quis. Ut fringilla lacus ac tempor ullamcorper. Mauris iaculis placerat ex et mattis.</p>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <h3 class="tm-gold-text">Pellentesque fermentum mauris</h3>
                        <p>
                            Fusce in dapibus quam, eget finibus velit. Nullam erat odio, vulputate id est ut, consequat rutrum justo. Vivamus vel leo vel nunc tincidunt mattis. Sed neque diam, semper suscipit dictum a, sodales ac metus. Quisque vel sem eu turpis ullamcorper euismod. Praesent quis nisi ac augue luctus viverra. Sed et dui nisi.
                        </p>
                        <p>
                            Fusce vitae dapibus justo. Pellentesque accumsan est ac posuere imperdiet. Curabitur eros mi, lacinia at euismod quis, dapibus vel ligula. Ut sodales erat vitae nunc tempor mollis.
                        </p>
                    </div>

                </div>

                <div class="row tm-margin-t-mid">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-8 col-xl-9" style="display:flex;">
                        <?php 
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'excerpt' => true // Ensure that excerpt is enabled
                            );
                            $query = new WP_Query( $args );

                            while ( $query->have_posts() ) : $query->the_post();

                        ?>

                        <div class="tm-content-box" style="padding-right:15px;">
                            <div class="tm-margin-b-20 img-fluid"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(250, 180)); ?></a></div>
                            <h4 class="tm-margin-b-20 tm-gold-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <p class="tm-margin-b-20"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="tm-btn text-uppercase"><?php echo esc_html('Detail', 'dwltest'); ?></a> 
                        </div>  
                        <?php endwhile; ?>
                    </div>


                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-4 col-xl-3">

                        <div class="tm-content-box tm-margin-b-30">
                            <a href="#" class="tm-text-link"><h4 class="tm-margin-b-20 tm-thin-font">Duis sit amet tristique #1</h4></a>
                            <p class="tm-margin-b-30">Vestibulum arcu erat, lobortis sit amet tellus ut, semper tristique nibh. Nunc in molestie elit.</p><hr>
                        </div>
                        <div class="tm-content-box">
                            <a href="#" class="tm-text-link"><h4 class="tm-margin-b-20 tm-thin-font">Duis sit amet tristique #2</h4></a>
                            <p>Vestibulum arcu erat, lobortis sit amet tellus ut, semper tristique nibh. Nunc in molestie elit.</p>
                        </div>  

                    </div>
                </div> <!-- row -->

            </div>
        </section>
        
 <?php get_footer();?>