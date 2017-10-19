<style>
    .content {
        min-height: 20px;
    }

    .cardh {
        border-radius: 6px;
        box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
        background-color: #FFFFFF;
        color: #252422;
        margin-bottom: 20px;
        position: relative;
        z-index: 1;
    }

    .card .content {
        padding: 15px 15px 10px 15px;
    }

    .row {
        margin-right: -15px;
        margin-left: -15px;
    }

    .card {
        font-size: 3em;
        min-height: 64px;
    }

    .cardh .title {
        font-size: 0em;
        text-align: left;
    }

    .cardh .title p {
        margin: 0 5px;
        font-size: 14px;
        float: left;
    }

    .cardh .numbers {
        font-size: 2em;
        text-align: right;
    }

    .cardh .numbers p {
        margin: 0;
        font-size: 14px;
    }

    .cardh .footer {
        padding: 0;
        line-height: 30px;
    }

    .card .footer hr {
        margin-top: 5px;
        margin-bottom: 5px;
        border-color: #F1EAE0;
    }

    .stats {
        font-weight: 200;
        font-size: 14px;
        text-align: right;
        line-height: 30px;
    }
    .sta {
        font-weight: 200;
        font-size: 22px;
        text-align: right;
        line-height: 30px;
    }

    .stats-gray {
        color: #313131;
        font-weight: 200;
        font-size: 22px;
        text-align: right;
        line-height: 30px;
    }

    .stats-up {
        color: #f55549;
        font-weight: 700;
        font-size: 28px;
        text-align: right;
        line-height: 30px;
    }

    .stats-down {
        color: #00a946;
        font-weight: 200;
        font-size: 22px;
        text-align: right;
        line-height: 30px;
    }
</style>
<div class="cardh">
    <div class="content">
        <div class="row">
            <div class="col-xs-8">
                <div class="title">
                    <p>地区生产总值</p><span class="quotadate"> {{ date("Y-m",strtotime("last Month")) }}</span>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="numbers">
                    <p><span id="area-v"></span>亿元</p>
                </div>
            </div>
        </div>
        <div class="footer">
            <hr>
            <div class="row">
                <div class="col-xs-6">
                    <div class="numbers">
                        <div class="stats">
                            <div id="area" style="width: 120px;height:40px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="sta">
                        <p><i class="fa"></i> <span id="area-s"></span>%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function area() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('area'));
        var axisD = [];
        for (var item in axisArr) {
            axisD.push(axisArr[item].name);

        }

        var chartKit = new SyChartSeriesKit({
            store: storeA,
            axis: axisArr,

        });
        // 指定图表的配置项和数据
        var option = {
            title: {
                text: ''
            },
            tooltip: {
                position: function (p) {
                    // 位置回调
                    // console.log && console.log(p);
                    return [p[0] + 10, p[1] - 80];
                },
            },
            legend: {
                data: [''],
                show: false
            },
            xAxis: {
                data: axisD,
                show: false
            },
            yAxis: {
                show: false
            },
            series: [{
                name: '地区生产总值',
                type: 'bar',
                data: chartKit.genSeriesData({
                    series: [{
                        //        name: "资产投资",
                        type: "item",
                        extField: storeA.findMetaByItemName({
                            type: 'item',
                            name: '地区生产总值'
                        }).extField
                    }, {
                        //        name: 2,
                        type: 'frame',
                        extField: storeA.findMetaByItemName({
                            type: 'frame',
                            name: '累计'
                        }).extField
                    }]
                }),
                color: ['#2990b9']
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    }
</script>

@include('admin::charts.economic-monitor.EconomicJs')