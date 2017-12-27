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
    function economicline(store) {
        // 指定图表的配置项和数据
        var axisD = [];
        for (var item in jiduTime.cAxisArr) {
            axisD.push(jiduTime.cAxisArr[item].name);
        }
        //===============普通图kit==============
        var chartKit = new SyChartSeriesKit({
            store: store,
            series: [{
                type: "item",
                extField: store.findMetaByItemName({
                    type: 'item',
                    name: '外资'
                }).extField
            }, {
                type: 'frame',
                extField: store.findMetaByItemName({
                    type: 'frame',
                    name: '累计'
                }).extField
            }],
            axis: jiduTime.cAxisArr,
        });
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
                data: ['全国', '山东省', '西海岸新区', '浦东新区']
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
                splitLine:{show: false},
                boundaryGap: false,
                data: axisD//['2016-3', '2016-6', '2016-9', '2016-12', '2017-3', '2017-6']
            },
            yAxis: {
                splitLine:{show: false},
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
                    name: '西海岸新区',
                    type: 'line',
                    //stack: '总量',
                    data: [8.5, 10.5, 11.5, 12.3, 10, 12.1]
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

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        //浏览器大小改变时重置大小
//        window.charts = [];
        $(window).resize(function () {
            myChart.resize();
        });
//        window.onresize = ;
    }
</script>
