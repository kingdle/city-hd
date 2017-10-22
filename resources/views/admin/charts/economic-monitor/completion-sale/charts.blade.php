<div class="box box-primary">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox-analysis float-e-margins">
                <div id="i-charts" style="height:240px"></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var ImyChart = echarts.init(document.getElementById('i-charts'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '社会消费品零售额运行趋势',
                subtext: ''
            },
            grid: [
                {x: '10%', y: '20%', width: '83%', height: '70%'},
            ],
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['增加值', '增速']
            },
            toolbox: {

            },
            calculable: true,
            xAxis: [
                {
                    type: 'category',
                    data: ['2016-3', '2016-6', '2016-9', '2016-12', '2017-3', '2017-6']
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
                    name: '总额',
                    type: 'bar',
                    splitLine: {show: false},
                    data: [487.3, 1312, 2070.02, 2765.69, 549.56, 1463.6, '', ''],
                    markPoint: {},
                    markLine: {}
                },
                {
                    name: '增长',
                    type: 'line',
                    yAxisIndex: 1,
                    data: [8.5, 10.5, 11.5, 12.3, 9.5, 11.9, '', ''],
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