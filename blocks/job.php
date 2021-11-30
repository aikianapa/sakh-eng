<view>
    <div class="page-bg" style="background-image: url();">
        <div class="page-bg__wrapper">


            <section class="job">
                <div class="container">
                    <div class="job__header">
                        <div class="row align-items-center">
                            <div class="col-md-auto text-right">
                                <div class="job__contacts">
                                    Все вопросы по телефонам:
                                    <a class="job__tel" href="tel:+74242456483">+7 (4242) 456–483</a>
                                    <a class="job__tel" href="tel:+74242456026">+7 (4242) 456-026</a>
                                    <a class="job__tel" href="http://se.idees.ru/ea@sakh-eng.ru">ea@sakh-eng.ru</a>
                                </div>
                            </div>

                            <div class="col-md-auto text-right">
                                <button class="btn" data-toggle="modal" data-target="#exampleModalCenter-resume">
                                    Отправить резюме
                                </button>
                            </div>

                        </div>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-staff" role="tabpanel"
                            aria-labelledby="pills-staff-tab">
                            <div class="job__list">
                                <wb-foreach wb="from=job&size=999&tpl=false">
                                <div class="job__item">
                                    <h2 class="job__title">
                                        {{vacancy}}
                                    </h2>
                                    <p class="job__descr">
                                        {{descr}}
                                    </p>
                                    <p class="job__date">
                                        {{datetext({{date}})}}
                                    </p>
                                </div>
                                </wb-foreach>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</view>

<edit header="Страница - Карьера">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <wb-multiinput name="job">
        <div class="col">
            <input type="datepicker" name="date" class="form-control" wb="module=datetimepicker" placeholder="Дата вакансии" >
        </div>
        <div class="col">
            <input type="text" name="vacancy" class="form-control" placeholder="Вакансия">
        </div>
        <div class="col">
            <textarea rows="auto" name="descr" class="form-control" placeholder="Подробно"></textarea>
        </div>

    </wb-multiinput>
</edit>