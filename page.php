<?php
/*
 * @Author: Emma Forslund - emfo2102 
 * @Date: 2022-06-16 13:49:02 
 * @Last Modified by: Emma Forslund - emfo2102
 * @Last Modified time: 2022-08-16 15:06:50
 */

get_header();
?>
<main class="page">
    <ul class="breadcrumbs">
        <?php
        if (is_active_sidebar('breadcrumbs')) : ?>
            <?php dynamic_sidebar('breadcrumbs'); ?>
    </ul>
<?php
        endif;
?>

<!--Här skrivs information ut-->
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
    </article>
</section>
</main>
<!--Här slutar huvudinnehåll och footer börjar-->
<?php get_footer(); ?>