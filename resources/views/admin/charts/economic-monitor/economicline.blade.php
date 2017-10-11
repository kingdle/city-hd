<div class="card">
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="title-economic">
                        <p>经济运行对标分析</p>
                    </div>
                    <div class="warpper-content-pillar">
                        <div class="row">
                            <div class="col-lg-12">
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
        var myChart = echarts.init(document.getElementById('speed-line'));
        // 基于准备好的dom，初始化echarts实例
        var myC = echarts.init(document.getElementById('charts-contain'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: ''
            },
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['全国', '山东省', '青岛市', '西海岸新区', '浦东新区']
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
                    name: '全国',
                    type: 'line',
                    stack: '总量',
                    data: [6.7, 6.7, 6.7, 6.7, 6.9, 6.9]
                },
                {
                    name: '山东省',
                    type: 'line',
                    stack: '总量',
                    data: [7.9, 7.5, 8, 7.5, 7.9, 7]
                },
                {
                    name: '青岛市',
                    type: 'line',
                    stack: '总量',
                    data: [7.4, 7.3, 7.7, 7.9, 11.3, 7.7]
                },
                {
                    name: '西海岸新区',
                    type: 'line',
                    stack: '总量',
                    data: [8.5, 10.5, 11.5, 12.3, 10, 12.1]
                },
                {
                    name: '浦东新区',
                    type: 'line',
                    stack: '总量',
                    data: [8.3, 7.9, 8.2, 8.1, 7.9, 8]
                }
            ]
        };


        // 指定图表的配置项和数据
        var optionone = {
            title: {
                left:'left',
                text: '主要指标运行趋势',
                subtext: ''
            },
            tooltip: {
                trigger: 'axis',

            },
            legend: {
                x: 'right',
                left:'20%',
                size: '5',
                data: ['地区生产总值', '地区生产总值增速', '固定资产投资总额', '固定资产投资增速', '限上贸易销售额', '限上贸易增速', '社会消费品零售额', '社会消费品零售增速']
            },
            //calculable : true,
            xAxis: [{

                type: 'category',
                data: ['2016-3', '2016-6', '2016-9', '2016-12', '2017-3', '2017-6'],

            }],
            yAxis: [{
                type: 'value',
                name: '总量',
                axisLabel: {
                    formatter: '{value}万元'
                }
            },
                {
                    type: 'value',
                    name: '增速',
                    axisLabel: {
                        formatter: '{value}%'
                    }
                }

            ],
            series: [{
                name: '地区生产总值',
                type: 'bar',
                data: [518.4, 1358, 2146.9, 2871.1, 586.7, 1521.2, '','']
            },
                {
                    name: '固定资产投资总额',
                    type: 'bar',
                    data: [1188.1, 924.1, 1475.9, 2008.6, 268.8, 1013.2,'',''],

                },
                {
                    name: '限上贸易销售额',
                    type: 'bar',
                    data: [255 , 277.7, 499.9, 795.3, 332.9, 653.3,'',''],

                },
                {
                    name: '社会消费品零售额',
                    type: 'bar',
                    data: [121.6, 277.7, 384.6,533.4 , 134.2, 279.2, '',''],

                },
                {
                    name: '地区生产总值增速',
                    type: 'line',
                    yAxisIndex: 1,
                    data: [8.5, 10.5, 11.5, 12.3, 10, 12.1,'',''],

                },
                {
                    name: '固定资产投资增速',
                    type: 'line',
                    yAxisIndex: 1,
                    data: [5.7, 15.9, 8.6, 17.2, 11.4, 11.3, '',''],

                },
                {
                    name: '限上贸易增速',
                    type: 'line',
                    yAxisIndex: 1,
                    data: [16.5, 17.9, 44.6, 11.9, 100.5, 66.1, '',''],

                },
                {
                    name: '社会消费品零售增速',
                    type: 'line',
                    yAxisIndex: 1,
                    data: [-6, 11.1, 11.4, 11.3, 10.1, 11.7, '',''],

                }
            ]
        };

        // 使用刚指定的配置项和数据显示图表。

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        myC.setOption(optionone);
        //浏览器大小改变时重置大小
        window.onresize = function () {
            myC.resize();
            myChart.resize();
        };
    });
</script>