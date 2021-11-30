<view>
    <div class="page-bg" style="background-image: url();">
        <div class="page-bg__wrapper">

            <section class="laboratory">
                <div class="container container--relative">
                    <div class="back">
                        <a href="/projects" class="back__arrow"></a>
                        <h1 class="back__title">
                            {{_parent.header}}
                        </h1>
                    </div>
                    <div class="laboratory__wrapper">
                        {{text}}
                        <div class="laboratory__img-wrap">
                            <wb-foreach wb="from=images&limit=3&tpl=false">
                            <img src="/thumbc/120x120/src{{img}}" alt="laboratory"
                                class="laboratory__img laboratory__img--{{_ndx}}">
                            </wb-foreach>
                        </div>
                        <h2 class="laboratory__subtitle">
                            {{title}}
                        </h2>
                        <div class="laboratory__contacts">
                            <a href="tel:+{{wbDigitsOnly({{phone1}})}}" wb-if="'{{phone1}}'>''" class="laboratory__contact">
                                {{phone1}}
                            </a>
                            <a href="tel:+{{wbDigitsOnly({{phone2}})}}" wb-if="'{{phone2}}'>''" class="laboratory__contact">
                                {{phone2}}
                            </a>
                            <a href="mailto:lab@sakh-eng.ru" wb-if="'{{email}}'>''" class="laboratory__contact">
                                {{email}}
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <wb-jq wb="$dom->find('.laboratory__wrapper > p')->addClass('laboratory__text')" />
</view>

<edit header="Страница Лаборатория">
<div><wb-module wb="module=yonger&mode=edit&block=common.inc" /></div>

    <div class="form-group row">
        <label class="col-auto">Текст</label>
        <div class="col">
        <input class="form-control" type="text" name="title" placeholder="Текст перед телефонами">
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

        <div class="form-group row">
            <div class="col-12">
                <wb-module wb="{'module':'jodit'}" name="text"></wb-module>
            </div>
        </div>
<div class="form-group row">
        <div class="col-12">
                <wb-module wb="module=filepicker&mode=multiple&width=120&height=120" wb-path="/uploads/laboratory" name="images"></wb-module>
            </div>
            </div>
</edit>