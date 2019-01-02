<!doctype html>
<html <?php language_attributes(); ?> >
	<head>
        <title>
	        <?php the_title(); ?>
        </title>
		<?php wp_head(); ?>
	</head>
    <body <?php body_class( $class ); ?>>
    <div class="header-line-wraper" id="blue-line">
        <div class="header-line-wraper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <i class="fas fa-phone"></i>
                        <a href="+37063384113">tel:+370 (633) 84113</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row" >
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="owl-carousel owl-theme" id="navbar">
                        <?php
                        $i = 0;
                        $args = array( 'post_type' => 'carousel', 'posts_per_page' => 9999 );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div >
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <?php $i++; endwhile; wp_reset_postdata("icon-list"); ?>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </div>
    <div id="line">
    <div class="container" id="sidebar-wraper">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-2">
                <a class="logo" href="<?php echo get_home_url(); ?>" title="<?php bloginfo('name'); ?>">
                    <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
                </a>
            </div>
            <div class="col-lg-6"><?php get_sidebar(); ?></div>
            <div class="col-lg-2"></div>
        </div>
    </div>
    </div>
    </body>