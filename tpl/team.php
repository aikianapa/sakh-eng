<!DOCTYPE html>
<html lang="en">
<wb-include wb-tpl="_head.inc.php" />
<body class="body-home">
<wb-include wb-tpl="_loader.inc.php" />
<wb-include wb-tpl="_menu.inc.php" />

    <!--#include file="./_loader.inc.php" -->
<!--#include file="./_menu.inc.php" -->    <div class="page-bg" style="background-image: url();">
<div class="page-bg__wrapper">
            <section class="team">
                <div class="container">
                    <div class="row">
                       <div class="col-md-5 col-lg-6">
                           <h1 class="team__title">
                                Наша команда
                           </h1>
                       </div>
                       <div class="col-md-7 col-lg-6">
                            <div class="team__descr">
                                Перед вами наши топ-менеджеры, руководители подразделений – люди, которые принимают стратегические решения и задают путь развития Компании. За каждым из них стоит большой штат специалистов, профессионалов, по-настоящему увлеченных своим делом.
                            </div>
                        </div>
                    </div>
                    <div class="team__galery">
                        <div class="team__card">
                            <img src="assets/img/team/1.png" alt="" class="team__img">
                            <div class="team__people">
                                <h2 class="team__name">Lorem ipsum dolor</h2>
                                <h3 class="team__post">Nesciunt quae culpa</h3>
                            </div>
                        </div>
                        <div class="team__card">
                            <img src="assets/img/team/2.png" alt="" class="team__img">
                            <div class="team__people">
                                <h2 class="team__name">Эдуард Тиктинский</h2>
                                <h3 class="team__post">Генеральный директор Сахалин-инжиринг</h3>
                            </div>
                        </div>
                        <div class="team__card">
                            <img src="assets/img/team/3.png" alt="" class="team__img">
                            <div class="team__people">
                                <h2 class="team__name">Lorem ipsum dolor</h2>
                                <h3 class="team__post">Nesciunt quae culpa</h3>
                            </div>
                        </div>
                        <div class="team__card">
                            <img src="assets/img/team/4.png" alt="" class="team__img">
                            <div class="team__people">
                                <h2 class="team__name">Lorem ipsum dolor</h2>
                                <h3 class="team__post">Nesciunt quae culpa</h3>
                            </div>
                        </div>
                        <div class="team__card">
                            <img src="assets/img/team/5.png" alt="" class="team__img">
                            <div class="team__people">
                                <h2 class="team__name">Lorem ipsum dolor</h2>
                                <h3 class="team__post">Nesciunt quae culpa</h3>
                            </div>
                        </div>
                        <div class="team__card">
                            <img src="assets/img/team/6.png" alt="" class="team__img">
                            <div class="team__people">
                                <h2 class="team__name">Lorem ipsum dolor
                                <h3 class="team__post">Nesciunt quae culpa</h3>
                            </div>
                        </div>
                        <div class="team__card">
                            <img src="assets/img/team/7.png" alt="" class="team__img">
                            <div class="team__people">
                                <h2 class="team__name">Lorem ipsum dolor</h2>
                                <h3 class="team__post">Nesciunt quae culpa</h3>
                            </div>
                        </div>
                        <div class="team__card">
                            <img src="assets/img/team/8.png" alt="" class="team__img">
                            <div class="team__people">
                                <h2 class="team__name">Lorem ipsum dolor</h2>
                                <h3 class="team__post">Nesciunt quae culpa</h3>
                            </div>
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
