<style>
    .dateline {
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
        min-height: 40px;
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
            <div class="col-md-2">
                <div class="title">
                    <p>616产业监测</p>
                </div>
            </div>
            <div class="col-md-10">
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
        for (var year = 2012; year <= 2017; year++) {
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
        2014:[],
        2013:[],
        2012:[]
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
                    '2012-01-01','2013-01-01','2014-01-01','2015-01-01','2016-01-01',
                    {
                        value: '2017-01-01',
                        tooltip: {
                            formatter: '{b} GDP达到一个高度'
                        },
                        symbol: 'diamond',
                        symbolSize: 16
                    },
                    '2017-02-01','2017-03-01','2017-04-01','2017-05-01','2017-06-01','2017-07-01','2017-08-01','2017-09-01',
                    {
                        value: '2017-10-01',
                        tooltip: {
                            formatter: function (params) {
                                return params.name + 'GDP达到又一个高度';
                            }
                        },
                        symbol: 'diamond',
                        symbolSize: 18
                    },
                    '2017-11-01','2017-12-01',
                ],
                label: {
                    formatter : function(s) {
                        return (new Date(s)).getFullYear();
                    }
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