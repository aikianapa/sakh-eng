<view>
    <div class="wrapper">
        <main class="page">
            <div class="page__wrapper">
                <div class="page__screen screen">
                    <div class="screen__content">
                        <div class="container" data-swiper-parallax="50%" data-swiper-parallax-opacity="0">
                            <h1 class="main__title main__title--1">
                                {{s1_title}}
                            </h1>
                            <p class="main__descr main__descr--1">
                                {{s1_text}}
                            </p>
                        </div>
                    </div>
                    <div class="screen__body">
                        <div class="screen__image" data-swiper-parallax="33%" data-swiper-parallax-scale="1.1">
                            <video class="slideGallery__video" autoplay="true" muted="true" playsinline="true" loop="true">
                                <source src="/assets/video/slide01.webm" type="video/webm"></source>
                                <source src="/assets/video/slide01.mp4" type="video/mp4">
                            </source></video>
                        </div>
                    </div>
                </div>
                <div class="page__screen screen">
                    <div class="screen__content">
                        <div class="container container--relative" data-swiper-parallax="50%" data-swiper-parallax-opacity="0">
                            <div class="row">
                                <div class="col-xl-6">
                                    <h1 class="main__title approach__title">
                                        {{s2_title}}
                                    </h1>
                                    <p class="main__descr approach__descr">
                                        {{s2_text}}
                                    </p>
                                </div>
                                <div class="col-xl-6">
                                    <div class="row approach__right gutters-8">
                                        <wb-foreach wb="from=s2_counts">
                                        <div class="col-6 col-lg-3 col-xl-6">
                                            <div class="approach__item">
                                                <h3 class="approach__img circle">{{s2_num}}</h3>
                                                <div class="approach__subtitle">{{s2_num_text}}</div>
                                            </div>
                                        </div>
                                        </wb-foreach>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="screen__body">
                        <div class="screen__image" data-swiper-parallax="33%" data-swiper-parallax-scale="1.1">
                            <video class="slideGallery__video" autoplay="true" muted="true" playsinline="true" loop="true">
                                <source src="/assets/video/slide02.webm" type="video/webm">
                                <source src="/assets/video/slide02.mp4" type="video/mp4">
                            </source></source></video>
                        </div>
                    </div>
                </div>
                <div class="page__screen screen">
                    <div class="screen__content">
                        <div class="container container--relative" data-swiper-parallax="50%" data-swiper-parallax-opacity="0">
                            <div class="row">
                                <div class="col-xl-4 position-static">
                                    <h1 class="main__title partners__title">
                                        {{s3_title}}
                                    </h1>
                                    <p class="main__descr partners__descr">
                                        {{s3_text}}
                                    </p>
                                </div>
                                <div class="col-xl-8">
                                    <!-- Include tpl: _partners.inc.php -->
                                    <div class="slick pb-1r py-5">
                                        <wb-foreach wb="from=s3_images">
                                        <img class="my-4 px-3 py-3" src="/thumb/195x50/src{{img}}" alt="{{alt}}">
                                        </wb-foreach>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="screen__body">
                        <div class="screen__image" data-swiper-parallax="33%" data-swiper-parallax-scale="1.1">
                            <video class="slideGallery__video" autoplay="true" muted="true" playsinline="true" loop="true">
                                <source src="/assets/video/slide03.webm" type="video/webm">
                                <source src="/assets/video/slide03.mp4" type="video/mp4">
                            </source></source></video>
                        </div>
                    </div>
                </div>
                <div class="page__screen screen">
                    <div class="screen__content">
                        <div class="container" data-swiper-parallax="50%" data-swiper-parallax-opacity="0">
                            <div class="row no-gutters last-news__header">
                                <div class="col-xl-5">
                                    <h1 class="main__title last-news__title">
                                        {{s4_title}}
                                    </h1>
                                </div>
                                <div class="col-xl-5">
                                    <p class="main__descr last-news__descr">
                                        {{s4_text}}
                                    </p>
                                </div>
                                <div class="col-xl-2 mt-5 mt-md-0 text-xl-right">
                                    <a href="/news" class="last-news__watch">
                                        Смотреть все
                                    </a>
                                </div>
                            </div>
                            <div class="last-news__cards">
                                <wb-foreach wb="table=news&tpl=false&limit=10">
                                <div class="last-news__card">
                                    <img src="/thumbc/350x190/src{{cover.0.img}}" alt="{{cover.0.alt}}" class="last-news__img">
                                    <div class="last-news__date">
                                        {{datetext({{date}})}}
                                    </div>
                                    <a href="/news/{{id}}/{{wbFurlGenerate({{header}})}}" class="last-news__subtitle">
                                        {{header}}
                                    </a>
                                </div>
                                </wb-foreach>
                            </div>
                        </div>
                    </div>
                    <div class="screen__body">
                        <div class="screen__image" data-swiper-parallax="33%" data-swiper-parallax-scale="1.1">
                            <video class="slideGallery__video" autoplay="true" muted="true" playsinline="true" loop="true">
                                <source src="/assets/video/slide04.webm" type="video/webm">
                                <source src="/assets/video/slide04.mp4" type="video/mp4">
                            </source></source></video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page__pagination"></div>
            <div class="page__scroll"></div>
</main>
</div>
</view>

<edit header="Главная страница">
    <div><wb-module wb="module=yonger&mode=edit&block=common.inc" /></div>
    <div class="accordion">
    <h6>Слайд 1 (главный)</h6>
    <div>
        <div class="form-group">
            <label>Заголовок</label>
            <input class="form-control" type="text" name="s1_title">
        </div>
        <div class="form-group">
            <label>Текст</label>
            <textarea rows="auto" class="form-control" type="text" name="s1_text"></textarea>
        </div>
        <!--
        <div class="divider-text">Фоновое видео</div>
        <div class="form-group row">
            <div class="col-6">
                <label>webm</label>
            <wb-module wb="module=filepicker&width=320&height=240&original=true&mode=single&ext=webm" name="s1_webp" wb-path="/assets/video/"></wb-module>    
            </div>
            <div class="col-6">
                <label>mp4</label>
            <wb-module wb="module=filepicker&width=320&height=240&original=true&mode=single&ext=mp4" name="s1_mp4" wb-path="/assets/video/"></wb-module>                
            </div>
        </div>
        -->
    </div>
    <h6>Слайд 2 (числа)</h6>
    <div>
        <div class="form-group">
            <label>Заголовок</label>
            <input class="form-control" type="text" name="s2_title">
        </div>
        <div class="form-group">
            <label>Текст</label>
            <textarea rows="auto" class="form-control" type="text" name="s2_text"></textarea>
        </div>
        <div class="form-group">
            <wb-multiinput name="s2_counts">
                <div class="col-3">
                    <input class="form-control" type="number" name="s2_num" placeholder="Число">
                </div>
                <div class="col-9">
                    <input class="form-control" type="text" name="s2_num_text" placeholder="Подпись">
                </div>
            </wb-multiinput>
        </div>
    </div>
    <h6>Слайд 3 (партнёры)</h6>
    <div>
        <div class="form-group">
            <label>Заголовок</label>
            <input class="form-control" type="text" name="s3_title">
        </div>
        <div class="form-group">
            <label>Текст</label>
            <textarea rows="auto" class="form-control" type="text" name="s3_text"></textarea>
        </div>
        <div class="form-group">
            <wb-module wb="module=filepicker&crop=true&width=195&height=50&original=true" name="s3_images" wb-path="/assets/img/partners"></wb-module>
        </div>

    </div>
    <h6>Слайд 4 (новости)</h6>
    <div>
        <div class="form-group">
            <label>Заголовок</label>
            <input class="form-control" type="text" name="s4_title">
        </div>
        <div class="form-group">
            <label>Текст</label>
            <textarea rows="auto" class="form-control" type="text" name="s4_text"></textarea>
        </div>
    </div>
    </div>
<script>
$('.accordion').accordion({
  heightStyle: 'content'
});
</script>
</edit>