<html>

<head>
    <title>{{name}}</title>
</head>

<body>
    <div><wb-module wb="module=yonger&mode=render&view=header" /></div>


    <div class="wrapper page-bg">
        <main class="page">
            <div class="page__wrapper">
                <div class="page__screen screen project__page">
                    <div class="screen__content ">
                        <div class="container" data-swiper-parallax="50%" data-swiper-parallax-opacity="0">

                            <div class="project__item">
                                <img src="/thumbc/1480x415/src{{cover.0.img}}" alt="{{name}}"
                                    class="project__img">
                            </div>
                            <div class="project__slide">
                                <div class="project__name">
                                    {{name}}
                                </div>
                                <div class="project__geo">
                                    {{address}}
                                </div>
                                <div class="project__date">
                                    <span>Ввод в эксплуатацию:</span> {{deadline}}
                                </div>
                            </div>
                            <div class="project__slider" wb-if="'{{tabs_about}}{{tabs_infr}}{{tabs_plan}}{{tabs_space}}' > ' '">
                                <div class="project__slider-nav">
                                    <div class="project__info" wb-if="'{{tabs_about}}'>''">О проекте</div>
                                    <div class="project__info" wb-if="'{{tabs_infr}}'>''">Инфраструктура</div>
                                    <div class="project__info" wb-if="'{{tabs_plan}}'>''">Генплан</div>
                                    <div class="project__info" wb-if="'{{tabs_space}}'>''">Пространство</div>

                                </div>

                                <div class="project__slider-for">
                                    <div class="project__slider--item">
                                        <p>{{tabs_about}}</p>
                                    </div>
                                    <div class="project__slider--item">
                                        <p>{{tabs_infr}}</p>
                                    </div>
                                    <div class="project__slider--item">
                                        <p>{{tabs_plan}}</p>
                                    </div>
                                    <div class="project__slider--item">
                                        <p>{{tabs_space}}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="page__screen screen">
                    <div class="screen__content">
                        <div class="container" data-swiper-parallax="0%" data-swiper-parallax-opacity="0">
                                <wb-var small="[2,3,6,7,10,11,14,15,18,19]" />
                                <div class="row no-gutters">
                                <wb-foreach wb="from=plates&tpl=false">
                                    <wb-var col="4" else="8" wb-if="in_array({{_ndx}},{{_var.small}})" />
                                    <!--wb-var size="400x325" else="800x600" wb-if="in_array({{_ndx}},{{_var.small}})" /-->
                                    <div class="col-lg-{{_var.col}} px-1">
                                        <div class="project__grid--item" wb-if="'{{pl_bkg.0.img}}'>''">
                                            <div class="dropdown_project dropdown_project--animated dropdown_project-6">
                                                <div class="dropdown_item-project-1">
                                                    <h4>{{pl_title}}</h4>
                                                    <h6 class="text-break">{{pl_text}}</h6>
                                                </div>
                                            </div>
                                            <img src="{{pl_bkg.0.img}}" alt="{{_parent.name}}"
                                                class="projects__img">
                                        </div>
                                        <div class="project__grid--item-text" wb-if="'{{pl_bkg.0.img}}'==''"> 
                                                <span>
                                                    <h4>{{pl_title}}</h4>
                                                    <h6 class="text-break">{{pl_text}}</h6>
                                                </span>
                                             </div>
                                        </div>
                                </wb-foreach>

                                </div>

                        </div>
                    </div>

                </div>
                <div class="page__screen screen">
                    <div class="screen__content project__thirdslide">
                        <div class="container" data-swiper-parallax="50%" data-swiper-parallax-opacity="0">
                            <h1 class="project__title">{{b3_title}}</h1>
                            <div class="laboratory__wrapper row">
                                <div class="col-lg">
                                    <p class="laboratory__text text-break">
                                        {{b3_text}}
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <img src="{{b3_bkg.0.img}}" alt="project"
                                        class=" project__img--1">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="page__screen screen">
                    <div class="screen__content project__map-container">
                        <div class="container" data-swiper-parallax="50%" data-swiper-parallax-opacity="0">
                            <h2 class="project__map--title">Месторасположение</h2>
                            <div class="project__map">
                                <div wb-module="yamap" geopos='{{position.0.geopos}}' center='{{position.0.geopos}}' zoom="{{position.0.zoom}}" title="{{position.0.address}}"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>
    <div class="page__pagination"></div>
    <div class="page__scroll"></div>



    <div><wb-module wb="module=yonger&mode=render&view=footer" /></div>

</body>

</html>