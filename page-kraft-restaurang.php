<?php
/*
 * @Author: Emma Forslund - emfo2102 
 * @Date: 2022-06-16 13:48:53 
 * @Last Modified by: Emma Forslund - emfo2102
 * @Last Modified time: 2022-08-16 15:06:43
 */

get_header();
?>
<!-- Här börjar huvudinnehåll -->
<main>
    <!--Breadcrumbs-->
    <div class="page-breadcrumbs">
        <ul class="breadcrumbs">
            <?php
            if (is_active_sidebar('breadcrumbs')) : ?>
                <?php dynamic_sidebar('breadcrumbs'); ?>
        </ul>
    </div>
<?php
            endif;
?>

<!--Här skrivs innehåll ut-->
<section class="page-info">
    <h1><?php the_title(); ?></h1>
    <div class="flex-container">
        <div class="flex-p">
            <?php
            the_content();
            ?>
        </div>
        <div>
            <?php
            //Kontroll för att se om det finns bild
            if (has_post_thumbnail()) {
                the_post_thumbnail('medium-page');
            }
            ?>
        </div>
    </div>
</section>
</main>
<!--Här slutar huvudinnehåll och footer börjar-->
<?php get_footer(); ?>