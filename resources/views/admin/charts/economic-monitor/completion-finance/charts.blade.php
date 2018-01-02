<div class="box box-primary">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox-analysis float-e-margins">
                <div class="ibox-title">
                    <h5>财政金融完成情况运行趋势</h5>
                </div>
                <div class="ibox-contenter">
                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div id="i-charts1" style="height:236px"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div id="i-charts2" style="height:236px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function financeChart(store) {
        // 指定图表的配置项和数据
        var axisD = [];
        for (var item in axisArr) {
            axisD.push(axisArr[item].name);
        }
        console.log(store)
        //===============普通图kit==============
        var chartKit = new SyChartSeriesKit({
            store: store,
            series: [{
                type: 'frame',
                extField: store.findMetaByItemName({
                    type: 'frame',
                    name: '比年初'
                }).extField
            }],
            axis: axisArr,
        });
        // 基于准备好的dom，初始化echarts实例
        var ImyChart1 = echarts.init(document.getElementById('i-charts1'));
        var ImyChart2 = echarts.init(document.getElementById('i-charts2'));
        // 指定图表的配置项和数据
        var optionOne = {
            title: {
                text: '一般公共预算收入',
                subtext: ''
            },
            grid: [
                {x: '20%', y: '22%', width: '70%', height: '60%'},
            ],
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['收入', '增速'],
                right:0,
            },
            toolbox: {

            },
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
                    name: '增速',
                    splitLine: {show: false},
                    axisLabel: {
                        formatter: '{value}%'
                    }
                }
            ],
            series: [
                {
                    name: '收入',
                    type: 'bar',
                    splitLine: {show: false},
                    data: chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '一般公共预算'
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
                    name: '增速',
                    type: 'line',
                    yAxisIndex: 1,
                    data: chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '一般公共预算'
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

                    markLine: {}
                }
            ]
        };
        var optionTwo = {
            title: {
                left:'left',
                text: '金融情况',
                subtext: ''
            },
            grid: [
                {x: '20%', y: '22%', width: '70%', height: '60%'},
            ],
            tooltip: {
                trigger: 'axis',

            },
            legend: {
                x: 'right',
                size: '5',
                data: ['金融系统本外币存款余额', '个人储蓄存款', '金融系统本外币贷款余额']
            },
            //calculable : true,
            xAxis: [{
                splitLine:{show: false},
                type: 'category',
                data: axisD//['2017-2', '2017-3', '2017-4', '2017-5', '2017-6', '2017-7'],

            }],
            yAxis: [{
                splitLine:{show: false},
                type: 'value',
                name: '',
                axisLabel: {
                    formatter: '{value}亿元'
                }
            }

            ],
            series: [{
                name: '金融系统本外币存款余额',
                type: 'bar',
                data: chartKit.genSeriesData({
                    series: [{
                        type: "item",
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '金融系统本外币存款余额'
                        }).extField
                    }, {
                        //        name: 2,
                        type: 'frame',
                        extField: store.findMetaByItemName({
                            type: 'frame',
                            name: '累计'
                        }).extField
                    }, {
                        //        name: 2,
                        type: 'area',
                        extField: store.findMetaByItemName({
                            type: 'area',
                            name: '黄岛'
                        }).extField
                    }]
                }),
            },
                {
                    name: '个人储蓄存款',
                    type: 'bar',
                    data: chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '个人储蓄存款'
                            }).extField
                        }, {
                            //        name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '累计'
                            }).extField
                        }, {
                            //        name: 2,
                            type: 'area',
                            extField: store.findMetaByItemName({
                                type: 'area',
                                name: '黄岛'
                            }).extField
                        }]
                    }),

                },
                {
                    name: '金融系统本外币贷款余额',
                    type: 'bar',
                    data: chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '金融系统本外币贷款余额'
                            }).extField
                        }, {
                            //        name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '累计'
                            }).extField
                        }, {
                            //        name: 2,
                            type: 'area',
                            extField: store.findMetaByItemName({
                                type: 'area',
                                name: '黄岛'
                            }).extField
                        }]
                    }),

                }
            ]
        };
        // 使用刚指定的配置项和数据显示图表。
        ImyChart1.setOption(optionOne);
        ImyChart2.setOption(optionTwo);
        $(window).resize(function () {
            ImyChart1.resize();
            ImyChart2.resize();
        });
    }
</script>
