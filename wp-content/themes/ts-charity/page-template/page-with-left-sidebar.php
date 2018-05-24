<?php
/**
 * Template Name: Page with Left Sidebar
 */

get_header(); ?>

<div id="content-ts" class="container">
    <div class="col-md-4">
        <?php dynamic_sidebar('sidebar-2'); ?>
    </div>  
    <div class="col-md-8 col-sm-8">
        <img src="<?php the_post_thumbnail_url('full'); ?>" width="100%">
        <h1><?php the_title(); ?></h1>
        <?php the_content();?>
        <?php
            //If comments are open or we have at least one comment, load up the comment template
            if ( comments_open() || '0' != get_comments_number() )
                comments_template();
        ?>
    </div>
    <div class="clear"></div>
</div>

<?php get_footer(); ?>