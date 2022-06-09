<?php 
get_header();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            
echo do_shortcode('[smartslider3 slider="2"]');

        } // end while
    } // end if
?>
<!--Här slutar huvudinnehåll och footer börjar-->
<?php get_footer(); ?>
