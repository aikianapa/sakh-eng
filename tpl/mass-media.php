<!DOCTYPE html>
<html lang="en">
<wb-include wb-tpl="_head.inc.php" />
<body class="body-home">
<wb-include wb-tpl="_loader.inc.php" />
<wb-include wb-tpl="_menu.inc.php" />

    <!--#include file="./_loader.inc.php" -->
<!--#include file="./_menu.inc.php" -->
<div class="page-bg">
        <video src="/assets/video/common.webm" autoplay="" muted="" playsinline="" loop=""></video>
        <div class="page-bg__wrapper">
            
            <section class="media">
                <div class="container">
                    <h1 class="page-title media__title">
                        Сми о нас
                    </h1>
                    <div class="media__item">
                        <div class="media__icon" style="background-image: url(assets/img/icons/media_1.svg)"></div>
                        <div class="media__descr">
                            <a href="#" class="media__info">
                                Итоги 2020 года с BBC News
                            </a>
                            <p class="media__date">
                                Декабрь 10.2020
                            </p>
                        </div>
                    </div>
                    <div class="media__item">
                        <div class="media__icon" style="background-image: url(assets/img/icons/media_2.svg)"></div>
                        <div class="media__descr">
                            <a href="#" class="media__info">
                                Сахалин-Инжиниринг попал в том 5 строительных компаний Сахалина
                            </a>
                            <p class="media__date">
                                Декабрь 15.2020
                            </p>
                        </div>
                    </div>
                    <div class="media__item">
                        <div class="media__icon" style="background-image: url(assets/img/icons/media_3.svg)"></div>
                        <div class="media__descr">
                            <a href="#" class="media__info">
                                Передовые технологии застройки
                            </a>
                            <p class="media__date">
                                Декабрь 15.2020
                            </p>
                        </div>
                    </div>
                    <div class="media__item">
                        <div class="media__icon" style="background-image: url(assets/img/icons/media_4.svg)"></div>
                        <div class="media__descr">
                            <a href="#" class="media__info">
                                Смена стратегии в Сахалин-инжиниринг
                            </a>
                            <p class="media__date">
                                Декабрь 15.2020
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Запустить модальное окно
      </button> -->
      
      <!-- Modal -->
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
                        <input class="form__input" name="name" required id="name" placeholder="Имя" type="text">
                        <label class="form__label" for="phone">Номер телефона*</label>
                        <input class="form__input" name="phone" required id="phone" placeholder="+7 ( _ _ _ _ ) _ _ _  _ _ _">
                        <label class="form__label" for="theme">Тема обсуждения*</label>
                        <select class="form__select">
                            <option class="form__option">Консультация</option>
                            <option class="form__option">Покупка</option>
                            <option class="form__option">Аренда</option>
                            </select>
                        <label class="form__label" for="message">Сообщение</label>
                        <input class="form__input" required id="message" placeholder="Напишите что хотели бы добавить...">
                        <div class="сheckbox">
                            <label class="checkbox__item checkbox__item--small">
                                <input type="checkbox" required>
                                <span class="checkmark">Согласен с условиями </span>
                                <a href="privacy.html" class="checkbox__link">политики конфиденциальности</a>
                            </label>
                            <label class="checkbox__item checkbox__item--small">
                                <input type="checkbox">
                                <span class="checkmark">Информационная рассылка</span>
                            </label>
                        </div>
                    </div>
                    <button class="form__btn">
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
    
    <div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
                <form class="filter">
                    <div class="filter__close" data-dismiss="modal">
                        Закрыть
                    </div>
                    <h1 class="filter__title">
                        Фильтрация
                    </h1>
                    <div class="filter__descr">
                        Выберите категории которые хотите видеть в результатах поиска.
                    </div>
                    <div class="checkbox">
                        <label class="checkbox__item">
                            <input type="checkbox">
                            <span class="checkmark">Жилая недвижимость</span>
                        </label>
                        <label class="checkbox__item">
                            <input type="checkbox">
                            <span class="checkmark">Коммерческая недвижимость</span>
                        </label>
                        <label class="checkbox__item">
                            <input type="checkbox">
                            <span class="checkmark">Загородная недвижимость</span>
                        </label>
                        <label class="checkbox__item">
                            <input type="checkbox">
                            <span class="checkmark">Машиноместа</span>
                        </label>
                    </div>
                    <button class="btn filter__btn">Применить</button>
                </form>
            </div>
        </div>
    </div>
<!--#include file="./_footer.inc.php" -->
    

    <wb-include wb-tpl="_footer.inc.php" />

</body>
</html>
