@extends('admin::index')
@section('content')
<style>
    .wrapper-content {
        padding: 0 10px 40px;
        border-left: 1px solid #e7eaec;
    }

    .ibox {
        clear: both;
        margin-bottom: 25px;
        margin-top: 0;
        padding: 0;
    }

    .ibox-content {
        background-color: #ffffff;
        color: inherit;
        padding: 15px 20px 20px 20px;
        border-color: #e7eaec;
        border-image: none;
        border-style: solid solid none;
        border-width: 1px 0;
    }

    .btn-white {
        color: inherit;
        background: white;
        border: 1px solid #e7eaec;
    }

    dl {
        margin-top: 0;
        margin-bottom: 20px;
    }

    .dl-horizontal dt {
        float: left;
        width: 100px;
        overflow: hidden;
        clear: left;
        text-align: right;
        text-overflow: ellipsis;
        white-space: nowrap;
        font-weight: 200;
    }
    .dl-horizontal dd {
        margin-left: 120px;
        font-weight: 700;
        color: #409ea8;;
    }
    .panel-heading {
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }

    .panel-body {
        padding: 15px;
        min-height:500px;
    }

    .feed-activity-list .feed-element {
        border-bottom: 1px solid #e7eaec;
    }

    .feed-element {
        padding-bottom: 15px;
    }

    .feed-element > .pull-left {
        margin-right: 10px;
    }

    .feed-element img.img-circle, .dropdown-messages-box img.img-circle {
        width: 38px;
        height: 38px;
    }

    .img-circle {
        border-radius: 50%;
    }

    .media-body {
        display: table-cell;
        vertical-align: top;
        width: 10000px;
    }

    .feed-element .well {
        border: 1px solid #e7eaec;
        box-shadow: none;
        margin-top: 10px;
        margin-bottom: 5px;
        padding: 10px 20px;
        font-size: 11px;
        line-height: 16px;
    }
    .feed-element .well span {
        line-height: 16px;
        text-indent: 2em;
    }
    .feed-element {
        clear: both;
    }

    .ibox-content {
        background-color: #ffffff;
        color: inherit;
        padding: 15px 20px 20px 20px;
        border-color: #e7eaec;
        border-image: none;
        border-style: solid solid none;
        border-width: 1px 0;
    }

    .townbox-content {
        background: none;
        border: none;
        padding: 10px;
    }


    .folder-list li {
        border-bottom: 1px solid #e7eaec;
        display: block;
    }

    .folder-list li a {
        color: #666666;
        display: block;
        padding: 10px 0;
    }

    .file-manager h5 {
        text-transform: uppercase;
        font-weight: 500;
    }

    .m-b-md {
        margin-bottom: 20px;
    }

    .category-list li {
        display: block;
        float: left;
    }

    .category-list li a {
        color: #666666;
        padding: 5px 0;
    }

    .file-manager h5.tag-title {
        margin-top: 20px;
    }

    .file-manager h5 {
        text-transform: uppercase;
    }

    .townbox-content .tag-list li a {
        background: #ffffff;
    }

    ul.tag-list li {
        list-style: none;
    }

    .tag-list li {
        float: left;
    }

    .tag-list li a {
        font-size: 10px;
        background-color: #f3f3f4;
        padding: 5px 12px;
        color: inherit;
        border-radius: 2px;
        border: 1px solid #e7eaec;
        margin-right: 5px;
        margin-top: 5px;
        display: block;
    }

    .img-article {
        width: 190px;
        height: 180px;
        padding: 5px;
    }
    .row-quota{
        padding-top: 20px;
    }
    .row-quota dd,dt{
        line-height: 30px;
    }
    .row-quota .progress {
        margin-top: 5px;
    }
    .a-img {
        text-align: left;
    }

    .a-img img {
        max-width: 220px;
        max-height: 220px;
        display: inline-block;
        max-width: 100%;
        height: auto;
        padding: 4px;
        margin-right: 10px;
        margin-bottom: 10px;
        line-height: 1.42857143;
        background-color: #fff;
        border: 1px solid #ddd;
        box-shadow: 1px 1px 5px 0 #a2958a;
        border-radius: 4px;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
    }

</style>
<div class="box">
    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper-content animated fadeInUp">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">

                                    <div class="col-md-11">
                                        <h2>{{ $project->title }}</h2>
                                    </div>
                                    <div class="col-md-1 hidden-xs">
                                        <button class="button button-box"><i class="fa fa-reply"></i></button>
                                    </div>

                                <script>
                                    $(".col-md-1 button").click(function(){
                                        history.go(-1)
                                    })
                                </script>
                            </div>
                        </div>
                        <div class="row row-quota">
                            <div class="col-lg-7">
                                <dl class="dl-horizontal">
                                    <dt>总投资:</dt>
                                    <dd><span class="label label-primary">{{ $project->T_investment }}亿元</span></dd>
                                    <dt>累计完成投资:</dt>
                                    <dd><span class="label label-success">{{ $project->C_investment }}亿元</span></dd>
                                </dl>

                                <dl class="dl-horizontal">
                                    <dt>项目完成进度:</dt>
                                    <dd>
                                        <div class="progress progress-striped active m-b-sm">
                                            <div style="width: {{ $project->Speed }}%;" class="progress-bar">{{ $project->Speed }}%</div>
                                        </div>

                                    </dd>
                                    <dt>项目简介:</dt>
                                    <dd>
                                        {{ $project->Abstract }}
                                    </dd>
                                    <dt>更新日期:</dt>
                                    <dd>{{ $project->updated_at->diffForHumans() }}</dd>
                                </dl>
                            </div>
                            <div class="col-lg-5" id="cluster_info">
                                <dl class="dl-horizontal">
                                    <dt>项目负责单位:</dt>
                                    <dd>{{ $project->Responsible_unit }}</dd>
                                    <dt>项目负责人:</dt>
                                    <dd>{{ $project->Person }}</dd>
                                    <dt>开工时间:</dt>
                                    <dd>{{ $project->S_at }}</dd>
                                    <dt>项目地址:</dt>
                                    <dd>{{ $project->Address }}</dd>

                                </dl>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">

                            </div>
                        </div>
                        <div class="row m-t-sm">
                            <div class="col-lg-12">
                                <div class="panel blank-panel">
                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#tab-1" data-toggle="tab"
                                                                      aria-expanded="true">项目动态图片</a></li>

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-1">
                                                @if($project->pictures)
                                                    <div class="a-img">
                                                        @foreach($project->pictures as $picture)
                                                            <img src="/uploads/{{ $picture }}" alt="">
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
