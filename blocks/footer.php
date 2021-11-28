<view>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg">
                    <div class="footer__social">
                        <a href="{{_sett.vkontakte}}" target="_blank" rel="noreferrer" class="footer__item">Vkontakte</a>
                        <a href="{{_sett.facebook}}" target="_blank" rel="noreferrer" class="footer__item">Facebook</a>
                        <a href="{{_sett.instagram}}" target="_blank" rel="noreferrer" class="footer__item">Instagram</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-auto col-xl-4">
                    <a href="http://idees.ru/" rel="noreferrer" class="footer__create" target="_blank">Создавайте сайты
                        у нас</a>
                </div>
                <div class=" col-xl-4 col-lg-auto order-lg-first">
                    <div class="footer__copyright">
                        © 2009—{{date("Y")}} АО «Сахалин‑Инжиниринг»
                    </div>
                </div>
            </div>
        </div>
    </div>
    <wb-module wb="module=yonger&mode=render&view=modals" />
</view>

<edit header="Подвал сайта">
    <div><wb-module wb="module=yonger&mode=edit&block=common.inc" /></div>
</edit>