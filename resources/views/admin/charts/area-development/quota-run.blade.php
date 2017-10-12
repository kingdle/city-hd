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
                data:['西海岸新区','威海市','德州市','浦东新区']
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            toolbox: {

            },
            xAxis: {
                type: 'category',
                boundaryGap: false,
                data: ['2016-3','2016-6','2016-9','2016-12','2017-3','2017-6']
            },
            yAxis: {
                type: 'value'
            },
            series: [
                {
                    name:'德州市',
                    type:'line',
                    //stack: '总量',
                    data:[6.9, 6.8, 7, 7.2, 8.5, 8.5]
                },
                {
                    name:'威海市',
                    type:'line',
                    //stack: '总量',
                    data:[8, 7.8, 7.7, 8, 7.7, 7.7]
                },
                {
                    name:'西海岸新区',
                    type:'line',
                    //stack: '总量',
                    data:[8.5, 10.5, 11.5, 12.3, 10, 12.1]
                },
                {
                    name:'浦东新区',
                    type:'line',
                    //stack: '总量',
                    data:[8.3, 7.9, 8.2, 8.1, 7.9, 8]
                }
            ]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    });
</script>