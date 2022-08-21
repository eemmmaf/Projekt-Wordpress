<?php
/*
Template name: Undersida utan headerbild, utan utvald bild
*/

/*
 * @Author: Emma Forslund - emfo2102 
 * @Date: 2022-06-16 13:49:02 
 * @Last Modified by:   Emma Forslund - emfo2102 
 * @Last Modified time: 2022-06-16 13:49:02 
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
</section>
</main>
<!--Här slutar huvudinnehåll och footer börjar-->
<?php get_footer(); ?>