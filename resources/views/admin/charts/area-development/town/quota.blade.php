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
                                            <li role="presentation"><a href="#profit" aria-controls="profit" role="tab"
                                                                       data-toggle="tab">利税总额</a></li>
                                            <li role="presentation"><a href="#assets" aria-controls="assets" role="tab"
                                                                       data-toggle="tab">固定资产</a></li>
                                            <li role="presentation"><a href="#trade" aria-controls="trade" role="tab"
                                                                       data-toggle="tab">限上贸易</a></li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="industry">
                                                <div class="row">
                                                    <div class="col-sm-3">
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
                                                        <div id="industry-charts" style="height:420px"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="profit">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="ibox float-e-margins">
                                                            <div class="ibox-content">
                                                                <div class="table-responsive">
                                                                    <div id="app-2">
                                                                        <sy-table :stru="stru"></sy-table>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div id="tax-charts" style="height:420px"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="assets">
                                                <div class="row">
                                                    <div class="col-sm-3">
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
                                                        <div id="assets-charts" style="height:420px"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="trade">
                                                <div class="row">
                                                    <div class="col-sm-3">
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
                                                        <div id="sale-charts" style="height:420px"></div>
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
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var industryChart = echarts.init(document.getElementById('industry-charts'));
        // 指定图表的配置项和数据
        var option = {
            tooltip: {
                trigger: 'item',
                formatter: "{a} <br/>{b}: {c} ({d}%)"
            },
            title: {
                text: '工业产值',
                subtext: '分街镇主要经济指标',
                x: 'center',
                top: '10',
            },
            legend: {
                orient: 'vertical',
                x: 'left',
                top: '10',
                data: ['黄岛', '辛安', '薛家岛', '灵珠山', '长江路', '红石崖', '灵山卫', '王台镇', '隐珠', '滨海', '张家楼', '琅琊', '藏南', '泊里', '大场', '海青', '大村', '六汪', '宝山', '铁山', '胶南', '珠海', '度假区', '胶河', '临港']
            },
            series: [
                {
                    name: '街镇',
                    type: 'pie',
                    radius: ['30%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                        normal: {
                            show: false,
                            position: 'right'
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
                        {value: 11.9, name: '黄岛'},
                        {value: 16.6, name: '辛安'},
                        {value: 8.4, name: '薛家岛'},
                        {value: 8.5, name: '灵珠山'},
                        {value: 11.9, name: '长江路'},
                        {value: 16.6, name: '红石崖'},
                        {value: 8.4, name: '灵山卫'},
                        {value: 8.5, name: '王台镇'},
                        {value: 8.7, name: '隐珠'},
                        {value: 8.4, name: '滨海'},
                        {value: 11.5, name: '张家楼'},
                        {value: 12.4, name: '琅琊'},
                        {value: 10.4, name: '藏南'},
                        {value: 16.4, name: '泊里'},
                        {value: 13.6, name: '大场'},
                        {value: 8.5, name: '海青'},
                        {value: 9.4, name: '大村'},
                        {value: 10.4, name: '六汪'},
                        {value: 13.2, name: '宝山'},
                        {value: 9.9, name: '铁山'},
                        {value: 7.4, name: '胶南'},
                        {value: 6.9, name: '珠海'},
                        {value: 8.4, name: '度假区'},
                        {value: 10.4, name: '胶河'},
                        {value: 12.4, name: '临港'}
                    ]
                }
            ]
        };

        // 使用刚指定的配置项和数据显示图表。
        industryChart.setOption(option);
        $(window).resize(function () {
            industryChart.resize();
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var taxContainer = document.getElementById('tax-charts');
        //用于使chart自适应高度和宽度,通过窗体高宽计算容器高宽
        var resizeMainContainer = function () {
            var _width = $('.col-sm-8').width();
            var _height = $('.col-sm-8').height();
            taxContainer.style.width = _width+'px';
            taxContainer.style.height = _height+'px';
        };
        //设置div容器高宽
        resizeMainContainer();
        // 初始化图表
        var taxChart = echarts.init(taxContainer);
        // 指定图表的配置项和数据
        var option = {
            tooltip: {
                trigger: 'item',
                formatter: "{a} <br/>{b}: {c} ({d}%)"
            },
            title: {
                text: '利税总额',
                subtext: '分街镇主要经济指标',
                x: 'center',
                top: '10',
            },
            legend: {
                orient: 'vertical',
                x: 'left',
                top: '10',
                data: ['黄岛', '辛安', '薛家岛', '灵珠山', '长江路', '红石崖', '灵山卫', '王台镇', '隐珠', '滨海', '张家楼', '琅琊', '藏南', '泊里', '大场', '海青', '大村', '六汪', '宝山', '铁山', '胶南', '珠海', '度假区', '胶河', '临港']
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
                        {value: 11.9, name: '黄岛'},
                        {value: 16.6, name: '辛安'},
                        {value: 8.4, name: '薛家岛'},
                        {value: 8.5, name: '灵珠山'},
                        {value: 11.9, name: '长江路'},
                        {value: 16.6, name: '红石崖'},
                        {value: 8.4, name: '灵山卫'},
                        {value: 8.5, name: '王台镇'},
                        {value: 8.7, name: '隐珠'},
                        {value: 8.4, name: '滨海'},
                        {value: 11.5, name: '张家楼'},
                        {value: 12.4, name: '琅琊'},
                        {value: 10.4, name: '藏南'},
                        {value: 16.4, name: '泊里'},
                        {value: 13.6, name: '大场'},
                        {value: 8.5, name: '海青'},
                        {value: 9.4, name: '大村'},
                        {value: 10.4, name: '六汪'},
                        {value: 13.2, name: '宝山'},
                        {value: 9.9, name: '铁山'},
                        {value: 7.4, name: '胶南'},
                        {value: 6.9, name: '珠海'},
                        {value: 8.4, name: '度假区'},
                        {value: 10.4, name: '胶河'},
                        {value: 12.4, name: '临港'}
                    ]
                }
            ]
        };

        // 使用刚指定的配置项和数据显示图表。
        taxChart.setOption(option);

        window.onresize = function () {
            resizeMainContainer();
            taxChart.resize();
        };
    });
</script>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var assetsContainer = document.getElementById('assets-charts');
        //用于使chart自适应高度和宽度,通过窗体高宽计算容器高宽
        var resizeMainContainer = function () {
            var _width = $('.col-sm-8').width();
            var _height = $('.col-sm-8').height();
            assetsContainer.style.width = _width +'px';
            assetsContainer.style.height = _height +'px';
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
                data: ['黄岛', '辛安', '薛家岛', '灵珠山', '长江路', '红石崖', '灵山卫', '王台镇', '隐珠', '滨海', '张家楼', '琅琊', '藏南', '泊里', '大场', '海青', '大村', '六汪', '宝山', '铁山', '胶南', '珠海', '度假区', '胶河', '临港']
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
                        {value: 11.9, name: '黄岛'},
                        {value: 16.6, name: '辛安'},
                        {value: 8.4, name: '薛家岛'},
                        {value: 8.5, name: '灵珠山'},
                        {value: 11.9, name: '长江路'},
                        {value: 16.6, name: '红石崖'},
                        {value: 8.4, name: '灵山卫'},
                        {value: 8.5, name: '王台镇'},
                        {value: 8.7, name: '隐珠'},
                        {value: 8.4, name: '滨海'},
                        {value: 11.5, name: '张家楼'},
                        {value: 12.4, name: '琅琊'},
                        {value: 10.4, name: '藏南'},
                        {value: 16.4, name: '泊里'},
                        {value: 13.6, name: '大场'},
                        {value: 8.5, name: '海青'},
                        {value: 9.4, name: '大村'},
                        {value: 10.4, name: '六汪'},
                        {value: 13.2, name: '宝山'},
                        {value: 9.9, name: '铁山'},
                        {value: 7.4, name: '胶南'},
                        {value: 6.9, name: '珠海'},
                        {value: 8.4, name: '度假区'},
                        {value: 10.4, name: '胶河'},
                        {value: 12.4, name: '临港'}
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
            saleContainer.style.width =_width +'px';
            saleContainer.style.height =_height +'px';
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
                data: ['黄岛', '辛安', '薛家岛', '灵珠山', '长江路', '红石崖', '灵山卫', '王台镇', '隐珠', '滨海', '张家楼', '琅琊', '藏南', '泊里', '大场', '海青', '大村', '六汪', '宝山', '铁山', '胶南', '珠海', '度假区', '胶河', '临港']
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
                        {value: 11.9, name: '黄岛'},
                        {value: 16.6, name: '辛安'},
                        {value: 8.4, name: '薛家岛'},
                        {value: 8.5, name: '灵珠山'},
                        {value: 11.9, name: '长江路'},
                        {value: 16.6, name: '红石崖'},
                        {value: 8.4, name: '灵山卫'},
                        {value: 8.5, name: '王台镇'},
                        {value: 8.7, name: '隐珠'},
                        {value: 8.4, name: '滨海'},
                        {value: 11.5, name: '张家楼'},
                        {value: 12.4, name: '琅琊'},
                        {value: 10.4, name: '藏南'},
                        {value: 16.4, name: '泊里'},
                        {value: 13.6, name: '大场'},
                        {value: 8.5, name: '海青'},
                        {value: 9.4, name: '大村'},
                        {value: 10.4, name: '六汪'},
                        {value: 13.2, name: '宝山'},
                        {value: 9.9, name: '铁山'},
                        {value: 7.4, name: '胶南'},
                        {value: 6.9, name: '珠海'},
                        {value: 8.4, name: '度假区'},
                        {value: 10.4, name: '胶河'},
                        {value: 12.4, name: '临港'}
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

