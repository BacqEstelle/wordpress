<?php
/*
Template Name: Page Accueil
*/
?>
<!-- En-tête  standard template -->
<?php get_header('accueil'); ?>


<!-- Début custom
utilise la function affTemplate dans le fichier => functions.php -->
<?php

// Récupération des images 'via les fields ( => Custom field)
$image1 = get_field("image1"); //myPrint_r($image);
$image2 = get_field("image2");
$imagecontenu = get_field("imagecontenu");
$imagetissus = get_field("accueil-contenutissu-img");


?>


<div class="container-fluid container-double">
    <div class="row">
        <!-- ici on utilise le titre de l'élément créé -->
        <!-- <h1><?php the_title(); ?></h1> 
            <p><?php the_field('description'); ?></p> -->
        <!-- ici on utilise la description custom créée avec l'outil ACF -->

        <div class="col-12 col-md-6 accueil-bandeau-1">
            <img class="image-bandeau" src="<?php echo $image1['url']; ?>">
            <!-- the field ('magasin1') => custom field blog 2 qui contient magasin 1 & 2, image 1 & 2 -->
            <div class="no-hover1">
                <div class="show-1"> <?php the_field('titre1'); ?>
                    <span><img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/svg/fleche-droite.svg"></span>

                </div>


                <div class="hover1">
                    <?php if (have_rows('hover1')) : ?>

                        <?php while (have_rows('hover1')) : the_row(); ?>
                            <h2><?php the_sub_field('sub_title_1'); ?></h2>
                            <p><?php the_sub_field('sub_text_1'); ?></p>
                            <a><?php the_sub_field('sub_link_1'); ?></a>
                        <?php endwhile; ?>

                    <?php endif; ?>
                </div>




            </div>




        </div>

        <div class="col-12 col-md-6 accueil-bandeau-2">
            <img class="image-bandeau" src="<?php echo $image2['url']; ?>">
            <!-- the field ('magasin1') => custom field blog 2 qui contient magasin 1 & 2, image 1 & 2 -->
            <div class="no-hover2">
                <div class="show-2"> <?php the_field('titre2'); ?>
                    <span><img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/svg/fleche-droite.svg"></span>

                </div>


                <div class="hover2">
                    <?php if (have_rows('hover2')) : ?>

                        <?php while (have_rows('hover2')) : the_row(); ?>
                            <h2><?php the_sub_field('sub_title_2'); ?></h2>
                            <p><?php the_sub_field('sub_text_2'); ?></p>
                            <a href="<?php the_sub_field('sub_text_2'); ?>">Découvrir le service d'archi</a>
                        <?php endwhile; ?>

                    <?php endif; ?>
                </div>




            </div>
        </div>
        <div class="cookie">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, sapiente, neque dolorum vero nesciunt </p>
        </div>


        <div class="container-fluid bloc-contenu">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="row ">
                        <div class="ml-5 mt-5 pb-5 bloc-contenu-noir">
                            <p><?php the_field('slogancontenu'); ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bloc-contenu-blanc">
                            <p> <?php the_field('textecontenu'); ?></p>
                            <div class="lien-magasin">
                                <p><a href="#">Le magasin</a><span><img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/svg/fleche-droite.svg"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 accueil-image-milieu">
                    <img src="<?php echo $imagecontenu['url']; ?>">
                </div>
            </div>
        </div>
        <div class="grey">
            <div class="container-fluid accueil-url">
                <img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/svg/logo-small.svg">
                <p><?php the_field('accueil-boxcta-text'); ?></p>
                <p><a src="<?php the_field('accueil-boxcta-url'); ?>">Service d'archi d'intérieur <img class="fleche" src="http://127.0.0.1/wordpress/wp-content/themes/composition/assets/svg/fleche-droite.svg"></a></p>

            </div>
        </div>


        <div class="container-fluid accueil-tissus">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img class="image-bandeau" src="<?php echo $imagetissus['url']; ?>">
                </div>
                <div class="col-12 col-md-6 accueil-tissu-bloc">
                    <h3><?php the_field('accueil-contenutissu-title'); ?></h3>
                    <p><?php the_field('accueil-contenutissu-text'); ?></p>
                    <a src="<?php the_field('accueil-contenutissu-url'); ?>">Tapis d'ameublement <img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/svg/fleche-droite.svg"></a>
                </div>
            </div>
        </div>


        <?php get_footer(''); ?>