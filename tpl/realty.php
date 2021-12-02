<html>

<head>
    <title>{{name}}</title>
</head>

<body>
    <div><wb-module wb="module=yonger&mode=render&view=header" /></div>

    <div class="page-bg">

        <div class="page-bg__wrapper">
            
            <div class="realty-item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-auto">
                            <div class="realty-item__sidebar">
                                <div class="back">
                                    <a href="realty.html" class="back__arrow"></a>
                                    <h1 class="back__title">
                                        Аврора
                                    </h1>
                                </div>
                                <div class="realty-item__slider">
                                    <div class="realty-item__slider-for">
                                        <wb-foreach wb="from=cover&tpl=false">
                                            <div class="realty-item__big-img" style="background-image: url(/thumbc/424x337/src{{img}});"></div>
                                        </wb-foreach>
                                    </div>
                                    <div class="realty-item__slider-nav">
                                        <wb-foreach wb="from=cover&tpl=false">
                                        <div class="realty-item__small-img" style="background-image: url(/thumbc/424x337/src{{img}});"></div>
                                        </wb-foreach>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="realty-item__info">
                                <div class="realty-item__info">
                                    <h2 class="realty-item__title">
                                        {{name}}
                                    </h2>
                                    <p class="realty-item__descr">
                                        {{text}}
                                    </p>
                                    <div class="realty-item__address">
                                        <p>{{address}}</p>
                                        <p wb-if="'{{square}}'>''">Площадь: {{square}} м2.</p>
                                    </div>
                                    <div class="realty-item__price" wb-if="'{{price}}'>''">
                                        <span>25 000 Р.</span> В месяц
                                    </div>
                            <button class="btn" data-toggle="modal" data-target="#exampleModalCenter">
                                Меня интересует
                            </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div><wb-module wb="module=yonger&mode=render&view=footer" /></div>

</body>

</html>