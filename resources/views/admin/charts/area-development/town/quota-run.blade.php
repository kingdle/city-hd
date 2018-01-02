<div class="box box-primary">
    <div class="contenter">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>指标运行趋势</h5>
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
<script src="{{ admin_asset ("/js/vue.min.js") }}"></script>
<script type="text/javascript">
    $(function() {

        storeB = new SyStore({
            autoLoad: true,
            datasetId: 9,
            success: function(store) {
                console.log(store)

                var axisArr = [];
                var date = [];
                for(var item in store.collection.time){
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
                console.log(axisArr)

                var kk = chartKit.genSeriesData({
                    series: [{
                        //        name: "资产投资",
                        type: "item",
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '工业'
                        }).extField
                    }, {
                        //        name: 2,
                        type: 'frame',
                        extField: store.findMetaByItemName({
                            type: 'frame',
                            name: '增长率'
                        }).extField
                    }, {
                        //        name: "资产投资",
                        type: "area",
                        extField: store.findMetaByItemName({
                            type: 'area',
                            name: '黄岛'
                        }).extField
                    }]
                });
                console.log(kk)
                app3 = new Vue({
                    el: '#app-2',
                    data: {
                        seen: true,
                        date: date,
                        item: '工业',
                        frame: '增长率'
                    },
                    methods: {
                        syClick: function() {
                            console.log('click')
                            this.date.reverse();
                            //							this.seen = !this.seen
                        },
                        initChart: function() {
                            var myChart = echarts.init(document.getElementById('speed-line'));
                            myChart.setOption(this.option);
                        }
                    },
                    computed: {
                        option: function() {
                            return {
                                title: {
                                    text: ''
                                },
                                tooltip: {
                                    trigger: 'axis'
                                },
                                legend: {
                                    data: ['黄岛', '辛安', '薛家岛', '灵珠山', '长江路', '红石崖', '灵山卫', '王台镇', '隐珠']
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
                                    name: '黄岛',
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
                                                name: '黄岛'
                                            }).extField
                                        }]
                                    })
                                },
                                    {
                                        name: '辛安',
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
                                                    name: '辛  安'
                                                }).extField
                                            }]
                                        })
                                    },
                                    {
                                        name: '薛家岛',
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
                                                    name: '薛家岛'
                                                }).extField
                                            }]
                                        })
                                    },
                                    {
                                        name: '灵珠山',
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
                                                    name: '灵珠山'
                                                }).extField
                                            }]
                                        })
                                    },
                                    {
                                        name: '长江路',
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
                                                    name: '长江路'
                                                }).extField
                                            }]
                                        })
                                    },
                                    {
                                        name: '红石崖',
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
                                                    name: '红石崖'
                                                }).extField
                                            }]
                                        })
                                    },
                                    {
                                        name: '灵山卫',
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
                                                    name: '灵山卫'
                                                }).extField
                                            }]
                                        })
                                    },
                                    {
                                        name: '王台镇',
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
                                                    name: '王台镇'
                                                }).extField
                                            }]
                                        })
                                    },

                                    {
                                        name: '隐珠',
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
                                                    name: '隐珠'
                                                }).extField
                                            }]
                                        })
                                    }
                                ]
                            }
                        }
                    },
                    updated: function() {
                        console.log('updated')
                        this.initChart();

                    },
                    mounted: function() {
                        console.log('updated')
                        this.initChart();

                    }
                })
            }
        });

    });
</script>
@include('admin::charts.area-development.AreaJs')
