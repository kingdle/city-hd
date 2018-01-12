<script>
    function initTimelineTown(showData) {
        var dom = document.getElementById("HeaderDateline");
        var myChart = echarts.getInstanceByDom(dom);
        if (myChart) {
            myChart.dispose();
        }
        myChart = echarts.init(dom);
        myChart.group = 'month';
        if (showData) {
            myChart.on('timelinechanged', showData);
        }
        var option = {
            group: 'month',
            baseOption: {
                timeline: {
                    axisType: 'category',
                    autoPlay: false,
                    rewind: true,
                    currentIndex: dateArr.length - 1,
                    playInterval: 1000,
                    data: dateStrArr
                },
                calculable: true,
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
                }
            }
        };
        myChart.setOption(option);
    }
</script>

<script>
    var a = 1;
    $(function () {
        var genChartWH = function () {
            var _width = $('.col-sm-8').width();
            var _height = $('.col-sm-8').height();
            return {
                width: _width + 'px',
                height: _height + 'px'
            }
        };
        struA = null;
        struB = null;
        struC = null;
        struD = null;
        seriesFilters = [{
            type: 'time_year',
            extField: "2017"//也可直接传入元数据id，如传入id则不按名称查找
        }, {
            type: 'time_month',
            extField: "11" //也可直接传入元数据id，如传入id则不按名称查找
        }];
        storeA = new SyStore({
            autoLoad: true,
            datasetId: 9,
            success: function (store) {
                initTimelineTown(function (index) {
                    var nowDate = dateArr[index.currentIndex];
                    struA.reportMetas = [{
                        "type": "time_year",
                        "extField": nowDate.getFullYear()
                    }, {
                        "type": "time_month",
                        "extField": nowDate.getMonth() + 1
                    }];
                    struB.reportMetas = [{
                        "type": "time_year",
                        "extField": nowDate.getFullYear()
                    }, {
                        "type": "time_month",
                        "extField": nowDate.getMonth() + 1
                    }];
                    struC.reportMetas = [{
                        "type": "time_year",
                        "extField": nowDate.getFullYear()
                    }, {
                        "type": "time_month",
                        "extField": nowDate.getMonth() + 1
                    }];
                    struD.reportMetas = [{
                        "type": "time_year",
                        "extField": nowDate.getFullYear()
                    }, {
                        "type": "time_month",
                        "extField": nowDate.getMonth() + 1
                    }];

                    seriesFilters[0].extField = nowDate.getFullYear();
                    seriesFilters[1].extField = nowDate.getMonth() + 1;
                });
                var _store = store;
                $.ajax({
                    type: "get",
                    url: SyStore.gPath + "/report/getAnReportByTmpId", //获取表格结构api
                    async: true,
                    data: {
//                        tmpType: 'tmp',
                        tmpId: 42 //表格结构id
                    },
                    success: function (stru) {
                        struA = stru;
                        //输入初始日期
                        struA.reportMetas = [{
                            "type": "time_year",
                            "extField": nowDate.getFullYear()
                        }, {
                            "type": "time_month",
                            "extField": nowDate.getMonth() + 1
                        }];
                        //创建表格
                        var aa = new Vue({
                            el: '#vuetable-1',
                            data: {
                                stru: struA //表格结构
                            },
                            store: _store,
                            mounted: function () {
                            }
                        });
                    }
                });


                var axisArr = []; //横轴过滤结构
                var axisItem = null; //横轴项
                var axisStrs = []; //地区
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
                    axisStrs.push(axisItem.name);
                }

                var sychartOption = {
                    title: {
                        text: '',
                        x: 'center'
                    },
                    tooltip: {
                        trigger: 'item',
                        formatter: "{a} <br/>{b} : {c} ({d}%)"
                    },
                    legend: {
                        orient: 'vertical',
                        left: 'left',
                        data: axisStrs//['镇街', '黄岛', '辛  安', '薛家岛', '灵珠山', '长江路', '红石崖', '灵山卫', '王台镇', '隐珠', '滨海', '张家楼', '琅琊', '藏南', '泊里', '大场', '海青', '大村', '六汪', '宝山', '铁山', '胶南', '珠海', '度假区', '胶河', '临港']
                        //										data: ['直接访问', '邮件营销', '联盟广告', '视频广告', '搜索引擎']
                    },
                    syaxisfilter: axisArr, //传入横轴过滤条件
                    series: [{
                        name: '工业增加值',
                        type: 'pie',
                        radius: ['40%', '70%'],
                        center: ['60%', '55%'],
                        syfilter: seriesFilters,
                        sydims: [ //序列维度。散点图有两个维度。其他的只有一个维度，也可以不传入维度，在syfilter中过滤
                            [{
                                type: 'item',
                                name: '工业增加值'
                            }, {
                                type: 'frame',
                                extField: "200000014" //也可直接传入元数据id，如传入id则不按名称查找
                            }]
                        ]

                    }]
                };
                app1 = new Vue({
                    el: '#industry-charts',
                    store: store, //传入数据集
                    data: {
                        styleobj: genChartWH(),
                        syoption: sychartOption
                    }
                });
            }
        });
        storeB = new SyStore({
            autoLoad: true,
            datasetId: 9,
            success: function (store) {
                var _store = store;

                var axisArr = []; //横轴过滤结构
                var axisItem = null; //横轴项
                var axisStrs =[];
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
                    axisStrs.push(axisItem.name);
                }
                var sychartOption = {
                    title: {
                        text: '利税总额',
                        x: 'center'
                    },
                    tooltip: {
                        trigger: 'item',
                        formatter: "{a} <br/>{b} : {c} ({d}%)"
                    },
                    legend: {
                        orient: 'vertical',
                        left: 'left',
                        data: axisStrs//['镇街', '黄岛', '辛  安', '薛家岛', '灵珠山', '长江路', '红石崖', '灵山卫', '王台镇', '隐珠', '滨海', '张家楼', '琅琊', '藏南', '泊里', '大场', '海青', '大村', '六汪', '宝山', '铁山', '胶南', '珠海', '度假区', '胶河', '临港']

                        //										data: ['直接访问', '邮件营销', '联盟广告', '视频广告', '搜索引擎']
                    },
                    syaxisfilter: axisArr, //传入横轴过滤条件
                    series: [{
                        name: '利税总额',
                        type: 'pie',
                        radius: ['40%', '70%'],
                        center: ['60%', '55%'],
                        syfilter: seriesFilters,
                        sydims: [ //序列维度。散点图有两个维度。其他的只有一个维度，也可以不传入维度，在syfilter中过滤
                            [{ //序列过滤条件
                                type: 'item', //元数据类型
                                name: "利税总额" //元数据名称
                            }, {
                                type: 'frame',
                                extField: "200000011" //也可直接传入元数据id，如传入id则不按名称查找
                            }]
                        ]
                    }]
                };
                app3 = new Vue({
                    el: '#tax-charts',
                    store: store, //传入数据集
                    data: {
                        styleobj: genChartWH(),
                        syoption: sychartOption
                    }
                });


                $.ajax({
                    type: "get",
                    url: SyStore.gPath + "/report/getAnReportByTmpId", //获取表格结构api
                    async: true,
                    data: {
//                        tmpType: 'tmp',
                        tmpId: 43 //表格结构id
                    },
                    success: function (stru) {
                        struB = stru;
                        //输入初始日期
                        struB.reportMetas = [{
                            "type": "time_year",
                            "extField": nowDate.getFullYear()
                        }, {
                            "type": "time_month",
                            "extField": nowDate.getMonth() + 1
                        }];
                        //创建表格
                        var aa = new Vue({
                            el: '#vuetable-2',
                            data: {
                                stru: struB //表格结构
                            },
                            store: _store,
                            mounted: function () {
//                                console.log(store)
                            }

                        });

//                        console.log(aa)


                    }
                });
            }
        });
        storeC = new SyStore({
            autoLoad: true,
            datasetId: 9,
            success: function (store) {
                var _store = store;
                var axisArr = []; //横轴过滤结构
                var axisItem = null; //横轴项
                var axisStrs =[];
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
                    axisStrs.push(axisItem.name);
                }
                var sychartOption = {
                    title: {
                        text: "固定资产投资总额",
                        x: 'center'
                    },
                    tooltip: {
                        trigger: 'item',
                        formatter: "{a} <br/>{b} : {c} ({d}%)"
                    },
                    legend: {
                        orient: 'vertical',
                        left: 'left',
                        data: axisStrs//['镇街', '黄岛', '辛  安', '薛家岛', '灵珠山', '长江路', '红石崖', '灵山卫', '王台镇', '隐珠', '滨海', '张家楼', '琅琊', '藏南', '泊里', '大场', '海青', '大村', '六汪', '宝山', '铁山', '胶南', '珠海', '度假区', '胶河', '临港']

                        //										data: ['直接访问', '邮件营销', '联盟广告', '视频广告', '搜索引擎']
                    },
                    syaxisfilter: axisArr, //传入横轴过滤条件
                    series: [{
                        name: '固定资产投资额',
                        type: 'pie',
                        radius: ['40%', '70%'],
                        center: ['60%', '55%'],
                        syfilter: seriesFilters,
                        sydims: [ //序列维度。散点图有两个维度。其他的只有一个维度，也可以不传入维度，在syfilter中过滤
                            [{ //序列过滤条件
                                type: 'item', //元数据类型
                                name: "固定资产投资总额"//元数据名称
                            }, {
                                type: 'frame',
                                name: "进度"
//							extField: "200000014" //也可直接传入元数据id，如传入id则不按名称查找
                            }]
                        ]

                    }]
                };
                app3 = new Vue({
                    el: '#build-charts',
                    store: store, //传入数据集
                    data: {
                        styleobj: genChartWH(),
                        syoption: sychartOption
                    }
                });


                $.ajax({
                    type: "get",
                    url: SyStore.gPath + "/report/getAnReportByTmpId", //获取表格结构api
                    async: true,
                    data: {
                        tmpType: 'tmp',
                        tmpId: 26 //表格结构id
                    },
                    success: function (stru) {
                        struC = stru;
                        //输入初始日期
                        struC.reportMetas = [{
                            "type": "time_year",
                            "extField": nowDate.getFullYear()
                        }, {
                            "type": "time_month",
                            "extField": nowDate.getMonth() + 1
                        }];
                        //创建表格
                        var cc = new Vue({
                            el: '#vuetable-3',
                            data: {
                                stru: struC //表格结构
                            },
                            store: _store,
                            mounted: function () {
                            }

                        });
                    }
                });
            }
        });
        storeD = new SyStore({
            autoLoad: true,
            datasetId: 9,
            success: function (store) {
                var _store = store;


                var axisArr = []; //横轴过滤结构
                var axisItem = null; //横轴项
                var axisStrs = [];
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
                    axisStrs.push(axisItem.name);
                }
                var sychartOption = {
                    title: {
                        text: '限上贸易销售额',
                        x: 'center'
                    },
                    tooltip: {
                        trigger: 'item',
                        formatter: "{a} <br/>{b} : {c} ({d}%)"
                    },
                    legend: {
                        orient: 'vertical',
                        left: 'left',
                        data: axisStrs//['镇街', '黄岛', '辛  安', '薛家岛', '灵珠山', '长江路', '红石崖', '灵山卫', '王台镇', '隐珠', '滨海', '张家楼', '琅琊', '藏南', '泊里', '大场', '海青', '大村', '六汪', '宝山', '铁山', '胶南', '珠海', '度假区', '胶河', '临港']

                        //										data: ['直接访问', '邮件营销', '联盟广告', '视频广告', '搜索引擎']
                    },
                    syaxisfilter: axisArr, //传入横轴过滤条件
                    series: [{
                        name: '固定资产投资额',
                        type: 'pie',
                        radius: ['40%', '70%'],
                        center: ['60%', '55%'],
                        syfilter: seriesFilters,
                        sydims: [ //序列维度。散点图有两个维度。其他的只有一个维度，也可以不传入维度，在syfilter中过滤
                            [{
                                type: 'item',
                                name: '限上贸易销售额'
                            }, {
                                type: 'frame',
                                extField: "200000011" //也可直接传入元数据id，如传入id则不按名称查找
                            }]
                        ],
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
                    el: '#sale-charts',
                    store: store, //传入数据集
                    data: {
                        styleobj: genChartWH(),
                        syoption: sychartOption
                    }
                });


                $.ajax({
                    type: "get",
                    url: SyStore.gPath + "/report/getAnReportByTmpId", //获取表格结构api
                    async: true,
                    data: {
                        tmpType: 'tmp',
                        tmpId: 27 //表格结构id
                    },
                    success: function (stru) {
                        struD = stru;
                        //输入初始日期
                        struD.reportMetas = [{
                            "type": "time_year",
                            "extField": nowDate.getFullYear()
                        }, {
                            "type": "time_month",
                            "extField": nowDate.getMonth() + 1
                        }];
                        //创建表格
                        var dd = new Vue({
                            el: '#vuetable-4',
                            data: {
                                stru: struD //表格结构
                            },
                            store: _store,
                            mounted: function () {
                            }
                        });
                    }
                });
            }
        });

    })
</script>
