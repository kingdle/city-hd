<div class="box box-primary">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox-analysis float-e-margins">
                <div class="ibox-title">
                    <h5>限上贸易运行趋势</h5>

                </div>
                <div class="ibox-contenter">
                    <div id="i-charts" style="height:180px"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function saleChart(store) {
        // 指定图表的配置项和数据
        var axisD = [];
        for (var item in axisArr) {
            axisD.push(axisArr[item].name);
        }
        //===============普通图kit==============
        var chartKit = new SyChartSeriesKit({
            store: store,
            series: [{
                type: "item",
                extField: store.findMetaByItemName({
                    type: 'item',
                    name: '固定'
                }).extField
            }, {
                type: 'frame',
                extField: store.findMetaByItemName({
                    type: 'frame',
                    name: '累计'
                }).extField
            }],
            axis: axisArr,
        });
//                var dd = chartKit.genSeriesData();
//                console.log(dd);
        // 基于准备好的dom，初始化echarts实例
        var ImyChart = echarts.init(document.getElementById('i-charts'));

        var option = {
            title: {
                y: '5%',
                text: '',
                subtext: ''
            },
            grid: [
                {x: '10%', y: '20%', width: '83%', height: '70%'},
            ],
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['累计', '增长'],

            },
            toolbox: {},
            calculable: true,
            xAxis: [
                {
                    type: 'category',
                    data: axisD//['2016-3', '2016-6', '2016-9', '2016-12', '2017-3', '2017-6']
                }
            ],
            yAxis: [
                {
                    type: 'value',
                    name: '',
                    splitLine: {show: false},
                    axisLabel: {
                        formatter: '{value}亿元'
                    }
                },
                {
                    type: 'value',
                    name: '增长',
                    splitLine: {show: false},
                    axisLabel: {
                        formatter: '{value}%'
                    }
                }
            ],
            series: [
                {
                    name: '累计',
                    type: 'bar',
                    splitLine: {show: false},
                    data: chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '限上'
                            }).extField
                        }, {
                            //        name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '累计'
                            }).extField
                        }]
                    }),
                    markPoint: {
                        data: [
                            {type: 'max', name: '最快'},
                            {type: 'min', name: '最慢'}
                        ]
                    },
                    markLine: {},
                    color: ['#409ea8']
                },
                {
                    name: '增长',
                    type: 'line',
                    yAxisIndex: 1,
                    data: chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '限上'
                            }).extField
                        }, {
                            //        name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '增长'
                            }).extField
                        }]
                    }),
                    markLine: {}
                }
            ]
        };


        // 使用刚指定的配置项和数据显示图表。
        ImyChart.setOption(option);
        $(window).resize(function () {
            ImyChart.resize();
        });
    }
</script>
