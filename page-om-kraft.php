<?php
/*
 * @Author: Emma Forslund - emfo2102 
 * @Date: 2022-06-16 13:48:43 
 * @Last Modified by: Emma Forslund - emfo2102
 * @Last Modified time: 2022-06-16 15:51:33
 */
get_header();
//Array
$arguments = array(
    'category_name' => 'Info',
);

//WP-query
$wpquery = new WP_Query($arguments);
?>

<main>
    <div class="page-breadcrumbs">
        <!-- Breadcrumbs -->
        <ul class="breadcrumbs">
            <?php
            if (is_active_sidebar('breadcrumbs')) : ?>
                <?php dynamic_sidebar('breadcrumbs'); ?>
        </ul>
    </div>
<?php
            endif;
?>

<!--Sektion där kontaktuppgifter finns-->
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

<!--Här skrivs information om hotellet ut och en bild från kategorin om-hotellet-->
<div class="dark-about">
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
                            the_post_thumbnail('breakfast-big');
                        } ?>
                    </div>
                </div>
            </article>
    <?php
        }
    }
    ?>
</div>
<!--Flexcontainer-->
<div class="flex-contact">
    <!--Här infogas ett kontaktformulär-->
    <div class="contact-form">
        <h2>Skriv ett meddelande till oss</h2>
        <?php
        //Skriver ut ett formulär med shortcode
        echo do_shortcode('[ninja_form id=2]');
        ?>
    </div>

    <!--Sociala medier-->
    <div class="socialmedia">
        <h2>Följ oss på sociala medier</h2>
        <ul>
            <?php
            //Widget-area
            if (is_active_sidebar('sociala-medier')) : ?>
                <?php dynamic_sidebar('sociala-medier'); ?>
            <?php
            endif;
            ?>
        </ul>

    </div>
</div>

<!--Sektion där medarbetare skrivs ut från kategorin "personal"-->
<section class="medarbetare">
    <h2>Våra medarbetare</h2>
    <div class="flex-personal">
        <?php
        //Array
        $argss = array(
            'category_name' => 'personal',
        );

        //WP-query
        $wpquery2 = new WP_Query($argss);
        ?>
        <?php
        if ($wpquery2->have_posts()) {
            while ($wpquery2->have_posts()) {
                $wpquery2->the_post();
        ?>
                <div>
                    <?php
                    //Kontroll för att se om det finns bild och skriver ut
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('personal-picture');
                    } ?>
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>
        <?php
            }
        }
        ?>
    </div>
</section>
</main>
<!--Här slutar huvudinnehåll och footer börjar-->
<?php get_footer(); ?>