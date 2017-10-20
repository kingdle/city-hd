@include('admin::charts.economic-monitor.completion-industry.IndustryJs')
<style>
    .ibox-analysis {
        clear: both;
        margin-top: 0;
        background-color: #ffffff;
        color: inherit;
        padding: 15px 20px 20px 20px;
        border-color: #e7eaec;
        border-image: none;
        border-style: solid solid none;
        border-width: 1px 0;
        min-height: 280px;
    }

    .ibox-title {
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        background-color: #ffffff;
        border-color: #e7eaec;
        border-image: none;
        color: inherit;
        margin-bottom: 0;
        padding: 15px 15px 7px;
        min-height: 48px;
    }

    .float-e-margins h5 {
        font-size: 18px;
        font-weight: 600;
        float: left;
        margin: 0 0 7px;
    }

    .ibox-contenter {
        border-color: #e7eaec;
        border-style: solid solid none;
        border-width: 1px 0;
        padding: 15px 20px 20px 20px;
        font-size: 14px;
        text-indent: 2em;
        line-height: 2em;
    }

    .ibox-tools {
        display: block;
        float: none;
        margin-top: 0;
        position: relative;
        padding: 0;
        text-align: right;
    }

    .ibox-tools a {
        cursor: pointer;
        margin-left: 5px;
        color: #c4c4c4;
    }
</style>
<div class="box box-primary">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox-analysis float-e-margins">
                <div class="ibox-title">
                    <h5>完成情况分析</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-contenter">
                    <strong>1-6月，全区各项经济指标保持平稳增长。</strong>
                    初步核算，全区实现生产总值(GDP)1463.6亿元，按可比价格计算，增长11.9 %。其中，第一产业增加值33.6亿元，增长3.4%
                    ；第二产业增加值683.7亿元，增长9.1%；第三产业增加值746.3亿元，增长15.2%。三次产业比为2.30：46.71：50.99。
                </div>
            </div>
        </div>
    </div>
</div>