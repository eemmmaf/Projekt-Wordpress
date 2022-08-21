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
//Array med kategorins namn
$arguments = array(
    'category_name' => 'Kraft-spa',
);

//WP-query
$wpquery = new WP_Query($arguments);
?>

<!--Headerbild-->
<img class="big-image" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<!--Här börjar huvudinnehåll-->
<main>
    <div class="page-breadcrumbs">
        <!--Breadcrumbs. Visas med widget area-->
        <ul class="breadcrumbs">
            <?php
            if (is_active_sidebar('breadcrumbs')) : ?>
                <?php dynamic_sidebar('breadcrumbs'); ?>
        </ul>
    </div>
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

<!--Sektion där spabehandlingar skrivs ut-->
<section class="spa-section">
    <h2>Upptäck våra behandlingar</h2>
    <!--Flexcontainer-->
    <div class="flex-spa">
        <?php
        //WP-query
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
                            <?php the_excerpt(); ?>
                            <!--Länk till info om spa-->
                            <a href="<?php the_permalink(); ?>">Läs mer och boka</a>
                    </article>
                </div>
    <?php
                        }
                    }
                }
    ?>
    </div>
</section>
</main>
<!--Här slutar huvudinnehåll och footer börjar-->
<?php get_footer(); ?>