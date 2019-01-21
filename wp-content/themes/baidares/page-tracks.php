<?php /* Template Name: tracks */
get_header(); ?>
<?php /*page-{slug}.php
page-{ID}.php */ ?>

<?php  get_page_template()?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div id="main-content" class="visual-container">
		<div class="container">
			<div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 container-white">
					<div class="rte">
						<?php
						$i = 0;
						$args = array( 'post_type' => 'tracks', 'posts_per_page' => 5 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="right-tracks-wraper">
                            <a href="<?php the_permalink(); ?>">
                                <div class="tracks-foto">
                                    <?php the_post_thumbnail(); ?>

                                </div>
                                <div class="tracks-title">
		                            <?php the_title(); ?>
                                </div>

                            </a>
                        </div>
                        <?php $i++; endwhile; wp_reset_postdata(); ?>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
		</div>
	</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>