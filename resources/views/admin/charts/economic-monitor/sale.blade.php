<div class="cardh">
    <div class="content">
        <div class="row">
            <div class="col-xs-8">
                <div class="title">
                    <p>限上贸易销售额</p>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="numbers">
                    <p><span id="sale-v"></span>亿元</p>
                </div>
            </div>
        </div>
        <div class="footer">
            <hr>
            <div class="row">
                <div class="col-xs-6">
                    <div class="numbers">
                        <div class="stats">
                            <div id="sale" style="width: 120px;height:40px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="sta">
                        <p><i class="fa"></i> <span id="sale-s"></span>%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function sale() {
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('sale'));
        var axisD = [];
        for (var item in axisArr) {
            axisD.push(axisArr[item].name);

        }

        var chartKit = new SyChartSeriesKit({
            store: storeA,
            axis: axisArr,

        });
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
                data: axisD,
                show:false
            },
            yAxis: {
                show:false
            },
            series: [{
                name: '限上贸易销售额',
                type: 'bar',
                data: chartKit.genSeriesData({
                    series: [{
                        //        name: "资产投资",
                        type: "item",
                        extField: storeA.findMetaByItemName({
                            type: 'item',
                            name: '限上贸易销售额'
                        }).extField
                    }, {
                        //        name: 2,
                        type: 'frame',
                        extField: storeA.findMetaByItemName({
                            type: 'frame',
                            name: '累计'
                        }).extField
                    }]
                }),
                color: ['#2990b9']
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    }
</script>