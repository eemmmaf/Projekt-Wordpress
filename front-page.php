<?php
get_header();
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <div class="image-slider"><?php
                                    //Skriver ut bildspelet
                                    echo do_shortcode('[smartslider3 slider="2"]');
                                }
                            }
                                    ?>
        </div>
        <!--Här slutar huvudinnehåll och footer börjar-->
        <?php get_footer(); ?>