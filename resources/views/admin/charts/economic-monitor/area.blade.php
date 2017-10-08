<style>
    .content {
        min-height: 20px;
    }
    .card {
        border-radius: 6px;
        box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
        background-color: #FFFFFF;
        color: #252422;
        margin-bottom: 20px;
        position: relative;
        z-index: 1;
    }
    .card .content {
        padding: 15px 15px 10px 15px;
    }
    .row {
        margin-right: -15px;
        margin-left: -15px;
    }
    .card{
        font-size: 3em;
        min-height: 64px;
    }
    .card .title {
        font-size: 0em;
        text-align: left;
    }
    .card .title p {
        margin: 0;
        font-size: 14px;
    }
    .card .numbers {
        font-size: 2em;
        text-align: right;
    }
    .card .numbers p {
        margin: 0;
        font-size: 14px;
     }
    .card .footer {
        padding: 0;
        line-height: 30px;
    }
    .card .footer hr {
        margin-top: 5px;
        margin-bottom: 5px;
        border-color: #F1EAE0;
    }
    .card .stats {
        color: #a9a9a9;
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
                    <p>地区生产总值</p>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="numbers">
                    <p>105亿元</p>
                </div>
            </div>
        </div>
        <div class="footer">
            <hr>
            <div class="row">
                <div class="col-xs-6">
                    <div class="numbers">
                        <div class="stats">
                            <div id="area" style="width: 120px;height:40px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="stats">
                        <p><i class="fa fa-arrow"></i> 13.5%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('area'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: ''
            },
            tooltip: {
                position: function (p) {
                    // 位置回调
                    // console.log && console.log(p);
                    return [p[0] + 10, p[1] - 80];
                },
            },
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
                name: '地区生产总值',
                type: 'bar',
                data: [2, 2, 4, 5, 4, 6, 3, 7, 4, 8, 3, 6],
                color: ['#595a5b']
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    });
</script>