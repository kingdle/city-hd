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
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('run-one'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '',
                subtext: '2017年7月',
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
            series: [
                {
                    name: '完成投资额',
                    type: 'pie',
                    radius: '55%',
                    center: ['50%', '60%'],
                    data: [
                        {value: 243788, name: '第一产业'},
                        {value: 3997836, name: '第二产业'},
                        {value: 9113692, name: '第三产业'}
                    ],
                    itemStyle: {
                        emphasis: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }
            ]
        };


        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    });
</script>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('run-two'));

        // 指定图表的配置项和数据
        option = {
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
                data:['10亿元以上',' 5亿元至10亿元','1亿元至5亿元']
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
                    data : ['2017-2','2017-3','2017-4','2017-5','2017-6','2017-7']
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
                    data:[2, 4, 9, 13, 21, 25]
                },
                {
                    name:'5亿元至10亿元',
                    type:'line',
                    stack: '个数',
                    areaStyle: {normal: {}},
                    data:[1, 3, 4, 7, 8, 19]
                },
                {
                    name:'1亿元至5亿元',
                    type:'line',
                    stack: '个数',
                    areaStyle: {normal: {}},
                    data:[11, 21,32, 37, 50, 72]
                }
            ]
        };


        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    });
</script>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('run-three'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '',
                subtext: '2017年7月',
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
            series: [
                {
                    name: '产业项目个数',
                    type: 'pie',
                    radius: '55%',
                    center: ['50%', '60%'],
                    data: [
                        {value: 8, name: '100亿元以上'},
                        {value: 2, name: '50亿元至100亿元'},
                        {value: 46, name: '10亿元至50亿元'},
                        {value: 49, name: '5亿元至10亿元'},
                        {value: 199, name: '1亿元至5亿元'}
                    ],
                    itemStyle: {
                        emphasis: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }
            ]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    });
</script>