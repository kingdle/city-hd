<style>
    .ranking {
        border-radius: 2px;
        background-color: #FFFFFF;
        border-color: #e7eaec;
        border-image: none;
        border-style: solid solid none;
        border-width: 3px 0 0;
        color: #252422;
        margin-bottom: 20px;
        position: relative;
        z-index: 1;
    }
    .dateline .content {
        min-height: 30px;
    }
    .dateline .title {
        text-align: center;
    }
    .dateline .title p {
        font-size: 28px;
        font-weight: 400;
        color: #30b8c4;
        line-height: 60px;
    }
    .ranking .content {
        min-height: 60px;
    }
    .ranking .col-md-12 h2 {
        font-size: 24px;
        margin-top: 10px;
        margin-bottom: 5px;
    }
    .progress {
        margin-bottom: 10px;
    }
    .progress-mini {
        height: 5px;
    }
    .m-t-sm {
        font-size: 16px;
    }
    .m-t-sm small{
        font-size: 70%;
    }
</style>
<div class="box box-primary ranking">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <h5>生产总值总量</h5>
                <h2 class="text-info">
                    <small>增速排名：</small> 3 <i class="fa fa-long-arrow-down"></i>
                </h2>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;width: 15.9%;">
                        15.9%
                    </div>
                </div>
                <div class="m-t-sm"> <small>累计投资:</small>1778<small>亿元 排名：</small>2</div>
            </div>
        </div>
    </div>
</div>
@include('admin::charts.economic-benchmark.BenchmarkJs')