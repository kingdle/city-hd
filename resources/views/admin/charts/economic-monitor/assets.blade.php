<style>
    .card .stats-up {
        color: #f55549;
        font-weight: 200;
        font-size: 14px;
        text-align: right;
        line-height: 30px;
    }
</style>
<div class="card">
    <div class="content">
        <div class="row">
            <div class="col-xs-8">
                <div class="title">
                    <p>固定资产投资总额</p>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="numbers">
                    <p><span id="assets-v"></span>亿元</p>
                </div>
            </div>
        </div>
        <div class="footer">
            <hr>
            <div class="row">
                <div class="col-xs-6">
                    <div class="numbers">
                        <div class="stats">
                            <div id="assets" style="width: 120px;height:40px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="stats-up">
                        <p><i class="fa fa-arrow-up"></i> 11.3%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/hd-data.js') }}"></script>
<script>
    $(function() {
        new SyStore({
            autoLoad: true,
            datasetId:3,
            success: function(store) {
                console.log(store)
                var res = store.collection.filter({
                    item: 3,
                    frame: 200000011,
                    area:3519,
                    time_year: 2016,
                    time_month: 2
                });
                $('#assets-v').html(res._datas[0].value);
                console.log(res)
                var chartKit = new SyChartSeriesKit({
                    store: store,
                    style: 'obj',
                    series: [{
                        name: 2016,
                        type: 'time_year',
                        extField: 2016
                    }, {
                        name: 2,
                        type: 'time_month',
                        extField: 2
                    }, {
                        name: '指标2',
                        type: 'item',
                        extField: '3'
                    }],
                    axis: [{
                        name: '黄岛',
                        arr: [{
                            name: '即墨',
                            type: 'area',
                            extField: '1508'
                        }]
                    }, {
                        name: '黄岛经济区',
                        arr: [{
                            name: '平度',
                            type: 'area',
                            extField: '3519'
                        }]
                    }],
                    dim: [
                        /*[{
                         name: '指标1',
                         type: 'item',
                         extField: '163'
                         }],*/
                        //								[{
                        //									name: '指标2',
                        //									type: 'item',
                        //									extField: '3'
                        //								}]
                    ]

                });
                //序列1条件series[2014,2015]     维度条件dim[163,164]    filter   样式array   axis横轴[jimo,qingdao]{name type code extField}
                console.log(chartKit)
                var ss = chartKit.genSeriesData();
                console.log(ss);

            }
        });

    })
</script>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('assets'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: ''
            },
            tooltip: {},
            legend: {
                data: [''],
                show:false
            },
            xAxis: {
                data: ["201701", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"],
                show:false
            },
            yAxis: {
                show:false
            },
            series: [{
                name: '固定资产投资总额',
                type: 'bar',
                data: [1, 3, 5, 4, 7, 2, 3, 4, 6, 8, 3, 6],
                color: ['red']
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    });
</script>