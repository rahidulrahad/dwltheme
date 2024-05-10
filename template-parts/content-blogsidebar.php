<div class="row tm-margin-t-big">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1,
                'excerpt' => true // Ensure that excerpt is enabled
            );
            $query = new WP_Query( $args );
            while ( $query->have_posts() ) : $query->the_post();
    ?>
        <div class="tm-2-col-left">
            
            <h3 class="tm-gold-text tm-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="tm-margin-b-30"><?php the_excerpt(); ?></p>
            <?php if (has_post_thumbnail()): ?>
                <div class="tm-margin-b-40">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?></a>
                </div>
            <?php endif; ?>
            <p> <?php the_content(); ?></p>
            <a href="<?php the_permalink(); ?>" class="tm-btn text-uppercase"><?php echo esc_html('Read More', 'dwltest'); ?></a>

        </div>
        <?php 
        endwhile;
        ?>
    </div>
    <?php get_sidebar();?>

</div> <!-- row -->