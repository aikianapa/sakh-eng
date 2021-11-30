<view>
    <div class="page-bg" style="background-image: url();">
        <div class="page-bg__wrapper">


            <section class="job">
                <div class="container">
                    <div class="job__header">
                        <div class="row align-items-center">
                            <div class="col-md-auto text-right">
                                <div class="job__contacts">
                                    {{text}}
                                    <a class="job__tel" wb-if="'{{phone1}}'>''" href="tel:+{{wbDigitsOnly({{phone1}})}}">{{phone1}}</a>
                                    <a class="job__tel" wb-if="'{{phone2}}'>''" href="tel:+{{wbDigitsOnly({{phone2}})}}">{{phone2}}</a>
                                    <a class="job__tel" wb-if="'{{email}}'>''" href="mailto:{{email}}">{{email}}</a>
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

    <div class="form-group row">
        <label class="col-auto">Текст</label>
        <div class="col">
        <input class="form-control" type="text" name="text" placeholder="Текст перед телефонами">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-4">
            <input type="phone" name="phone1" class="form-control" wb-mask="+7 (9999) 999-999" placeholder="Телефон #1" >
        </div>
        <div class="col-sm-4">
            <input type="phone" name="phone2" class="form-control" wb-mask="+7 (9999) 999-999" placeholder="Телефон #2" >
        </div>
        <div class="col-sm-4">
            <input type="email" name="email" class="form-control" placeholder="Эл.почта" >
        </div>
    </div>


    <wb-multiinput name="job">
        <div class="col-sm-3">
            <input type="datepicker" name="date" class="form-control tx-semibold" wb="module=datetimepicker" placeholder="Дата вакансии" >
        </div>
        <div class="col-sm-9">
            <input type="text" name="vacancy" class="form-control tx-semibold" placeholder="Вакансия">
        </div>
        <div class="col-12 mt-1">
            <textarea rows="auto" name="descr" class="form-control" placeholder="Подробно"></textarea>
        </div>

    </wb-multiinput>
</edit>