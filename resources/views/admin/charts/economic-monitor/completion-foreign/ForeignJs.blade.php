<script>
    function initTimelineForeign(showData) {
        var dom = document.getElementById("HeaderDatelineForeign");
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
            datasetId: 11,
            success: function (store) {
                foreignChart(store);
                benchmarkChart(store);
                structureChart(store);
                var _store = store;
                var sDate = new Date();
                date = new Date(sDate.getTime());
                var baseRes = {
                    frame: 200000011,
                    area: 1508,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()-1,
                    tmpId:15,
                }

                var baseSpeed = {
                    frame: 200000014,
                    area: 1508,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()-1,
                    tmpId:15,
                }
                var baseBenqi = {
                    frame: 200000001,
                    area: 1508,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()-1,
                    tmpId:15,
                }
                var baseRes2 = {
                    frame: 200000011,
                    area: 1508,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()-1,
                    tmpId:14,
                }

                var baseSpeed2 = {
                    frame: 200000014,
                    area: 1508,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()-1,
                    tmpId:14,
                }
                var baseBenqi2 = {
                    frame: 200000001,
                    area: 1508,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()-1,
                    tmpId:14,
                }
                var kitV = new SyValueKit(baseRes, _store);
                var kitS = new SyValueKit(baseSpeed, _store);
                var kitB = new SyValueKit(baseBenqi, _store);
                var kitV2 = new SyValueKit(baseRes2, _store);
                var kitS2 = new SyValueKit(baseSpeed2, _store);
                var kitB2 = new SyValueKit(baseBenqi2, _store);

                initTimelineForeign(function (dd) {
                    var nowDate = dateArr[dd.currentIndex];
                    baseRes.time_year = nowDate.getFullYear();
                    baseRes.time_month = nowDate.getMonth() + 1;
                    baseSpeed.time_year = nowDate.getFullYear();
                    baseSpeed.time_month = nowDate.getMonth() + 1;
                    baseBenqi.time_year = nowDate.getFullYear();
                    baseBenqi.time_month = nowDate.getMonth() + 1;
                    baseRes2.time_year = nowDate.getFullYear();
                    baseRes2.time_month = nowDate.getMonth() + 1;
                    baseSpeed2.time_year = nowDate.getFullYear();
                    baseSpeed2.time_month = nowDate.getMonth() + 1;
                    baseBenqi2.time_year = nowDate.getFullYear();
                    baseBenqi2.time_month = nowDate.getMonth() + 1;

                    kitV = new SyValueKit(baseRes, _store);
                    kitS = new SyValueKit(baseSpeed, _store);
                    kitB = new SyValueKit(baseBenqi, _store);
                    kitV2 = new SyValueKit(baseRes2, _store);
                    kitS2 = new SyValueKit(baseSpeed2, _store);
                    kitB2 = new SyValueKit(baseBenqi2, _store);

                    var $trLists = $(".table-foreign tbody").children("tr");
                    $.each($trLists, function (i, trlist) {
                        var $trlist = $(trlist);
                        var $thTitle = $($trlist.find("th"));
                        var $tdB = $($trlist.find("td").eq(0));
                        var $tdV = $($trlist.find("td").eq(1));
                        var $tdS = $($trlist.find("td").eq(2));
                        $tdB.text(kitB.findValueByItemName($thTitle.text(), true));
                        $tdV.text(kitV.findValueByItemName($thTitle.text(), true));
                        $tdS.text(kitS.findValueByItemName($thTitle.text(), true));
                    });
                    var $trLists2 = $(".table-use tbody").children("tr");
                    $.each($trLists2, function (i, trlist) {
                        var $trlist = $(trlist);
                        var $thTitle = $($trlist.find("th"));
                        var $tdB2 = $($trlist.find("td").eq(0));
                        var $tdV2 = $($trlist.find("td").eq(1));
                        var $tdS2 = $($trlist.find("td").eq(2));
                        $tdB2.text(kitB2.findValueByItemName($thTitle.text(), true));
                        $tdV2.text(kitV2.findValueByItemName($thTitle.text(), true));
                        $tdS2.text(kitS2.findValueByItemName($thTitle.text(), true));
                    });
                });

                var $trLists = $(".table-foreign tbody").children("tr");
                $.each($trLists, function (i, trlist) {
                    var $trlist = $(trlist);
                    var $thTitle = $($trlist.find("th"));
                    var $tdB = $($trlist.find("td").eq(0));
                    var $tdV = $($trlist.find("td").eq(1));
                    var $tdS = $($trlist.find("td").eq(2));
                    $tdB.text(kitB.findValueByItemName($thTitle.text(), true));
                    $tdV.text(kitV.findValueByItemName($thTitle.text(), true));
                    $tdS.text(kitS.findValueByItemName($thTitle.text(), true));
                });
                var $trLists2 = $(".table-use tbody").children("tr");
                $.each($trLists2, function (i, trlist) {
                    var $trlist = $(trlist);
                    var $thTitle = $($trlist.find("th"));
                    var $tdB2 = $($trlist.find("td").eq(0));
                    var $tdV2 = $($trlist.find("td").eq(1));
                    var $tdS2 = $($trlist.find("td").eq(2));
                    $tdB2.text(kitB2.findValueByItemName($thTitle.text(), true));
                    $tdV2.text(kitV2.findValueByItemName($thTitle.text(), true));
                    $tdS2.text(kitS2.findValueByItemName($thTitle.text(), true));
                });
            }
        });
    })
</script>
