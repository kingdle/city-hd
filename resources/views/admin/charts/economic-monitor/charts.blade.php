<div class="card">
    <div class="content">
        <div id="charts-contain" style="min-height: 500px"></div>
    </div>
</div>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts-all-3.js"></script>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('charts-contain'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                left:'left',
                text: '地区生产总值运行趋势',
                subtext: ''
            },
            tooltip: {
                trigger: 'axis',

            },
            legend: {
                left:'15%',
                top:'10%',
                orient:'vertical',
                data: ['地区生产总值', '地区生产总值增速', '固定资产投资总额', '固定资产投资增速', '限上贸易销售额', '限上贸易增速', '社会消费品零售额', '社会消费品零售增速']
            },
            //calculable : true,
            xAxis: [{
                silent: false,
                splitLine: {
                    show: false
                },
                type: 'category',
                data: ['2016-3', '2016-6', '2016-9', '2016-12', '2017-3', '2017-6'],

            }],
            yAxis: [{
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
                data: [518.4, 1358, 2146.9, 2871.1, 586.7, 1521.2, '',''],
                markPoint: {
                    data: [{
                        type: 'max',
                        name: '最大值'
                    },
                        {
                            type: 'min',
                            name: '最小值'
                        }
                    ]
                },
                markLine: {
                    data: [{
                        type: 'average',
                        name: '平均值'
                    }]
                }
            },
                {
                    name: '固定资产投资总额',
                    type: 'bar',
                    data: [1188.1, 924.1, 1475.9, 2008.6, 268.8, 1013.2,'',''],
                    markPoint: {
                        data: [{
                            type: 'max',
                            name: '最大值'
                        },
                            {
                                type: 'min',
                                name: '最小值'
                            }
                        ]
                    },
                    markLine: {
                        data: [{
                            type: 'average',
                            name: '平均值'
                        }]
                    }
                },
                {
                    name: '限上贸易销售额',
                    type: 'bar',
                    data: [255 , 277.7, 499.9, 795.3, 332.9, 653.3,'',''],
                    markPoint: {
                        data: [{
                            type: 'max',
                            name: '最大值'
                        },
                            {
                                type: 'min',
                                name: '最小值'
                            }
                        ]
                    },
                    markLine: {
                        data: [{
                            type: 'average',
                            name: '平均值'
                        }]
                    }
                },
                {
                    name: '社会消费品零售额',
                    type: 'bar',
                    data: [121.6, 277.7, 384.6,533.4 , 134.2, 279.2, '',''],
                    markPoint: {
                        data: [{
                            type: 'max',
                            name: '最大值'
                        },
                            {
                                type: 'min',
                                name: '最小值'
                            }
                        ]
                    },
                    markLine: {
                        data: [{
                            type: 'average',
                            name: '平均值'
                        }]
                    }
                },
                {
                    name: '地区生产总值增速',
                    type: 'line',
                    yAxisIndex: 1,
                    data: [8.5, 10.5, 11.5, 12.3, 10, 12.1,'',''],
                    markPoint: {
                        data: [{
                            type: 'max',
                            name: '最快'
                        },
                            {
                                type: 'min',
                                name: '最慢'
                            }
                        ]
                    },
                    markLine: {
                        data: [{
                            type: 'average',
                            name: '平均值'
                        }]
                    }
                },
                {
                    name: '固定资产投资增速',
                    type: 'line',
                    data: [5.7, 15.9, 8.6, 17.2, 11.4, 11.3, '',''],
                    markPoint: {
                        data: [{
                            type: 'max',
                            name: '最快'
                        },
                            {
                                type: 'min',
                                name: '最慢'
                            }
                        ]
                    },
                    markLine: {
                        data: [{
                            type: 'average',
                            name: '平均值'
                        }]
                    }
                },
                {
                    name: '限上贸易增速',
                    type: 'line',
                    data: [16.5, 17.9, 44.6, 11.9, 100.5, 66.1, '',''],
                    markPoint: {
                        data: [{
                            type: 'max',
                            name: '最快'
                        },
                            {
                                type: 'min',
                                name: '最慢'
                            }
                        ]
                    },
                    markLine: {
                        data: [{
                            type: 'average',
                            name: '平均值'
                        }]
                    }
                },
                {
                    name: '社会消费品零售增速',
                    type: 'line',
                    data: [-6, 11.1, 11.4, 11.3, 10.1, 11.7, '',''],
                    markPoint: {
                        data: [{
                            type: 'max',
                            name: '最快'
                        },
                            {
                                type: 'min',
                                name: '最慢'
                            }
                        ]
                    },
                    markLine: {
                        data: [{
                            type: 'average',
                            name: '平均值'
                        }]
                    }
                }
            ]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    });
</script>