<?php
/*
 * @Author: Emma Forslund - emfo2102 
 * @Date: 2022-06-16 13:49:02 
 * @Last Modified by:   Emma Forslund - emfo2102 
 * @Last Modified time: 2022-06-16 13:49:02 
 */

get_header();
?>
<img class="big-image" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
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
                the_post_thumbnail();
            }
            ?>
        </div>
    </div>
    </article>
</section>
</main>
<!--Här slutar huvudinnehåll och footer börjar-->
<?php get_footer(); ?>