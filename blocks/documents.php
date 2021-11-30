<view>
    <div class="page-bg" style="background-image: url();">
        <div class="page-bg__wrapper">

            <section class="documents">
                <div class="container">
                    <div class="documents__header" style="position: absolute !important; width: 300px !important;">
                        {{_parent.header}}
                    </div>
                    <div class="documents__files">
                        <wb-foreach wb="from=docs&tpl=false">
                        <a href="{{doc_file.0.img}}" download class="documents__file" wb-if="'{{{{doc_file.0.img}}}}'>''">
                            <div class="documents__name">
                                {{doc_name}}
                            </div>
                            <div class="documents__download">
                                Скачать
                            </div>
                        </a>
                        </wb-foreach>
                    </div>
                </div>
            </section>
        </div>
    </div>
</view>

<edit header="Документы">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <wb-multiinput name="docs" class="align-items-center">
        <div class="col-3">
            <wb-module wb="module=filepicker&mode=single&width=50&&height=50&original=true" wb-path="/uploads/documents/" name="doc_file">
            </wb-module>
        </div>
                <div class="col-9">
                    <input class="form-control" type="text" name="doc_name" placeholder="Наименование">
                </div>
    </wb-multiinput>
    <wb-jq wb="$dom->find('.wb-multiinput-row')->addClass('align-items-center')" />
</edit>