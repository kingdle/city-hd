<style>
    .card .stats-up {
        color: #f55549;
        font-weight: 200;
        font-size: 14px;
        text-align: right;
        line-height: 30px;
    }
</style>
<div class="card">
    <div class="content">
        <div class="row">
            <div class="col-xs-8">
                <div class="title">
                    <p>固定资产投资总额</p>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="numbers">
                    <p>1340.2亿元</p>
                </div>
            </div>
        </div>
        <div class="footer">
            <hr>
            <div class="row">
                <div class="col-xs-6">
                    <div class="numbers">
                        <div class="stats">
                            <div id="assets" style="width: 120px;height:40px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="stats-up">
                        <p><i class="fa fa-arrow-up"></i> 11.8%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('assets'));

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
                name: '固定资产投资总额',
                type: 'bar',
                data: [1, 3, 5, 4, 7, 2, 3, 4, 6, 8, 3, 6],
                color: ['red']
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    });
</script>