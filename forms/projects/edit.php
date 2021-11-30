<html>
<div class="modal fade effect-scale show removable" id="modalProjectEdit" data-backdrop="static" tabindex="-1"
    role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header row">
                <div class="col-5">
                    <h5>Проект</h5>
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
                        <div class="accordion wd-100p" id="projectsEditaccordion">
                            <h6>Первый экран</h6>

                            <div class="col-12">

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <wb-module name="cover" wb="{
                                'module':'filepicker',
                                'mode':'single',
                                'width': '400',
                                'height': '170'
                                }" wb-path="/uploads/projects" />
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">{{_lang.name}}</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="{{_lang.name}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">{{_lang.deadline}}</label>
                                            <input type="text" name="deadline" class="form-control"
                                                placeholder="{{_lang.deadline}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">{{_lang.address}}</label>
                                    <input type="text" name="address" class="form-control"
                                        placeholder="{{_lang.address}}">
                                </div>

                                <ul class="nav nav-tabs" id="{{form}}Tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab"
                                            href="#tab-{{form}}About" role="tab" aria-selected="true">О проекте</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tab-{{form}}Infr"
                                            role="tab" aria-selected="false">Инфраструктура</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab-{{form}}Plan"
                                            role="tab" aria-selected="false">Генплан</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tab-{{form}}Space"
                                            role="tab" aria-selected="false">Пространство</a>
                                    </li>

                                </ul>
                                <div class="tab-content bd bd-gray-300 bd-0 pd-0 pd-y-10" id="{{form}}TabsContent">
                                    <div class="tab-pane fade show active" id="tab-{{form}}About" role="tabpanel">
                                        <textarea name="tabs_about" rows="auto" class="form-control"></textarea>
                                    </div>
                                    <div class="tab-pane fade" id="tab-{{form}}Plan" role="tabpanel">
                                        <textarea name="tabs_plan" rows="auto" class="form-control"></textarea>
                                    </div>
                                    <div class="tab-pane fade" id="tab-{{form}}Infr" role="tabpanel">
                                        <textarea name="tabs_infr" rows="auto" class="form-control"></textarea>
                                    </div>
                                    <div class="tab-pane fade" id="tab-{{form}}Space" role="tabpanel">
                                        <textarea name="tabs_space" rows="auto" class="form-control"></textarea>
                                    </div>
                                </div>

                            </div>

                            <h6>Второй экран</h6>
                            <div class="col-12">
                                <wb-multiinput name="plates">
                                    <div class="col-sm-3">
                                        <wb-module wb="module=filepicker&mode=single&width=300&&height=200"
                                            wb-path="/uploads/projects/" name="pl_bkg">
                                        </wb-module>
                                    </div>
                                    <div class="col-sm-9 pl-2">
                                        <div class="form-group row pt-2 pl-2">
                                            <div class="col-12 mb-1">
                                                <input type="text" name="pl_title" class="form-control tx-semibold"
                                                    placeholder="Заголовок">
                                            </div>
                                            <div class="col-12">
                                                <textarea name="pl_text" rows="auto" class="form-control"
                                                    placeholder="Текст"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </wb-multiinput>
                            </div>
                            <h6>Третий экран</h6>
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-sm-9 pl-2">
                                        <div class="form-group row pt-2 pl-2">
                                            <div class="col-12 mb-1">
                                                <input type="text" name="b3_title" class="form-control tx-semibold"
                                                    placeholder="Заголовок">
                                            </div>
                                            <div class="col-12">
                                                <textarea name="b3_text" rows="auto" class="form-control"
                                                    placeholder="Текст"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <wb-module wb="module=filepicker&mode=single&width=300&&height=200"
                                            wb-path="/uploads/projects/" name="b3_bkg">
                                        </wb-module>
                                    </div>
                                </div>
                            </div>

                            <h6>Четвёртый экран</h6>
                            <div class="col-12">
                                <input wb="module=yamap&height=400" name="position">
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
                    <script>
                    $('#projectsEditaccordion').accordion({
                        heightStyle: 'content'
                    });
                    </script>
<wb-lang>
    [ru]
    name = Наименование
    deadline = Ввод в эксплуатацию
    text = Текст
    price = Цена
    info = Информация
    address = Адрес местонахождения
</wb-lang>

</html>