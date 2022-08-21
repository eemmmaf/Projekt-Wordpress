<?php

/*
 * @Author: Emma Forslund - emfo2102 
 * @Date: 2022-06-16 13:47:17 
 * @Last Modified by: Emma Forslund - emfo2102
 * @Last Modified time: 2022-07-06 18:45:08
 */

//Oförändrad "the loop" 
get_header();
if (have_posts()) {
    while (have_posts()) {
        the_post();
    } // end while
} // end if
?>
<!--Här slutar huvudinnehåll och footer börjar-->
<?php get_footer(); ?>