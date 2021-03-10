<!DOCTYPE html>
<html lang="en">
<wb-include wb-tpl="_head.inc.php" />
<body class="body-home">
<wb-include wb-tpl="_loader.inc.php" />
<wb-include wb-tpl="_menu.inc.php" />

    <!--#include file="./_loader.inc.php" -->
<!--#include file="./_menu.inc.php" -->    <div class="page-bg" style="background-image: url();">
<div class="page-bg__wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sidebar sidebar--realty">
                            <div class="back back--realty">
                                <a href="projects" class="back__arrow"></a>
                                <h1 class="back__title back__title--realty">
                                    Жилая недвижимость
                                </h1>
                            </div>
                            <ul class="sidebar__list sidebar__list--realty">
                                <li class="sidebar__item sidebar__item--realty sidebar__item--active">
                                    <a href="residential" class="sidebar__link">
                                        Жилая недвижимость
                                    </a>
                                    <div class="sidebar__hidden sidebar__hidden--active">
                                        <a href="residential-map" class="sidebar-hidden__link ">
                                            На карте
                                        </a>
                                        <a href="residential-district" class="sidebar-hidden__link sidebar__hidden--underline">
                                            По району
                                        </a>
                                    </div>
                                </li>
                                <li class="sidebar__item sidebar__item--realty ">
                                    <a href="commercial" class="sidebar__link">
                                        Коммерческая недвижимость
                                    </a>  
                                    <div class="sidebar__hidden ">
                                        <a href="commercial-buy" class="sidebar-hidden__link ">
                                            Покупка
                                        </a>
                                        <a href="commercial-rent" class="sidebar-hidden__link ">
                                            Аренда
                                        </a>
                                    </div>
                                </li>
                                <li class="sidebar__item sidebar__item--realty ">
                                    <a href="country" class="sidebar__link">
                                        Загородная недвижимость
                                    </a>  
                                </li>
                                <li class="sidebar__item sidebar__item--realty ">
                                    <a href="parking" class="sidebar__link">
                                        Паркинг
                                    </a>  
                                </li>
                            </ul>
                        </div>                    </div>
                    <div class="col-lg-8">
                        
                        <div class="projects">
                            <div class="projects__list">
                                <a href="#" class="projects__item">
                                    <div class="projects__name">
                                        Венера
                                    </div>
                                    <div class="projects__geo">
                                        г.Южно-Сахалинск, ул.Детская, 6 А
                                    </div>
                                    <div class="projects__date">
                                       <span>Ввод в эксплуатацию:</span> Март 2021  
                                    </div>
                                    <img src="assets/img/residential/residential_1.png" alt="жилой комплекс" class="projects__img">
                                </a>
                                <a href="#" class="projects__item">
                                    <div class="projects__name">
                                        Модерн
                                    </div>
                                    <div class="projects__geo">
                                        г.Южно-Сахалинск, ул.Детская, 6 А
                                    </div>
                                    <div class="projects__date">
                                       <span>Ввод в эксплуатацию:</span> Март 2021  
                                    </div>
                                    <img src="assets/img/residential/residential_2.png" alt="жилой комплекс" class="projects__img">
                                </a>
                                <a href="#" class="projects__item">
                                    <div class="projects__name">
                                        Венера
                                    </div>
                                    <div class="projects__geo">
                                        г.Южно-Сахалинск, ул.Детская, 6 А
                                    </div>
                                    <div class="projects__date">
                                       <span>Ввод в эксплуатацию:</span> Март 2021  
                                    </div>
                                    <img src="assets/img/residential/residential_3.png" alt="жилой комплекс" class="projects__img">
                                </a>
                                <a href="#" class="projects__item">
                                    <div class="projects__name">
                                        Модерн
                                    </div>
                                    <div class="projects__geo">
                                        г.Южно-Сахалинск, ул.Детская, 6 А
                                    </div>
                                    <div class="projects__date">
                                       <span>Ввод в эксплуатацию:</span> Март 2021  
                                    </div>
                                    <img src="assets/img/residential/residential_4.png" alt="жилой комплекс" class="projects__img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    
<!--#include file="./_footer.inc.php" -->
    

    <wb-include wb-tpl="_footer.inc.php" />

</body>
</html>
