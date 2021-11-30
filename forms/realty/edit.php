<html>
<div class="modal fade effect-scale show removable" id="modalRealtyEdit" data-backdrop="static" tabindex="-1"
    role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header row">
                <div class="col-5">
                    <h5>Объект недвижимости</h5>
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
                    <div class="col-12">
                        <div class="form-group row">
                            <div class="col-md-6">
                            <wb-module name="cover" wb="{
                                'module':'filepicker',
                                'mode':'single',
                                'width': '400',
                                'height': '150'
                                }" wb-path="/uploads/realty" />
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">{{_lang.name}}</label>
                                    <input type="text" name="name" class="form-control" placeholder="{{_lang.name}}" required>
                                </div>                                
                                <div class="form-group">
                                    <label class="form-control-label">{{_lang.deadline}}</label>
                                    <input type="text" name="deadline" class="form-control" placeholder="{{_lang.deadline}}">
                                </div>
                            </div>
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
    deadline = Срок сдачи
    text = Текст
    price = Цена
    info = Информация
    address = Адрес местонахождения
</wb-lang>

</html>