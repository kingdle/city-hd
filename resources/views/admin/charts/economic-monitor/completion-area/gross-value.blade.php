<style>
    .row-quota table tbody {
        max-height:602px;
    }
</style>
<div class="box">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>行业发展分析</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="HeaderDatelineArea" style="min-height: 50px"></div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="ibox">
                        <div id="bobal" style="min-height: 690px"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>增加值总量排名</h5>
                        </div>
                        <div class="row-quota" id="quota">
                            <div id="app-GG">
                                <sy-table :stru="stru"></sy-table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="{{ admin_asset ("/js/vue.min.js") }}"></script>
<script src="{{ admin_asset ("/js/vuetable1.js") }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var _width = $('#quota').width();
        $('#quota th:first-child').width(_width * 0.1);
        $('#quota td:first-child').width(_width * 0.1);
        $('#quota th:nth-child(2)').width(_width * 0.4);
        $('#quota td:nth-child(2)').width(_width * 0.4);
        $('#quota th:nth-child(3)').width(_width * 0.2);
        $('#quota td:nth-child(3)').width(_width * 0.2);
        $('#quota th:nth-child(4)').width(_width * 0.2);
        $('#quota td:nth-child(4)').width(_width * 0.2);
        $('#quota th:nth-child(5)').width(_width * 0.1);
        $('#quota td:nth-child(5)').width(_width * 0.1);
    })
</script>
<script type="text/javascript">
    var struBB = {};
    function grossChart(store) {




        //==============散点图(横轴指标)=================
        var axisArr = [];
        for (var axis in store.meta.item) {
            axisArr.push({
                name: store.meta.item[axis].name,
                arr: [{
                    type: 'item',
                    extField: store.meta.item[axis].extField
                }]
            })

        }
        var sOptionArr = [];
        //==============!散点图(横轴指标)=================
        for (var j in jiduTime.dateArr) {
            var baseRes = {
                frame: 200000011,
                area: 1508,
                time_year: jiduTime.dateArr[j].getFullYear(),
                time_month: jiduTime.dateArr[j].getMonth() + 1,
            }

            var baseRes1 = {
                frame: 200000014,
                area: 1508,
                time_year: jiduTime.dateArr[j].getFullYear(),
                time_month: jiduTime.dateArr[j].getMonth() + 1,
            }

            //===============散点图kit==============
            var sandianKit = new SyChartSeriesKit({
                store: store,
                series: [{
                    type: "time_year",
                    extField: jiduTime.dateArr[j].getFullYear()
                }, {
                    type: 'time_month',
                    extField: jiduTime.dateArr[j].getMonth() + 1
                }, {
                    type: 'area',
                    extField: 1508
                }],
                axis: axisArr,
                dim: [
                    [{
                        type: 'frame',
                        extField: store.findMetaByItemName({
                            type: 'frame',
                            name: '累计'
                        }).extField
                    }],
                    [{
                        type: 'frame',
                        extField: store.findMetaByItemName({
                            type: 'frame',
                            name: '增长'
                        }).extField
                    }]
                ]
            });
            var sd = sandianKit.genSeriesData();
            sOptionArr.push({
                series: [
                    {
                        name: '农林牧渔业',
                        type: 'scatter',
                        large: true,
                        data: [sd[7]],
                        xAxisIndex: 0,
                        yAxisIndex: 0,
                        label: {
                            normal: {
                                show: true,
                                formatter: '{a}',
                                position: 'top'

                            }
                        }
                    },
                    {
                        name: '工业',
                        type: 'scatter',
                        large: true,
                        xAxisIndex: 0,
                        yAxisIndex: 0,
                        data: [sd[9]],
                        label: {
                            normal: {
                                show: true,
                                formatter: '{a}',
                                position: 'top'

                            }
                        }
                    },
                    {
                        name: '建筑业',
                        type: 'scatter',
                        large: true,
                        xAxisIndex: 0,
                        yAxisIndex: 0,
                        data: [sd[2]],
                        label: {
                            normal: {
                                show: true,
                                formatter: '{a}',
                                position: 'top'

                            }
                        }
                    },
                    {
                        name: '批发和零售业',
                        type: 'scatter',
                        large: true,
                        xAxisIndex: 0,
                        yAxisIndex: 0,
                        data: [sd[11]],
                        label: {
                            normal: {
                                show: true,
                                formatter: '{a}',
                                position: 'top'

                            }
                        }
                    },
                    {
                        name: '交通运输、仓储和邮政业',
                        type: 'scatter',
                        large: true,
                        xAxisIndex: 0,
                        yAxisIndex: 0,
                        data: [sd[14]],
                        label: {
                            normal: {
                                show: true,
                                formatter: '{a}',
                                position: 'top'

                            }
                        }
                    },
                    {
                        name: '住宿和餐饮业',
                        type: 'scatter',
                        xAxisIndex: 0,
                        yAxisIndex: 0,
                        large: true,
                        data: [sd[15]],
                        label: {
                            normal: {
                                show: true,
                                formatter: '{a}',
                                position: 'top'

                            }
                        }
                    },
                    {
                        name: '金融业',
                        type: 'scatter',
                        large: true,
                        xAxisIndex: 0,
                        yAxisIndex: 0,
                        data: [sd[17]],
                        label: {
                            normal: {
                                show: true,
                                formatter: '{a}',
                                position: 'top'

                            }
                        }
                    },
                    {
                        name: '房地产业',
                        type: 'scatter',
                        xAxisIndex: 0,
                        yAxisIndex: 0,
                        large: true,
                        data: [sd[5]],
                        label: {
                            normal: {
                                show: true,
                                formatter: '{a}',
                                position: 'top'

                            }
                        }
                    },
                    {
                        name: '其他服务业',
                        type: 'scatter',
                        large: true,
                        xAxisIndex: 0,
                        yAxisIndex: 0,
                        data: [sd[19]],
                        label: {
                            normal: {
                                show: true,
                                formatter: '{a}',
                                position: 'top'

                            }
                        }
                    },
                    {
                        name: '农林牧渔业服务业',
                        type: 'scatter',
                        large: true,
                        xAxisIndex: 0,
                        yAxisIndex: 0,
                        data: [sd[8]],
                        label: {
                            normal: {
                                show: true,
                                formatter: '{a}',
                                position: 'top'

                            }
                        }
                    },
                    {
                        name: '金属制品、机械和设备修理业',
                        type: 'scatter',
                        large: true,
                        xAxisIndex: 0,
                        yAxisIndex: 0,
                        data: [sd[10]],
                        label: {
                            normal: {
                                show: true,
                                formatter: '{a}',
                                position: 'top'

                            }
                        }
                    },
                    {
                        name: '批发业',
                        type: 'scatter',
                        large: true,
                        xAxisIndex: 0,
                        yAxisIndex: 0,
                        data: [sd[12]],
                        label: {
                            normal: {
                                show: true,
                                formatter: '{a}',
                                position: 'top'

                            }
                        }
                    },
                    {
                        name: '零售业',
                        type: 'scatter',
                        large: true,
                        xAxisIndex: 0,
                        yAxisIndex: 0,
                        data: [sd[13]],
                        label: {
                            normal: {
                                show: true,
                                formatter: '{a}',
                                position: 'top'

                            }
                        }
                    },
                    {
                        name: '住宿业',
                        type: 'scatter',
                        xAxisIndex: 0,
                        yAxisIndex: 0,
                        large: true,
                        data: [sd[16]],
                        label: {
                            normal: {
                                show: true,
                                formatter: '{a}',
                                position: 'top'

                            }
                        }
                    },
                    {
                        name: '餐饮业',
                        type: 'scatter',
                        large: true,
                        xAxisIndex: 0,
                        yAxisIndex: 0,
                        data: [sd[3]],
                        label: {
                            normal: {
                                show: true,
                                formatter: '{a}',
                                position: 'top'

                            }
                        }
                    },
                    {
                        name: '房地产业(K门类)',
                        type: 'scatter',
                        large: true,
                        xAxisIndex: 0,
                        yAxisIndex: 0,
                        data: [sd[4]],
                        label: {
                            normal: {
                                show: true,
                                formatter: '{a}',
                                position: 'top'

                            }
                        }
                    },
                    {
                        name: '自有房地产经营活动',
                        type: 'scatter',
                        large: true,
                        xAxisIndex: 0,
                        yAxisIndex: 0,
                        data: [sd[18]],
                        label: {
                            normal: {
                                show: true,
                                formatter: '{a}',
                                position: 'top'

                            }
                        }
                    },
                    {
                        name: '营利性服务业',
                        type: 'scatter',
                        large: true,
                        xAxisIndex: 0,
                        yAxisIndex: 0,
                        data: [sd[20]],
                        label: {
                            normal: {
                                show: true,
                                formatter: '{a}',
                                position: 'top'

                            }
                        }
                    },
                    {
                        name: '非营利性服务业',
                        type: 'scatter',
                        large: true,
                        xAxisIndex: 0,
                        yAxisIndex: 0,
                        data: [sd[21]],
                        label: {
                            normal: {
                                show: true,
                                formatter: '{a}',
                                position: 'top'
                            }
                        }
                    }

                ]
            });
        }
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('bobal'));
        myChart.group = 'jidu';
        echarts.connect('jidu');
        // 指定图表的配置项和数据
        var option = {
            group:'jidu',
            baseOption:{
                title: {
                    left: 'center',
                    text: '黄岛区地区生产总值完成情况',
                    y:'10'
                },
                grid: [
                    {x: '4%', y: '10%', width: '85%', height: '80%'},
                ],
                tooltip: {
                    trigger: 'axis',
                    formatter: function (p) {
                        var pp = p[0];
                        if(!pp)
                            return '';
                        if(pp.seriesName)
                            return pp.seriesName + '<br>总量:' + pp.data[0] + "<br>增速:" + pp.data[1];
                        else
                            return pp.data;
                    },
                    axisPointer: {
                        show: true,
                        type: 'cross',
                        lineStyle: {
                            type: 'dashed',
                            width: 1
                        }
                    },
                    zlevel: 1
                },
                xAxis: [
                    {
                        gridIndex: 0,
                        type: 'value',
                        scale: true,
                        name: '累计(亿元)'
                    },
                ],
                yAxis: [
                    {
                        gridIndex: 0,
                        type: 'value',
                        scale: true,
                        name: '增速(%)'
                    },
                ],
                timeline:{
                    data:jiduTime.dateStrArr,
                    currentIndex:jiduTime.dateStrArr.length-1,
                    autoPlay : false,
                    rewind:true,
                    show:false
                },series:sOptionArr[0].series
            },
            options:sOptionArr
        }
        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.onresize = function () {
            myChart.resize();
        };



        //创建表格
        $.ajax({
            type: "get",
            url: SyStore.gPath + "/report/getAnReportByTmpId", //获取表格结构api
            async: true,
            data: {
                tmpType: 'tmp',
                tmpId: 37 //表格结构id
            },
            success: function (stru) {
                struBB = stru;
                myChart.on('timelinechanged', function(index){
                    var nowDate = jiduTime.dateArr[index.currentIndex];
                    struBB.reportMetas = struBB.reportMetas.filter(function (item) {
                        if (item.type == 'time_year') {
                            item.extField = nowDate.getFullYear();
                        }
                        if (item.type == 'time_month') {
                            item.extField = nowDate.getMonth() + 1

                        }
                        return true;

                    });
                });

                //输入初始日期
                if (struBB.reportMetas) {
                    struBB.reportMetas.push({
                        "type": "tmpId",
                        "extField": 37
                    });
                    struBB.reportMetas.push({
                        "type": "time_year",
                        "extField": jiduTime.dateArr[jiduTime.dateArr.length-1].getFullYear()
                    });
                    struBB.reportMetas.push({
                        "type": "time_month",
                        "extField": jiduTime.dateArr[jiduTime.dateArr.length-1].getMonth() + 1
                    });

                } else {
                    struBB.reportMetas = [{
                        "type": "time_year",
                        "extField": jiduTime.dateArr[jiduTime.dateArr.length-1].getFullYear()
                    }, {
                        "type": "time_month",
                        "extField": jiduTime.dateArr[jiduTime.dateArr.length-1].getMonth() + 1
                    }];
                }
                //创建表格
                var aa = new Vue({
                    el: '#app-GG',
                    data: {
                        stru: struBB //表格结构
                    },
                    store: store,
                    mounted: function () {
                        console.log(store)
                    }

                });

            }
        });
    }
</script>
