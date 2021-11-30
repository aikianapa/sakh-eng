<html>

<head>
    <title>{{name}}</title>
</head>

<body>
    <div><wb-module wb="module=yonger&mode=render&view=header" /></div>

    <div class="page-bg">
        <div class="page-bg__wrapper">
            <section class="machinery">
                <div class="container">
                    <div class="back">
                        <a href="/rent" class="back__arrow"></a>
                        <h1 class="back__title">
                            {{name}}
                        </h1>
                    </div>
                    <div class="machinery__wrapper">
                        <img src="/thumbc/420x450/src{{attaches.0.img}}" alt="{{name}}" class="machinery__img">
                        <div class="machinery__info">
                            <h2 class="machinery__title">
                                {{name}}
                            </h2>
                            <p class="machinery__descr text-break">
                                {{text}}
                            </p>
                            <p class="machinery__address">
                                {{address}}
                            </p>
                            <p class="machinery__price">
                                <wb-var period="{'d':'Сутки','m':'Месяц','y':'Год'}" />
                                <span>{{price}} Р.</span> {{_var.period.{{period}}}}
                            </p>
                            <button class="btn" data-toggle="modal" data-target="#exampleModalCenter">
                                Хочу арендовать
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
    <div><wb-module wb="module=yonger&mode=render&view=footer" /></div>

</body>

</html>