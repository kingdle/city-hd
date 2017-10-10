<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>经济运行对标分析</h5>
                <div class="ibox-tools">
                    <a class="close-link-pillar">
                        <i class="fa fa-chevron-down"></i>
                    </a>
                </div>
            </div>
            <div class="warpper-content-pillar">
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
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('speed-line'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '地区生产总值增速'
            },
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data:['全国','山东省','青岛市','西海岸新区','XX对标城市']
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            toolbox: {
                feature: {
                    saveAsImage: {}
                }
            },
            xAxis: {
                type: 'category',
                boundaryGap: false,
                data: ['2015-12','2016-3','2016-6','2016-9','2016-12','2017-1','2017-3']
            },
            yAxis: {
                type: 'value'
            },
            series: [
                {
                    name:'全国',
                    type:'line',
                    stack: '总量',
                    data:[12, 13, 10, 13, 9, 23, 21]
                },
                {
                    name:'山东省',
                    type:'line',
                    stack: '总量',
                    data:[22, 18, 19, 23, 29, 33, 31]
                },
                {
                    name:'青岛市',
                    type:'line',
                    stack: '总量',
                    data:[15, 23, 21, 14, 19, 33, 41]
                },
                {
                    name:'西海岸新区',
                    type:'line',
                    stack: '总量',
                    data:[32, 32, 31, 34, 39, 33, 32]
                },
                {
                    name:'XX对标城市',
                    type:'line',
                    stack: '总量',
                    data:[42, 53, 60, 54, 30, 43, 20]
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
        var myChart = echarts.init(document.getElementById('total-line'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '地区生产总值增速'
            },
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data:['西海岸新区','威海市','德州市','浦东新区']
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            toolbox: {
                feature: {
                    saveAsImage: {}
                }
            },
            xAxis: {
                type: 'category',
                boundaryGap: false,
                data: ['2015-12','2016-3','2016-6','2016-9','2016-12','2017-1','2017-3']
            },
            yAxis: {
                type: 'value'
            },
            series: [
                {
                    name:'德州市',
                    type:'line',
                    stack: '总量',
                    data:[12, 13, 10, 13, 9, 23, 21]
                },
                {
                    name:'威海市',
                    type:'line',
                    stack: '总量',
                    data:[22, 18, 19, 23, 29, 33, 31]
                },
                {
                    name:'西海岸新区',
                    type:'line',
                    stack: '总量',
                    data:[32, 32, 31, 34, 39, 33, 32]
                },
                {
                    name:'浦东新区',
                    type:'line',
                    stack: '总量',
                    data:[42, 53, 60, 54, 30, 43, 20]
                }
            ]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    });
</script>