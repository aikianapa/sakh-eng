<view>
    <div id="menu" class="menu">
        <div class="menu__wrap">
            <div class="container">
                <div id="menu-hide" class="menu__hide">
                    Скрыть <span></span>
                </div>
                <div class="menu__inner">
                    <ul class="menu__tabs">
                        <li class="menu-link-dropdown">
                            <img class="menu__prev" src="/assets/img/icons/arrow_prev.svg">
                            <!-- <a href="awards" class="menu__tab menu__tab--company"> -->
                            <a href="javascript:void(0)" class="menu__tab menu__tab--company">
                                О компании
                            </a>
                        </li>

                        <li class="menu-link-dropdown">
                            <img class="menu__prev" src="/assets/img/icons/arrow_prev.svg">
                            <!-- <a href="search" class="menu__tab menu__tab--search"> -->
                            <a href="javascript:void(0)" class="menu__tab menu__tab--search">
                                Предложения
                            </a>
                        </li>
                        <li>
                            <a href="projects" class="menu__tab menu__tab--projects">
                                Объекты
                            </a>
                        </li>
                        <li>
                            <a href="job" class="menu__tab menu__tab--job">
                                Карьера
                            </a>
                        </li>
                        <!-- <li>
                            <a href="tenders" class="menu__tab menu__tab--tenders">
                                Тендеры
                            </a>
                        </li> -->
                        <!-- <li>
                            <a href="to_journalists" class="menu__tab menu__tab--journalists">
                                Контакты для СМИ
                            </a>
                        </li> -->
                        <li>
                            <a href="contacts" class="menu__tab menu__tab--contacts">
                                Контакты
                            </a>
                        </li>
                    </ul>
                    <div class="menu__center">
                        <div class="row">
                            <div class="col-xl-4 menu__center__company dropdown_menu dropdown_menu--animated dropdown_menu-6">
                                <!-- <a href="today" class="dropdown_item-1 menu__small">Компания сейчас</a> -->
                                <a href="awards" class="dropdown_item-1 menu__small">Компания сейчас</a>
                                <!-- <a href="awards" class="dropdown_item-1 menu__small">Рейтинги и награды</a> -->
                                <a href="company" class="dropdown_item-1 menu__small">История</a>
                                <!-- <a href="team" class="dropdown_item-1 menu__small">Команда</a> -->
                                <!-- <a href="#" class="dropdown_item-1 menu__small">Охрана труда</a> -->
                                <a href="documents" class="dropdown_item-1 menu__small">Документы</a>
                                <a href="news" class="dropdown_item-1 menu__small">Новости</a>

                            </div>
                            <div class="col-xl-4 menu__center__search dropdown_menu dropdown_menu--animated dropdown_menu-6">
                                <a href="laboratory" class="dropdown_item-1 menu__small">Строительная лаборатория</a>
                                <a href="rent" class="dropdown_item-1 menu__small">Аренда строительной техники</a>
                                <!-- <a href="machinery" class="dropdown_item-1 menu__small">Испытания прочности бетонных
                                    образцов</a> -->
                            </div>

                        </div>
                    </div>

                    <div class="menu__promo">
                        <div class="row gutters-8 menu__footer">
                            <div class="menu__footer-left">
                                <a href="privacy" class="col menu__small menu__privacy">Политика конфедициальности</a>
                                <a href="sitemap" class=" col menu__small menu__sitemap">Карта сайта</a>
                            </div>
                            <div class="menu__footer-right">
                                <a href="tel:+{{wbDigitsOnly({{_sett.phone}})}}" class="col menu__small">{{_sett.phone}}</a>
                                <p class="col menu__small">{{_sett.email}}</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="header ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-auto">
                    <a href="/">
                        <img src="/assets/img/icons/header_logo.svg" width="298" height="60" alt="logotype" class="header__logo">
                    </a>
                </div>
                <div class="col text-right d-none d-md-block">
                    <a href="tel:+{{wbDigitsOnly({{_sett.phone}})}}" class="header__phone">{{_sett.phone}}</a>
                </div>
                <div class="ml-auto col-auto">
                    <div id="open-menu" class="header__menu">
                        <span class="header__text">Меню</span>
                        <span class="header__burger"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</view>

<edit header="Меню сайта">
<div><wb-module wb="module=yonger&mode=edit&block=common.inc" /></div>
</edit>