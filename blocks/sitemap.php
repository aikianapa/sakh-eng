<view>
    <div class="page-bg" style="background-image: url();">
        <div class="page-bg__wrapper">
            <div class="container">
                <ul>
                    <wb-foreach wb="table=pages&sort=header&tpl=false" wb-filter="active=on">
                    <li><a href="{{url}}"><span class="title">
                                {{header}}
                            </span></a></li>
                    </wb-foreach>
                </ul>
            </div>
        </div>
    </div>
</view>

<edit header="Карта сайта">
<div><wb-module wb="module=yonger&mode=edit&block=common.inc" /></div>
</edit>