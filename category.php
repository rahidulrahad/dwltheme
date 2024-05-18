<?php get_header(); ?>
        <div class="tm-blog-img-container">
            
        </div>

        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    
                    <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-aside-r">
                            <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
                            <?php dynamic_sidebar( 'sidebar-4' ); ?>            
                            <?php endif; ?>
                    </aside>


                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                                               
                        <div class="row">
                            <?php
                                if (have_posts()):
                                while (have_posts()): the_post();
                            ?>

                            <div class="col-lg-4 col-md-6 col-12">
                                <!-- Single Blog -->
                                <div class="single-news">
                                    <div class="news-head">
                                        <?php the_post_thumbnail('medium', ['title' => 'Feature image']);?>
                                    </div>
                                    <div class="news-body">
                                        <div class="news-content">
                                            <div class="date">
                                                <?php the_date(); ?>
                                            </div>
                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                            <p class="text"><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Blog -->
						    </div>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                                endif;
                            ?>
    
                        </div>
                        
                    </div>

                </div>
                
            </div>
        </section>
        
<?php get_footer(); ?>        