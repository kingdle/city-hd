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
                text: '主要指标运行趋势',
                subtext: '增加值及增速'
            },
            tooltip : {
                trigger: 'axis'
            },
            legend: {
                data:['增加值','增速']
            },
            toolbox: {
                show : true,
                feature : {
                    mark : {show: true},
                    dataView : {show: true, readOnly: false},
                    magicType : {show: true, type: ['line', 'bar']},
                    restore : {show: true},
                    saveAsImage : {show: true}
                }
            },
            calculable : true,
            xAxis : [
                {
                    type : 'category',
                    data : ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月']
                }
            ],
            yAxis : [
                {
                    type : 'value'
                }
            ],
            series : [
                {
                    name:'增加值',
                    type:'bar',
                    data:[26, 59, 90, 120, 128.7, 170.7, 175.6, 182.2, 198.7, 218.8,'',''],
                    markPoint : {
                        data : [
                            {type : 'max', name: '最大值'},
                            {type : 'min', name: '最小值'}
                        ]
                    },
                    markLine : {
                        data : [
                            {type : 'average', name: '平均值'}
                        ]
                    }
                },
                {
                    name:'增速',
                    type:'line',
                    data:[26, 59, 90, 120, 128.7, 170.7, 175.6, 182.2, 198.7, 218.8,'',''],
                    markPoint : {
                        data : [
                            {type : 'max', name: '最快'},
                            {type : 'min', name: '最慢'}
                        ]
                    },
                    markLine : {
                        data : [
                            {type : 'average', name: '平均值'}
                        ]
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