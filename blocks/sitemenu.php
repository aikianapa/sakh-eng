<view>
    <div id="menu" class="menu">
        <div class="menu__wrap">
            <div class="container">
                <div id="menu-hide" class="menu__hide">
                    Скрыть <span></span>
                </div>
                <div class="menu__inner">
                    <ul class="menu__tabs">
                        <wb-foreach wb="from=menu.data&tpl=false" wb-filter="active=on">
                        <li class="menu-link-dropdown" wb-if="'{{children}}'!==''">
                            <img class="menu__prev" src="/assets/img/icons/arrow_prev.svg">
                            <a href="{{data.link}}" class="menu__tab menu__tab--{{id}}" data-id="{{id}}">
                                {{name}}
                            </a>
                        </li>
                        <li wb-if="'{{children}}'==''">
                            <a href="{{data.link}}" class="menu__tab menu__tab--{{id}}" data-id="{{id}}">
                                {{name}}
                            </a>
                        </li>
                        </wb-foreach>
                    </ul>
                    <div class="menu__center">
                        <div class="row">
                            <wb-foreach wb="from=menu.data&tpl=false" wb-filter="active=on">
                            <div class="col-xl-4 menu__center__{{id}} dropdown_menu dropdown_menu--animated dropdown_menu-6" data-id="{{id}}" wb-if="'{{children}}'>''">
                                <wb-foreach wb="from=children&tpl=false" wb-filter="active=on">
                                <a href="{{data.link}}" class="dropdown_item-1 menu__small">{{name}}</a>
                                </wb-foreach>
                            </div>
                        </div>
                    </div>

                    <div class="menu__promo">
                        <div class="row gutters-8 menu__footer">
                            <div class="menu__footer-left">
                                <a href="/privacy" class="col menu__small menu__privacy">Политика конфедициальности</a>
                                <a href="/sitemap" class=" col menu__small menu__sitemap">Карта сайта</a>
                            </div>
                            <div class="menu__footer-right">
                                <a href="/tel:+{{wbDigitsOnly({{_sett.phone}})}}" class="col menu__small">{{_sett.phone}}</a>
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
                    <a href="//">
                        <img src="/assets/img/icons/header_logo.svg" width="298" height="60" alt="logotype" class="header__logo">
                    </a>
                </div>
                <div class="col text-right d-none d-md-block">
                    <a href="/tel:+{{wbDigitsOnly({{_sett.phone}})}}" class="header__phone">{{_sett.phone}}</a>
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
<div class="form-group">
    <input wb-tree name="menu">
</div>
</edit>