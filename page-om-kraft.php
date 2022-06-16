<?php
/*
 * @Author: Emma Forslund - emfo2102 
 * @Date: 2022-06-16 13:48:43 
 * @Last Modified by:   Emma Forslund - emfo2102 
 * @Last Modified time: 2022-06-16 13:48:43 
 */
get_header();
//Array
$arguments = array(
    'category_name' => 'om-kraft',
);

//WP-query
$wpquery = new WP_Query($arguments);
?>

<main>
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
    <div class="flex">
        <?php
        if ($wpquery->have_posts()) {
            while ($wpquery->have_posts()) {
                $wpquery->the_post();
        ?>
                <div>
                    <article>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </article>
                </div>
        <?php
            }
        }
        ?>
    </div>
</section>
<section class="dark-about">
    <?php
    //Array
    $args = array(
        'category_name' => 'om-hotellet',
    );

    //WP-query
    $querywp = new WP_Query($args);
    ?>
    <?php
    if ($querywp->have_posts()) {
        while ($querywp->have_posts()) {
            $querywp->the_post();
    ?>
            <article class="about-article">
                <div class="about-flex">
                    <div>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                    <div>
                        <?php
                        //Kontroll för att se om det finns bild och skriver ut
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('hotel-room-small');
                        } ?>
                    </div>
            </article>
    <?php
        }
    }
    ?>
    </div>
</section>
</main>
<!--Här slutar huvudinnehåll och footer börjar-->
<?php get_footer(); ?>