<view>
    <div class="page-bg">
        <video class="slideGallery__video" autoplay="true" muted="true" playsinline="true" loop="true">
            <source src="assets/video/common.webm" type="video/webm">
            <source src="assets/video/common.mp4" type="video/mp4">
            </source>
            </source>
        </video>
        <div class="page-bg__wrapper">

            <div class="company">
                <div class="container">

                    <h2 class="company__subtitle">{{header}}</h2>
                    <h1 class="company__title page-title">{{_parent.header}}</h1>

                    <div class="company__slider">
                        <div class="company__slider-nav">
                            <wb-foreach wb="from=history&tpl=false">
                            <div class="company__year">{{year}}</div>
                            </wb-foreach>
                        </div>
                        <div id="company__modal--id" class="company__modal">

                            <span class="company__modal--close">×</span>

                            <img class="company__modal--content" id="company__modal--img01">

                            <div id="company__modal--caption"></div>
                        </div>
                        <div class="company__slider-for">
                            <wb-foreach wb="from=history&tpl=false">
                            <div class="company__item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="company__descr">
                                            {{text}}
                                        </p>

                                    </div>
                                    <div class="col-lg-6">
                                        <img class="img-fluid w-100" src="/thumbc/800x600/src{{image.0.img}}">
                                    </div>
                                </div>
                            </div>
                            </wb-foreach>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</view>

<edit header="История компании">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row align-items-center">
        <label class="col-sm-3">Заголовок</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="header">
        </div>
    </div>
    <wb-multiinput name="history">
        <div class="col-3">
            <wb-module wb="module=filepicker&mode=single&width=800&height=600" wb-path="/uploads/company/" name="image">
            </wb-module>
        </div>
        <div class="col-9">
            <div class="row">
            <div class="col-sm-3 mt-2">
                <input class="form-control" type="number" name="year" placeholder="Год">
            </div>
            <div class="col-12 mt-1">
                    <textarea class="form-control" rows="auto" name="text" placeholder="Текст"></textarea>
                </div>
            </div>
        </div>
    </wb-multiinput>
</edit>