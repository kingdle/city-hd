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
                    <strong> 1-7月份，西海岸新区完成固定资产投资1340.2亿元，同比增长11.8%。</strong>
                    从产业分类上看，第一产业完成投资24.4亿元，同比下降50.6%；第二产业完成投资400.9亿元，同比下降0.5%，其中工业投资完成313.4亿元，同比下降18.1%；第三产业完成投资914.9亿元，同比增长33.6%。
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin::charts.economic-monitor.completion-assets.AssetsJs')