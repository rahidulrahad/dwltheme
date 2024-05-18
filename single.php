<?php get_header(); ?>

            <div class="tm-blog-img-container">
            
            </div>
    
            <section class="tm-section">
                <div class="container-fluid">
                    <div class="row">
    
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                        
                            <div class="tm-blog-post">
                                <h3 class="tm-gold-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php the_post_thumbnail('full', ['title' => 'Feature image']);?>
                                <?php the_content(); ?>
                            </div>
                           
                            
                            <div class="row tm-margin-t-big">
                                <?php
                                    $remaining_posts_args = array(
                                        'post_type'      => 'post',
                                        'order'          => 'ASC',
                                        'posts_per_page'  => 3
                                    );
                                    $remaining_posts_query = new WP_Query( $remaining_posts_args );

                                    if ( $remaining_posts_query->have_posts() ) :
                                        while ( $remaining_posts_query->have_posts() ) : $remaining_posts_query->the_post();
                                ?>
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                        <div class="tm-content-box">
                                            <div class="tm-margin-b-20 img-fluid"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(250, 180)); ?></a></div>
                                            <h4 class="tm-margin-b-20 tm-gold-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            <p class="tm-margin-b-20"><?php the_excerpt(); ?></p>
                                            <a href="<?php the_permalink(); ?>" class="tm-btn text-uppercase"><?php echo esc_html('Detail', 'dwltest'); ?></a>
                                        </div>   
                                    </div> 
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                    endif;
                                ?>
                            </div>
                            
                        </div>
    
                        <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-aside-r">
                            <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
                            <?php dynamic_sidebar( 'sidebar-4' ); ?>            
                            <?php endif; ?>                     
                        </aside>
    
                    </div>
                    
                </div>
            </section>
        
<?php get_footer(); ?>        