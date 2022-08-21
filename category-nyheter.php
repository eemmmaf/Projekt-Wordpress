<?php
/*
 * @Author: Emma Forslund - emfo2102 
 * @Date: 2022-08-14 21:04:36 
 * @Last Modified by: Emma Forslund - emfo2102
 * @Last Modified time: 2022-08-16 14:52:11
 */

get_header();
?>
<?php

// Ställer in page-parameter
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

//Array med argument för kategorins namn och page
$arguments = array(
    'category_name' => 'nyheter',
    'paged' => $paged
);

//WP-query
$wpquery = new WP_Query($arguments);
?>
<!--Här börjar huvudinnehåll-->
<main class="page">
    <!--Breadrcumbs-->
    <ul class="breadcrumbs">
        <?php
        if (is_active_sidebar('breadcrumbs')) : ?>
            <?php dynamic_sidebar('breadcrumbs'); ?>
    </ul>
<?php
        endif;
?>

<!--Sektion med information om kategorin-->
<section class="page-info">
    <h1><?php single_cat_title(); ?></h1>
    <?php
    echo category_description();
    ?>
</section>

<!--Sektion med rummen-->
<section class="room-section">
    <h2>Senaste nytt</h2>

    <!--WP-query-->
    <?php
    if ($wpquery->have_posts()) {
        while ($wpquery->have_posts()) {
            $wpquery->the_post();
    ?>
            <article>
                <!--Flex-container där bilden hamnar till vänster om text-->
                <div class="flex-room-container">
                    <div>
                        <?php
                        //Kontroll för att se om det finns bild och skriver ut
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('hotel-room-small');
                        } ?>
                    </div>
                    <!--Skriver ut innehåll om rummen. Förkortad post-->
                    <div class="room-text">
                        <h3><?php the_title(); ?></h3>
                        <p> <?= the_time('Y-m-d  H:i'); ?></p>
                        <?php the_excerpt(); ?>
                        <!--Länk till hotellrummet-->
                        <a href="<?php the_permalink(); ?>">Läs mer</a>
                    </div>
                </div>
            </article>
        <?php
        }
        ?>
        <!--Div för att kolla på äldre/nyare nyheter-->
        <div id="pagination">
            <div><?php next_posts_link('Äldre nyheter'); ?></div>
            <div><?php previous_posts_link('Nyare nyheter'); ?></div>
        </div>
    <?php
    }
    ?>
</section>
</main>
<!--Här slutar huvudinnehåll och footer börjar-->
<?php get_footer(); ?>