<div class="box box-primary">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox-analysis float-e-margins">
                <div class="ibox-title">
                    <h5>规上工业总产值</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-contenter">
                    <div id="i-charts" style="height:180px"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function industryChart(store) {
        // 指定图表的配置项和数据
        var axisD = [];
        for (var item in axisArr) {
            axisD.push(axisArr[item].name);
        }
        //===============普通图kit==============
        var chartKit = new SyChartSeriesKit({
            store: store,
            series: [{
                type: 'frame',
                extField: store.findMetaByItemName({
                    type: 'frame',
                    name: '累计'
                }).extField
            }],
            axis: axisArr,
        });
        // 基于准备好的dom，初始化echarts实例
        var ImyChart = echarts.init(document.getElementById('i-charts'));

        // 指定图表的配置项和数据
        var option = {
            title: {
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
                data: ['绝对额', '增长%']
            },
            toolbox: {},
            calculable: true,
            xAxis: [
                {
                    type: 'category',
                    data: axisD//['2017-2', '2017-3', '2017-4', '2017-5', '2017-6', '2017-7']
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
                    name: '增长%',
                    splitLine: {show: false},
                    axisLabel: {
                        formatter: '{value}%'
                    }
                }
            ],
            series: [
                {
                    name: '绝对额',
                    type: 'bar',
                    splitLine: {show: false},
                    data: chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '规上工业'
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
                    markPoint: {},
                    markLine: {},
                    color: ['#409ea8']
                },
                {
                    name: '增长%',
                    type: 'line',
                    yAxisIndex: 1,
                    data: chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '规上工业'
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
                    markPoint: {
                        data: [
                            {type: 'max', name: '最快'},
                            {type: 'min', name: '最慢'}
                        ]
                    },
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
