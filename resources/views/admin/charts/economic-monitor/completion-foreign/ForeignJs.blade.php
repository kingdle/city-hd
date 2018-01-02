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
                initTimelineForeign();
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
                }

                var baseSpeed = {
                    frame: 200000014,
                    area: 1508,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()-1,
                }
                var baseBenqi = {
                    frame: 200000001,
                    area: 1508,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()-1,
                }
                var kitV = new SyValueKit(baseRes, _store);
                var kitS = new SyValueKit(baseSpeed, _store);
                var kitB = new SyValueKit(baseBenqi, _store);

                initTimelineForeign(function (dd) {
                    var nowDate = dateArr[dd.currentIndex];
                    baseRes.time_year = nowDate.getFullYear();
                    baseRes.time_month = nowDate.getMonth() + 1;
                    baseSpeed.time_year = nowDate.getFullYear();
                    baseSpeed.time_month = nowDate.getMonth() + 1;
                    baseBenqi.time_year = nowDate.getFullYear();
                    baseBenqi.time_month = nowDate.getMonth() + 1;

                    kitV = new SyValueKit(baseRes, _store);
                    kitS = new SyValueKit(baseSpeed, _store);
                    kitB = new SyValueKit(baseBenqi, _store);

                    var $trLists = $(".table tbody").children("tr");
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
                });

                var $trLists = $(".table tbody").children("tr");
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
            }
        });
    })
</script>
