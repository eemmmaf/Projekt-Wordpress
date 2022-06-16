<?php
/*
 * @Author: Emma Forslund - emfo2102 
 * @Date: 2022-06-16 13:48:33 
 * @Last Modified by: Emma Forslund - emfo2102
 * @Last Modified time: 2022-06-16 13:49:20
 */
get_header();
?>
<?php
//Array
$arguments = array(
    'category_name' => 'spapaket',
);

//WP-query
$wpquery = new WP_Query($arguments);
?>
<div class="thumbnail-big">
    <?php
    //Kontroll för att se om det finns bild och skriver ut
    if (has_post_thumbnail()) {
        the_post_thumbnail('big-header');
    } ?>
</div>

<main>
    <div class="page-breadcrumbs">
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
        <div class="flex-p">
            <?php
            the_content();
            ?>
        </div>
    </section>
    </div>

    <section class="spa-section">
        <h2>Upptäck våra spapaket</h2>
        <!--WP-query-->
        <div class="flex-spa">
            <?php
            if ($wpquery->have_posts()) {
                while ($wpquery->have_posts()) {
                    $wpquery->the_post();
            ?>
                    <div>
                        <article>
                            <?php //Kontroll för att se om det finns bild
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('spa-medium') ?>
                                <h3><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                        </article>
                    </div>
        <?php
                            }
                        }
                    }
        ?>
        </div>
        <?php
        if (is_active_sidebar('offer')) : ?>
            <?php dynamic_sidebar('offer'); ?>
        <?php
        endif;
        ?>

    </section>
</main>
<!--Här slutar huvudinnehåll och footer börjar-->
<?php get_footer(); ?>