<?php /* Template Name: Homepage */
get_header(); ?>
<?php /*page-{slug}.php
page-{ID}.php */ ?>

<?php  get_page_template()?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <div class="container home-page">
        <div class="row">
            <div class="col-lg-2">

            </div>
            <div class="col-lg-8 container-white">
                <div class="rte">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>