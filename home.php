<?php
/**
 * Template Name: Home
 */

get_header();
?>

<section class="header" style="background-image:url('<?= get_template_directory_uri()?>/assets/img/header.jpg')">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 offset-lg-2 col-lg-8">
                <div class="header__titles">
                    <h1>Direct een auto huren</h1>
                    <h3>Of het nu gaat om een dag of een heel jaar. Wij staan voor je klaar!</h3>
                </div>
                <div class="header__searchbar">
                    <div class="header__search-tabs">
                        <div class="header__search-tab header__search-tab--active">
                            <svg class="icon icon--car"><use xlink:href="#icon-personal-car"/></svg>
                            <span>Personenauto's</span>
                        </div>
                        <div class="header__search-tab">
                            <svg class="icon icon--car"><use xlink:href="#icon-business-car"/></svg>
                            <span>Bedrijfswagens</span>
                        </div>
                    </div>
                    <div class="header__search-wrapper">
                        <div class="header__search-input">
                            <span>Ophaaldatum</span>
                        </div>
                        <div class="header__search-input">
                            <span>Inleverdatum</span>
                        </div>
                        <div class="header__search-input">
                            <span>Filter</span>
                        </div>
                        <div class="header__search-input">
                            <a href="#" class="button button--primary" data-text="Zoek auto's">
                                <span class="button__text">
                                    Zoek auto's
                                </span>
                                <span class="button__icon">
                                    <svg class="icon icon--small"><use xlink:href="#icon-arrow"/></svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
