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
                    <div class="row align-items-center mb-4">
                        <div class="col">
                        <div class="sidebar__title">
                                Тип проекта:
                            </div>
                            <div class="search__tags">
                                <div class="search__tag">Недвижимость</div>
                                <div class="search__tag">Строительная лаборатория</div>
                                <div class="search__tag">Аренда строительной техники</div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button class="search__btn" data-toggle="modal" data-target="#filter">Фильтровать по</button>
                        </div>
                    </div>
                <div class="row">
                    

                   
                        <div class="col-md-6 col-lg-4">
                            <a href='project' class="search__card">
                                <img src="assets/img/search/search_1.png" alt="" class="search__img">
                                <div class="search__card-wrap">
                                    <span class="search__descr">
                                    <div class="projects__name">
                                        Венера
                                    </div>
                                    <div class="projects__geo">
                                        г.Южно-Сахалинск, ул.Детская, 6 А
                                    </div>
                                    <div class="projects__date">
                                       <span>Ввод в эксплуатацию:</span> Март 2021  
                                    </div>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <a href='project' class="search__card">
                                <img src="assets/img/search/search_2.png" alt="" class="search__img">
                                <div class="search__card-wrap">
                                    <span class="search__descr">
                                    <div class="projects__name">
                                        Модерн
                                    </div>
                                    <div class="projects__geo">
                                        г.Южно-Сахалинск, ул.Детская, 6 А
                                    </div>
                                    <div class="projects__date">
                                       <span>Ввод в эксплуатацию:</span> Март 2021  
                                    </div>
                                    </span>
                                </div>   
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <a href='project' class="search__card">
                                <img src="assets/img/search/search_3.png" alt="" class="search__img">
                                <div class="search__card-wrap">
                                    <span class="search__descr">
                                    <div class="projects__name">
                                        Венера
                                    </div>
                                    <div class="projects__geo">
                                        г.Южно-Сахалинск, ул.Детская, 6 А
                                    </div>
                                    <div class="projects__date">
                                       <span>Ввод в эксплуатацию:</span> Март 2021  
                                    </div>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <a href='project' class="search__card">
                                <img src="assets/img/search/search_4.png" alt="" class="search__img">
                                <div class="search__card-wrap">
                                    <span class="search__descr">
                                    <div class="projects__name">
                                        Модерн
                                    </div>
                                    <div class="projects__geo">
                                        г.Южно-Сахалинск, ул.Детская, 6 А
                                    </div>
                                    <div class="projects__date">
                                       <span>Ввод в эксплуатацию:</span> Март 2021  
                                    </div>
                                    </span>
                                </div>   
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