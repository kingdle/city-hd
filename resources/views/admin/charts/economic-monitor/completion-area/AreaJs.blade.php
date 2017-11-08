<script>
    function initTimelineArea(showData) {
        var dom = document.getElementById("HeaderDatelineArea");
        var myChart = echarts.getInstanceByDom(dom);
        if (myChart) {
            myChart.dispose();
        }
        myChart = echarts.init(dom);
        myChart.group = 'jidu';
        if (showData) {
            myChart.on('timelinechanged', showData);
        }
        var option = {
            group: 'jidu',
            baseOption: {
                timeline: {
                    axisType: 'category',
                    autoPlay: false,
                    rewind: true,
                    currentIndex: jiduTime.dateArr.length - 1,
                    playInterval: 1000,
                    data: jiduTime.dateStrArr
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
        storeB = new SyStore({
            autoLoad: true,
            datasetId: 4,
            success: function (store) {
                initTimelineArea();
                topChart(store);
                structureChart(store);
                grossChart(store);
                var _store = store;
                var sDate = new Date();
                date = jiduTime.dateArr[jiduTime.dateArr.length-1];
                var baseRes = {
                    frame: 200000011,
                    area: 1508,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()+1,
                }

                var baseSpeed = {
                    frame: 200000014,
                    area: 1508,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()+1,
                }

                var kitV = new SyValueKit(baseRes, _store);
                var kitS = new SyValueKit(baseSpeed, _store);

                initTimelineArea(function (dd) {
                    var nowDate = jiduTime.dateArr[dd.currentIndex];
                    baseRes.time_year = nowDate.getFullYear();
                    baseRes.time_month = nowDate.getMonth() + 1;
                    baseSpeed.time_year = nowDate.getFullYear();
                    baseSpeed.time_month = nowDate.getMonth() + 1;

                    kitV = new SyValueKit(baseRes, _store);
                    kitS = new SyValueKit(baseSpeed, _store);

                    var $trLists = $(".table tbody").children("tr");
                    $.each($trLists, function (i, trlist) {
                        var $trlist = $(trlist);
                        var $tdTitle = $($trlist.find("td").eq(0));
                        var $tdV = $($trlist.find("td").eq(1));
                        var $tdS = $($trlist.find("td").eq(2));
                        $tdV.text(kitV.findValueByItemName($tdTitle.text(), true));
                        $tdS.text(kitS.findValueByItemName($tdTitle.text(), true));
                    });
                });

                var $trLists = $(".table tbody").children("tr");
                $.each($trLists, function (i, trlist) {
                    var $trlist = $(trlist);
                    var $tdTitle = $($trlist.find("td").eq(0));
                    var $tdV = $($trlist.find("td").eq(1));
                    var $tdS = $($trlist.find("td").eq(2));
                    $tdV.text(kitV.findValueByItemName($tdTitle.text(), true));
                    $tdS.text(kitS.findValueByItemName($tdTitle.text(), true));
                });
            }
        });
    })
</script>