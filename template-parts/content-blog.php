<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
            <h2 class="tm-gold-text tm-title">Introduction</h2>
            <p class="tm-subtitle">Suspendisse ut magna vel velit cursus tempor ut nec nunc. Mauris vehicula, augue in tincidunt porta, purus ipsum blandit massa.</p>
        </div>
</div>
<div class="row">
    <?php 
        //if (have_posts()):
       // while (have_posts()): the_post();
       $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'excerpt' => true // Ensure that excerpt is enabled
    );
    $query = new WP_Query( $args );

    while ( $query->have_posts() ) : $query->the_post();

    ?>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
        <div class="tm-content-box">
            <div class="tm-margin-b-20 img-fluid"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(250, 180)); ?></a></div>
            <h4 class="tm-margin-b-20 tm-gold-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <p class="tm-margin-b-20"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="tm-btn text-uppercase"><?php echo esc_html('Detail', 'dwltest'); ?></a>
        </div>  
    </div>
    <?php
        endwhile;
    ?>
</div>