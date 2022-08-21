<?php
/*
Template name: Undersida med header-bild, utan utvald bild
*/

/*
 * @Author: Emma Forslund - emfo2102 
 * @Date: 2022-06-16 13:49:02 
 * @Last Modified by:   Emma Forslund - emfo2102 
 * @Last Modified time: 2022-06-16 13:49:02 
 */

get_header();
?>
<!--Headerbild-->
<img class="big-image" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<main class="page">
    <ul class="breadcrumbs">
        <!-- Breadcrumbs-->
        <?php
        if (is_active_sidebar('breadcrumbs')) : ?>
            <?php dynamic_sidebar('breadcrumbs'); ?>
    </ul>
<?php
        endif;
?>
<!--Här skrivs innehåll ut-->
<section class="page-info">
    <h1><?php the_title(); ?></h1>
            <?php
            the_content();
            ?>
</section>
</main>
<!--Här slutar huvudinnehåll och footer börjar-->
<?php get_footer(); ?>