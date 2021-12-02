<view>
    <div class="page-bg" style="background-image: url();">
        <div class="page-bg__wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sidebar sidebar--realty">
                            <div class="back back--realty">
                                <a href="/projects" class="back__arrow"></a>
                                <h1 class="back__title back__title--realty">
                                    Недвижимость
                                </h1>
                            </div>
                            <ul class="sidebar__list sidebar__list--realty" wb-tree="item=realty&children=false">
                                <li class="sidebar__item sidebar__item--realty">
                                    <a href="/realty-{{id}}" class="sidebar__link">
                                        {{name}}
                                    </a>
                                    <div class="sidebar__hidden ">
                                        <a href="/residential-map" class="sidebar-hidden__link ">
                                            На карте
                                        </a>
                                        <a href="/residential-district" class="sidebar-hidden__link ">
                                            По району
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">

                        <div class="projects">
                            <div class="projects__list" id="projectsList">
                                <wb-var filter="category={{_route.view}}" wb-if="'{{_route.view}}'>''" />
                                <wb-foreach wb="table=realty&sort=date:d&size=9&bind=page.realty" wb-filter="{{_var.filter}}">
                                <a href="/realty/{{id}}/{{wbFurlGenerate({{name}})}}" class="projects__item">
                                    <div class="projects__name overflow-ellipsis">
                                        {{name}}
                                    </div>
                                    <div class="projects__geo overflow-ellipsis">
                                        {{address}}
                                    </div>
                                    <div class="projects__date">
                                        <span>Ввод в эксплуатацию:</span> {{deadline}}
                                    </div>
                                    <img src="/thumbc/400x300/src{{cover.0.img}}" alt="{{name}}"
                                        class="projects__img">
                                </a>
                                </wb-foreach>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</view>

<edit header="Страница - Недвижимость">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>