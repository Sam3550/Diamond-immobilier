<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/minireset.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

    <!-- JQUERY -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery-3.6.4.slim.min.js"></script>

    <!-- SWIPER -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/swiper.min.css">
    <script src="<?php bloginfo('template_url'); ?>/assets/js/swiper-bundle.min.js"></script>

    <?php wp_head(); ?>

</head>


<body <?php body_class('body'); ?>>


    <div class="navigation">

        <div class="container navigation__container">

            <a class="navigation__container_logo" href="#">
                <img class="navigation__container_logo_img" src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="Logo Diamond Immobilier">
            </a>

            <nav class="nav">
                <ul>
                    <li class="menu-item">
                        <a href="#">
                            Accueil
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#">
                            Nos annonces
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#">
                            Vendre
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#">
                            Louer
                        </a>
                    </li>
                </ul>
            </nav>

        </div>

    </div>