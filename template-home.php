<?php get_header(); 
/* Template Name: Template Home */
?>

        <div class="tm-home-img-container">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/tm-home-img.jpg" alt="Image" class="hidden-lg-up img-fluid">
        </div>

        <section class="tm-section">
            <div class="container-fluid">
                <?php echo get_template_part( 'template-parts/content','blog')?>
                <?php echo get_template_part( 'template-parts/content','blogsidebar')?>
            </div>
        </section>
        
<?php get_footer(); ?>       