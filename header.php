<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2090b52781.js" crossorigin="anonymous"></script>
    <link rel="icon" href="<?= get_template_directory_uri(); ?>/images/favicon.ico" type="image/ico" sizes="16x16">
    <link rel="icon" href="<?= get_template_directory_uri(); ?>/images/favicon.png" type="image/png" sizes="32x32">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/styles.css">
    <?php
    wp_head();
    ?>
    <title><?php bloginfo('name')?> | <?php 
    if(the_title()){the_title();}else{
        single_cat_title();
    } ?>
    </title>
</head>

<body>
    <header>
        <!--Navigering för desktop-->
        <nav class="desktop-nav">
        <a href="<?php echo get_home_url(); ?>"><img class="logo" src="<?= get_template_directory_uri(); ?>/logo-kraft.svg" alt=""></a>
            <?php
            wp_nav_menu();
            ?>
        </nav>
        <!--Navigering för mobil-->
        <nav class="mobile-nav">
        <button class="hamburger-icon" id="hamburger-icon"><i class="fas fa-bars"></i></button>
            <div class="nav-ul" id="nav-ul">
                <?php wp_nav_menu(); ?>
            </div>
        </nav>
    </header>