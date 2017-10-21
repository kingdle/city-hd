<div class="box">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>经济发展水平分析</h5>
                    <div class="ibox-tools">
                        <a class="close-link-pillar">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-contenter">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ibox">
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="speed-line" style="min-height: 300px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ibox">
                                <div class="ibox-content ">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="total-line" style="min-height: 300px"></div>
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
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var PmyChart = echarts.init(document.getElementById('speed-line'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: ''
            },
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['全国', '山东省', '青岛市','西海岸新区', '浦东新区']
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
                data: ['2017-2', '2017-3', '2017-4', '2017-5', '2017-6', '2017-7']
            },
            yAxis: {
                type: 'value'
            },
            series: [
                {
                    name: '全国',
                    type: 'line',
                    //stack: '总量',
                    data: [6.7, 6.7, 6.7, 6.7, 6.9, 6.9]
                },
                {
                    name: '山东省',
                    type: 'line',
                    //stack: '总量',
                    data: [7.9, 7.5, 8, 7.5, 7.9, 7]
                },
                {
                    name: '青岛市',
                    type: 'line',
                    //stack: '总量',
                    data: [7.9, 7.5, 8, 7.5, 7.9, 7]
                },
                {
                    name: '西海岸新区',
                    type: 'line',
                    //stack: '总量',
                    data: [11.5, 13.5, 11.5, 12.3, 11, 11.8]
                },
                {
                    name: '浦东新区',
                    type: 'line',
                    // stack: '总量',
                    data: [8.3, 7.9, 8.2, 8.1, 7.9, 8]
                }
            ]
        };


        // 使用刚指定的配置项和数据显示图表。
        PmyChart.setOption(option);
        $(window).resize(function () {
            PmyChart.resize();
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var CmyChart = echarts.init(document.getElementById('total-line'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: ''
            },
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['西海岸新区', '威海市', '德州市', '浦东新区']
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
                data: ['2017-2', '2017-3', '2017-4', '2017-5', '2017-6', '2017-7']
            },
            yAxis: {
                type: 'value'
            },
            series: [
                {
                    name: '德州市',
                    type: 'line',
                    //stack: '总量',
                    data: [6.9, 6.8, 7, 7.2, 8.5, 8.5]
                },
                {
                    name: '威海市',
                    type: 'line',
                    //stack: '总量',
                    data: [8, 7.8, 7.7, 8, 7.7, 7.7]
                },
                {
                    name: '西海岸新区',
                    type: 'line',
                    //stack: '总量',
                   data: [11.5, 13.5, 11.5, 12.3, 11, 11.8]
                },
                {
                    name: '浦东新区',
                    type: 'line',
                    //stack: '总量',
                    data: [8.3, 7.9, 8.2, 8.1, 7.9, 8]
                }
            ]
        };

        // 使用刚指定的配置项和数据显示图表。
        CmyChart.setOption(option);
        $(window).resize(function () {
            CmyChart.resize();
        });
    });
</script>