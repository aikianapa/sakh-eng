<html>

<head>
    <title>{{header}}</title>
</head>

<body>
    <div><wb-module wb="module=yonger&mode=render&view=header" /></div>

    <div class="page-bg">
        <div class="page-bg__wrapper">
            <section class="post">
                <div class="container">
                    <div class="post__wrapper">
                        <div class="post__date">
                            {{wbDate("d.m.Y",{{date}})}}
                        </div>
                        <div class="post__title" wb-if="'{{header}}' > ''">
                            {{header}}
                        </div>
                        <img src="/thumbc/750x300/src{{cover.0.img}}" alt="{{header}}" class="post__img">
                        <wb-module wb="module=yonger&mode=render" />
                    </div>
                </div>
            </section>
        </div>

    </div>
    <div><wb-module wb="module=yonger&mode=render&view=footer" /></div>

</body>

</html>