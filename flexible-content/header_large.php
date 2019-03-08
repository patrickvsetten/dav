<section class="header" style="background-image:url('<?= get_template_directory_uri()?>/assets/img/header.jpg')">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 offset-lg-2 col-lg-8">
                <div class="header__titles">
                    <h1>Direct een auto huren</h1>
                    <h3>Of het nu gaat om een dag of een heel jaar. Wij staan voor je klaar!</h3>
                </div>
                <div class="header__searchbar">
                    <div class="header__search-tabs nav">
                        <a class="nav-item nav-link active" data-toggle="tab" href="#personal">
                            <div class="header__search-tab">
                                <svg class="icon icon--car"><use xlink:href="#icon-personal-car"/></svg>
                                <span>Personenauto's</span>
                            </div>
                        </a>
                        <a class="nav-item nav-link" data-toggle="tab" href="#business">
                            <div class="header__search-tab">
                                <svg class="icon icon--car"><use xlink:href="#icon-business-car"/></svg>
                                <span>Bedrijfswagens</span>
                            </div>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div class="header__search-wrapper tab-pane active" id="personal">
                            <div class="header__input-wrapper">
                                <span>Ophaaldatum</span>
                                <div class="header__search-input">
                                    <input type="text" class="datepicker" placeholder="Kies een datum" autocomplete="off" readonly />
                                </div>
                            </div>
                            <div class="header__input-wrapper">
                                <span>Inleverdatum</span>
                                <div class="header__search-input">
                                    <input type="text" class="datepicker" placeholder="Kies een datum" autocomplete="off" readonly />
                                </div>
                            </div>
                            <div class="header__input-wrapper">
                                <span>Filter</span>
                                <div class="header__search-input">
                                    <input type="text" placeholder="Selecteer" autocomplete="off" readonly />
                                </div>
                            </div>
                            <div class="header__search-input">
                                <a href="#" class="button button--primary mtn" data-text="Zoek auto's">
                                    <span class="button__text">
                                        Zoek auto's
                                    </span>
                                    <span class="button__icon">
                                        <svg class="icon icon--small"><use xlink:href="#icon-arrow"/></svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="header__search-wrapper tab-pane" id="business">
                            <div class="header__input-wrapper">
                                <span>Ophaaldatum</span>
                                <div class="header__search-input">
                                    <input type="text" class="datepicker" placeholder="Kies een datum" autocomplete="off" readonly />
                                </div>
                            </div>
                            <div class="header__input-wrapper">
                                <span>Inleverdatum</span>
                                <div class="header__search-input">
                                    <input type="text" class="datepicker" placeholder="Kies een datum" autocomplete="off" readonly />
                                </div>
                            </div>
                            <div class="header__input-wrapper">
                                <span>Filter</span>
                                <div class="header__search-input">
                                    <input type="text" placeholder="Selecteer" autocomplete="off" readonly />
                                </div>
                            </div>
                            <div class="header__search-input">
                                <a href="#" class="button button--primary mtn" data-text="Zoek auto's">
                                    <span class="button__text">
                                        Zoek wagens
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
    </div>
</section>
