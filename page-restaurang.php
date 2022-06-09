<?php
get_header();
?>
<img class="big-image" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<main>
    <div class="page-breadcrumbs">
        <ul class="breadcrumbs">
            <?php
            if (is_active_sidebar('breadcrumbs')) : ?>
                <?php dynamic_sidebar('breadcrumbs'); ?>
        </ul>
    </div>
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
<?php
//Array
$args = array(
    'category_name' => 'frukost',
);

//WP-query
$wpquery = new WP_Query($args);
?>

<section class="breakfast-section">
    <div class="flex-container">
        <?php
        if ($wpquery->have_posts()) {
            while ($wpquery->have_posts()) {
                $wpquery->the_post();
        ?>
                <div class="flex-breakfast">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </div>
                <?php //Kontroll för att se om det finns bild
                if (has_post_thumbnail()) {
                    the_post_thumbnail('breakfast-big') ?>
    </div>
<?php
                }
            }
        }
?>
</section>
</main>
<!--Här slutar huvudinnehåll och footer börjar-->
<?php get_footer(); ?>