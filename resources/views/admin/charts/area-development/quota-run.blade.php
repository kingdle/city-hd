<div class="box box-primary">
    <div class="contenter">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>指标运行趋势（固定资产投资总额）</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-contenter">
                        <div id="speed-line" style="min-height: 300px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        storeB = new SyStore({
            autoLoad: true,
            datasetId: 8,
            success: function (store) {
                console.log(store)

                var axisArr = [];
                var date = [];
                for (var item in store.collection.time) {
                    date.push(item)
                    axisArr.push({
                        "name": item,
                        "arr": [{
                            "name": item.split('-')[0],
                            "type": "time_year",
                            "extField": item.split('-')[0]
                        }, {
                            "name": item.split('-')[1],
                            "type": "time_month",
                            "extField": item.split('-')[1]
                        }]
                    });
                }
                var chartKit = new SyChartSeriesKit({
                    store: store,
                    axis: axisArr,

                });

                app3 = new Vue({
                    el: '#app-2',
                    data: {
                        seen: true,
                        date: date,
                        item: '固定资产投资总额',
                        frame: '进度'
                    },
                    methods: {
                        syClick: function () {
                            console.log('click')
                            this.date.reverse();
                            //							this.seen = !this.seen
                        },
                        initChart: function () {
                            var myChart = echarts.init(document.getElementById('speed-line'));
                            myChart.setOption(this.option);
                        }
                    },
                    computed: {
                        option: function () {
                            return {
                                title: {
                                    text: ''
                                },
                                tooltip: {
                                    trigger: 'axis'
                                },
                                legend: {
                                    data: ['海洋高新区', '中德生态园', '经济技术开发区', '董家口循环经济区', '国际旅游度假区', '灵山湾影视文化产业区', '现代农业示范区', '古镇口创新示范区', '西海岸交通商务区', '藏马山旅游度假区', '轨道交通指挥部']
                                },
                                grid: {
                                    left: '3%',
                                    right: '4%',
                                    bottom: '3%',
                                    containLabel: true
                                },
                                toolbox: {},
                                xAxis: {
                                    type: 'category',
                                    boundaryGap: false,
                                    data: this.date
                                },
                                yAxis: {
                                    type: 'value'
                                },
                                series: [{
                                    name: '海洋高新区',
                                    type: 'line',
                                    //stack: '总量',
                                    data: chartKit.genSeriesData({
                                        series: [{
                                            //        name: "资产投资",
                                            type: "item",
                                            extField: store.findMetaByItemName({
                                                type: 'item',
                                                name: this.item
                                            }).extField
                                        }, {
                                            //        name: 2,
                                            type: 'frame',
                                            extField: store.findMetaByItemName({
                                                type: 'frame',
                                                name: this.frame
                                            }).extField
                                        }, {
                                            //        name: "资产投资",
                                            type: "area",
                                            extField: store.findMetaByItemName({
                                                type: 'area',
                                                name: '海洋高新区'
                                            }).extField
                                        }]
                                    })
                                },
                                    {
                                        name: '中德生态园',
                                        type: 'line',
                                        //stack: '总量',
                                        data: chartKit.genSeriesData({
                                            series: [{
                                                //        name: "资产投资",
                                                type: "item",
                                                extField: store.findMetaByItemName({
                                                    type: 'item',
                                                    name: this.item
                                                }).extField
                                            }, {
                                                //        name: 2,
                                                type: 'frame',
                                                extField: store.findMetaByItemName({
                                                    type: 'frame',
                                                    name: this.frame
                                                }).extField
                                            }, {
                                                //        name: "资产投资",
                                                type: "area",
                                                extField: store.findMetaByItemName({
                                                    type: 'area',
                                                    name: '中德生态园'
                                                }).extField
                                            }]
                                        })
                                    },
                                    {
                                        name: '经济技术开发区',
                                        type: 'line',
                                        //stack: '总量',
                                        data: chartKit.genSeriesData({
                                            series: [{
                                                //        name: "资产投资",
                                                type: "item",
                                                extField: store.findMetaByItemName({
                                                    type: 'item',
                                                    name: this.item
                                                }).extField
                                            }, {
                                                //        name: 2,
                                                type: 'frame',
                                                extField: store.findMetaByItemName({
                                                    type: 'frame',
                                                    name: this.frame
                                                }).extField
                                            }, {
                                                //        name: "资产投资",
                                                type: "area",
                                                extField: store.findMetaByItemName({
                                                    type: 'area',
                                                    name: '经济技术开发区'
                                                }).extField
                                            }]
                                        })
                                    },
                                    {
                                        name: '董家口循环经济区',
                                        type: 'line',
                                        //stack: '总量',
                                        data: chartKit.genSeriesData({
                                            series: [{
                                                //        name: "资产投资",
                                                type: "item",
                                                extField: store.findMetaByItemName({
                                                    type: 'item',
                                                    name: this.item
                                                }).extField
                                            }, {
                                                //        name: 2,
                                                type: 'frame',
                                                extField: store.findMetaByItemName({
                                                    type: 'frame',
                                                    name: this.frame
                                                }).extField
                                            }, {
                                                //        name: "资产投资",
                                                type: "area",
                                                extField: store.findMetaByItemName({
                                                    type: 'area',
                                                    name: '董家口循环经济区'
                                                }).extField
                                            }]
                                        })
                                    },
                                    {
                                        name: '国际旅游度假区',
                                        type: 'line',
                                        //stack: '总量',
                                        data: chartKit.genSeriesData({
                                            series: [{
                                                //        name: "资产投资",
                                                type: "item",
                                                extField: store.findMetaByItemName({
                                                    type: 'item',
                                                    name: this.item
                                                }).extField
                                            }, {
                                                //        name: 2,
                                                type: 'frame',
                                                extField: store.findMetaByItemName({
                                                    type: 'frame',
                                                    name: this.frame
                                                }).extField
                                            }, {
                                                //        name: "资产投资",
                                                type: "area",
                                                extField: store.findMetaByItemName({
                                                    type: 'area',
                                                    name: '国际旅游度假区'
                                                }).extField
                                            }]
                                        })
                                    },
                                    {
                                        name: '灵山湾影视文化产业区',
                                        type: 'line',
                                        //stack: '总量',
                                        data: chartKit.genSeriesData({
                                            series: [{
                                                //        name: "资产投资",
                                                type: "item",
                                                extField: store.findMetaByItemName({
                                                    type: 'item',
                                                    name: this.item
                                                }).extField
                                            }, {
                                                //        name: 2,
                                                type: 'frame',
                                                extField: store.findMetaByItemName({
                                                    type: 'frame',
                                                    name: this.frame
                                                }).extField
                                            }, {
                                                //        name: "资产投资",
                                                type: "area",
                                                extField: store.findMetaByItemName({
                                                    type: 'area',
                                                    name: '灵山湾影视文化产业区'
                                                }).extField
                                            }]
                                        })
                                    },
                                    {
                                        name: '现代农业示范区',
                                        type: 'line',
                                        //stack: '总量',
                                        data: chartKit.genSeriesData({
                                            series: [{
                                                //        name: "资产投资",
                                                type: "item",
                                                extField: store.findMetaByItemName({
                                                    type: 'item',
                                                    name: this.item
                                                }).extField
                                            }, {
                                                //        name: 2,
                                                type: 'frame',
                                                extField: store.findMetaByItemName({
                                                    type: 'frame',
                                                    name: this.frame
                                                }).extField
                                            }, {
                                                //        name: "资产投资",
                                                type: "area",
                                                extField: store.findMetaByItemName({
                                                    type: 'area',
                                                    name: '现代农业示范区'
                                                }).extField
                                            }]
                                        })
                                    },
                                    {
                                        name: '古镇口创新示范区',
                                        type: 'line',
                                        //stack: '总量',
                                        data: chartKit.genSeriesData({
                                            series: [{
                                                //        name: "资产投资",
                                                type: "item",
                                                extField: store.findMetaByItemName({
                                                    type: 'item',
                                                    name: this.item
                                                }).extField
                                            }, {
                                                //        name: 2,
                                                type: 'frame',
                                                extField: store.findMetaByItemName({
                                                    type: 'frame',
                                                    name: this.frame
                                                }).extField
                                            }, {
                                                //        name: "资产投资",
                                                type: "area",
                                                extField: store.findMetaByItemName({
                                                    type: 'area',
                                                    name: '古镇口创新示范区'
                                                }).extField
                                            }]
                                        })
                                    },
                                    {
                                        name: '西海岸交通商务区',
                                        type: 'line',
                                        //stack: '总量',
                                        data: chartKit.genSeriesData({
                                            series: [{
                                                //        name: "资产投资",
                                                type: "item",
                                                extField: store.findMetaByItemName({
                                                    type: 'item',
                                                    name: this.item
                                                }).extField
                                            }, {
                                                //        name: 2,
                                                type: 'frame',
                                                extField: store.findMetaByItemName({
                                                    type: 'frame',
                                                    name: this.frame
                                                }).extField
                                            }, {
                                                //        name: "资产投资",
                                                type: "area",
                                                extField: store.findMetaByItemName({
                                                    type: 'area',
                                                    name: '西海岸交通商务区'
                                                }).extField
                                            }]
                                        })
                                    },
                                    {
                                        name: '藏马山旅游度假区',
                                        type: 'line',
                                        //stack: '总量',
                                        data: chartKit.genSeriesData({
                                            series: [{
                                                //        name: "资产投资",
                                                type: "item",
                                                extField: store.findMetaByItemName({
                                                    type: 'item',
                                                    name: this.item
                                                }).extField
                                            }, {
                                                //        name: 2,
                                                type: 'frame',
                                                extField: store.findMetaByItemName({
                                                    type: 'frame',
                                                    name: this.frame
                                                }).extField
                                            }, {
                                                //        name: "资产投资",
                                                type: "area",
                                                extField: store.findMetaByItemName({
                                                    type: 'area',
                                                    name: '藏马山旅游度假区'
                                                }).extField
                                            }]
                                        })
                                    },
                                    {
                                        name: '轨道交通指挥部',
                                        type: 'line',
                                        //stack: '总量',
                                        data: chartKit.genSeriesData({
                                            series: [{
                                                //        name: "资产投资",
                                                type: "item",
                                                extField: store.findMetaByItemName({
                                                    type: 'item',
                                                    name: this.item
                                                }).extField
                                            }, {
                                                //        name: 2,
                                                type: 'frame',
                                                extField: store.findMetaByItemName({
                                                    type: 'frame',
                                                    name: this.frame
                                                }).extField
                                            }, {
                                                //        name: "资产投资",
                                                type: "area",
                                                extField: store.findMetaByItemName({
                                                    type: 'area',
                                                    name: '轨道交通指挥部'
                                                }).extField
                                            }]
                                        })
                                    }
                                ]
                            }
                        }
                    },
                    updated: function () {
                        console.log('updated')
                        this.initChart();

                    },
                    mounted: function () {
                        console.log('updated')
                        this.initChart();

                    }
                })
            }
        });

    });
</script>
@include('admin::charts.area-development.DomainJs')
