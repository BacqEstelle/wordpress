<?php
/*
Template Name: Page footer
*/
?>
<?php

wp_footer(); ?>


<footer class="page-footer font-small blue pt-4 page-footer">
    <div class="sub-footer">
        <div class="bloc-tissu">
            <img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/images/1500x1250_02.jpg">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim id labore laboriosam nihil molestias fugit sequi, nemo iusto recusandae dignissimos aliquam doloremque hic earum aperiam amet cum culpa consequatur neque!
            <a>Tissus et habillage de maison <img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/svg/fleche-droite.svg"></a></p>
        </div>
        <div class="horaire-footer">
            <h3>Horaires</h3>
            <?php the_field('horaire', 'contact'); ?>
        </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 mt-md-0 mt-3 footer-1">

                <!-- Content -->
                <h5>Rendez-nous visite !</h5>
                <p>Google map <img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/svg/fleche-droite.svg"></p>
            </div>
            <!-- Grid column -->


            <!-- Grid column -->
            <div class="col-md-4 mb-md-0 mb-3 footer-2">

                <!-- Links -->

                <ul class="list-unstyled">
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
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 mb-md-0 mb-3 footer-3">

                <!-- Links -->

                <ul class="list-unstyled liste-social">
                    <li>
                        <p>
                            <a class="facebook" href="<?php the_field('facebook', 'contact'); ?>"><img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/svg/logo-facebook.svg"></a>
                            <a class="instagram" href="<?php the_field('instagram', 'contact'); ?>"><img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/svg/logo-instagram.svg"></a>
                            <a class="pinterest" href="<?php the_field('pinterest', 'contact'); ?>"><img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/svg/logo-pinterest.svg"></a>
                            <p>
                    </li>
                    <li>
                        <div class="footer-copyright text-center py-3 copyright">© composition 2018 - Polilique de confidentialité</div>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->


</footer>
<!-- Footer -->








</body>

</html>