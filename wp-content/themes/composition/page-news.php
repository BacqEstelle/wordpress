<?php
/* 
Template Name: Blog News
*/
get_header();

?>


<div id="primary" class="site-blog">
    <div class="black-box">
        <h1><span class="ligne"></span>Architecte d’intérieur en action</h1>
    </div>
    <div class="page-blog-content">
        <div class="row">
        <? $paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;?>
            <?php $news = new WP_Query(
                array(
                    'post_type' => 'news', 
                    'posts_per_page' => 6, 
                    'paged' => $paged
                )
            ); 
            ?>

            <?php if($news -> have_posts()) : while($news -> have_posts()) : $news -> the_post();
            ?>
                <div class="col-12 col-md-6 element-blog">
                    <div class="image-blog">
                        <img src="<?php $image = get_field("img");
                                    echo $image['url']; ?>">
                    </div>
                    <div class="content-blog">
                        <a href="<?php the_permalink(); ?>">

                            <div class="title-blog"><?php the_field('titre'); ?></div>
                        </a>
                        <p><?php the_field('intro'); ?></p>
                        <p><span class="ligne-p"></span><?php echo get_the_date('l, d m Y'); ?></p>

                    </div><!-- .entry-content -->
                </div>

                <?php
		endwhile;
			wp_reset_postdata();
		endif;
	?>
        </div>
    </div><!-- #content -->
</div><!-- #primary -->
</div>
<div class="pagination">

<?php
    // Pagination 
    $total_pages = $news->max_num_pages;

    if ($total_pages > 1){
        $previous = "Précedent";
        $next = "Suivant";
        $current_page = max(1, get_query_var('paged'));

        echo '<div class="clearfix"></div>';
        echo '<nav class="custom-pagination" id="pagination">';

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __($previous),
            'next_text'    => __($next),
        ));

        echo '</div>';
    }  
?>

</div>
<?php get_footer(); ?>