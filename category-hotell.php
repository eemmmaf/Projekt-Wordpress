<?php
/*
 * @Author: Emma Forslund - emfo2102 
 * @Date: 2022-06-16 13:45:22 
 * @Last Modified by:   Emma Forslund - emfo2102 
 * @Last Modified time: 2022-06-16 13:45:22 
 */

get_header();
?>

<?php
//Array
$arguments = array(
    'category_name' => 'hotell',
);

//WP-query
$wpquery = new WP_Query($arguments);
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
    <h1><?php single_cat_title(); ?></h1>
   <p>Här finns information om våra rum balblbal</p>
</section>

<section class="room-section">
    <h2>Våra rum</h2>
    <!--WP-query-->
    <?php
    if ($wpquery->have_posts()) {
        while ($wpquery->have_posts()) {
            $wpquery->the_post();
    ?>
            <article>
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
                        <?php the_excerpt(); ?>
                        <!--Länk till hotellrummet-->
                        <a href="<?php the_permalink(); ?>">Läs mer</a>
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