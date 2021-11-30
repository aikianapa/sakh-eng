<view>
    <div class="page-bg" style="background-image: url();">
        <div class="page-bg__wrapper">


            <section class="news">
                <div class="container">
                    <h1 class="news__title">
                        {{_parent.header}}
                    </h1>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="news__main">
                                <div class="row" id="newsList">
                                    <wb-foreach wb="table=news&sort=date:d&size=9&bind=page.news">
                                        <wb-var col="col-12" wb-if="'{{_idx}}'=='0'" else="col-md-6" />
                                        <div class="{{_var.col}}">
                                            <div class="news__item">
                                                <img src="{{cover.0.img}}" alt="{{cover.0.alt}}" class="news__img">
                                                <p class="news__date">
                                                    {{datetext({{date}})}}
                                                </p>
                                                <a href="/news/{{id}}/{{wbFurlGenerate({{header}})}}" class="news__name">
                                                    {{header}}
                                                </a>
                                            </div>
                                        </div>
                                    </wb-foreach>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="news__last">
                                <div class="news__subtitle">
                                    Последние новости
                                </div>
                                <wb-foreach wb="table=news&sort=date:d&tpl=false&limit=5">
                                <div class="news__item news__item--last">
                                    <div class="news__date news__date--last">
                                        {{datetext({{date}})}}
                                    </div>
                                    <a href="/news/{{id}}/{{wbFurlGenerate({{header}})}}" class="news__name news__name--last">
                                        {{header}}
                                    </a>
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

<edit header="Страница Новости">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
</edit>