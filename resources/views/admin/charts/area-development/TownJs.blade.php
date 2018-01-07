
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
        struA = null;
        struB = null;
        struC = null;
        struD = null;
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
                            el: '#app-1',
                            data: {
                                stru: struA //表格结构
                            },
                            store: _store,
                            mounted: function () {
                            }
                        });
                    }
                });
            }
        });
        storeB = new SyStore({
            autoLoad: true,
            datasetId: 8,
            success: function (store) {
                var _store = store;
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
                            el: '#app-2',
                            data: {
                                stru: struB //表格结构
                            },
                            store: _store,
                            mounted: function () {
                                console.log(store)
                            }

                        });

                        console.log(aa)


                    }
                });
            }
        });
        storeC = new SyStore({
            autoLoad: true,
            datasetId: 9,
            success: function (store) {
                var _store = store;
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
                            el: '#app-3',
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
                            el: '#app-4',
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
<script src="{{ admin_asset ("/js/vue.min.js") }}"></script>
<script src="{{ admin_asset ("/js/vuetable1.js") }}"></script>
