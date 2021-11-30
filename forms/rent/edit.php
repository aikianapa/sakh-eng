<html>
<div class="modal fade effect-scale show removable" id="modalRentEdit" data-backdrop="static" tabindex="-1"
    role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header row">
                <div class="col-5">
                    <h5>Техника в аренду</h5>
                </div>
                <div class="col-7">
                    <h5 class='header'></h5>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" name="active" id="{{_form}}SwitchItemActive"
                            onchange="$('#{{_form}}ValueItemActive').prop('checked',$(this).prop('checked'));">
                        <label class="custom-control-label" for="{{_form}}SwitchItemActive">Отображать</label>
                    </div>
                </div>
                <i class="fa fa-close r-20 position-absolute cursor-pointer" data-dismiss="modal"
                    aria-label="Close"></i>
            </div>
            <div class="modal-body pd-20">
                <form class="row" method="post" id="{{_form}}EditForm">
                    <input type="checkbox" class="custom-control-input" name="active" id="{{_form}}ValueItemActive">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">{{_lang.name}}</label>
                            <input type="text" name="name" class="form-control" placeholder="{{_lang.name}}" required>
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">{{_lang.text}}</label>
                            <textarea name="text" rows="auto" class="form-control"
                                placeholder="{{_lang.text}}"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">{{_lang.address}}</label>
                            <input type="text" name="address" class="form-control" placeholder="{{_lang.address}}">
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label">{{_lang.price}}</label>
                                <input type="number" name="price" class="form-control" placeholder="{{_lang.price}}">
                            </div>

                            <div class="form-group col-md-6">
                                <label class="form-control-label">&nbsp;</label>
                                <select class="form-control" name="period">
                                    <option value="d">в сутки</option>
                                    <option value="m">в месяц</option>
                                    <option value="y">в год</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <h5>{{_lang.appends}}</h5>
                        <div>
                            <wb-module name="attaches" wb="{
                                'module':'filepicker',
                                'mode':'multi',
                                'width': '200',
                                'height': '200',
                                'button': 'Изображения'

                                }" wb-path="/uploads/rent" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer pd-x-20 pd-b-20 pd-t-0 bd-t-0">
                <wb-include wb="{'form':'common_formsave.php'}" />
            </div>
        </div>
    </div>
</div>
<wb-lang>
    [ru]
    name = Наименование
    text = Текст
    price = Цена
    info = Информация
    address = Адрес местонахождения
</wb-lang>

</html>