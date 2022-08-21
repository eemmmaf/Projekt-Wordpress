<?php
/*
 * @Author: Emma Forslund - emfo2102 
 * @Date: 2022-08-16 14:39:30 
 * @Last Modified by: Emma Forslund - emfo2102
 * @Last Modified time: 2022-08-16 14:55:35
 */

get_header();
?>
<?php
//Array med kategorins namn
$arguments = array(
    'category_name' => 'hotell',
);

//WP-query
$wpquery = new WP_Query($arguments);
?>

<!--Här börjar huvudinnehållet-->
<main class="page">
    <!--Breadcrumbs-->
    <ul class="breadcrumbs">
        <?php
        //Breadcrumbs placeras dit med YOAST och widget-area
        if (is_active_sidebar('breadcrumbs')) : ?>
            <?php dynamic_sidebar('breadcrumbs'); ?>
    </ul>
<?php
        endif;
?>

<!--Del som beskriver sidan. Skrivs ut från Wordpress-->
<section class="page-info">
    <h1><?php single_cat_title(); ?></h1>
    <div>
    <?php
    echo category_description();
    ?>
    </div>

</section>

<!--Sektion där de olika rummen skrivs ut-->
<section class="room-section">
    <h2>Våra rum</h2>

    <!--WP-query-->
    <?php
    if ($wpquery->have_posts()) {
        while ($wpquery->have_posts()) {
            $wpquery->the_post();
    ?>
            <article>
                <!-- Flexcontainer -->
                <div class="flex-room-container">
                    <div>
                        <?php
                        //Kontroll för att se om det finns bild och skriver ut
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('hotel-room-small');
                        } ?>
                    </div>
                    <div class="room-text">
                        <h3><?php the_title(); ?></h3>
                        <!--Skriver ut förkortad beskrivning av rummet-->
                        <?php the_excerpt(); ?>
                        <!--Länk till hotellrummet-->
                        <a href="<?php the_permalink(); ?>">Läs mer och boka</a>
                    </div>
                </div>
            </article>
    <?php
        }
    }
    ?>
</section>
</main>
<!--Här slutar huvudinnehåll och footer börjar-->
<?php get_footer(); ?>