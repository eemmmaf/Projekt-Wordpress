<?php
/*
 * @Author: Emma Forslund - emfo2102 
 * @Date: 2022-06-16 13:48:09 
 * @Last Modified by: Emma Forslund - emfo2102
 * @Last Modified time: 2022-06-16 13:49:19
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
<section class="page-info">
    <h1><?php the_title(); ?></h1>
    <?php
    the_content();
    ?>
    <?php
    //Kontroll för att se om det finns bild
    if (has_post_thumbnail()) {
        the_post_thumbnail();
    }
    ?>
    </article>
</section>
</main>
<!--Här slutar huvudinnehåll och footer börjar-->
<?php get_footer(); ?>