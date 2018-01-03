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
        <div id="HeaderDatelineFinance" style="min-height: 50px"></div>
    </div>
</div>
<script type="text/javascript">
    function structureChart(store) {
        // 指定图表的配置项和数据
        var axisD = [];
        for (var item in axisArr) {
            axisD.push(axisArr[item].name);
        }
        var pdsNum = [];
        for (var j in axisArr) {
            //===============饼图kit==============
            var pieKitNum = new SyChartSeriesKit({
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
                    name: '一般公共服务支出',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '一般公共服务支出'
                        }).extField
                    }]
                }, {
                    name: '公共安全支出',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '公共安全支出'
                        }).extField
                    }]
                }, {
                    name: '教育支出',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '教育支出'
                        }).extField
                    }]
                }, {
                    name: '科学技术支出',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '科学技术支出'
                        }).extField
                    }]
                }, {
                    name: '社会保障与就业支出',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '社会保障与就业支出'
                        }).extField
                    }]
                }, {
                    name: '医疗卫生与计划生育支出',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '医疗卫生与计划生育支出'
                        }).extField
                    }]
                }, {
                    name: '节能环保支出',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '节能环保支出'
                        }).extField
                    }]
                }, {
                    name: '城乡社区支出',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '城乡社区支出'
                        }).extField
                    }]
                }]
            });
            pdsNum.push({
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
                    data: ['一般公共服务支出', '公共安全支出', '教育支出','科学技术支出', '社会保障与就业支出', '医疗卫生与计划生育支出','节能环保支出','城乡社区支出']
                },
                series: [{
                    name: '总量',
                    type: 'pie',
                    radius: '55%',
                    center: ['50%', '60%'],
                    data: pieKitNum.genSeriesData(),
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
            axis: axisArr,
        });
        // 基于准备好的dom，初始化echarts实例
        var myChartOne = echarts.init(document.getElementById('run-one'));
        var myChartTwo = echarts.init(document.getElementById('run-two'));
        var myChartThree = echarts.init(document.getElementById('run-three'));

        // 指定图表的配置项和数据
        var optionOne = {
            title: {
                text: '',
                subtext: '',
                x: 'center'
            },
            tooltip: {
                trigger: 'axis',
                axisPointer: {            // 坐标轴指示器，坐标轴触发有效
                    type: 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
                }
            },
            legend: {
                data: ['税收收入', '非税收收入']
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: [
                {
                    type: 'category',
                    data: axisD//['2017-2', '2017-3', '2017-4', '2017-5', '2017-6', '2017-7']
                }
            ],
            yAxis: [
                {
                    type: 'value',
                    name: '累计',
                    splitLine: {show: false},
                    axisLabel: {
                        formatter: '{value}'
                    }
                }
            ],
            series: [

                {
                    name: '税收收入',
                    type: 'bar',
                    stack: '累计',
                    data: chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '税收收入'
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
                    name: '非税收收入',
                    type: 'bar',
                    stack: '累计',
                    data: chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '非税收收入'
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
            ]
        };
        var optionTwo = {
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
            options: pdsNum
        };
        var optionThree = {
            title: {
                text: ''
            },
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['金融系统本外币存款余额', '个人储蓄存款', '金融系统本外币贷款余额']
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
                data: axisD//['2017-2', '2017-3', '2017-4', '2017-5', '2017-6', '2017-7']
            },
            yAxis: {
                type: 'value',
                name: '累计同比增长率',
                splitLine: {show: false},
                axisLabel: {
                    formatter: '{value}%'
                }
            },
            series: [
                {
                    name: '金融系统本外币存款余额',
                    type: 'line',
                    stack: '累计同比增长率',
                    data: chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '金融系统本外币存款余额'
                            }).extField
                        }, {
                            //name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '累计同比增长率'
                            }).extField
                        }]
                    })
                },
                {
                    name: '个人储蓄存款',
                    type: 'line',
                    stack: '累计同比增长率',
                    data: chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '个人储蓄存款'
                            }).extField
                        }, {
                            //name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '累计同比增长率'
                            }).extField
                        }]
                    })
                },
                {
                    name: '金融系统本外币贷款余额',
                    type: 'line',
                    stack: '累计同比增长率',
                    data: chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '金融系统本外币贷款余额'
                            }).extField
                        }, {
                            //name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '累计同比增长率'
                            }).extField
                        }]
                    })
                }
            ]
        };
        // 使用刚指定的配置项和数据显示图表。
        myChartTwo.group = 'month';
        echarts.connect('month');
        myChartOne.setOption(optionOne);
        myChartTwo.setOption(optionTwo);
        myChartThree.setOption(optionThree);

        $(window).resize(function () {
            myChartOne.resize();
            myChartTwo.resize();
            myChartThree.resize();
        });
    };
</script>
