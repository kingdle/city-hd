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
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('run-one'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '',
                subtext: '2017年2季度',
                x: 'center'
            },
            tooltip: {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            legend: {
                orient: 'vertical',
                left: 'left',
                data: ['批发业 ', '零售业', '住宿业','餐饮业']
            },
            series: [
                {
                    name: '总额',
                    type: 'pie',
                    radius: '55%',
                    center: ['50%', '60%'],
                    data: [
                        {value: 234037, name: '批发业'},
                        {value: 2033520, name: '零售业'},
                        {value: 23430, name: '住宿业'},
                        {value: 385568, name: '餐饮业'}
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
        $(window).resize(function () {
            myChart.resize();
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('run-two'));

        // 指定图表的配置项和数据
        var option = {
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
                data: ['', '批发业', '零售业', '住宿业','餐饮业']
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
                    data: ['2016-3', '2016-6', '2016-9', '2016-12', '2017-3', '2017-6']
                }
            ],
            yAxis: [
                {
                    type: 'value'
                }
            ],
            series: [
                {
                    name: '批发业',
                    type: 'bar',
                    stack: '总额',
                    data: [225.04, 133.57, 253.69, 1163.26, 231.92, 212.6]

                },
                {
                    name: '零售业',
                    type: 'bar',
                    stack: '总额',
                    data: [296.78, 625.10, 966.90, 1281.27, 326.57, 683.7]
                },
                {
                    name: '住宿业',
                    type: 'bar',
                    stack: '总额',
                    data: [296.78, 625.10, 966.90, 1281.27, 326.57, 683.7]
                },
                {
                    name: '餐饮业',
                    type: 'bar',

                    stack: '总额',
                    data: [185.48, 625.10, 1049.43, 1421.16, 218.07, 746.3]
                }
            ]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        $(window).resize(function () {
            myChart.resize();
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('run-three'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: ''
            },
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['批发业', '零售业', '住宿业','餐饮业']
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
                data: ['2016-3', '2016-6', '2016-9', '2016-12', '2017-3', '2017-6']
            },
            yAxis: {
                type: 'value'
            },
            series: [
                {
                    name: '批发业',
                    type: 'line',
                    stack: '总额',
                    data: [3.4, 3.2, 3.5, 4.1, 4, 3.4]
                },
                {
                    name: '零售业',
                    type: 'line',
                    stack: '总额',
                    data: [7.8, 9.2, 10.1, 10.1, 9.1, 9.1]
                },
                {
                    name: '住宿业',
                    type: 'line',
                    stack: '总额',
                    data: [8.8, 10.2, 11.1, 9.1, 10.1, 7.1]
                },
                {
                    name: '餐饮业',
                    type: 'line',
                    stack: '总额',
                    data: [9.6, 12.2, 13.5, 16.3, 15.1, 15.2]
                }
            ]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        $(window).resize(function () {
            myChart.resize();
        });
    });
</script>