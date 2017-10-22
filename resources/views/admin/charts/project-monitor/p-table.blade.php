<div class="box box-primary">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox-analysis float-e-margins">
                <div id="p-charts" style="height:392px"></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var ImyChart = echarts.init(document.getElementById('p-charts'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '重点项目投资情况',
                subtext: '',
                top: 10,
                left:10,
            },
            grid: [
                {x: '10%', y: '20%', width: '83%', height: '70%'},
            ],
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['计划总投资', '累计完成投资', '本月完成投资'],
                x: '40%',
                y: '20%',
            },
            toolbox: {},
            calculable: true,
            xAxis: [
                {
                    type: 'category',
                    data: ['2017-2', '2017-3', '2017-4', '2017-5', '2017-6']
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
                }
            ],
            series: [
                {
                    name: '计划总投资',
                    type: 'bar',
                    splitLine: {show: false},
                    data: [200.4, 64.5, 86.6, 104.6, 134.6, '', ''],
                    markPoint: {},
                    markLine: {}
                },
                {
                    name: '累计完成投资',
                    type: 'bar',
                    data: [198.4, 62.5, 76.6, 134.6, 114.6, '', ''],
                    markPoint: {
                        data: [
                            {type: 'max', name: '最快'},
                            {type: 'min', name: '最慢'}
                        ]
                    },
                    markLine: {}
                },
                {
                    name: '本月完成投资',
                    type: 'bar',
                    data: [18.4, 22.5, 16.6, 14.6, 24.6, '', ''],
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
        ImyChart.setOption(option);
        $(window).resize(function () {
            ImyChart.resize();
        });
    });
</script>