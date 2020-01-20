<?php
/*
Template Name: Page A propos
*/
?>
<!-- En-tête  standard template -->
<?php get_header(''); ?>

<!-- Pour le titre de la page -->
<?php the_title(); ?>

<!-- Va rechercher l'element titre dans acf -->
<?php the_field('titre_1'); ?>

<?php the_field('sous-titre_1'); ?>

<?php the_field('texte_1'); ?>


<!-- Système permettant de créer un boucle pour recevoir tout les elements du repeater -->
<div class="repeater ouatoidevoir">
    <?php if (have_rows('repeater_01')) : ?>

        <?php while (have_rows('repeater_01')) : the_row(); ?>
            <p><?php the_sub_field('annee_1'); ?></p>
            <p><?php the_sub_field('texte_1-1'); ?></p>
        <?php endwhile; ?>

    <?php endif; ?>
</div>

<?php get_footer(''); ?>