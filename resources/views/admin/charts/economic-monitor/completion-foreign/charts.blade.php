<div class="box box-primary">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>外资外贸完成情况运行趋势</h5>
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
                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div id="i-charts1" style="height:236px"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div id="i-charts2" style="height:236px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var ImyChart1 = echarts.init(document.getElementById('i-charts1'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '进出口贸易',
                subtext: ''
            },
            grid: [
                {x: '15%', y: '15%', width: '75%', height: '70%'},
            ],
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['总量', '增速']
            },
            toolbox: {

            },
            calculable: true,
            xAxis: [
                {
                    type: 'category',
                    data: ['2017-2', '2017-3', '2017-4', '2017-5', '2017-6', '2017-7']
                }
            ],
            yAxis: [
                {
                    type: 'value',
                    name: '',
                    splitLine: {show: false},
                    axisLabel: {
                        formatter: '{value}亿元'
                    }
                },
                {
                    type: 'value',
                    name: '增速',
                    splitLine: {show: false},
                    axisLabel: {
                        formatter: '{value}%'
                    }
                }
            ],
            series: [
                {
                    name: '总量',
                    type: 'bar',
                    splitLine: {show: false},
                    data: [285, 457.4, 607.2, 759.6, 898.7, 1018.2, '', ''],
                    markPoint: {},
                    markLine: {}
                },
                {
                    name: '增速',
                    type: 'line',
                    yAxisIndex: 1,
                    data: [58.3, 62, 60, 52.3,46.9, 38.6, '', ''],
                    markPoint: {
                        data: [
                            {type: 'max', name: '最快'},
                            {type: 'min', name: '最慢'}
                        ]
                    },
                    markLine: {}
                }
            ]
        };


        // 使用刚指定的配置项和数据显示图表。
        ImyChart1.setOption(option);
        $(window).resize(function () {
            ImyChart1.resize();
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var ImyChart2 = echarts.init(document.getElementById('i-charts2'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '实际利用外资',
                subtext: ''
            },
            grid: [
                {x: '15%', y: '15%', width: '75%', height: '70%'},
            ],
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['总量', '增速']
            },
            toolbox: {

            },
            calculable: true,
            xAxis: [
                {
                    type: 'category',
                    data: ['2017-2', '2017-3', '2017-4', '2017-5', '2017-6', '2017-7']
                }
            ],
            yAxis: [
                {
                    type: 'value',
                    name: '',
                    splitLine: {show: false},
                    axisLabel: {
                        formatter: '{value}亿美元'
                    }
                },
                {
                    type: 'value',
                    name: '增速',
                    splitLine: {show: false},
                    axisLabel: {
                        formatter: '{value}%'
                    }
                }
            ],
            series: [
                {
                    name: '总量',
                    type: 'bar',
                    splitLine: {show: false},
                    data: [1.77, 4.93, 6.7, 7.5, 9.1, 10.6, '', ''],
                    markPoint: {},
                    markLine: {}
                },
                {
                    name: '增速',
                    type: 'line',
                    yAxisIndex: 1,
                    data: [82, 21.4, 35.7, 24.2, 5, 17.2, '', ''],
                    markPoint: {
                        data: [
                            {type: 'max', name: '最快'},
                            {type: 'min', name: '最慢'}
                        ]
                    },
                    markLine: {}
                }
            ]
        };


        // 使用刚指定的配置项和数据显示图表。
        ImyChart2.setOption(option);
        $(window).resize(function () {
            ImyChart2.resize();
        });
    });
</script>