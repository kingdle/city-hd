<script>
    function initTimelineAssets(showData) {
        var dom = document.getElementById("HeaderDatelineAssets");
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
    $(function () {
        storeA = new SyStore({
            autoLoad: true,
            datasetId: 14,
            success: function (store) {
                topChart(store);
                benchmarkChart(store);
                structureChart(store);
            }
        });
    })
</script>
<script>
    $(function () {
        store = new SyStore({
            autoLoad: true,
            datasetId: 9,
            success: function (store) {
                initTimelineAssets();
                var _store = store;
                var sDate = new Date();
                var $quotadate = $(".quotadate");
                date = new Date(sDate.getTime());
                var baseRes = {
                    frame: 200000011,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()-1,
                }
                var baseSpeed = {
                    frame: 200000014,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()-1,
                }
                var baseJiHua = {
                    frame: 303000713,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()-1,
                }
                var baseJinDu = {
                    frame: 303000714,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()-1,
                }

                var kitV = new SyValueKit(baseRes, _store);
                var kitS = new SyValueKit(baseSpeed, _store);
                var kitM = new SyValueKit(baseJiHua, _store);
                var kitMS = new SyValueKit(baseJinDu, _store);

                initTimelineAssets(function (dd) {
                    var nowDate = dateArr[dd.currentIndex];
                    baseRes.time_year = nowDate.getFullYear();
                    baseRes.time_month = nowDate.getMonth() + 1;
                    baseSpeed.time_year = nowDate.getFullYear();
                    baseSpeed.time_month = nowDate.getMonth() + 1;
                    baseJiHua.time_year = nowDate.getFullYear();
                    baseJiHua.time_month = nowDate.getMonth() + 1;
                    baseJinDu.time_year = nowDate.getFullYear();
                    baseJinDu.time_month = nowDate.getMonth() + 1;

                    kitV = new SyValueKit(baseRes, _store);
                    kitS = new SyValueKit(baseSpeed, _store);
                    kitM = new SyValueKit(baseJiHua, _store);
                    kitMS = new SyValueKit(baseJinDu, _store);

                    var $trLists = $(".table-town tbody").children("tr");
                    $.each($trLists, function (i, trlist) {
                        var $trlist = $(trlist);
                        var $tdTitle = $($trlist.find("th"));
                        var $tdM = $($trlist.find("td").eq(0));
                        var $tdMS = $($trlist.find("td").eq(1));
                        var $tdV = $($trlist.find("td").eq(2));
                        var $tdS = $($trlist.find("td").eq(3));
                        $tdM.text(kitM.findValueByAreaName($tdTitle.text(), true));
                        $tdMS.text(kitMS.findValueByAreaName($tdTitle.text(), true));
                        $tdV.text(kitV.findValueByAreaName($tdTitle.text(), true));
                        $tdS.text(kitS.findValueByAreaName($tdTitle.text(), true));
                        $quotadate.html(baseSpeed.time_year + '-' + baseSpeed.time_month);
                    });
                });

                var $trLists = $(".table-town tbody").children("tr");
                $.each($trLists, function (i, trlist) {
                    var $trlist = $(trlist);
                    var $tdTitle = $($trlist.find("th"));
                    var $tdM = $($trlist.find("td").eq(0));
                    var $tdMS = $($trlist.find("td").eq(1));
                    var $tdV = $($trlist.find("td").eq(2));
                    var $tdS = $($trlist.find("td").eq(3));
                    $tdM.text(kitM.findValueByAreaName($tdTitle.text(), true));
                    $tdMS.text(kitMS.findValueByAreaName($tdTitle.text(), true));
                    $tdV.text(kitV.findValueByAreaName($tdTitle.text(), true));
                    $tdS.text(kitS.findValueByAreaName($tdTitle.text(), true));
                    $quotadate.html(baseSpeed.time_year + '-' + baseSpeed.time_month);
                });
            }
        });
    })
</script>
<script>
    $(function () {
        storeC = new SyStore({
            autoLoad: true,
            datasetId: 8,
            success: function (store) {
                initTimelineAssets();
                var _store = store;
                var sDate = new Date();
                var $quotadate = $(".quotadate");
                date = new Date(sDate.getTime());
                var baseRes = {
                    frame: 200000011,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()-1,
                }
                var baseSpeed = {
                    frame: 200000014,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()-1,
                }
                var baseJiHua = {
                    frame: 303000713,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()-1,
                }
                var baseJinDu = {
                    frame: 303000714,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()-1,
                }

                var kitV = new SyValueKit(baseRes, _store);
                var kitS = new SyValueKit(baseSpeed, _store);
                var kitM = new SyValueKit(baseJiHua, _store);
                var kitMS = new SyValueKit(baseJinDu, _store);

                initTimelineAssets(function (dd) {
                    var nowDate = dateArr[dd.currentIndex];
                    baseRes.time_year = nowDate.getFullYear();
                    baseRes.time_month = nowDate.getMonth() + 1;
                    baseSpeed.time_year = nowDate.getFullYear();
                    baseSpeed.time_month = nowDate.getMonth() + 1;
                    baseJiHua.time_year = nowDate.getFullYear();
                    baseJiHua.time_month = nowDate.getMonth() + 1;
                    baseJinDu.time_year = nowDate.getFullYear();
                    baseJinDu.time_month = nowDate.getMonth() + 1;

                    kitV = new SyValueKit(baseRes, _store);
                    kitS = new SyValueKit(baseSpeed, _store);
                    kitM = new SyValueKit(baseJiHua, _store);
                    kitMS = new SyValueKit(baseJinDu, _store);

                    var $trLists = $(".table-area tbody").children("tr");
                    $.each($trLists, function (i, trlist) {
                        var $trlist = $(trlist);
                        var $tdTitle = $($trlist.find("th"));
                        var $tdM = $($trlist.find("td").eq(0));
                        var $tdMS = $($trlist.find("td").eq(1));
                        var $tdV = $($trlist.find("td").eq(2));
                        var $tdS = $($trlist.find("td").eq(3));
                        $tdM.text(kitM.findValueByAreaName($tdTitle.text(), true));
                        $tdMS.text(kitMS.findValueByAreaName($tdTitle.text(), true));
                        $tdV.text(kitV.findValueByAreaName($tdTitle.text(), true));
                        $tdS.text(kitS.findValueByAreaName($tdTitle.text(), true));
                        $quotadate.html(baseSpeed.time_year + '-' + baseSpeed.time_month);
                    });
                });

                var $trLists = $(".table-area tbody").children("tr");
                $.each($trLists, function (i, trlist) {
                    var $trlist = $(trlist);
                    var $tdTitle = $($trlist.find("th"));
                    var $tdM = $($trlist.find("td").eq(0));
                    var $tdMS = $($trlist.find("td").eq(1));
                    var $tdV = $($trlist.find("td").eq(2));
                    var $tdS = $($trlist.find("td").eq(3));
                    $tdM.text(kitM.findValueByAreaName($tdTitle.text(), true));
                    $tdMS.text(kitMS.findValueByAreaName($tdTitle.text(), true));
                    $tdV.text(kitV.findValueByAreaName($tdTitle.text(), true));
                    $tdS.text(kitS.findValueByAreaName($tdTitle.text(), true));
                    $quotadate.html(baseSpeed.time_year + '-' + baseSpeed.time_month);
                });
            }
        });
    })
</script>
<script>
    $(function () {
        storeD = new SyStore({
            autoLoad: true,
            datasetId: 15,
            success: function (store) {
                initTimelineAssets();
                var _store = store;
                var sDate = new Date();
                var $quotadate = $(".quotadate");
                date = new Date(sDate.getTime());

                var baseJiHua = {
                    frame: 303000713,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()-1,
                }
                var baseJinDu = {
                    frame: 303000714,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()-1,
                }


                var kitM = new SyValueKit(baseJiHua, _store);
                var kitMS = new SyValueKit(baseJinDu, _store);

                initTimelineAssets(function (dd) {
                    var nowDate = dateArr[dd.currentIndex];

                    baseJiHua.time_year = nowDate.getFullYear();
                    baseJiHua.time_month = nowDate.getMonth() + 1;
                    baseJinDu.time_year = nowDate.getFullYear();
                    baseJinDu.time_month = nowDate.getMonth() + 1;


                    kitM = new SyValueKit(baseJiHua, _store);
                    kitMS = new SyValueKit(baseJinDu, _store);

                    var $trLists = $(".table-dept tbody").children("tr");
                    $.each($trLists, function (i, trlist) {
                        var $trlist = $(trlist);
                        var $tdTitle = $($trlist.find("th"));
                        var $tdM = $($trlist.find("td").eq(0));
                        var $tdMS = $($trlist.find("td").eq(1));
                        $tdM.text(kitM.findValueByAreaName($tdTitle.text(), true));
                        $tdMS.text(kitMS.findValueByAreaName($tdTitle.text(), true));
                        $quotadate.html(baseSpeed.time_year + '-' + baseSpeed.time_month);
                    });
                });

                var $trLists = $(".table-dept tbody").children("tr");
                $.each($trLists, function (i, trlist) {
                    var $trlist = $(trlist);
                    var $tdTitle = $($trlist.find("th"));
                    var $tdM = $($trlist.find("td").eq(0));
                    var $tdMS = $($trlist.find("td").eq(1));
                    $tdM.text(kitM.findValueByAreaName($tdTitle.text(), true));
                    $tdMS.text(kitMS.findValueByAreaName($tdTitle.text(), true));
                    $quotadate.html(baseSpeed.time_year + '-' + baseSpeed.time_month);
                });
            }
        });
    })
</script>
