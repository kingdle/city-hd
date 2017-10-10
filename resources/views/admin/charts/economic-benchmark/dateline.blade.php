<style>
    .dateline,.ranking {
        border-radius: 2px;
        background-color: #FFFFFF;
        border-color: #e7eaec;
        border-image: none;
        border-style: solid solid none;
        border-width: 2px 0 0;
        color: #252422;
        margin-bottom: 20px;
        position: relative;
        z-index: 1;
    }
    .dateline .content {
        min-height: 30px;
    }
    .dateline .title {
        text-align: center;
    }
    .dateline .title p {
        font-size: 28px;
        font-weight: 400;
        color: #30b8c4;
        line-height: 60px;
    }
</style>
<div class="dateline">
    <div class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="title">
                    <p>主要指标增速排名</p>
                </div>
            </div>
            <div class="col-md-9">
                <div class="select-date">
                    <div id="dateline" style="min-height: 60px"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts-all-3.js"></script>
<script type="text/javascript">
    var dom = document.getElementById("dateline");
    var myChart = echarts.init(dom);
    var app = {};
    option = null;
    var dataMap = {};
    function dataFormatter(obj) {
        var pList = [];
        var temp;
        for (var year = 2014; year <= 2017; year++) {
            var max = 0;
            var sum = 0;
            temp = obj[year];
            for (var i = 0, l = temp.length; i < l; i++) {
                max = Math.max(max, temp[i]);
                sum += temp[i];
                obj[year][i] = {
                    name : pList[i],
                    value : temp[i]
                }
            }
            obj[year + 'max'] = Math.floor(max / 100) * 100;
            obj[year + 'sum'] = sum;
        }
        return obj;
    }

    dataMap.dataGDP = dataFormatter({
        //max : 60000,
        2017:[],
        2016:[],
        2015:[],
        2014:[]
    });

    option = {
        baseOption: {
            timeline: {
                // y: 0,
                axisType: 'category',
                // realtime: false,
                // loop: false,
                autoPlay: true,
                // currentIndex: 2,
                playInterval: 1000,
                // controlStyle: {
                //     position: 'left'
                // },
                data: [
                    '2014','2015','2016',
                    {
                        value: '201701',
                        tooltip: {
                            formatter: '{b} GDP达到一个高度'
                        },
                        symbol: 'diamond',
                        symbolSize: 14
                    },
                    '02','03','04','05','06','07','08','09',
                    {
                        value: '10',
                        tooltip: {
                            formatter: function (params) {
                                return params.name + 'GDP达到又一个高度';
                            }
                        },
                        symbol: 'diamond',
                        symbolSize: 16
                    },
                    '11','12',
                ],
                label: {

                }
            },
            title: {

            },
            tooltip: {
                position: function (p) {
                    // 位置回调
                    // console.log && console.log(p);
                    return [p[0] + 10, p[1] - 40];
                },
            },
            legend: {

            },
            calculable : true,
            grid: {
                top: 80,
                bottom: 100,
                tooltip: {
                    trigger: 'axis',
                    axisPointer: {
                        type: 'shadow',
                        label: {
                            show: true,
                            formatter: function (params) {
                                return params.value.replace('\n', '');
                            }
                        }
                    }
                }
            },
            xAxis: [

            ],
            yAxis: [

            ],
            series: [

            ]
        },

    };;
    if (option && typeof option === "object") {
        myChart.setOption(option, true);
    }
    window.onresize = function () {
        myChart.resize();
    };
</script>