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
        <div id="HeaderDatelineIndustry" style="min-height: 50px"></div>
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
        for (var j in jiduTime.dateArr) {
            //===============饼图kit==============
            var pieKitNum = new SyChartSeriesKit({
                store: store,
                style: 'obj',
                series: [{
                    type: "time_year",
                    extField: jiduTime.dateArr[j].getFullYear()
                }, {
                    type: 'time_month',
                    extField: jiduTime.dateArr[j].getMonth() + 1
                }, {
                    type: 'area',
                    extField: 1508
                }, {
                    type: 'frame',
                    extField: 200000011
                }],
                axis: [{
                    name: '国有',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '国有'
                        }).extField
                    }]
                }, {
                    name: '集体',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '集体'
                        }).extField
                    }]
                }, {
                    name: '股份合作',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '股份合作'
                        }).extField
                    }]
                }, {
                    name: '股份制',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '股份制'
                        }).extField
                    }]
                }, {
                    name: '外商及港澳台',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '外商及港澳台'
                        }).extField
                    }]
                }, {
                    name: '其他经济',
                    arr: [{
                        type: 'item',
                        extField: store.findMetaByItemName({
                            type: 'item',
                            name: '其他经济'
                        }).extField
                    }]
                }]
            });
            pdsNum.push({
                title: {
                    text: '',
                    subtext: jiduTime.dateStrArr[j],
                    x: 'center'
                },
                tooltip: {
                    trigger: 'item',
                    formatter: "{a} <br/>{b} : {c} ({d}%)"
                },
                legend: {
                    orient: 'vertical',
                    left: 'left',
                    data: ['国有', '集体', '股份合作',' 股份制','外商及港澳台','其他经济']
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
            baseOption: {
                timeline: {
                    data: jiduTime.dateArr,
                    currentIndex: jiduTime.dateArr.length - 1,
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

        // 指定图表的配置项和数据
        var optionTwo = {
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
                data: ['轻工业', '重工业']
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
                    type: 'value'
                }
            ],
            series: [
                {
                    name: '轻工业',
                    type: 'bar',
                    stack: '产值',
                    data: chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '轻工业'
                            }).extField
                        }, {
                            //name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '产值'
                            }).extField
                        }]
                    })

                },
                {
                    name: '重工业',
                    type: 'bar',
                    stack: '产值',
                    data: chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '重工业'
                            }).extField
                        }, {
                            //name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '产值'
                            }).extField
                        }]
                    })
                }
            ]
        };
        // 指定图表的配置项和数据
        var optionThree = {
            title: {
                text: ''
            },
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['民营企业', '大中型工业企业']
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
                data: axisD//['2016-3', '2016-6', '2016-9', '2016-12', '2017-3', '2017-6']
            },
            yAxis: {
                type: 'value'
            },
            series: [

                {
                    name: '民营企业',
                    type: 'line',
                    stack: '产值',
                    data: chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '民营企业'
                            }).extField
                        }, {
                            //name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '产值'
                            }).extField
                        }]
                    })
                },
                {
                    name: '大中型工业企业',
                    type: 'line',
                    stack: '产值',
                    data: chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '大中型工业企业'
                            }).extField
                        }, {
                            //name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '产值'
                            }).extField
                        }]
                    })
                }
            ]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChartOne.group = 'jidu';
        echarts.connect('jidu');
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
