<?php
/* 
Template Name: Single News
*/
get_header();
?>
<div class="site-news">
    <div class="black-box-news">
        <a href="news"><img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/svg/fleche-droite.svg">Retour</a>
        <span><?php echo get_the_date('l, d m Y'); ?></span>


        <div class="news">
            <?php if (have_rows('flexible')) : ?>

                <?php while (have_rows('flexible')) : the_row(); ?>
                    <h2><?php the_sub_field('titre'); ?></h2>
                    <img src="<?php $image = get_sub_field("img");
                                echo $image['url']; ?>">
        </div>
    </div>
</div>
<div class="container-fluid news-text">
    <p><?php the_sub_field('texte'); ?></p>
<?php endwhile; ?>

<?php endif; ?>

</div>
<div class="container-fluid archi-container-04" style="background-image: url('<?php $image = get_field('img_mise_en_avant', 'mise-en-avant');
                                                                                echo $image['url']; ?>');">
    <div class="col-12 col-md-6 pub-contact">
        <H2><?php the_field('titre_mise_en_avant', 'mise-en-avant'); ?></h2>
        <a href="<?php the_field('lien_mise_en_avant', 'mise-en-avant'); ?>">Voir les détails<img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/svg/fleche-droite.svg"></a>
    </div>
</div>



<?php get_footer(); ?>