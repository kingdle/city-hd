<style>
    .card .stats-down {
        color: #00a946;
        font-weight: 200;
        font-size: 14px;
        text-align: right;
        line-height: 30px;
    }
</style>
<div class="cardh">
    <div class="content">
        <div class="row">
            <div class="col-xs-8">
                <div class="title">
                    <p>规上工业总产值</p>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="numbers">
                    <p><span id="industry-v"></span>亿元</p>
                </div>
            </div>
        </div>
        <div class="footer">
            <hr>
            <div class="row">
                <div class="col-xs-6">
                    <div class="numbers">
                        <div class="stats">
                            <div id="industry" style="width: 120px;height:40px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="stats stats-down">
                        <p><i class="fa fa-arrow-down"></i> <span id="industry-s"></span>%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('industry'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: ''
            },
            tooltip: {},
            legend: {
                data: [''],
                show:false

            },
            xAxis: {
                data: ["201701", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"],
                show:false
            },
            yAxis: {
                show:false
            },
            series: [{
                name: '工业总产值',
                type: 'bar',
                data: [2, 3, 4, 4, 8, 3, 3, 4, 4, 8, 3, 6],
                color: ['#2990B9']
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    });
</script>