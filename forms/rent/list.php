<html>
<div class="m-3" id="yongerSpace">
    <nav class="nav navbar navbar-expand-md col">
        <h3 class="tx-bold tx-spacing--2 order-1">Аренда техники</h3>
        <a href="#" data-ajax="{'url':'/cms/ajax/form/{{_form}}/edit/_new','html':'#yongerSpace modals'}"
            class="ml-auto order-2 float-right btn btn-primary">
            <img src="/module/myicons/item-select-plus-add.svg?size=24&stroke=FFFFFF" /> Добавить
        </a>
    </nav>
    <wb-var period="{'d':'сутки','m':'месяц','y':'год'}" />
    <table class="table table-striped table-hover tx-15">
        <thead>
            <tr>
                <th>Наименование</th>
                <th>Цена</th>
                <th>Местонахождение</th>
                <th></th>
            </tr>
        </thead>
        <tbody id="{{_form}}List">
            <wb-foreach wb="table={{_form}}&sort=_created:d&bind=cms.list.{{_form}}"
                wb-filter="{'login':'{{_sess.user.login}}' }">
                <tr>
                    <td class="wd-auto">{{name}}</td>
                    <td>{{price}} ₽/{{_var.period.{{period}}}}</td>
                    <td class="wd-auto">{{address}}</td>
                    <td class="wd-150 tx-right">
                        <div class="custom-control custom-switch d-inline">
                            <input wb="module=swico" name="active"  onchange="wbapp.save($(this),{'table':'{{_form}}','id':'{{_id}}','field':'active','silent':true})">
                        </div>
                        <a href="javascript:"
                            data-ajax="{'url':'/cms/ajax/form/{{_form}}/edit/{{id}}','html':'#yongerSpace modals'}"
                            class="d-inline">
                            <img src="/module/myicons/24/323232/content-edit-pen.svg">
                        </a>
                        <a href="javascript:"
                            data-ajax="{'url':'/ajax/rmitem/{{_form}}/{{id}}','update':'cms.list.comments','html':'#yongerSpace modals'}"
                            class="d-inline">
                            <img src="/module/myicons/24/323232/trash-delete-bin.2.svg" class="d-inline">
                        </a>
                    </td>
                </tr>
            </wb-foreach>
        </tbody>
        <tfoot>
            <tr>
                <td></td>
            </tr>
        </tfoot>
    </table>


    <modals></modals>
</div>

</html>