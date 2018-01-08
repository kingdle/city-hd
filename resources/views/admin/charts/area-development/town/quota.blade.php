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
                                                                                      data-toggle="tab">工业增加值</a></li>
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
                                                                    <div id="vuetable-1">
                                                                        <sy-table :stru="stru"></sy-table>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div id="industry-charts"
                                                             style="height:420px;min-height: 420px">
                                                            <sy-chart chartid="testChart" :syoption="syoption"
                                                                      :styleobj="styleobj"></sy-chart>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="profit">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="ibox float-e-margins">
                                                            <div class="ibox-content">
                                                                <div class="table-responsive">
                                                                    <div id="vuetable-2">
                                                                        <sy-table :stru="stru"></sy-table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div id="tax-charts" style="height:420px">
                                                            <sy-chart chartid="testChart" :syoption="syoption"
                                                                      :styleobj="styleobj"></sy-chart>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="assets">
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
                                                                    <div id="vuetable-4">
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
<script type="text/javascript">
    var a = 1;
    var seriesFiltersA = null;
    $(function () {
        storeA = new SyStore({
            autoLoad: true,
            datasetId: 9,
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
                seriesFiltersA = [{ //序列过滤条件
                    type: 'item', //元数据类型
                    name: "工业增加值" //元数据名称
                }, {
                    type: 'frame',
                    extField: "200000014" //也可直接传入元数据id，如传入id则不按名称查找
                }, {
                    "type": "time_year",
                    "extField": "2017"
                }, {
                    "type": "time_month",
                    "extField": "9"
                }];
                var sychartOptionA = {
                    title: {
                        text: '工业增加值',
                        x: 'center'
                    },
                    tooltip: {
                        trigger: 'item',
                        formatter: "{a} <br/>{b} : {c} ({d}%)"
                    },
                    legend: {
                        orient: 'vertical',
                        left: 'left',
                        data: ['黄岛', '辛  安', '薛家岛', '灵珠山', '长江路', '红石崖', '灵山卫', '王台镇', '隐珠', '滨海', '张家楼', '琅琊', '藏南', '泊里', '大场', '海青', '大村', '六汪', '宝山', '铁山', '胶南', '珠海', '度假区', '胶河', '临港']
                    },
                    syaxisfilter: axisArr, //传入横轴过滤条件
                    series: [{
                        name: '工业增加值',
                        type: 'pie',
                        radius: ['40%', '70%'],
                        center: ['60%', '55%'],
                        syfilter: seriesFiltersA,

                    }]
                };
                app1 = new Vue({
                    el: '#industry-charts',
                    store: store, //传入数据集
                    data: {
                        styleobj: {
                            height: '420px'
                        },
                        syoption: sychartOptionA
                    }
                });
                $.ajax({
                    type: "get",
                    url: SyStore.gPath + "/report/getAnReportByTmpId",
                    async: true,
                    data: {
                        tmpId: 42 //表格结构id
                    },
                    success: function (data) {
                        seriesFiltersA = data;
                        //输入初始日期
                        seriesFiltersA.reportMetas = [{
                            "type": "time_year",
                            "extField": nowDate.getFullYear()
                        }, {
                            "type": "time_month",
                            "extField": nowDate.getMonth() + 1
                        }];
                        var bb = new Vue({
                            el: '#app-2',
                            data: {
                                year: '2017',
                                month: '9'
                            },
                            methods: {
                                changeDate: function() {
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
                    }
                });

            }
        });
    });
</script>
