<div class="header-wraper">
    <nav role='navigation'>
        <ul>
            <li id="heart-trigger" class="heart heart-trigger">
                <span class="fa fa-heart">
                    <a class="logo" href="<?php echo get_home_url(); ?>" title="<?php bloginfo('name'); ?>">
                        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
                    </a>
                </span>
            </li>
            <li><?php wp_nav_menu($args); ?></li>
        </ul>
    </nav>
</div>
