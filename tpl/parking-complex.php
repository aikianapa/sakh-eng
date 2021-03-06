<!DOCTYPE html>
<html lang="en">
<wb-include wb-tpl="_head.inc.php" />
<body class="body-home">
<wb-include wb-tpl="_loader.inc.php" />
<wb-include wb-tpl="_menu.inc.php" />

    <!--#include file="./_loader.inc.php" -->
<!--#include file="./_menu.inc.php" -->    <div class="page-bg" style="background-image: url();">
<div class="page-bg__wrapper">
            
            <div class="complex">
                <div class="container">
                    <div class="back">
                        <a href="parking" class="back__arrow"></a>
                        <h1 class="back__title">
                            ЖК "Созвездие"
                        </h1>
                    </div>
                    <div class="complex__wrap">
                        <div class="complex__title">Парковочные места:</div>
                        <div class="parking-place">
                            <div class="parking-place__wrap">
                                <div class="parking-place__row parking-place__row--active">
                                    <div class="parking-place__item parking-place__item--title"><span>Ряд 1</span></div>
                                    <div class="parking-place__row-wrap">
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="7.50" data-width="5.50" data-price="2 750 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="9.50" data-width="4.50" data-price="3 400 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                    </div>
                                </div>
                                <div class="parking-place__row">
                                    <div class="parking-place__item parking-place__item--title"><span>Ряд 2</span></div>
                                    <div class="parking-place__row-wrap">
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item parking-place__sold" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000">
                                            <span>1</span>
                                            <div id="parking-tooltip" class="parking-place__tooltip">
                                                <div class="parking-place__tooltip-wrap">
                                                    <div class="row mb-2">
                                                        <div class="col-6">
                                                            Длинна:
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <span id="tooltip-length"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-6">
                                                            Ширина:
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <span id="tooltip-width"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-6">
                                                            Стоимость:
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <span id="tooltip-price"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                    </div>
                                </div>
                                <div class="parking-place__row">
                                    <div class="parking-place__item parking-place__item--title"><span>Ряд 3</span></div>
                                    <div class="parking-place__row-wrap">
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                    </div>
                                </div>
                                <div class="parking-place__row">
                                    <div class="parking-place__item parking-place__item--title"><span>Ряд 4</span></div>
                                    <div class="parking-place__row-wrap">
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item parking-place__sold" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                    </div>
                                </div>
                                <div class="parking-place__row">
                                    <div class="parking-place__item parking-place__item--title"><span>Ряд 5</span></div>
                                    <div class="parking-place__row-wrap">
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item parking-place__sold" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                    </div>
                                </div>
                                <div class="parking-place__row">
                                    <div class="parking-place__item parking-place__item--title"><span>Ряд 6</span></div>
                                    <div class="parking-place__row-wrap">
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item parking-place__sold" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                    </div>
                                </div>
                                <div class="parking-place__row">
                                    <div class="parking-place__item parking-place__item--title"><span>Ряд 7</span></div>
                                    <div class="parking-place__row-wrap">
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                    </div>
                                </div>
                                <div class="parking-place__row">
                                    <div class="parking-place__item parking-place__item--title"><span>Ряд 8</span></div>
                                    <div class="parking-place__row-wrap">
                                        <div class="parking-place__item parking-place__sold" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                        <div class="parking-place__item" data-length="5.50" data-width="2.50" data-price="1 850 000"><span>1</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>            <div class="complex__symbols">
                            <div class="complex__symbol">Свободно</div>
                            <div class="complex__symbol complex__symbol--sold">Продано</div>
                        </div>
                        <div class="complex__title">Схема жилого комплекса:</div>
                            <div class="complex__scheme">
                                <img class="complex__img" src="assets/img/parking-complex/scheme.png" alt="">
                            </div>
                        <div class="complex__title">Местонахождение:</div>
                        <div class="complex__address">г.Южно-Сахалинск, ул.Детская, 6 А</div>
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
