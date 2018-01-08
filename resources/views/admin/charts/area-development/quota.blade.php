<div class="box box-primary">
    <div class="contenter">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>指标列表及报表</h5>
                        <div class="ibox-tools">
                            <div id="app-time">
                                <input v-on:keyup.13="changeDate" v-model="year"
                                       placeholder="year">
                                <input v-on:keyup.13="changeDate" v-model="month"
                                       placeholder="month">
                                <button @click="changeDate">更新日期</button>
                            </div>
                        </div>
                    </div>
                    <div class="warpper-content-pillar">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div>
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#assets"
                                                                                      aria-controls="assets"
                                                                                      role="tab"
                                                                                      data-toggle="tab">固定资产</a></li>
                                            <li role="presentation"><a href="#industry" aria-controls="industry"
                                                                       role="tab"
                                                                       data-toggle="tab">工业产值</a></li>
                                            <li role="presentation"><a href="#trade" aria-controls="trade" role="tab"
                                                                       data-toggle="tab">限上贸易</a></li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="assets">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="ibox float-e-margins">
                                                            <div class="ibox-content">
                                                                <div class="table-responsive">
                                                                    <div id="vuetable-1">
                                                                        <sy-table :stru="stru"></sy-table>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div id="assets-charts" style="height:440px">
                                                            <sy-chart chartid="testChart" :syoption="syoption"
                                                                      :styleobj="styleobj"></sy-chart>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="industry">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="ibox float-e-margins">
                                                            <div class="ibox-content">
                                                                <div class="table-responsive">
                                                                    <div id="vuetable-3">
                                                                        <sy-table :stru="stru"></sy-table>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div id="industry-charts" style="height:400px"></div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="trade">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="ibox float-e-margins">
                                                            <div class="ibox-content">
                                                                <div class="table-responsive">
                                                                    <div id="vuetable-4">
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
<script>
    var a = 1;
    var csData = null;
    var seriesFilters = null;
    $(function () {
        storeB = new SyStore({
            autoLoad: true,
            datasetId: 8,
            success: function (store) {
                var axisArr = []; //横轴过滤结构
                var axisItem = null; //横轴项
                for (var item in store.meta.area) {
                    axisItem = {
                        "name": store.meta.area[item].name,
                        "arr": [{ //横轴过滤条件
                            //									"name": item.split('-')[0], //元数据名
                            "type": "area", //元数据类型
                            "extField": store.meta.area[item].extField //元数据id
                        }]
                    };
                    axisArr.push(axisItem);
                }
                seriesFilters = [{ //序列过滤条件
                    type: 'item', //元数据类型
                    name: '固定资产投资总额' //元数据名称
                }, {
                    type: 'frame',
                    extField: '303000714' //也可直接传入元数据id，如传入id则不按名称查找
                }, {
                    type: 'time_year',
                    extField: "2017" //也可直接传入元数据id，如传入id则不按名称查找
                }, {
                    type: 'time_month',
                    extField: "11" //也可直接传入元数据id，如传入id则不按名称查找
                }];
                var sychartOption = {
                    title: {
                        text: '固定资产投资总额',
                        x: 'center'
                    },
                    tooltip: {
                        trigger: 'item',
                        formatter: "{a} <br/>{b} : {c} ({d}%)"
                    },
                    legend: {
                        orient: 'vertical',
                        left: 'left',
                        //										data: ['直接访问', '邮件营销', '联盟广告', '视频广告', '搜索引擎']
                    },
                    syaxisfilter: axisArr, //传入横轴过滤条件
                    series: [{
                        name: '固定资产投资总额',
                        type: 'pie',
                        radius: ['40%', '70%'],
                        center: ['50%', '60%'],
                        syfilter: seriesFilters,
                        itemStyle: {
                            emphasis: {
                                shadowBlur: 10,
                                shadowOffsetX: 0,
                                shadowColor: 'rgba(0, 0, 0, 0.5)'
                            }
                        }
                    }]
                };
                app3 = new Vue({
                    el: '#assets-charts',
                    store: store, //传入数据集
                    data: {
                        styleobj: {
                            height: '440px'
                        },
                        syoption: sychartOption
                    }
                });

                $.ajax({
                    type: "get",
                    url: SyStore.gPath + "/report/getAnReportByTmpId",  //获取表格结构api
                    async: true,
                    data: {
                        tmpType: 'tmp',
                        tmpId: 21 //表格结构id
                    },
                    success: function (data) {
                        csData = data;
                        //输入初始日期
                        data.reportMetas = [{
                            "type": "time_year",
                            "extField": "2017"
                        }, {
                            "type": "time_month",
                            "extField": "11"
                        }];

                        //更新日期
                        var bb = new Vue({
                            el: '#app-time',
                            data: {
                                year: '2017',
                                month: '11'
                            },
                            methods: {
                                changeDate: function () {
                                    seriesFilters[2].extField = this.year;
                                    seriesFilters[3].extField = this.month;
                                    //修改日期
                                    csData.reportMetas = [{
                                        "type": "time_year",
                                        "extField": this.year
                                    }, {
                                        "type": "time_month",
                                        "extField": this.month
                                    }];

                                }
                            }
                        });

                        console.log(data)
                    }
                });

            }
        });

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
                    name: '功能区',
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
