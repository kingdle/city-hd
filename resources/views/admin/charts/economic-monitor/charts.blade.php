<div class="card">
    <div class="content">
        <div class="col-xs-12">
            <div class="title-quota">
                <p>主要指标运行趋势</p>
            </div>
        </div>
        <div id="charts-contain" style="min-height: 500px"></div>
    </div>
</div>
<script type="text/javascript">
    function initChartsMonitor(store) {
        var myC = echarts.init(document.getElementById('charts-contain'));
        var axisD = [];
        for (var item in axisArr) {
            axisD.push(axisArr[item].name);

        }

        var chartKit = new SyChartSeriesKit({
            store: store,
            axis: axisArr,

        });

        // 指定图表的配置项和数据
        var optionone = {
            title: {
                left: 'left',
                text: '',
                subtext: ''
            },
            grid: [
                {x: '10%', y: '20%', width: '83%', height: '70%'},
            ],
            tooltip: {
                trigger: 'axis',

            },
            legend: {

                size: '5',
                data: ['地区生产总值', '地区生产总值增速', '固定资产投资总额', '固定资产投资总额增速', '限上贸易销售额', '限上贸易销售额增速', '社会消费品零售额', '社会消费品零售额增速']
            },
            //calculable : true,
            xAxis: [{
                splitLine: {show: false},
                type: 'category',
                data: axisD//['2016-3', '2016-6', '2016-9', '2016-12', '2017-3', '2017-6'],

            }],
            yAxis: [{
                splitLine: {show: false},
                type: 'value',
                name: '总量',
                axisLabel: {
                    formatter: '{value}万元'
                }
            },
                {
                    type: 'value',
                    name: '增速',
                    axisLabel: {
                        formatter: '{value}%'
                    }
                }

            ],
            series: [{
                name: '地区生产总值',
                type: 'bar',
                data: chartKit.genSeriesData({
                    series: [{
                        //        name: "资产投资",
                        type: "item",
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '地区生产总值'
                        }).extField
                    }, {
                        //        name: 2,
                        type: 'frame',
                        extField: store.findMetaByItemName({
                            type: 'frame',
                            name: '累计'
                        }).extField
                    }]
                })//[518.4, 1358, 2146.9, 2871.1, 586.7, 1521.2, '','']
            },
                {
                    name: '固定资产投资总额',
                    type: 'bar',
                    data: chartKit.genSeriesData({
                        series: [{
                            //        name: "资产投资",
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '固定资产投资'
                            }).extField
                        }, {
                            //        name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '累计'
                            }).extField
                        }]
                    })//[1188.1, 924.1, 1475.9, 2008.6, 268.8, 1013.2,'',''],

                },
                {
                    name: '限上贸易销售额',
                    type: 'bar',
                    data: chartKit.genSeriesData({
                        series: [{
                            //        name: "资产投资",
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '限上贸易销售额'
                            }).extField
                        }, {
                            //        name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '累计'
                            }).extField
                        }]
                    })//[255 , 277.7, 499.9, 795.3, 332.9, 653.3,'',''],

                },
                {
                    name: '社会消费品零售额',
                    type: 'bar',
                    data: chartKit.genSeriesData({
                        series: [{
                            //        name: "资产投资",
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '社会消费品零售额'
                            }).extField
                        }, {
                            //        name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '累计'
                            }).extField
                        }]
                    })//[121.6, 277.7, 384.6,533.4 , 134.2, 279.2, '',''],

                },
                {
                    name: '地区生产总值增速',
                    type: 'line',
                    yAxisIndex: 1,
                    data: chartKit.genSeriesData({
                        series: [{
                            //        name: "资产投资",
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '地区生产总值'
                            }).extField
                        }, {
                            //        name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '增长'
                            }).extField
                        }]
                    })//[518.4, 1358, 2146.9, 2871.1, 586.7, 1521.2, '','']
                },
                {
                    name: '固定资产投资总额增速',
                    type: 'line',
                    yAxisIndex: 1,
                    data: chartKit.genSeriesData({
                        series: [{
                            //        name: "资产投资",
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '固定资产投资'
                            }).extField
                        }, {
                            //        name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '增长'
                            }).extField
                        }]
                    })//[1188.1, 924.1, 1475.9, 2008.6, 268.8, 1013.2,'',''],

                },
                {
                    name: '限上贸易销售额增速',
                    yAxisIndex: 1,
                    type: 'line',
                    data: chartKit.genSeriesData({
                        series: [{
                            //        name: "资产投资",
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '限上贸易销售额'
                            }).extField
                        }, {
                            //        name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '增长'
                            }).extField
                        }]
                    })//[255 , 277.7, 499.9, 795.3, 332.9, 653.3,'',''],

                },
                {
                    name: '社会消费品零售额增速',
                    type: 'line',
                    yAxisIndex: 1,
                    data: chartKit.genSeriesData({
                        series: [{
                            //        name: "资产投资",
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '社会消费品零售额'
                            }).extField
                        }, {
                            //        name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '增长'
                            }).extField
                        }]
                    })//[121.6, 277.7, 384.6,533.4 , 134.2, 279.2, '',''],

                },
//                {
//                    name: '地区生产总值增速',
//                    type: 'line',
//                    yAxisIndex: 1,
//                    data: [8.5, 10.5, 11.5, 12.3, 10, 12.1,'',''],
//
//                },
//                {
//                    name: '固定资产投资增速',
//                    type: 'line',
//                    yAxisIndex: 1,
//                    data: [5.7, 15.9, 8.6, 17.2, 11.4, 11.3, '',''],
//
//                },
//                {
//                    name: '限上贸易增速',
//                    type: 'line',
//                    yAxisIndex: 1,
//                    data: [16.5, 17.9, 44.6, 11.9, 100.5, 66.1, '',''],
//
//                },
//                {
//                    name: '社会消费品零售增速',
//                    type: 'line',
//                    yAxisIndex: 1,
//                    data: [-6, 11.1, 11.4, 11.3, 10.1, 11.7, '',''],
//
//                }
            ]
        };

        // 使用刚指定的配置项和数据显示图表。

        // 使用刚指定的配置项和数据显示图表。

        myC.setOption(optionone);
        //浏览器大小改变时重置大小
//        window.charts = [];
        $(window).resize(function () {
            myC.resize();
        });
//        window.onresize = ;
    }
    //    $(function () {
    //        // 基于准备好的dom，初始化echarts实例
    //
    //    });
</script>
