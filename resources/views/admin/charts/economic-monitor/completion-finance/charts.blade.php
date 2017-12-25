<div class="box box-primary">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox-analysis float-e-margins">
                <div class="ibox-title">
                    <h5>财政金融完成情况运行趋势</h5>
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
        var ImyChart = echarts.init(document.getElementById('i-charts1'));
        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '一般公共预算收入',
                subtext: ''
            },
            grid: [
                {x: '15%', y: '15%', width: '75%', height: '70%'},
            ],
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['收入', '增速']
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
                    name: '收入',
                    type: 'bar',
                    splitLine: {show: false},
                    data: [39.3, 64.5, 86.6, 104.6, 134.6, 152.8, '', ''],
                    markPoint: {
                        data: [
                            {type: 'max', name: '最快'},
                            {type: 'min', name: '最慢'}
                        ]
                    },
                    markLine: {}
                },
                {
                    name: '增速',
                    type: 'line',
                    yAxisIndex: 1,
                    data: [13.7, 12.1, 12, 11.3,11.1, 11.3, '', ''],

                    markLine: {}
                }
            ]
        };
        // 使用刚指定的配置项和数据显示图表。
        ImyChart.setOption(option);
        $(window).resize(function () {
            ImyChart.resize();
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var ImyChart = echarts.init(document.getElementById('i-charts2'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                left:'left',
                text: '金融情况',
                subtext: ''
            },
            grid: [
                {x: '15%', y: '15%', width: '75%', height: '70%'},
            ],
            tooltip: {
                trigger: 'axis',

            },
            legend: {
                x: 'right',
                left:'20%',
                size: '5',
                data: ['存款余额', '个人储蓄存款', '贷款余额']
            },
            //calculable : true,
            xAxis: [{
                splitLine:{show: false},
                type: 'category',
                data: ['2017-2', '2017-3', '2017-4', '2017-5', '2017-6', '2017-7'],

            }],
            yAxis: [{
                splitLine:{show: false},
                type: 'value',
                name: '',
                axisLabel: {
                    formatter: '{value}亿元'
                }
            }

            ],
            series: [{
                name: '存款余额',
                type: 'bar',
                data: [1573.8, 1606.6, 1600.7, 1591.3, 1639.8, 1680.3, '','']
            },
                {
                    name: '个人储蓄存款',
                    type: 'bar',
                    data: [761.5, 780.8, 749.8, 747.4,765, 749.9,'',''],

                },
                {
                    name: '贷款余额',
                    type: 'bar',
                    data: [1618.3, 1678, 1716.8,1740.4 , 1750.5, 1778, '',''],

                }
            ]
        };


        // 使用刚指定的配置项和数据显示图表。
        ImyChart.setOption(option);
        $(window).resize(function () {
            ImyChart.resize();
        });
    });
</script>
