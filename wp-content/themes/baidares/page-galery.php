<?php /* Template Name: galery */
get_header(); ?>
<?php /*page-{slug}.php
page-{ID}.php */ ?>

<?php  get_page_template()?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div id="main-content" class="visual-container">
		<div class="container">
			<div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
					<div>
						<?php the_content(); ?>
                    </div>
                </div>
                <div class="col-sm-2"></div>
                </div>
            </div>
		</div>
	</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>