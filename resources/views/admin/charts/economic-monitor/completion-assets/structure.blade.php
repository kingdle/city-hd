<div class="box">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>产业结构分析</h5>
                    <div class="ibox-tools">
                        <a class="close-link-pillar">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-contenter">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="ibox">
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="run-one" style="min-height: 300px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="ibox">
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="run-two" style="min-height: 300px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="ibox">
                                <div class="ibox-content ">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="run-three" style="min-height: 300px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div id="HeaderDatelineAssets" style="min-height: 50px"></div>
    </div>
</div>
<script type="text/javascript">
    function structureChart(store) {
        // 指定图表的配置项和数据
        var axisD = [];
        for (var item in axisArr) {
            axisD.push(axisArr[item].name);
        }
        var pds = [];
        var pdsProjectNum = [];
        for (var j in axisArr) {
            //===============饼图kit==============
            var pieKit = new SyChartSeriesKit({
                store: store,
                style: 'obj',
                series: [{
                    type: "time_year",
                    extField: dateArr[j].getFullYear()
                }, {
                    type: 'time_month',
                    extField: dateArr[j].getMonth() + 1
                }, {
                    type: 'area',
                    extField: 1508
                }, {
                    type: 'frame',
                    extField: 200000011
                }],
                axis: [{
                    name: '第一产业',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '第一产业'
                        }).extField
                    }]
                }, {
                    name: '第二产业',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '第二产业'
                        }).extField
                    }]
                }, {
                    name: '第三产业',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '第三产业'
                        }).extField
                    }]
                }]
            });
            pds.push({
                title: {
                    text: '',
                    subtext: dateStrArr[j],
                    x: 'center'
                },
                tooltip: {
                    trigger: 'item',
                    formatter: "{a} <br/>{b} : {c} ({d}%)"
                },
                legend: {
                    orient: 'vertical',
                    left: 'left',
                    data: ['第一产业', '第二产业', '第三产业']
                },
                series: [{
                    name: '总量',
                    type: 'pie',
                    radius: '55%',
                    center: ['50%', '60%'],
                    data: pieKit.genSeriesData(),
                    itemStyle: {
                        emphasis: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }]
            });
//===============饼图kit==============
            var pieKitProjectNum = new SyChartSeriesKit({
                store: store,
                style: 'obj',
                series: [{
                    type: "time_year",
                    extField: dateArr[j].getFullYear()
                }, {
                    type: 'time_month',
                    extField: dateArr[j].getMonth() + 1
                }, {
                    type: 'area',
                    extField: 1508
                }, {
                    type: 'frame',
                    extField: 200000011
                }],
                axis: [{
                    name: '100亿元以上',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '100亿元以上'
                        }).extField
                    }]
                }, {
                    name: '50亿元至100亿元',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '50亿元至100亿元'
                        }).extField
                    }]
                }, {
                    name: '10亿元至50亿元',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '10亿元至50亿元'
                        }).extField
                    }]
                }, {
                    name: '5亿元至10亿元',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '5亿元至10亿元'
                        }).extField
                    }]
                }, {
                    name: '1亿元至5亿元',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '1亿元至5亿元'
                        }).extField
                    }]
                }]
            });
            pdsProjectNum.push({
                title: {
                    text: '',
                    subtext: dateStrArr[j],
                    x: 'center'
                },
                tooltip: {
                    trigger: 'item',
                    formatter: "{a} <br/>{b} : {c} ({d}%)"
                },
                legend: {
                    orient: 'vertical',
                    left: 'left',
                    data: ['100亿元以上', '50亿元至100亿元', '10亿元至50亿元','5亿元至10亿元','1亿元至5亿元']
                },
                series: [{
                    name: '总量',
                    type: 'pie',
                    radius: '55%',
                    center: ['50%', '60%'],
                    data: pieKitProjectNum.genSeriesData(),
                    itemStyle: {
                        emphasis: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }]
            });
        }
        //===============普通图kit==============
        var chartKit = new SyChartSeriesKit({
            store: store,
            series: [{
                type: "item",
                extField: store.findMetaByItemName({
                    type: 'item',
                    name: '第二产业'
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
        // 基于准备好的dom，初始化echarts实例
        var myChartOne = echarts.init(document.getElementById('run-one'));
        var myChartTwo = echarts.init(document.getElementById('run-two'));
        var myChartThree = echarts.init(document.getElementById('run-three'));
        // 指定图表的配置项和数据
        var optionOne = {
            baseOption: {
                timeline: {
                    data: dateStrArr,
                    currentIndex: dateStrArr.length - 1,
                    autoPlay: false,
                    rewind: true,
                    show: false
                },
                series: {
                    type: 'pie'
                }
            },
            options: pds
        };
        var optionTwo = {
            title: {
                text: '亿元新开工项目情况'
            },
            tooltip : {
                trigger: 'axis',
                axisPointer: {
                    type: 'cross',
                    label: {
                        backgroundColor: '#6a7985'
                    }
                }
            },
            legend: {
                x: 'right',
                top:'25px',
                data:['10亿元以上','5至10亿元','1至5亿元']
            },
            toolbox: {
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis : [
                {
                    type : 'category',
                    boundaryGap : false,
                    data : axisD//['2017-2','2017-3','2017-4','2017-5','2017-6','2017-7']
                }
            ],
            yAxis : [
                {
                    type : 'value'
                }
            ],
            series : [
                {
                    name:'10亿元以上',
                    type:'line',
                    stack: '个数',
                    areaStyle: {normal: {}},
                    data:chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '10亿元以上'
                            }).extField
                        }, {
                            //name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '累计'
                            }).extField
                        }]
                    })
                },
                {
                    name:'5至10亿元',
                    type:'line',
                    stack: '个数',
                    areaStyle: {normal: {}},
                    data:chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '5亿元至10亿元'
                            }).extField
                        }, {
                            //name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '累计'
                            }).extField
                        }]
                    })
                },
                {
                    name:'1至5亿元',
                    type:'line',
                    stack: '个数',
                    areaStyle: {normal: {}},
                    data:chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '1亿元至5亿'
                            }).extField
                        }, {
                            //name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '累计'
                            }).extField
                        }]
                    })
                }
            ]
        };
        var optionThree = {
            baseOption: {
                timeline: {
                    data: dateStrArr,
                    currentIndex: dateStrArr.length - 1,
                    autoPlay: false,
                    rewind: true,
                    show: false
                },
                series: {
                    type: 'pie'
                }
            },
            options: pdsProjectNum
        };



        // 使用刚指定的配置项和数据显示图表。
        myChartOne.group = 'month';
        myChartThree.group = 'month';
        echarts.connect('month');
        myChartOne.setOption(optionOne);
        myChartTwo.setOption(optionTwo);
        myChartThree.setOption(optionThree);
        $(window).resize(function () {
            myChartOne.resize();
            myChartTwo.resize();
            myChartThree.resize();
        });

    }
</script>
