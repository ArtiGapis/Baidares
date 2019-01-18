<!doctype html>
<html <?php language_attributes(); ?> >
	<head>
        <title>
	        <?php the_title(); ?>
        </title>
		<?php wp_head(); ?>
	</head>
    <body <?php body_class( $class ); ?>>
    <div>
        <div class="container">
            <div class="row" >
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="owl-carousel owl-theme">
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
            <div class="col-lg-12"><?php get_sidebar(); ?></div>
        </div>
    </div>
    </div>
    </body>