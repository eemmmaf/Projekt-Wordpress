
<?php

/*
 * @Author: Emma Forslund - emfo2102 
 * @Date: 2022-06-16 13:46:06 
 * @Last Modified by:   Emma Forslund - emfo2102 
 * @Last Modified time: 2022-06-16 13:46:06 
 */

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