<style>
    .wrapper-content {
        padding: 20px 10px 40px;
    }

    .ibox-title {
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        border-color: #e7eaec;
        border-image: none;
        color: inherit;
        margin-bottom: 0;
        padding: 15px 15px 7px;
        min-height: 48px;
    }

    .ibox-title h5 {
        display: inline-block;
        margin: 0 0 7px;
        padding: 0;
        text-overflow: ellipsis;
        float: left;
    }

    .ibox-tools {
        display: block;
        float: none;
        margin-top: 0;
        position: relative;
        padding: 0;
        text-align: right;
    }

    .ibox-tools a.btn-primary {
        color: #fff;
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

    .input-group {
        position: relative;
        display: table;
        border-collapse: separate;
    }

    .input-group-btn {
        position: relative;
        font-size: 0;
        white-space: nowrap;
    }

    .project-list .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 20px;
    }

    .project-list table tr td {
        border-top: none;
        border-bottom: 1px solid #e7eaec;
        padding: 15px 10px;
        vertical-align: middle;
    }

    .label-primary, .badge-primary {
        background-color: #1ab394;
        color: #FFFFFF;
    }

    .project-list table tr td {
        border-top: none;
        border-bottom: 1px solid #e7eaec;
        padding: 15px 10px;
        vertical-align: middle;
    }

    .project-title a {
        font-size: 14px;
        color: #676a6c;
        font-weight: 600;
    }

    .project-list table tr td {
        border-top: none;
        border-bottom: 1px solid #e7eaec;
        padding: 15px 10px;
        vertical-align: middle;
    }

    .project-people img {
        width: 32px;
        height: 32px;
    }
    .btn-white {
        color: inherit;
        background: white;
        border: 1px solid #e7eaec;
    }

    .progress-mini, .progress-mini .progress-bar {
        height: 5px;
        margin-bottom: 0;
    }
</style>
<div class="box">
    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper-content animated fadeInUp">

                <div class="ibox">
                    <div class="ibox-title">
                        <h5>全部监测项目</h5>
                        <div class="ibox-tools">
                            <a href="" class="btn btn-primary btn-xs">创建新项目</a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row m-b-sm m-t-sm">
                            <div class="col-md-1">
                                <button type="button" id="loading-example-btn" class="btn btn-white btn-sm"><i
                                            class="fa fa-refresh"></i> 刷新
                                </button>
                            </div>
                            <div class="col-md-11">
                                <div class="input-group"><input type="text" placeholder="项目名称"
                                                                class="input-sm form-control"> <span
                                            class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> 查询</button> </span></div>
                            </div>
                        </div>

                        <div class="project-list">

                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-primary">新开工</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}">中国金茂科技小镇</a>
                                        <br>
                                        <small>开始时间 14.08.2014</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>完成进度: 48%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 48%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people"></td>
                                    <td class="project-actions">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> 查看 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-primary">新开工</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}">中国北方(黄岛)国际农批交易中心</a>
                                        <br>
                                        <small>开始时间 11.08.2014</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>完成进度: 28%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 28%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people"></td>
                                    <td class="project-actions">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> 查看 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-default">续建</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}">UFORT环球自由港</a>
                                        <br>
                                        <small>开始时间 10.08.2014</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>完成进度: 58%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 8%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people"></td>
                                    <td class="project-actions">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> 查看 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-primary">新开工</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}">中国棉花交易中心</a>
                                        <br>
                                        <small>开始时间 22.07.2014</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>完成进度: 83%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 83%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people"></td>
                                    <td class="project-actions">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> 查看 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-primary">新开工</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}">中国科学院青岛科教园</a>
                                        <br>
                                        <small>开始时间 14.07.2014</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>完成进度: 97%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 97%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people"></td>
                                    <td class="project-actions">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> 查看 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-primary">新开工</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}">青岛理工大学主校区</a>
                                        <br>
                                        <small>开始时间 14.08.2014</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>完成进度: 88%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 48%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people"></td>
                                    <td class="project-actions">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> 查看 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-primary">新开工</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}">复旦大学青岛研究院</a>
                                        <br>
                                        <small>开始时间 11.08.2014</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>完成进度: 28%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 28%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people"></td>
                                    <td class="project-actions">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> 查看 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-default">投资项目</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}">利群集团西海岸商业综合体</a>
                                        <br>
                                        <small>开始时间 10.08.2014</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>完成进度: 8%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 8%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people"></td>
                                    <td class="project-actions">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> 查看 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-primary">新开工</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}">利群灵山卫购物中心</a>
                                        <br>
                                        <small>开始时间 22.07.2014</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>完成进度: 83%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 83%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people"></td>
                                    <td class="project-actions">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> 查看 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-primary">新开工</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}">东方影都</a>
                                        <br>
                                        <small>开始时间 14.07.2014</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>完成进度: 97%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 97%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people"></td>
                                    <td class="project-actions">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> 查看 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-primary">新开工</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}">海洋梦世界</a>
                                        <br>
                                        <small>开始时间 11.08.2014</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>完成进度: 28%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 28%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people"></td>
                                    <td class="project-actions">
                                        <a href="{{ admin_base_path('auth/project-monitor/content') }}" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> 查看 </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>