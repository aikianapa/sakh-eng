<view>
    <div class="page-bg">
        <div class="page-bg__wrapper">

            <section class="">
                <div class="container">
                    <div class="privacy__wrapper">
                        <h1 class="privacy__title">
                            {{title}}
                        </h1>
                        {{text}}
                    </div>
                </div>
            </section>
        </div>
    </div>
</view>

<edit header="Текст">
    <div>
        <wb-module wb="module=yonger&mode=edit&block=common.inc" />
    </div>
    <div class="form-group row">
        <div class="col-12">
            <label class="form-control-label">Заголовок</label>
            <input type="text" name="title" class="form-control" placeholder="Заголовок">
        </div>
        <div class="col-12">
            <label class="form-control-label">Текст</label>
            <wb-module wb="module=jodit" name="text" placeholder="Текст" />
        </div>
    </div>

</edit>