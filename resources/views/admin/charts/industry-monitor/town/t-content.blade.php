<style>
    .featurette {
        margin-bottom: 10px;
    }
    .featurette-heading {
        margin-top: 120px;
        font-size: 50px;
        font-weight: 300;
        line-height: 1;
        letter-spacing: -1px;
    }
    .lead {
        font-size: 21px;
    }
    .lead {
        margin-bottom: 20px;
        font-size: 16px;
        font-weight: 300;
        line-height: 1.4;
    }
    .mail-box-header {
        background-color: #ffffff;
        padding: 30px 20px 20px 20px;
        border-color: #e7eaec;
        border-style: solid solid none;
        border-width: 1px 0 0;
    }
    .mail-search {
        max-width: 300px;
    }
    .mail-box-header h2 {
        margin-top: 0;
        font-size: 24px;
    }
    .pull-right {
        float: right;
    }
    .m-t-md {
        margin-top: 20px;
    }
    .btn-white {
        color: inherit;
        background: white;
        border: 1px solid #e7eaec;
    }

</style>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12 animated fadeInRight">
            <div class="ibox float-e-margins">
                <div class="ibox-content townbox-content">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active left">
                                <img class="first-slide" src="{{ asset('uploads/616/town-one.jpg') }}" alt="First slide">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1>普惠科技</h1>
                                        <p>西海岸经济新区建设的主力军、排头兵</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item next left">
                                <img class="second-slide" src="{{ asset('uploads/616/town-two.jpg') }}" alt="Second slide">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1>为国家社会创造未来</h1>
                                        <p>勤奋 创新 卓越</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img class="third-slide" src="{{ asset('uploads/616/town-three.jpg') }}" alt="Third slide">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1>服务世界</h1>
                                        <p>新黄岛 新开放 新梦想</p>
                                        <p><a class="btn btn-lg btn-primary" href="#" role="button">查看</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="mail-box-header">
                        <form method="get" action="" class="pull-right mail-search">
                            <div class="input-group">
                                <input type="text" class="form-control input-sm" name="search"
                                       placeholder="输入关键字">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-sm btn-primary">
                                        查询
                                    </button>
                                </div>
                            </div>
                        </form>
                        <h2>
                            最新动态
                        </h2>
                        <div class="mail-tools tooltip-demo m-t-md">
                            <div class="btn-group pull-right">
                                <button class="btn btn-white btn-sm"><i class="fa fa-arrow-left"></i></button>
                                <button class="btn btn-white btn-sm"><i class="fa fa-arrow-right"></i></button>

                            </div>
                            <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="left" title=""
                                    data-original-title="Refresh inbox"><i class="fa fa-refresh"></i> 刷新
                            </button>
                            <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top"
                                    title="Mark as read"><i class="fa fa-eye"></i></button>
                            <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Mark as important"><i class="fa fa-exclamation"></i></button>

                        </div>
                    </div>
                    <div class="mail-box">
                        <table class="table table-hover table-mail">
                            <tbody>
                            <tr class="unread">
                                <td class="check-mail">
                                    <div class="icheckbox_square-green" style="position: relative;"><input
                                                type="checkbox" class="i-checks"
                                                style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td class="mail-ontact"><a href="#">国际合作小镇</a></td>
                                <td class="mail-subject"><a href="#">项目进展情况提报</a></td>
                                <td class=""><i class="fa fa-paperclip"></i></td>
                                <td class="text-right mail-date">6.10 AM</td>
                            </tr>
                            <tr class="unread">
                                <td class="check-mail">
                                    <div class="icheckbox_square-green checked" style="position: relative;"><input
                                                type="checkbox" class="i-checks" checked=""
                                                style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td class="mail-ontact"><a href="#">海洋科技小镇</a></td>
                                <td class="mail-subject"><a href="#">项目用地正进行土地招拍挂</a></td>
                                <td class=""></td>
                                <td class="text-right mail-date">8.22 PM</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <div class="icheckbox_square-green" style="position: relative;"><input
                                                type="checkbox" class="i-checks"
                                                style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td class="mail-ontact"><a href="#">音乐小镇</a> <span
                                            class="label label-warning pull-right">Clients</span></td>
                                <td class="mail-subject"><a href="#">项目合作协议已签订</td>
                                <td class=""></td>
                                <td class="text-right mail-date">Jan 16</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <div class="icheckbox_square-green" style="position: relative;"><input
                                                type="checkbox" class="i-checks"
                                                style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td class="mail-ontact"><a href="#">金融基金小镇</a></td>
                                <td class="mail-subject"><a href="#">已于项目方对接设计方案，并经多伦专家论证通过</a></td>
                                <td class=""></td>
                                <td class="text-right mail-date">Mar 22</td>
                            </tr>
                            <tr class="unread">
                                <td class="check-mail">
                                    <div class="icheckbox_square-green" style="position: relative;"><input
                                                type="checkbox" class="i-checks"
                                                style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td class="mail-ontact"><a href="#">国际合作小镇</a></td>
                                <td class="mail-subject"><a href="#">项目进展情况提报</a></td>
                                <td class=""><i class="fa fa-paperclip"></i></td>
                                <td class="text-right mail-date">6.10 AM</td>
                            </tr>
                            <tr class="unread">
                                <td class="check-mail">
                                    <div class="icheckbox_square-green checked" style="position: relative;"><input
                                                type="checkbox" class="i-checks" checked=""
                                                style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td class="mail-ontact"><a href="#">海洋科技小镇</a></td>
                                <td class="mail-subject"><a href="#">项目用地正进行土地招拍挂</a></td>
                                <td class=""></td>
                                <td class="text-right mail-date">8.22 PM</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <div class="icheckbox_square-green" style="position: relative;"><input
                                                type="checkbox" class="i-checks"
                                                style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td class="mail-ontact"><a href="#">音乐小镇</a> <span
                                            class="label label-warning pull-right">Clients</span></td>
                                <td class="mail-subject"><a href="#">项目合作协议已签订</td>
                                <td class=""></td>
                                <td class="text-right mail-date">Jan 16</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <div class="icheckbox_square-green" style="position: relative;"><input
                                                type="checkbox" class="i-checks"
                                                style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td class="mail-ontact"><a href="#">金融基金小镇</a></td>
                                <td class="mail-subject"><a href="#">已于项目方对接设计方案，并经多伦专家论证通过</a></td>
                                <td class=""></td>
                                <td class="text-right mail-date">Mar 22</td>
                            </tr>
                            <tr class="unread">
                                <td class="check-mail">
                                    <div class="icheckbox_square-green" style="position: relative;"><input
                                                type="checkbox" class="i-checks"
                                                style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td class="mail-ontact"><a href="#">国际合作小镇</a></td>
                                <td class="mail-subject"><a href="#">项目进展情况提报</a></td>
                                <td class=""><i class="fa fa-paperclip"></i></td>
                                <td class="text-right mail-date">6.10 AM</td>
                            </tr>
                            <tr class="unread">
                                <td class="check-mail">
                                    <div class="icheckbox_square-green checked" style="position: relative;"><input
                                                type="checkbox" class="i-checks" checked=""
                                                style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td class="mail-ontact"><a href="#">海洋科技小镇</a></td>
                                <td class="mail-subject"><a href="#">项目用地正进行土地招拍挂</a></td>
                                <td class=""></td>
                                <td class="text-right mail-date">8.22 PM</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <div class="icheckbox_square-green" style="position: relative;"><input
                                                type="checkbox" class="i-checks"
                                                style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td class="mail-ontact"><a href="#">音乐小镇</a> <span
                                            class="label label-warning pull-right">Clients</span></td>
                                <td class="mail-subject"><a href="#">项目合作协议已签订</td>
                                <td class=""></td>
                                <td class="text-right mail-date">Jan 16</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <div class="icheckbox_square-green" style="position: relative;"><input
                                                type="checkbox" class="i-checks"
                                                style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td class="mail-ontact"><a href="#">金融基金小镇</a></td>
                                <td class="mail-subject"><a href="#">已于项目方对接设计方案，并经多伦专家论证通过</a></td>
                                <td class=""></td>
                                <td class="text-right mail-date">Mar 22</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <div class="icheckbox_square-green" style="position: relative;"><input
                                                type="checkbox" class="i-checks"
                                                style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td class="mail-ontact"><a href="#">金融基金小镇</a></td>
                                <td class="mail-subject"><a href="#">已于项目方对接设计方案，并经多伦专家论证通过</a></td>
                                <td class=""></td>
                                <td class="text-right mail-date">Mar 22</td>
                            </tr>
                            <tr class="unread">
                                <td class="check-mail">
                                    <div class="icheckbox_square-green" style="position: relative;"><input
                                                type="checkbox" class="i-checks"
                                                style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td class="mail-ontact"><a href="#">国际合作小镇</a></td>
                                <td class="mail-subject"><a href="#">项目进展情况提报</a></td>
                                <td class=""><i class="fa fa-paperclip"></i></td>
                                <td class="text-right mail-date">6.10 AM</td>
                            </tr>
                            <tr class="unread">
                                <td class="check-mail">
                                    <div class="icheckbox_square-green checked" style="position: relative;"><input
                                                type="checkbox" class="i-checks" checked=""
                                                style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td class="mail-ontact"><a href="#">海洋科技小镇</a></td>
                                <td class="mail-subject"><a href="#">项目用地正进行土地招拍挂</a></td>
                                <td class=""></td>
                                <td class="text-right mail-date">8.22 PM</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <div class="icheckbox_square-green" style="position: relative;"><input
                                                type="checkbox" class="i-checks"
                                                style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td class="mail-ontact"><a href="#">音乐小镇</a> <span
                                            class="label label-warning pull-right">Clients</span></td>
                                <td class="mail-subject"><a href="#">项目合作协议已签订</td>
                                <td class=""></td>
                                <td class="text-right mail-date">Jan 16</td>
                            </tr>
                            <tr class="read">
                                <td class="check-mail">
                                    <div class="icheckbox_square-green" style="position: relative;"><input
                                                type="checkbox" class="i-checks"
                                                style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </td>
                                <td class="mail-ontact"><a href="#">金融基金小镇</a></td>
                                <td class="mail-subject"><a href="#">已于项目方对接设计方案，并经多伦专家论证通过</a></td>
                                <td class=""></td>
                                <td class="text-right mail-date">Mar 22</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>