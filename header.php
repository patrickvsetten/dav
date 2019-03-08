<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title ><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="all" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css?ver=1.11.4" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div style="display: none; visibility: hidden;">
        <?php include_once( STYLESHEETPATH. '/assets/sprite/sprite.svg');  ?>
    </div>
    <!--<svg class="icon"><use xlink:href="#icon-facebook"/></svg>-->
    <section class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 topbar__tabs">
                    <div class="topbar__tab topbar__tab--active">
                        Private
                    </div>
                    <div class="topbar__tab">
                        Zakelijk
                    </div>
                </div>
                <div class="col-12 col-lg-6 topbar__usps">
                    <div class="topbar__usp">
                        <svg class="icon icon--small"><use xlink:href="#icon-check"/></svg>
                        Breng- en haalservice
                    </div>
                    <div class="topbar__usp">
                        <svg class="icon icon--small"><use xlink:href="#icon-check"/></svg>
                        Breng- en haalservice
                    </div>
                    <div class="topbar__usp">
                        <svg class="icon icon--small"><use xlink:href="#icon-check"/></svg>
                        Breng- en haalservice
                    </div>
                </div>
            </div>
        </div>
    </section>

    <nav class="navbar navbar--fixed-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="navbar__logo col-8 col-sm-4 col-md-4 col-lg-4">
                    <a class="navbar__logo-link" href="<?= get_site_url(); ?>">
                        <img src="<?= get_template_directory_uri()?>/assets/img/logo.svg" alt="Logo"/>
                    </a>
                </div>
                <div class="navbar__menu col-12 col-md-8 col-lg-8">
                    <ul class="navbar__menu-wrapper">
                        <?php
                            wp_nav_menu([ 'container' => false, 'theme_location' => 'Primary', 'items_wrap' => '%3$s', 'depth' => 0 ]);
                        ?>
                    </ul>
                    <div class="navbar__hamburger">
                        <div class="navbar__hamburger-wrapper">
                            <div class="navbar__hamburger-bar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="mobile-menu col-sm-12 d-md-none d-lg-none">
        <div class="mobile-menu__wrapper">
            <ul>
                <?php
                wp_nav_menu([ 'container' => false, 'theme_location' => 'primary', 'items_wrap' => '%3$s', 'depth' => 0 ]);
                ?>
            </ul>
        </div>
    </div>
