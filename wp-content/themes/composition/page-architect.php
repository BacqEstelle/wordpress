<?php
/*
Template Name: Page Architecte
*/
?>
<!-- En-tête  standard template -->
<?php get_header('');


?>
<div id="primary" class="site-blog">
    <div class="black-box">
        <h1><span class="ligne"></span><?php the_title(); ?></h1>
    </div>
    <div class="container-fluid container-diapo">
        <div class="row diaporama">
            <!-- Debut du carrousel -->

            <?php
            if (have_rows('diaporama')) :
                $i = 0; // Set the increment variable

                echo '<div id="carouselExampleSlidesNav4" class="carousel slide" data-ride="carousel">';

                // loop through the rows of data for the tab header
                while (have_rows('diaporama')) : the_row();
            ?>



                <?php $i++;

                endwhile;

                echo     '</ol>
		  <div class="carousel-inner">';

                // loop through the rows of data for the tab header
                $i = 0; // Set the increment variable
                while (have_rows('diaporama')) : the_row();

                    $image = get_sub_field('image_1');
                    $text = get_sub_field('texte_1');

                ?>

                    <div class="carousel-item <?php if ($i == 0) echo 'active'; ?>">
                        <img class="d-block w-60" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                        <div class="carousel-caption d-block">
                            <h2><?php echo $text; ?></h2>

                        </div>
                    </div>


            <?php $i++; // Increment the increment variable

                endwhile; //End the loop 

                echo '</div>
			 <a class="carousel-control-prev" href="#carouselExampleSlidesNav4" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleSlidesNav4" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
		</div>';

            else :

            // no rows found

            endif;

            ?>

        </div>
    </div>
</div>
<div class="container-fluid archi-container-1">
    <div class="row archi-row-1 ">

        <div class="col-12 col-md-6 archi-row-1-case-1">
            <h2><?php the_field('titre_1'); ?></h2>
            <h4><?php the_field('sous-titre_1'); ?></h4>
            <p><?php the_field('texte_1'); ?></p>


        </div>
        <div class="col-12 col-md-6 archi-row-1-case-2 ">

            <?php if (have_rows('repeater_1')) : ?>

                <?php while (have_rows('repeater_1')) : the_row(); ?>
                    <p><?php the_sub_field('sub_text'); ?></p>
                <?php endwhile; ?>

            <?php endif; ?>


        </div>


    </div>
</div>

<div class="container-fluid archi-container-02">
    <div class="row archi-row-02 ">

        <div class="col-12 col-md-6 archi-row-02-case-01">

            <img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/images/1000x1300_02.jpg">

        </div>
        <div class="col-12 col-md-6 archi-row-02-case-02">

            <h2><?php the_field('titre_02'); ?></h2>
            <h4><?php the_field('sous-titre_2'); ?></h4>
            <p><?php the_field('texte_2'); ?></p>


        </div>


    </div>
</div>


<div class="container container-diapo-2">
    <div class="row diaporama">
        <!-- Debut du carrousel -->

        <?php
        if (have_rows('repeater_2')) :
            $i = 0; // Set the increment variable

            echo '<div id="carouselExampleSlidesNav4" class="carousel slide" data-ride="carousel">';

            // loop through the rows of data for the tab header
            while (have_rows('repeater_2')) : the_row();
        ?>



            <?php $i++;

            endwhile;

            echo     '</ol>
		  <div class="carousel-inner">';

            // loop through the rows of data for the tab header
            $i = 0; // Set the increment variable
            while (have_rows('repeater_2')) : the_row();

                $image = get_sub_field('image');

            ?>

                <div class="carousel-item <?php if ($i == 0) echo 'active'; ?>">
                    <img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                </div>


        <?php $i++; // Increment the increment variable

            endwhile; //End the loop 

            echo '</div>
			 <a class="carousel-control-prev" href="#carouselExampleSlidesNav4" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleSlidesNav4" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
		</div>';

        else :

        // no rows found

        endif;

        ?>

    </div>
</div>

<!-- Fin du Carrousel -->
<div class="container-fluid archi-container-03">

    <h2><?php the_field('titre_3'); ?></h2>
    <h4><?php the_field('sous-titre_3'); ?></h4>
    <div class="row">
        <div class="col-12 col-md-6">
            <p><?php the_field('texte_left_3'); ?></p>
        </div>

        <div class="col-12 col-md-6">

            <p><?php the_field('texte_right_3'); ?></p>
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


<?php get_footer(''); ?>