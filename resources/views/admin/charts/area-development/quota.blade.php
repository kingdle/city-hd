<div class="box box-primary">
    <div class="contenter">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>指标列表及报表</h5>
                        <div class="ibox-tools">
                            <a class="close-link-pillar">
                                <i class="fa fa-chevron-down"></i>
                            </a>
                        </div>
                    </div>
                    <div class="warpper-content-pillar">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div>
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#industry"
                                                                                      aria-controls="industry"
                                                                                      role="tab"
                                                                                      data-toggle="tab">工业产值</a></li>
                                            {{--<li role="presentation"><a href="#profit" aria-controls="profit" role="tab"--}}
                                                                       {{--data-toggle="tab">利税总额</a></li>--}}
                                            <li role="presentation"><a href="#assets" aria-controls="assets" role="tab"
                                                                       data-toggle="tab">固定资产</a></li>
                                            <li role="presentation"><a href="#trade" aria-controls="trade" role="tab"
                                                                       data-toggle="tab">限上贸易</a></li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="industry">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="ibox float-e-margins">
                                                            <div class="ibox-content">
                                                                <div class="table-responsive">
                                                                    <div id="app-1">
                                                                        <sy-table :stru="stru"></sy-table>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div id="industry-charts" style="height:400px"></div>
                                                        <script type="text/javascript" src="{{ admin_asset('js/echarts-gl.min.js') }}"></script>
                                                        <script>
                                                            var ImyChart = echarts.init(document.getElementById('industry-charts'));
                                                            var axisD = [];
                                                            for (var item in axisArr) {
                                                                axisD.push(axisArr[item].name);
                                                            }
                                                            storeA = new SyStore({
                                                                autoLoad: true,
                                                                datasetId: 8,
                                                                success: function (store) {
                                                                    var _store = store;
                                                                    var hours = axisD;
                                                                    var days = ['海洋高新区', '中德生态园', '经济技术开发区', '董家口循环经济区', '国际旅游度假区', '灵山湾影视文化产业区', '现代农业示范区', '古镇口创新示范区', '西海岸交通商务区', '藏马山旅游度假区', '轨道交通指挥部'];
                                                                    var data = []
//                                                                    console.log(JSON.stringify(axisD))
                                                                    var dataItem = null;
                                                                    var baseTable = {
                                                                        frame: 303000713,
                                                                        item: 3

                                                                    };
//                                                                    console.log(baseTable)
//                                                                    console.log(store)
                                                                    var kitTable = new SyValueKit(baseTable, _store); //总量kit
                                                                    $.each(days, function (j, day) {
                                                                        $.each(hours, function (i, hour) {
                                                                            dataItem = [];
                                                                            dataItem.push(j);
                                                                            dataItem.push(i);
                                                                            dataItem.push(kitTable.findValueByObj({
                                                                                area: kitTable.meta("area", day).extField,
                                                                                time_year: dateArr[i].getFullYear(),
                                                                                time_month: dateArr[i].getMonth() + 1
                                                                            }, true));
//console.log(dateArr[i])
                                                                            data.push(dataItem);
                                                                        })
                                                                    })
//                                                                    console.log()
//                                                                    console.log(data);
                                                                    var option = {
                                                                        tooltip: {},
                                                                        visualMap: {
//                                                                            max: 20,
                                                                            inRange: {
                                                                                color: ['#313695', '#4575b4', '#74add1', '#abd9e9', '#e0f3f8', '#ffffbf', '#fee090', '#fdae61', '#f46d43', '#d73027', '#a50026']
                                                                            }
                                                                        },
                                                                        xAxis3D: {
                                                                            type: 'category',
                                                                            data: hours
                                                                        },
                                                                        yAxis3D: {
                                                                            type: 'category',
                                                                            data: days
                                                                        },
                                                                        zAxis3D: {
                                                                            type: 'value'
                                                                        },
                                                                        grid3D: {
                                                                            boxWidth: 230,
                                                                            boxDepth: 80,
                                                                            light: {
                                                                                main: {
                                                                                    intensity: 1.2
                                                                                },
                                                                                ambient: {
                                                                                    intensity: 0.3
                                                                                }
                                                                            }
                                                                        },
                                                                        series: [{
                                                                            type: 'bar3D',
                                                                            data: data.map(function (item) {
                                                                                return {
                                                                                    value: [item[1], item[0], item[2]]
                                                                                }
                                                                            }),
                                                                            shading: 'color',

                                                                            label: {
                                                                                show: false,
                                                                                textStyle: {
                                                                                    fontSize: 16,
                                                                                    borderWidth: 1
                                                                                }
                                                                            },

                                                                            itemStyle: {
                                                                                opacity: 0.4
                                                                            },

                                                                            emphasis: {
                                                                                label: {
                                                                                    textStyle: {
                                                                                        fontSize: 20,
                                                                                        color: '#900'
                                                                                    }
                                                                                },
                                                                                itemStyle: {
                                                                                    color: '#900'
                                                                                }
                                                                            }
                                                                        }]
                                                                    }
                                                                    // 使用刚指定的配置项和数据显示图表。
                                                                    ImyChart.setOption(option);
                                                                }
                                                            });
                                                            $(window).resize(function () {
                                                                ImyChart.resize();
                                                            });
                                                            //
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--<div role="tabpanel" class="tab-pane" id="profit">--}}
                                                {{--<div class="row">--}}
                                                    {{--<div class="col-sm-4">--}}
                                                        {{--<div class="ibox float-e-margins">--}}
                                                            {{--<div class="ibox-content">--}}
                                                                {{--<div class="table-responsive">--}}
                                                                    {{--<div id="app-2">--}}
                                                                        {{--<sy-table :stru="stru"></sy-table>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}

                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-sm-8">--}}
                                                        {{--<div id="tax-charts" style="height:440px"></div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            <div role="tabpanel" class="tab-pane" id="assets">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="ibox float-e-margins">
                                                            <div class="ibox-content">
                                                                <div class="table-responsive">
                                                                    <div id="app-3">
                                                                        <sy-table :stru="stru"></sy-table>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div id="assets-charts" style="height:440px"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="trade">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="ibox float-e-margins">
                                                            <div class="ibox-content">
                                                                <div class="table-responsive">
                                                                    <div id="app-4">
                                                                        <sy-table :stru="stru"></sy-table>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div id="sale-charts" style="height:440px"></div>
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
    </div>
</div>
{{--<script type="text/javascript" src="{{ admin_asset('js/echarts-gl.min.js') }}"></script>--}}
{{--<script type="text/javascript">--}}
{{--$(function () {--}}
{{--// 基于准备好的dom，初始化echarts实例--}}
{{--var industryChart = echarts.init(document.getElementById('industry-charts'));--}}
{{--// 指定图表的配置项和数据--}}
{{--var option = {--}}
{{--tooltip: {--}}
{{--trigger: 'item',--}}
{{--formatter: "{a} <br/>{b}: {c} ({d}%)"--}}
{{--},--}}
{{--title: {--}}
{{--text: '工业产值',--}}
{{--subtext: '分街镇主要经济指标',--}}
{{--x: 'center',--}}
{{--top: '10',--}}
{{--},--}}
{{--legend: {--}}
{{--orient: 'vertical',--}}
{{--x: 'left',--}}
{{--top: '10',--}}
{{--data: ['黄岛', '辛安', '薛家岛', '灵珠山', '长江路', '红石崖', '灵山卫', '王台镇', '隐珠', '滨海', '张家楼', '琅琊', '藏南', '泊里', '大场', '海青', '大村', '六汪', '宝山', '铁山', '胶南', '珠海', '度假区', '胶河', '临港']--}}
{{--},--}}
{{--series: [--}}
{{--{--}}
{{--name: '街镇',--}}
{{--type: 'pie',--}}
{{--radius: ['30%', '70%'],--}}
{{--avoidLabelOverlap: false,--}}
{{--label: {--}}
{{--normal: {--}}
{{--show: false,--}}
{{--position: 'right'--}}
{{--},--}}
{{--emphasis: {--}}
{{--show: true,--}}
{{--textStyle: {--}}
{{--fontSize: '30',--}}
{{--fontWeight: 'bold'--}}
{{--}--}}
{{--}--}}
{{--},--}}
{{--labelLine: {--}}
{{--normal: {--}}
{{--show: false--}}
{{--}--}}
{{--},--}}
{{--data: [--}}
{{--{value: 11.9, name: '黄岛'},--}}
{{--{value: 16.6, name: '辛安'},--}}
{{--{value: 8.4, name: '薛家岛'},--}}
{{--{value: 8.5, name: '灵珠山'},--}}
{{--{value: 11.9, name: '长江路'},--}}
{{--{value: 16.6, name: '红石崖'},--}}
{{--{value: 8.4, name: '灵山卫'},--}}
{{--{value: 8.5, name: '王台镇'},--}}
{{--{value: 8.7, name: '隐珠'},--}}
{{--{value: 8.4, name: '滨海'},--}}
{{--{value: 11.5, name: '张家楼'},--}}
{{--{value: 12.4, name: '琅琊'},--}}
{{--{value: 10.4, name: '藏南'},--}}
{{--{value: 16.4, name: '泊里'},--}}
{{--{value: 13.6, name: '大场'},--}}
{{--{value: 8.5, name: '海青'},--}}
{{--{value: 9.4, name: '大村'},--}}
{{--{value: 10.4, name: '六汪'},--}}
{{--{value: 13.2, name: '宝山'},--}}
{{--{value: 9.9, name: '铁山'},--}}
{{--{value: 7.4, name: '胶南'},--}}
{{--{value: 6.9, name: '珠海'},--}}
{{--{value: 8.4, name: '度假区'},--}}
{{--{value: 10.4, name: '胶河'},--}}
{{--{value: 12.4, name: '临港'}--}}
{{--]--}}
{{--}--}}
{{--]--}}
{{--};--}}

{{--// 使用刚指定的配置项和数据显示图表。--}}
{{--industryChart.setOption(option);--}}
{{--$(window).resize(function () {--}}
{{--industryChart.resize();--}}
{{--});--}}
{{--});--}}
{{--</script>--}}
{{--<script type="text/javascript">--}}
    {{--$(function () {--}}
        {{--// 基于准备好的dom，初始化echarts实例--}}
        {{--var taxContainer = document.getElementById('tax-charts');--}}
        {{--//用于使chart自适应高度和宽度,通过窗体高宽计算容器高宽--}}
        {{--var resizeMainContainer = function () {--}}
            {{--var _width = $('.col-sm-8').width();--}}
            {{--var _height = $('.col-sm-8').height();--}}
            {{--taxContainer.style.width = _width + 'px';--}}
            {{--taxContainer.style.height = _height + 'px';--}}
        {{--};--}}
        {{--//设置div容器高宽--}}
        {{--resizeMainContainer();--}}
        {{--// 初始化图表--}}
        {{--var taxChart = echarts.init(taxContainer);--}}
        {{--// 指定图表的配置项和数据--}}
        {{--var option = {--}}
            {{--tooltip: {--}}
                {{--trigger: 'item',--}}
                {{--formatter: "{a} <br/>{b}: {c} ({d}%)"--}}
            {{--},--}}
            {{--title: {--}}
                {{--text: '利税总额',--}}
                {{--subtext: '分街镇主要经济指标',--}}
                {{--x: 'center',--}}
                {{--top: '10',--}}
            {{--},--}}
            {{--legend: {--}}
                {{--orient: 'vertical',--}}
                {{--x: 'left',--}}
                {{--top: '10',--}}
                {{--data: ['海洋高新区', '中德生态园', '经济技术开发区', '董家口循环经济区', '国际旅游度假区', '灵山湾影视文化产业区', '现代农业示范区', '古镇口创新示范区', '西海岸交通商务区', '藏马山旅游度假区', '轨道交通指挥部']--}}
            {{--},--}}
            {{--series: [--}}
                {{--{--}}
                    {{--name: '街镇',--}}
                    {{--type: 'pie',--}}
                    {{--radius: ['40%', '70%'],--}}
                    {{--avoidLabelOverlap: false,--}}
                    {{--label: {--}}
                        {{--normal: {--}}
                            {{--show: false,--}}
                            {{--position: 'center'--}}
                        {{--},--}}
                        {{--emphasis: {--}}
                            {{--show: true,--}}
                            {{--textStyle: {--}}
                                {{--fontSize: '30',--}}
                                {{--fontWeight: 'bold'--}}
                            {{--}--}}
                        {{--}--}}
                    {{--},--}}
                    {{--labelLine: {--}}
                        {{--normal: {--}}
                            {{--show: false--}}
                        {{--}--}}
                    {{--},--}}
                    {{--data: [--}}
                        {{--{value: 11.9, name: '海洋高新区'},--}}
                        {{--{value: 16.6, name: '中德生态园'},--}}
                        {{--{value: 8.4, name: '经济技术开发区'},--}}
                        {{--{value: 8.5, name: '董家口循环经济区'},--}}
                        {{--{value: 11.9, name: '国际旅游度假区'},--}}
                        {{--{value: 16.6, name: '灵山湾影视文化产业区'},--}}
                        {{--{value: 8.4, name: '现代农业示范区'},--}}
                        {{--{value: 8.5, name: '古镇口创新示范区'},--}}
                        {{--{value: 8.7, name: '西海岸交通商务区'},--}}
                        {{--{value: 8.4, name: '藏马山旅游度假区'},--}}
                        {{--{value: 11.5, name: '轨道交通指挥部'}--}}
                    {{--]--}}
                {{--}--}}
            {{--]--}}
        {{--};--}}

        {{--// 使用刚指定的配置项和数据显示图表。--}}
        {{--taxChart.setOption(option);--}}

        {{--window.onresize = function () {--}}
            {{--resizeMainContainer();--}}
            {{--taxChart.resize();--}}
        {{--};--}}
    {{--});--}}
{{--</script>--}}
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var assetsContainer = document.getElementById('assets-charts');
        //用于使chart自适应高度和宽度,通过窗体高宽计算容器高宽
        var resizeMainContainer = function () {
            var _width = $('.col-sm-8').width();
            var _height = $('.col-sm-8').height();
            assetsContainer.style.width = _width + 'px';
            assetsContainer.style.height = _height + 'px';
        };
        //设置div容器高宽
        resizeMainContainer();
        // 初始化图表
        var assetsChart = echarts.init(assetsContainer);
        // 指定图表的配置项和数据
        var option = {
            tooltip: {
                trigger: 'item',
                formatter: "{a} <br/>{b}: {c} ({d}%)"
            },
            title: {
                text: '固定资产',
                subtext: '分街镇主要经济指标',
                x: 'center',
                top: '10',
            },
            legend: {
                orient: 'vertical',
                x: 'left',
                top: '10',
                data: ['海洋高新区', '中德生态园', '经济技术开发区', '董家口循环经济区', '国际旅游度假区', '灵山湾影视文化产业区', '现代农业示范区', '古镇口创新示范区', '西海岸交通商务区', '藏马山旅游度假区', '轨道交通指挥部']
            },
            series: [
                {
                    name: '街镇',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                        normal: {
                            show: false,
                            position: 'center'
                        },
                        emphasis: {
                            show: true,
                            textStyle: {
                                fontSize: '30',
                                fontWeight: 'bold'
                            }
                        }
                    },
                    labelLine: {
                        normal: {
                            show: false
                        }
                    },
                    data: [
                        {value: 11.9, name: '海洋高新区'},
                        {value: 16.6, name: '中德生态园'},
                        {value: 8.4, name: '经济技术开发区'},
                        {value: 8.5, name: '董家口循环经济区'},
                        {value: 11.9, name: '国际旅游度假区'},
                        {value: 16.6, name: '灵山湾影视文化产业区'},
                        {value: 8.4, name: '现代农业示范区'},
                        {value: 8.5, name: '古镇口创新示范区'},
                        {value: 8.7, name: '西海岸交通商务区'},
                        {value: 8.4, name: '藏马山旅游度假区'},
                        {value: 11.5, name: '轨道交通指挥部'}
                    ]
                }
            ]
        };

        // 使用刚指定的配置项和数据显示图表。
        assetsChart.setOption(option);

        window.onresize = function () {
            resizeMainContainer();
            assetsChart.resize();
        };
    });
</script>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var saleContainer = document.getElementById('sale-charts');
        //用于使chart自适应高度和宽度,通过窗体高宽计算容器高宽
        var resizeMainContainer = function () {
            var _width = $('.col-sm-8').width();
            var _height = $('.col-sm-8').height();
            saleContainer.style.width = _width + 'px';
            saleContainer.style.height = _height + 'px';
        };
        //设置div容器高宽
        resizeMainContainer();
        // 初始化图表
        var saleChart = echarts.init(saleContainer);
        // 指定图表的配置项和数据
        var option = {
            tooltip: {
                trigger: 'item',
                formatter: "{a} <br/>{b}: {c} ({d}%)"
            },
            title: {
                text: '限上贸易',
                subtext: '分街镇主要经济指标',
                x: 'center',
                top: '10',
            },
            legend: {
                orient: 'vertical',
                x: 'left',
                top: '10',
                data: ['海洋高新区', '中德生态园', '经济技术开发区', '董家口循环经济区', '国际旅游度假区', '灵山湾影视文化产业区', '现代农业示范区', '古镇口创新示范区', '西海岸交通商务区', '藏马山旅游度假区', '轨道交通指挥部']
            },
            series: [
                {
                    name: '街镇',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                        normal: {
                            show: false,
                            position: 'center'
                        },
                        emphasis: {
                            show: true,
                            textStyle: {
                                fontSize: '30',
                                fontWeight: 'bold'
                            }
                        }
                    },
                    labelLine: {
                        normal: {
                            show: false
                        }
                    },
                    data: [
                        {value: 11.9, name: '海洋高新区'},
                        {value: 16.6, name: '中德生态园'},
                        {value: 8.4, name: '经济技术开发区'},
                        {value: 8.5, name: '董家口循环经济区'},
                        {value: 11.9, name: '国际旅游度假区'},
                        {value: 16.6, name: '灵山湾影视文化产业区'},
                        {value: 8.4, name: '现代农业示范区'},
                        {value: 8.5, name: '古镇口创新示范区'},
                        {value: 8.7, name: '西海岸交通商务区'},
                        {value: 8.4, name: '藏马山旅游度假区'},
                        {value: 11.5, name: '轨道交通指挥部'}
                    ]
                }
            ]
        };

        // 使用刚指定的配置项和数据显示图表。
        saleChart.setOption(option);

        window.onresize = function () {
            resizeMainContainer();
            saleChart.resize();
        };
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        var _width = $('#industry').width();
        $('#industry th:first-child').width(_width * 0.1);
        $('#industry td:first-child').width(_width * 0.1);
        $('#industry th:nth-child(2)').width(_width * 0.6);
        $('#industry td:nth-child(2)').width(_width * 0.6);
        $('#industry th:nth-child(3)').width(_width * 0.2);
        $('#industry td:nth-child(3)').width(_width * 0.2);
        $('#industry th:nth-child(4)').width(_width * 0.2);
        $('#industry td:nth-child(4)').width(_width * 0.2);
    })
    $(document).ready(function () {
        var _width = $('#profit').width();
        $('#profit th:first-child').width(_width * 0.1);
        $('#profit td:first-child').width(_width * 0.1);
        $('#profit th:nth-child(2)').width(_width * 0.6);
        $('#profit td:nth-child(2)').width(_width * 0.6);
        $('#profit th:nth-child(3)').width(_width * 0.4);
        $('#profit td:nth-child(3)').width(_width * 0.4);
        $('#profit th:nth-child(4)').width(_width * 0.2);
        $('#profit td:nth-child(4)').width(_width * 0.2);
    })
    $(document).ready(function () {
        var _width = $('#assets').width();
        $('#assets th:first-child').width(_width * 0.1);
        $('#assets td:first-child').width(_width * 0.1);
        $('#assets th:nth-child(2)').width(_width * 0.6);
        $('#assets td:nth-child(2)').width(_width * 0.6);
        $('#assets th:nth-child(3)').width(_width * 0.4);
        $('#assets td:nth-child(3)').width(_width * 0.4);
        $('#assets th:nth-child(4)').width(_width * 0.2);
        $('#assets td:nth-child(4)').width(_width * 0.2);
    })
    $(document).ready(function () {
        var _width = $('#trade').width();
        $('#trade th:first-child').width(_width * 0.1);
        $('#trade td:first-child').width(_width * 0.1);
        $('#trade th:nth-child(2)').width(_width * 0.6);
        $('#trade td:nth-child(2)').width(_width * 0.6);
        $('#trade th:nth-child(3)').width(_width * 0.4);
        $('#trade td:nth-child(3)').width(_width * 0.4);
        $('#trade th:nth-child(4)').width(_width * 0.2);
        $('#trade td:nth-child(4)').width(_width * 0.2);
    })
</script>
