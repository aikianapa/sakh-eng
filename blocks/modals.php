<view>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form class="form">
                    <div class="form__close" data-dismiss="modal">
                        Закрыть
                    </div>
                    <h1 class="form__title">
                        Форма заявки
                    </h1>
                    <p class="form__descr">
                        После отправки вашей заявки наши менеджеры сразу <br>перезвонят вам в течении нескольких минут 👌
                    </p>
                    <div class="form__wrapper">
                        <label class="form__label" for="name">Введите свое имя*</label>
                        <input class="form__input" name="name" required="" id="name" data-label="Имя" placeholder="Имя" type="text" done="">
                        <label class="form__label" for="phone">Номер телефона*</label>
                        <input class="form__input" name="phone" required="" id="phone" data-label="Телефон" placeholder="+7 ( _ _ _ _ ) _ _ _  _ _ _" done="">
                        <label class="form__label" for="theme">Тема обсуждения*</label>
                        <select class="form__select" name="reason" data-label="Повод">
                            <option class="form__option" value="Консультация">Консультация</option>
                            <option class="form__option" value="Покупка">Покупка</option>
                            <option class="form__option" value="Аренда">Аренда</option>
                            </select>
                        <label class="form__label" for="message">Сообщение</label>
                        <input class="form__input" required="" name="message" id="message" data-label="Сообщение" placeholder="Напишите что хотели бы добавить...">
                        <div class="сheckbox">
                            <label class="checkbox__item checkbox__item--small">
                                <input type="checkbox" required name="policy" data-label="Согласие с условиями" required>
                                <span class="checkmark">Согласен с условиями </span>
                                <a href="/privacy" class="checkbox__link" target="_blank">политики конфиденциальности</a>
                            </label>
                            <label class="checkbox__item checkbox__item--small">
                                <input type="checkbox" name="subscribe" data-label="Подписка на рассылку">
                                <span class="checkmark">Информационная рассылка</span>
                            </label>
                        </div>
                    </div>
                    <input type="hidden" name="url" data-label="Страница отправки" value="{{_route.url}}" >
                    <button class="form__btn" type="button" data-ajax="/ajax/mail">
                        Отправить заявку
                    </button>
                </form>
                <!-- <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>
    <div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-hidden="true" wb-if="'{{_route.uri}}'=='/projects'">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
                <form class="filter" action="/projects">
                    <div class="filter__close" data-dismiss="modal">
                        Закрыть
                    </div>
                    <h1 class="filter__title">
                        Фильтрация
                    </h1>
                    <div class="filter__descr">
                        Выберите категории которые хотите видеть в результатах поиска.
                    </div>
                    <wb-var filter="{{_post.filter}}" />
                    <div class="checkbox" wb-tree="item=realty&children=false">
                        <label class="checkbox__item">
                            <wb-var checked='checked'  wb-if='in_array({{id}},{{_var.filter.category["$in"]}})' else=''/>
                            <input type="checkbox" name="{{id}}" class="{{_var.checked}}">
                            <span class="checkmark">{{name}}</span>
                        </label>
                    </div>
                    <input type="hidden" name="url" data-label="Страница отправки" value="{{_route.url}}" >
                    <button type="button" class="btn filter__btn">Применить</button>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter-resume" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form class="form">
                    <div class="form__close" data-dismiss="modal">
                        Закрыть
                    </div>
                    <h1 class="form__title">
                        Форма отправки резюме
                    </h1>
                    <p class="form__descr">
                        Заполните форму и отправьте нам резюме
                    </p>
                    <div class="form__wrapper">
                        <label class="form__label" for="name">Введите свое имя*</label>
                        <input class="form__input" name="name" required="" id="name" data-label="Имя" placeholder="Имя" type="text" done="">
                        <label class="form__label" for="phone">Номер телефона*</label>
                        <input class="form__input" name="phone" required="" id="phone" data-label="Телефон" placeholder="+7 ( _ _ _ _ ) _ _ _  _ _ _" done="">
                        <label class="form__label" for="subj">Тема обсуждения*</label>
                        <input class="form__input" name="subject" required="" id="subj" placeholder="Тема" type="text" data-label="Тема" done="">
                        <label class="form__label" for="message">Сообщение</label>
                        <input class="form__input" required="" id="message" name="message" data-label="Сообщение" placeholder="Напишите что хотели бы добавить...">
                        <input type="file" name="_attach" done="" data-label="Файл" data-base64>
                    </div>
                    <input type="hidden" name="url" data-label="Страница отправки" value="{{_route.url}}" >
                    <button class="form__btn" type="button" data-ajax="/ajax/mail">
                        Отправить заявку
                    </button>
                </form>
                <!-- <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>


</view>

<edit>
    
</edit>