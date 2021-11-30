<view>
    <div class="page-bg">
        <div class="page-bg__wrapper">
            <div class="contacts">
                <div class="container">
                    <div class="contacts__wrapper">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="contacts__info">
                                    <h1 class="contacts__title page-title">
                                        {{_parent.header}}
                                    </h1>
                                    <div id="accordion">
                                        
                                        <wb-foreach wb="from=divisions">
                                        <wb-var collapse="show" wb-if="'{{_idx}}'=='0'" else="" />
                                        <div class="contacts-card">
                                            <div class="contacts-card-header" id="heading{{_ndx}}">
                                                <a class="contacts__subtitle collapsed" data-toggle="collapse"
                                                    data-target="#collapse{{_ndx}}" aria-expanded="false"
                                                    aria-controls="collapse{{_ndx}}">
                                                    {{div_name}}
                                                </a>
                                            </div>
                                            <div id="collapse{{_ndx}}" class="collapse {{_var.collapse}}" aria-labelledby="heading{{_ndx}}" data-parent="#accordion">
                                                <div class="contacts__descr">
                                                    <p class="contacts__contact" data-gpos="{{div_gpos1}}">
                                                        {{div_addr1}}
                                                    </p>
                                                    <p class="contacts__contact" data-gpos="{{div_gpos2}}">
                                                        {{div_addr2}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        </wb-foreach>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="contacts__map" id="ymap">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=1a2c9fab-5efe-4df5-9b87-4dab6b652569&lang=ru_RU"></script>
    <script>
    ymaps.ready(init);

    var pos = [
        [46.968871, 142.728024],
        [48.462070, 135.087125]
    ];

    function init() {
        var myMap = new ymaps.Map("ymap", {
            center: pos[0],
            zoom: 12
        }, {
            searchControlProvider: 'yandex#search'
        })


        myMap.geoObjects
            //.add(myGeoObject)
            .add(new ymaps.Placemark(pos[0], {
                balloonContent: 'г. Южно-Сахалинск, ул. Ленина, д. 69'
            }, {
                preset: 'islands#dotIcon',
                iconColor: '#0095b6'
            }))
            .add(new ymaps.Placemark(pos[1], {
                balloonContent: 'г. Хабаровск, ул. Пионерская, 1е'
            }, {
                preset: 'islands#dotIcon',
                iconColor: '#0095b6'
            }));

        $('p.contacts__contact').on('click', function() {
            let addr = $(this).text();
            let gpos;
            eval("gpos = ["+$(this).data('gpos')+"]");
            myMap.geoObjects.removeAll();
            myMap.geoObjects.add(new ymaps.Placemark(gpos, {
                balloonContent: addr
            }, {
                preset: 'islands#dotIcon',
                iconColor: '#0095b6'
            }));
            myMap.setCenter(gpos);

        });

    }
    </script>

</view>

<edit header="Контакты">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <wb-multiinput name="divisions">
        <div class="col-12 mb-1">
            <input class="form-control tx-semibold" type="text" name="div_name" placeholder="Наименование">
        </div>

                <div class="col-8 mb-1">
                    <input class="form-control" type="text" name="div_addr1" placeholder="Адрес в Южно-Сахалинске">
                </div>
                <div class="col-4 mb-1">
                    <input class="form-control" type="text" name="div_gpos1" placeholder="Геопозиция">
                </div>
                <div class="col-8 mb-1">
                    <input class="form-control" type="text" name="div_addr2" placeholder="Адрес в Хабаровске">
                </div>
                <div class="col-4 mb-1">
                    <input class="form-control" type="text" name="div_gpos2" placeholder="Геопозиция">
                </div>

    </wb-multiinput>
</edit>