<!DOCTYPE html>
<html lang="en">
<wb-include wb-tpl="_head.inc.php" />
<body class="body-home">
<wb-include wb-tpl="_loader.inc.php" />
<wb-include wb-tpl="_menu.inc.php" />

<!--#include file="./_loader.inc.php" -->
<!--#include file="./_menu.inc.php" -->
<div class="page-bg" style="background-image: url();">
        <div class="page-bg__wrapper">
            <section class="post">
                <div class="container">
                    <div class="post__wrapper">
                        <div class="post__date">
                            20 Декабря 2020
                        </div>
                        <div class="post__title">
                            Собственную чёрную пятницу объявляет компания и даёт скидки на квартиры.
                        </div>
                        <div class="post__promo">
                            <img src="assets/img/post/post_img.png" alt="realty" class="post__img">
                        </div>
                        <h2 class="post__subtitle">
                            Собственную чёрную пятницу объявляет компания и даёт <br>скидки на квартиры.
                        </h2>
                        <p class="post__content">
                            Пятница, 13-е» - это акция в честь финала продаж нового дома. По условиям акции пять оставшихся 2-комн. квартир только одну неделю - с 9 по 13 декабря - продаются со скидкой 500 000 рублей. Цена квартир на сайте в данный момент указана без скидки.
                        </p>
                        <p class="post__content">
                            Площадь каждой квартиры – 57,8 кв.м. Это 2 спальни, большая кухня-гостиная, санузел, лоджия, коридор и даже небольшое подсобное помещение. Они будут сдаваться с отделкой «под ключ»: с сантехникой, кафельной плиткой, линолеумом, межкомнатными дверями, обоями, плинтусами, полным набором счётчиков (в том числе, тепловыми) и т.д.
                        </p>
                        <p class="post__content">
                            Квартиры продаются по договорам долевого участия, с использованием счетов-эскроу. Дольщики могут использовать как собственные, так и ипотечные средства, а также деньги по уведомлениям об участии в жилищных программах от МКУ «Управление жилищной политики города Южно-Сахалинска». С планировками и ценами квартир можно ознакомиться в соответствующем разделе сайта Застройщика.
                        </p>
                        <p class="post__content">
                            Если в сделке будут участвовать средства от банка, на момент бронирования квартиры ипотека уже должна быть одобрена. Если клиент хочет использовать деньги, выделенные по муниципальным программам (уведомления от МКУ "Управление жилищной политики города Южно-Сахалинска"), то в качестве ипотечных средств могут быть выбраны только средства от Сбербанка.
                        </p>
                        <div class="post__tel">
                            Телефоны отдела продаж в Южно-Сахалинске: <a href="tel:399001">399 001</a>, <a href="tel:399003">399 003</a>, <a href="tel:399007">399 007</a> и <a href="tel:456010">456 010</a>.
                        </div>
                        <p class="post__content">
                            Также специалисты компании будут работать в субботу и воскресенье 7 и 8 декабря с 10:00 до 15:00. Все желающие получить консультацию и выбрать квартиру приглашаются в отдел продаж АО «Сахалин-Инжиниринг» по адресу: г.Южно-Сахалинск, ул.Ленина, 69.
                        </p>
                        <p class="post__content">
                            Акцией «Пятница, 13-е» АО «Сахалин-Инжиниринг» закроет продажи дома на ул. Науки на въезде в Ново-Александровск (8 этажей, железобетонный монолит, сейсмостойкость 8 баллов). Рядом с домом будет заасфальтированная площадка для парковки автомобилей (по одному машиноместу на каждую квартиру). В 200-х метрах от дома – детский сад.
                        </p>
                        <div class="post__declaration">
                            Проектная декларация - на сайте <a href="http://www.наш.дом.рф">www.наш.дом.рф</a> 
                        </div>
                        <div class="post__info">
                            5 декабря 2019 г.
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
