<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Classic - Responsive Bootstrap 4.0 Template</title>
<!--
Classic Template
http://www.templatemo.com/tm-488-classic
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
          <?php wp_head(); ?>
</head>

    <body <?php body_class(); ?>>
       
        <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <!-- <a href="<?php//echo site_url(); ?>" class="navbar-brand tm-site-name">Classic</a> -->
                    <?php
                    if( has_custom_logo() ){
                        the_custom_logo();
                    }else{
                        ?>
                        <a href="<?php echo esc_url( home_url() ); ?>"><?php echo bloginfo('title');?></a>
                        <p><?php echo bloginfo('description'); ?></p>
                        <?php
                    }
                    
                ?>
                    
                    <!-- navbar -->
                    <nav class="navbar tm-main-nav">

                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        
                        <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                            <?php 
                                wp_nav_menu(array(
                                        'theme_loaction' => 'primary_menu',
                                        'menu_class' => 'nav navbar-nav'
                            ));
                            ?>                        
                        </div>
                        
                    </nav>  

                </div>                                  
            </div>            
        </div>