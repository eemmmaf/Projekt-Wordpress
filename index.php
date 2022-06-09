<?php 
get_header();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); 
        } // end while
    } // end if
?>
<!--Här slutar huvudinnehåll och footer börjar-->
<?php get_footer(); ?>