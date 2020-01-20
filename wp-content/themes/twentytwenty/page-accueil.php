<?php
/*
Template Name: Page Accueil
*/
?>
<!-- En-tête  standard template -->
<?php get_header(); ?>


<!-- Début custom
utilise la function affTemplate dans le fichier => functions.php -->
<?php 

// Récupération des images via les fields ( => Custom field)
$image1 = get_field("image1"); //myPrint_r($image);
$image2 = get_field("image2");
$imagecontenu = get_field("imagecontenu");

?> 


<div class="container-fluid">
	<div class="row">
			<!-- ici on utilise le titre de l'élément créé -->
            <!-- <h1><?php the_title(); ?></h1> 
            <p><?php the_field('description'); ?></p> -->
            <!-- ici on utilise la description custom créée avec l'outil ACF -->
            <div class="col-6" style="border: 2px solid black;">
                <img src="<?php echo $image1['url']; ?>" >

                <!-- the field ('magasin1') => custom field blog 2 qui contient magasin 1 & 2, image 1 & 2 -->
                <p style="border-top: 2px solid black;"> <?php the_field('magasin1'); ?></p>
            </div>
            <div class="col-6" style="border: 2px solid black;">
                <img src="<?php echo $image2['url']; ?>" >
                <p style="border-top: 2px solid black;"> <?php the_field('magasin2'); ?></p>
            </div>
	</div>
</div>
<div class="container-fluid" style="color: white; background-color: black;">
    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, sapiente, neque dolorum vero nesciunt </p>
</div>


<div class="container-fluid">
	<div class="row">
            <div class="col-6" style="border: 2px solid black;">
                <img src="<?php echo $imagecontenu['url']; ?>" >
            </div>

            <div class="col-6" style="border: 2px solid black;">
                <div class="row ">
                <p class="ml-5 mt-5 pb-5" style="color: yellow;"> <?php the_field('slogancontenu'); ?></p>
                </div>
                <div class="row" >
                <p> <?php the_field('textecontenu'); ?></p>
                </div>
            </div>
	</div>
</div>




<?php get_footer(); ?>