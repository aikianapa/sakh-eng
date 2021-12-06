<view>
    <div class="page-bg">
        <div class="page-bg__wrapper">
            <div class="container">
                <div class="row align-items-center mb-4">
                    <div class="col">
                        <div class="sidebar__title">
                            Тип объекта:
                        </div>
                        <div class="search__tags" wb-tree="item=realty&children=false">
                            <div class="search__all" wb-if="'{{_idx}}'=='0'">Все</div>
                            <div class="search__tag d-none" data-category="{{id}}">{{name}}</div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button class="search__btn" data-toggle="modal" data-target="#filter">Фильтровать по</button>
                    </div>
                </div>
                <div class="row" id="projectsList">
                    <wb-foreach wb="table=projects&sort=date:d&size=2&bind=page.projects" wb-filter="active=on">
                        <div class="col-md-6 col-lg-4">
                            <a href="/project/{{id}}/{{wbFurlGenerate({{name}})}}" class="search__card">
                                <img src="/thumbc/400x400/src{{cover.0.img}}" alt="" class="search__img">
                                <div class="search__card-wrap">
                                    <span class="search__descr">
                                        <div class="projects__name overflow-ellipsis">
                                            {{name}}
                                        </div>
                                        <div class="projects__geo overflow-ellipsis">
                                            {{address}}
                                        </div>
                                        <div class="projects__date">
                                            <span>Ввод в эксплуатацию:</span> {{deadline}}
                                        </div>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </wb-foreach>
                </div>
            </div>


        </div>
    </div>
    
</view>

<edit header="Страница - проекты">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>