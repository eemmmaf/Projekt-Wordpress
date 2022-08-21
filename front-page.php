<?php

/*
 * @Author: Emma Forslund - emfo2102 
 * @Date: 2022-06-16 13:46:06 
 * @Last Modified by: Emma Forslund - emfo2102
 * @Last Modified time: 2022-08-16 16:28:25
 */

get_header();
if (have_posts()) {
    while (have_posts()) {
        the_post();

?>
        <div class="image-slider"><?php
                                    //Skriver ut bildspelet, visas endast för stora skärmar
                                    echo do_shortcode('[smartslider3 slider="2"]');
                                }
                            }
                                    ?>
        </div>
        <main>
            <article class="index-article">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </article>


            <!--Här skrivs information om hotellet ut med widgets-->
            <section class="news" style="background-image: url('<?= get_template_directory_uri(); ?>/images/background.jpg'); background-repeat: no-repeat; width: 100%; background-size: cover;">
                <h2>Hotell, spa och restaurang</h2>
                <div class="flex-widget">
                    <div>
                        <ul>
                            <?php
                            if (is_active_sidebar('frontpage-info')) : ?>
                                <?php dynamic_sidebar('frontpage-info'); ?>
                            <?php
                            endif;
                            ?>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <?php
                            if (is_active_sidebar('frontpage-ruta2')) : ?>
                                <?php dynamic_sidebar('frontpage-ruta2'); ?>
                            <?php
                            endif;
                            ?>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <?php
                            if (is_active_sidebar('frontpage-ruta3')) : ?>
                                <?php dynamic_sidebar('frontpage-ruta3'); ?>
                            <?php
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </section>


            <!--Här finns det plats med två kampanjer. Skrivs ut med widgets-->
            <section class="kampanjer">
                <h2>Aktuella kampanjer</h2>
                <div class="flex-kampanjer">
                    <div id="kampanj-one">
                        <ul>
                            <?php
                            if (is_active_sidebar('kampanj-ruta1')) : ?>
                                <?php dynamic_sidebar('kampanj-ruta1'); ?>
                            <?php
                            endif;
                            ?>
                        </ul>
                        <!--Text under bild-->
                        <ul>
                            <?php
                            if (is_active_sidebar('kampanj-text1')) : ?>
                                <?php dynamic_sidebar('kampanj-text1'); ?>
                            <?php
                            endif;
                            ?>
                        </ul>
                    </div>

                    <!--Andra kampanjen-->
                    <div id="kampanj-two">
                        <ul>
                            <?php
                            if (is_active_sidebar('kampanj-ruta2')) : ?>
                                <?php dynamic_sidebar('kampanj-ruta2'); ?>
                            <?php
                            endif;
                            ?>
                        </ul>
                        <!--Text under bild-->
                        <ul>
                            <?php
                            if (is_active_sidebar('kampanj-text2')) : ?>
                                <?php dynamic_sidebar('kampanj-text2'); ?>
                            <?php
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>

            </section>

            <!--Sociala medier-->
            <section class="socialmedia-front">
                <div class="socialmedia">
                    <h2>Följ oss på sociala medier</h2>
                    <div class="social-icons">
                        <ul>
                            <?php
                            if (is_active_sidebar('sociala-medier')) : ?>
                                <?php dynamic_sidebar('sociala-medier'); ?>
                            <?php
                            endif;
                            ?>
                        </ul>
                    </div>

                </div>
            </section>


            <!--Sektion med en mörk bakgrund och beskrivande om hotellet-->
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
                        <div class="about-article">
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
                        </div>
                <?php
                    }
                }
                ?>
            </section>
        </main>
        <!--Här slutar huvudinnehåll och footer börjar-->
        <?php get_footer(); ?>