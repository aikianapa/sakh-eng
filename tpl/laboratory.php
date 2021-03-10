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
            
            <section class="laboratory">
                <div class="container container--relative">
                    <div class="back">
                        <a href="projects" class="back__arrow"></a>
                        <h1 class="back__title">
                            Строительная лаборатория
                        </h1>
                    </div>
                    <div class="laboratory__wrapper">
                        <p class="laboratory__text">
                            Испытательная лаборатория АО "Сахалин-Инжиниринг" получила аккредитацию 07 августа 2019 года. В ней можно заказать испытания прочности бетонных образцов на сжатие, по ударному импульсу, а также по отрыву со скалыванием. Также оказываются услуги по измерению толщины покрытий декоративных, лакокрасочных и других защитных покрытий на любом токопроводящем основании.
                        </p>
                        <p class="laboratory__text">
                            Протоколы таких испытаний могут быть использованы для исполнительной документации, а также в целях обследований и проведения каких-либо экспертиз.
                        </p>
                        <div class="laboratory__img-wrap">
                            <img src="assets/img/laboratory/laboratory_1.png" alt="laboratory" class="laboratory__img laboratory__img--1">
                            <img src="assets/img/laboratory/laboratory_2.png" alt="laboratory" class="laboratory__img laboratory__img--2"> 
                            <img src="assets/img/laboratory/laboratory_3.png" alt="laboratory" class="laboratory__img laboratory__img--3">  
                        </div>
                        <h2 class="laboratory__subtitle">
                            Контакты строительной лаборатории:
                        </h2>
                        <div class="laboratory__contacts">
                            <a href="tel:4242456457" class="laboratory__contact">
                                (4242) 456 457
                            </a>
                            <a href="tel:+79841390755" class="laboratory__contact">
                                +7 984 139 07 55
                            </a>
                            <a href="mailto:lab@sakh-eng.ru" class="laboratory__contact">
                                lab@sakh-eng.ru
                            </a>
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
                                <a href="privacy" class="checkbox__link">политики конфиденциальности</a>
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
