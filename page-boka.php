<?php
/*
 * @Author: Emma Forslund - emfo2102 
 * @Date: 2022-06-16 13:48:21 
 * @Last Modified by: Emma Forslund - emfo2102
 * @Last Modified time: 2022-08-16 15:07:32
 */
get_header();
?>

<!--Här börjar huvudinnehåll-->
<main class="page">
    <!--Breadcrumbs-->
    <ul class="breadcrumbs">
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