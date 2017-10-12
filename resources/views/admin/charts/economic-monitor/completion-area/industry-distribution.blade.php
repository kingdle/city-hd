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
                <div class="ibox-contenter">
                    <div id="bobal" style="min-height: 650px"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('bobal'));

        // 指定图表的配置项和数据
        var

            option = {
                title: {
                    left: 'center',
                    text: '黄岛区地区生产总值完成情况'
                },
                grid: [
                    {x: '4%', y: '10%', width: '36%', height: '80%'},
                    {x2: '4%', y: '10%', width: '36%', height: '80%'}
                ],
                tooltip: {
                    trigger: 'axis',
                    showDelay: 0,
                    formatter: function (p) {
                        console.log(arguments);
                        var pp = p[0];
                        return pp.seriesName + '<br>总量:' + pp.data[0] + "<br>增速:" + pp.data[1];
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
                        name: '总量(亿元)'
                    },
                    {
                        gridIndex: 1,
                        type: 'value',
                        scale: true,
                        name: ''
                    }
                ],
                yAxis: [
                    {
                        gridIndex: 0,
                        type: 'value',
                        scale: true,
                        name: '增速(%)'
                    },
                    {
                        gridIndex: 1,
                        type: 'value',
                        scale: true,
                        name: '增速(%)'
                    }
                ],
                series: [
                    {
                        name: '农林牧渔业',
                        type: 'scatter',
                        large: true,
                        data: [[34.8, 3.5]],
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
                        data: [[629.4, 8.9]],
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
                        data: [[56.0, 11.5]],
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
                        data: [[183.8, 25.3]],
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
                        data: [[133.8, 7.9]],
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
                        data: [[28.8, 4.6]],
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
                        data: [[32.8, 11.2]],
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
                        data: [[106.9, 22.0]],
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
                        data: [[257.4, 11.5]],
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
                        xAxisIndex: 1,
                        yAxisIndex: 1,
                        data: [[1.2, 6.4]],
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
                        xAxisIndex: 1,
                        yAxisIndex: 1,
                        data: [[1.7, 8.6]],
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
                        xAxisIndex: 1,
                        yAxisIndex: 1,
                        data: [[166.1, 27.5]],
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
                        xAxisIndex: 1,
                        yAxisIndex: 1,
                        data: [[17.7, 6.4]],
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
                        xAxisIndex: 1,
                        yAxisIndex: 1,
                        large: true,
                        data: [[9.7, 5.6]],
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
                        xAxisIndex: 1,
                        yAxisIndex: 1,
                        data: [[19.1, 4.0]],
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
                        xAxisIndex: 1,
                        yAxisIndex: 1,
                        data: [[94.6, 24.6]],
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
                        xAxisIndex: 1,
                        yAxisIndex: 1,
                        data: [[12.3, 5.0]],
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
                        xAxisIndex: 1,
                        yAxisIndex: 1,
                        data: [[148.8, 19.5]],
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
                        xAxisIndex: 1,
                        yAxisIndex: 1,
                        data: [[108.6, 0.9]],
                        label: {
                            normal: {
                                show: true,
                                formatter: '{a}',
                                position: 'top'

                            }
                        }
                    }

                ]
            };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.onresize = function () {
            myChart.resize();
        };
    });
</script>