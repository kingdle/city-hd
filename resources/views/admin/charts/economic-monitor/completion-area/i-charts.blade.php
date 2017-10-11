<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div id="i-charts" style="height:260px"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('i-charts'));

        // 指定图表的配置项和数据
        var option = {
            title : {
                text: '地区生产总值运行趋势',
                subtext: ''
            },
            grid: [
                {x: '10%', y: '20%', width: '83%', height: '70%'},
            ],
            tooltip : {
                trigger: 'axis'
            },
            legend: {
                data:['增加值','增速']
            },
            toolbox: {
                show : true,
                feature : {

                    restore : {show: true},
                    saveAsImage : {show: true}
                }
            },
            calculable : true,
            xAxis : [
                {
                    type : 'category',
                    data: ['2016-3','2016-6','2016-9','2016-12','2017-3','2017-6']
                }
            ],
            yAxis : [
                {
                    type : 'value',
                    name: '增加值',
                    axisLabel: {
                        formatter: '{value}万元'
                    }
                },
                {
                    type : 'value',
                    name: '增速',
                    axisLabel: {
                        formatter: '{value}%'
                    }
                }
            ],
            series : [
                {
                    name:'增加值',
                    type:'bar',
                    data:[ 487.3,1312, 2070.02, 2765.69, 549.56, 1463.6, '',''],
                    markPoint : {

                    },
                    markLine : {

                    }
                },
                {
                    name:'增速',
                    type:'line',
                    yAxisIndex: 1,
                    data:[8.5, 10.5, 11.5, 12.3, 9.5,11.9,'',''],
                    markPoint : {
                        data : [
                            {type : 'max', name: '最快'},
                            {type : 'min', name: '最慢'}
                        ]
                    },
                    markLine : {

                    }
                }
            ]
        };


        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.onresize = function () {
            myChart.resize();
        };
    });
</script>