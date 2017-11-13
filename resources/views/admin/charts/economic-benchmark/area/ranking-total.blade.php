<div class="box box-primary ranking">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <h5>地区生产总值</h5><span class="quotadate"> {{ date("Y-m",mktime(0, 0 , 0,date("m")-1,1,date("Y"))) }}</span>
                <h2 class="text-info sta">
                    <small>增速排名：</small> <em>1</em> <i class="fa"></i>
                </h2>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;width: 15.9%;">
                        <span>15.9</span>%
                    </div>
                </div>
                <div class="m-t-sm"> <small>累计投资:</small><b>1778</b><small>亿元 排名：</small><em>12</em></div>
            </div>
        </div>
    </div>
</div>
@include('admin::charts.economic-benchmark.BenchmarkProvinceJs')