<?php
/*
Template Name: Page Contact
*/
?>
<!-- En-tête  standard template -->
<?php get_header(''); ?>
<div id="primary" class="site-blog">
    <div class="black-box">
        <h1><span class="ligne"></span><?php the_title(); ?></h1>
    </div>
</div>

<div class="container-fluid contact">
    <div class="col-6 col-md-6 list-2">
        <div class="row">
            <!-- Links -->
            <div class="col-md-6 list-2_1">
                <ul class="list-unstyled contact-list">
                    <li>
                        <p><img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/svg/marker-road.svg"> <?php the_field('adresse', 'contact'); ?></p>
                    </li>
                    <li>
                        <p><img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/svg/icon-arrobas.svg"> <?php the_field('email', 'contact'); ?></p>
                    </li>
                    <li>
                        <p><img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/svg/phone-2.svg"> <?php the_field('telephone', 'contact'); ?></p>
                    </li>
                </ul>

            </div>
            <div class="col-md-6 list-2_2">
                <p> <img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/svg/time-clock.svg">
                    Horaire</p>
                <p><?php the_field('horaire', 'contact'); ?></p>
            </div>
            <?php the_field('map', 'contact'); ?>
        </div>
    </div>

</div>



<div class="container-fluid formulaire">

    <div class="row">
        <div class="col-12 col-md-6">
            <h2>Une question, une demande d'offre ?</h2>
            <h4>Formulaire de contact</h4>
        </div>

        <div class="col-12 col-md-6">

            <?php include('formulaire.php'); ?>
        </div>
    </div>


</div>


<div class="container-fluid archi-container-04" style="background-image: url('<?php $image = get_field('img_mise_en_avant', 'mise-en-avant');
                                                                                echo $image['url']; ?>');">
    <div class="col-12 col-md-6 pub-contact">
        <H2><?php the_field('titre_mise_en_avant', 'mise-en-avant'); ?></h2>
        <a href="<?php the_field('lien_mise_en_avant', 'mise-en-avant'); ?>">Voir les détails<img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/svg/fleche-droite.svg"></a>
    </div>
</div>

<?php get_footer('accueil'); ?>