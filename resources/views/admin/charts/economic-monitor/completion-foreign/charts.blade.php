<div class="box box-primary">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox-analysis float-e-margins">
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
                    <div id="i-charts" style="height:180px"></div>
                </div>
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
                text: '',
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
            toolbox: {},
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
                    name: '增加值',
                    type: 'bar',
                    splitLine: {show: false},
                    data: [487.3, 1312, 2070.02, 2765.69, 549.56, 1463.6, '', ''],
                    markPoint: {},
                    markLine: {}
                },
                {
                    name: '增速',
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