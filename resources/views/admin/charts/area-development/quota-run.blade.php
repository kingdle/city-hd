<div class="box box-primary">
    <div class="contenter">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>指标运行趋势</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-contenter">
                        <div id="speed-line" style="min-height: 300px"></div>
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

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: ''
            },
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['黄岛', '辛安', '薛家岛', '灵珠山', '长江路', '红石崖', '灵山卫', '王台镇', '隐珠']
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
                    name: '黄岛',
                    type: 'line',
                    //stack: '总量',
                    data: [11.5, 10.8, 4.8, 9.5, 11.7, 10.4]
                },
                {
                    name: '辛安',
                    type: 'line',
                    //stack: '总量',
                    data: [42.1, 11.8, 11.1, 11.3, 12.6, 11.1]
                },
                {
                    name: '薛家岛',
                    type: 'line',
                    //stack: '总量',
                    data: [48.2, 30.5, 20.6, 6.3, 5, 10.1]
                },
                {
                    name: '灵珠山',
                    type: 'line',
                    //stack: '总量',
                    data: [0.1, 11.9, 11.2, 10.1, 11.9, 7.2]
                },
                {
                    name: '长江路',
                    type: 'line',
                    //stack: '总量',
                    data: [10.3, 15.9, 11.2, 11.1, 10.9, 9]
                },
                {
                    name: '红石崖',
                    type: 'line',
                    //stack: '总量',
                    data: [39.3, 35.9, 20.2, 29.1, 31.9, 26.7]
                },
                {
                    name: '灵山卫',
                    type: 'line',
                    //stack: '总量',
                    data: [1.3, 7.9, 5.2, 14.1, 16.9, 18]
                },
                {
                    name: '王台镇',
                    type: 'line',
                    //stack: '总量',
                    data: [15.3, 12.9, 14.2, 15.1, 14.9, 15.5]
                },

                {
                    name: '隐珠',
                    type: 'line',
                    //stack: '总量',
                    data: [3.3, 9.2, 10.2, 12.1, 12.9, 12.3]
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