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
            
            <section class="privacy">
                <div class="container">
                    <div class="privacy__wrapper">
                        <h1 class="privacy__title">
                            Политика конфиденциальности
                        </h1>
                        <p class="privacy__content">
                            И взаимодействуете с Сервисом Компании. Более подробно, Компания собирает следующие категории данных у Вас и о Вас:
                        </p>
                        <p class="privacy__content">
                            Данные регистрации это информация, которую Вы предоставляете, когда регистрируетесь в Сервисе Компании. Регистрационная информация может включать, например, имя, фамилию и адрес электронной почты. Данные об активности пользователя. Когда Вы получаете доступ к Сервисам Компании и взаимодействуете с ними, мы можем собирать определенную информацию о таких посещениях для того, чтобы сделать Ваше использование Сервисов Компании удобнее. Например, для того, чтобы предоставить Вам возможность подключиться к Сервисам Компании, наши серверы получают и записывают информацию о Вашем компьютере, устройстве и браузере, включая, возможно, Ваш адрес IP, тип браузера и иную информацию о ПО и оборудовании. Если Вы подключаетесь к Сервисам Компании с мобильного телефона или иного устройства, мы можем собирать данные идентификатора устройства, данные геолокации и иную информацию о транзакциях такого устройства. Также могут собираться файлы cookies и иные технологии отслеживания (такие как файлы cookies браузера, пиксели, маячки) и технология Adobe Flash обычно именуемая «Файлы Flashcookies»). Эти технологии также могут использоваться для сбора и хранения информации об использовании Вами Сервисов Компании для целей статистики и исследования, например, страницы, которые Вы посетили, контент, который Вы видели, поисковые запросы, которые Вы ввели, и реклама, которую Вы увидели. Все данные об активности пользователя собираются и обрабатываются в обезличенной форме. Больше информации содержится в Политике использования файлов Cookie.
                        </p>
                        <h2 class="privacy__subtitle">
                            Мы не собираем:
                        </h2>
                        <p class="privacy__content">
                            Финансовую информацию у платежных сервисов: в некоторых случаях мы используем услуги неаффилированных платежных сервисов, чтобы предоставить Вам возможность приобрести товар или сделать платеж («Платежный сервис»). Если Вы хотите приобрести товар или сделать платеж с использованием Платежного сервиса, Вы будете перенаправлены на страницу Платежного сервиса. К любой информации, которую Вы предоставите Платежному сервису, будут применяться условия политики конфиденциальности Платежного сервиса, а не настоящей Политики конфиденциальности. У нас нет доступа к какой-либо платежной информации Платежного сервиса.
                        </p>
                        <p class="privacy__content">
                            Специальные категории персональных данных и биометрические данные: мы просим Вас не направлять нам и не раскрывать в наш адрес какие-либо персональные данные, относящиеся к «чувствительным» данным (включая информацию, касающуюся расовой, национальной принадлежности, политических взглядов, религиозных или философских убеждений, состояния здоровья, интимной жизни, судимости или участия в профсоюзах, или биометрические данные) в рамках или посредством Сервисов Компании или иным образом.
                        </p>
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
