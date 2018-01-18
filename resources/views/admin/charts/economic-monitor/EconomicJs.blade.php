<script>
    function initTimelineEconomic(showData) {
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
<script src="{{ admin_asset ("/js/vue.min.js") }}"></script>
<script src="{{ admin_asset ("/js/vuetable1.js") }}"></script>
<script>
    struA = {};
    $(function () {
        storeA = new SyStore({
            autoLoad: true,
            datasetId: 10,
            success: function (store) {
                var _store = store;
                initChartsMonitor(_store);
                area();
                assets();
                industry();
                sale();
                economicline(store);

                var _store = store;

                var initDate = new Date(new Date().getTime() - 1000 * 60 * 60 * 24 * 30 * 1);

                var baseRes = {
                    frame: 200000011,
                    area: 3519,
                    time_year: initDate.getFullYear(),
                    time_month: initDate.getMonth() + 1,
//                tmp_id: 1
                };
                var baseSpeed = {
                    frame: 200000014,
                    area: 3519,
                    time_year: initDate.getFullYear(),
                    time_month: initDate.getMonth() + 1,
//                tmp_id: 1
                };
                var baseSpeedLast = {
                    frame: 200000014,
                    area: 3519,
                    time_year: new Date(new Date().getTime() - 1000 * 60 * 60 * 24 * 30 * 2).getFullYear(),
                    time_month: new Date(new Date().getTime() - 1000 * 60 * 60 * 24 * 30 * 2).getMonth() + 1,
//                tmp_id: 1
                };

                var kitV = new SyValueKit(baseRes, _store);
                var kitS = new SyValueKit(baseSpeed, _store);
                var kitSL = new SyValueKit(baseSpeedLast, _store);

                var $cards = $(".cardh");
                $.each($cards, function (i, cardh) {
                    var $card = $(cardh);
                    var $title = $($card.find('.title p')[0]);
                    var $valV = $($card.find('.numbers>p>span')[0]);
                    var $valS = $($card.find('.sta>p>span')[0]);
                    var sVal = kitS.findValueByItemName($title.html(), true);
                    var slVal = kitSL.findValueByItemName($title.html(), true);
                    var CResult = null;
                    try {
                        CResult = slVal - sVal;
                        if (sVal == 0) {
                            $card.find('.sta').removeClass('stats-gray stats-up stats-down');
                            $card.find('.sta i').removeClass('fa-arrow-up fa-arrow-down');
                            $card.find('.sta').addClass('sta stats-gray');
                            $card.find('.sta i').addClass('fa');
                        } else {
                            if (sVal < 0) {
                                $card.find('.sta').removeClass('stats-gray stats-up stats-down');
                                $card.find('.sta i').removeClass('fa-arrow-up fa-arrow-down');
                                $card.find('.sta').addClass('sta stats-down');
                                $card.find('.sta i').addClass('fa fa-arrow-down');
                            } else {
                                $card.find('.sta').removeClass('stats-gray stats-up stats-down');
                                $card.find('.sta i').removeClass('fa-arrow-up fa-arrow-down');
                                $card.find('.sta').addClass('sta stats-up');
                                $card.find('.sta i').addClass('fa fa-arrow-up');
                            }
                        }
                        if (sVal = isNaN(sVal)) {
                            $card.find('.sta').removeClass('stats-gray stats-up stats-down');
                            $card.find('.sta i').removeClass('fa-arrow-up fa-arrow-down');
                        }
                    }
                    catch (e) {
                    }

                    $valV.html(kitV.findValueByItemName($title.html(), true));
                    $valS.html(kitS.findValueByItemName($title.html(), true));
                });

                initTimelineEconomic(function (dd) {
                    var nowDate = dateArr[dd.currentIndex];

                    struA.reportMetas = struA.reportMetas.filter(function (item) {
                        if (item.type == 'time_year') {
                            item.extField = nowDate.getFullYear();
                        }
                        if (item.type == 'time_month') {
                            item.extField = nowDate.getMonth() + 1

                        }
                        return true;

                    });
                    baseRes.time_year = nowDate.getFullYear();
                    baseRes.time_month = nowDate.getMonth() + 1;
                    baseSpeed.time_year = nowDate.getFullYear();
                    baseSpeed.time_month = nowDate.getMonth() + 1;
                    baseSpeedLast.time_year = new Date(nowDate.getTime() - 1000 * 60 * 60 * 24 * 30 * 1).getFullYear();
                    baseSpeedLast.time_month = new Date(nowDate.getTime() - 1000 * 60 * 60 * 24 * 30 * 1).getMonth() + 1;
                    kitV = new SyValueKit(baseRes, _store);
                    kitS = new SyValueKit(baseSpeed, _store);
                    kitSL = new SyValueKit(baseSpeedLast, _store);
                    var $cards = $(".cardh");
                    $.each($cards, function (i, cardh) {
                        var $card = $(cardh);

                        var $title = $($card.find('.title p')[0]);
                        var $valV = $($card.find('.numbers>p>span')[0]);
                        var $valS = $($card.find('.sta>p>span')[0]);
                        var $quotadate = $(".quotadate");
                        var sVal = kitS.findValueByItemName($title.html(), true);
                        var slVal = kitSL.findValueByItemName($title.html(), true);
                        var CResult = null;
                        try {
                            CResult = slVal - sVal;
                            //修改为只要增速不小于零就显示红色向上箭头，把条件变量由CResult替换为sVal了
                            if (sVal == 0) {
                                $card.find('.sta').removeClass('stats-gray stats-up stats-down');
                                $card.find('.sta i').removeClass('fa-arrow-up fa-arrow-down');
                                $card.find('.sta').addClass('sta stats-gray');
                                $card.find('.sta i').addClass('fa');
                            } else {
                                if (sVal < 0) {
                                    $card.find('.sta').removeClass('stats-gray stats-up stats-down');
                                    $card.find('.sta i').removeClass('fa-arrow-up fa-arrow-down');
                                    $card.find('.sta').addClass('sta stats-down');
                                    $card.find('.sta i').addClass('fa fa-arrow-down');
                                } else {
                                    $card.find('.sta').removeClass('stats-gray stats-up stats-down');
                                    $card.find('.sta i').removeClass('fa-arrow-up fa-arrow-down');
                                    $card.find('.sta').addClass('sta stats-up');
                                    $card.find('.sta i').addClass('fa fa-arrow-up');
                                }
                            }
                            if (sVal = isNaN(sVal)) {
                                $card.find('.sta').removeClass('stats-gray stats-up stats-down');
                                $card.find('.sta i').removeClass('fa-arrow-up fa-arrow-down');
                            }
                        }
                        catch (e) {
                            console.log(e)
                        }
                        $quotadate.html(baseSpeed.time_year + '-' + baseSpeed.time_month);
                        $valV.html(kitV.findValueByItemName($title.html(), true));
                        $valS.html(kitS.findValueByItemName($title.html(), true));
                    });
                });


                //创建表格
                $.ajax({
                    type: "get",
                    url: SyStore.gPath + "/report/getAnReportByTmpId", //获取表格结构api
                    async: true,
                    data: {
                        tmpType: 'tmp',
                        tmpId: 7 //表格结构id
                    },
                    success: function (stru) {
                        struA = stru;

                        //输入初始日期
                        if (struA.reportMetas) {
                            struA.reportMetas.push({
                                "type": "time_year",
                                "extField": nowDate.getFullYear()
                            });
                            struA.reportMetas.push({
                                "type": "time_month",
                                "extField": nowDate.getMonth() + 1
                            });

                        } else {
                            struA.reportMetas = [{
                                "type": "time_year",
                                "extField": nowDate.getFullYear()
                            }, {
                                "type": "time_month",
                                "extField": nowDate.getMonth() + 1
                            }];
                        }
                        //创建表格
                        var aa = new Vue({
                            el: '#economic-1',
                            data: {
                                stru: struA //表格结构
                            },
                            store: _store,
                            mounted: function () {
                                console.log(store)
                            }

                        });

                    }
                });

            }
        });

    })
</script>
