<?php
/* 
Template Name: Archives
*/
get_header();



?>

<div id="primary" class="site-blog">
    <div class="black-box">
        <h1><span class="ligne"></span>Architecte d’intérieur en action</h1>
    </div>
    <div class="page-blog-content">
        <div class="row">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-12 col-md-6 element-blog">
                    <div class="image-blog">
                        <img src="<?php $image = get_field("img"); echo $image['url']; ?>">
                    </div>
                    <div class="content-blog">
                        <a href="<?php the_field('lien'); ?>">
                            <div class="title-blog"><?php the_field('titre'); ?></div>
                        </a>
                        <p><span class="ligne-p"></span><?php echo get_the_date( 'l, d m Y' ); ?></p>


                    </div><!-- .entry-content -->
                </div>

            <?php endwhile; // end of the loop. 
            ?>
        </div>
    </div><!-- #content -->
</div><!-- #primary -->
</div>
<div class="pagination">
    <?php echo paginate_links($args); ?>
</div>
<?php get_footer(); ?>