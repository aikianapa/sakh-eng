<view>
    <div class="page-bg" style="background-image: url();">
        <div class="page-bg__wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar__title">
                                Тип проекта:
                            </div>
                            <ul class="sidebar__list">
                                <li class="sidebar__item">
                                    <a href="/realty" class="sidebar__link">
                                        Недвижимость
                                    </a>
                                </li>
                                <li class="sidebar__item">
                                    <a href="/laboratory" class="sidebar__link">
                                        Строительная лаборатория
                                    </a>
                                </li>
                                <li class="sidebar__item sidebar__item--active">
                                    <a href="/rent" class="sidebar__link">
                                        Аренда строительной техники
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">

                        <div class="projects projects__rent">
                            <div class="projects__list" id="projectsList">
                                <wb-foreach wb="table=rent&sort=_created:d&bind=page.rent">
                                <a href="/rent/{{id}}/{{wbFurlGenerate({{name}})}}" class="projects__item">
                                    <div class="projects__name">
                                        {{name}}
                                    </div>
                                    <img src="/thumbc/400x300/src/{{attaches.0.img}}" class="projects__img" alt="{{attaches.0.alt}}">
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

<edit header="Страница - Аренда строительной техники">
    <div><wb-module wb="module=yonger&mode=edit&block=common.inc" /></div>
</edit>