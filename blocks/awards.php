<view>
    <div class="page-bg">
        <div class="page-bg__wrapper">

            <section class="awards">
                <div class="awards__bg" style="--bg-image: url('{{image.0.img}}');"></div>
                <div class="awards__content">
                    <div class="container">
                        <h1 class="awards__title">
                            {{_parent.header}}
                        </h1>
                        <p class="awards__descr text-break">
                            {{text}}
                        </p>
                        <div class="row awards__item">
                            <wb-foreach wb="from=counts&tpl=false">
                                <div class="col-sm-4 col-lg-3">
                                    <div class="awards__icon awards__icon--{{_ndx}}"></div>
                                    <p class="awards__number">
                                        {{cnt_number}}
                                    </p>
                                    <p class="awards__info">
                                        {{cnt_text}}
                                    </p>
                                </div>
                            </wb-foreach>
                        </div>
                        <h2 class="awards__subtitle">
                            {{awd_header}}
                        </h2>

                        <wb-foreach wb="from=awards&tpl=false">
                            <div class="row" style="margin-bottom: 80px;">
                                <div class="col-md-5 col-lg-4 col-xl-3">
                                    <div class="awards__diploma">
                                        <img src="/thumbc/260x370/src{{aw_images.0.img}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-8 col-xl-6">
                                    <div class="awards__year">
                                        {{aw_year}}
                                    </div>
                                    <div class="awards-year__descr">
                                        {{aw_text}}
                                    </div>
                                    <div class="awards__project">
                                        За проект:
                                        <a href="{{aw_link}}" class="awards__link">
                                            {{aw_name}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </wb-foreach>
                    </div>
                </div>
            </section>
        </div>
    </div>
</view>

<edit>
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>

    <div class="form-group row align-items-center">
        <div class="col">
            <wb-module wb="module=filepicker&mode=single&width=1366&&height=450" wb-path="/uploads/awards/" name="image"></wb-module>
        </div>
    </div>

    <div class="form-group row align-items-center">
        <label class="col-sm-3">Заголовок</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="header">
        </div>
    </div>

    <div class="form-group row align-items-center">
        <label class="col-sm-3">Текст</label>
        <div class="col-sm-9">
            <textarea class="form-control" rows="auto" name="text"></textarea>
        </div>
    </div>
    <div class="divider-text">Счётчики</div>
    <wb-multiinput name="counts">
        <div class="col-sm-3">
            <input class="form-control" type="text" name="cnt_number">
        </div>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="cnt_text">
        </div>
    </wb-multiinput>
    <div class="divider-text">Награды</div>
    <div class="form-group row align-items-center">
        <label class="col-sm-3">Заголовок</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="awd_header">
        </div>
    </div>
    <wb-multiinput name="awards">
        <div class="col-3">
            <wb-module wb="module=filepicker&mode=single&width=260&&height=370" wb-path="/uploads/awards/" name="aw_images">
            </wb-module>
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-12 mt-2">
                    <input class="form-control" type="text" name="aw_name" placeholder="Название проекта">
                </div>
                <div class="col-12 mt-1">
                    <textarea class="form-control" rows="auto" name="aw_text" placeholder="Описание"></textarea>
                </div>
                <div class="col-sm-3 mt-1">
                    <input class="form-control" type="number" name="aw_year" placeholder="Год">
                </div>
                <div class="col-sm-9 mt-1">
                    <input class="form-control" type="text" name="aw_link" placeholder="Ссылка">
                </div>
            </div>
        </div>

    </wb-multiinput>
</edit>