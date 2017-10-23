<script>
    //===============!时间轴(季度)=================
    var jiduTime = (function(){
        var result ={};
        var sDate = new Date();
        var sQuarter = parseInt((sDate.getMonth() + 1) / 3);
        sDate.setMonth(sQuarter * 3 - 1);
        var cDateYear = null;
        var cDateMonth = null;
        var date = null;
        var dateArr = []; //时间数组
        var dateStrArr = []; //时间字符数组
        var cAxisArr = []; //普通图表横轴
        for (var i = 7; i >= 0; i--) {
            date = new Date(sDate.getTime() - 1000 * 60 * 60 * 24 * 30 * i * 3);
            dateArr.push(date);
            dateStrArr.push(date.getFullYear() + '-' + (date.getMonth() + 1));
            cAxisArr.push({
                name: date.getFullYear() + '-' + (date.getMonth() + 1),
                arr: [{
                    name: date.getFullYear(),
                    type: 'time_year',
                    extField: date.getFullYear()
                }, {
                    name: date.getMonth() + 1,
                    type: 'time_month',
                    extField: date.getMonth() + 1
                }]
            })
        };
        result.dateArr = dateArr;
        result.dateStrArr = dateStrArr;
        result.cAxisArr = cAxisArr;
        return result;

    })();

    function initTimelineArea(showData) {
        var dom = document.getElementById("HeaderDatelineArea");
        var myChart = echarts.getInstanceByDom(dom);
        if (myChart) {
            myChart.dispose();
        }
        myChart = echarts.init(dom);
        myChart.group='jidu';
        if (showData) {
            myChart.on('timelinechanged', showData);
        }
        console.log(dateArr.length)
        var option = {
            group:'jidu',
            baseOption: {
                timeline: {
                    axisType: 'category',
                    autoPlay: false,
                    rewind:true,
                    currentIndex: jiduTime.dateArr.length-1,
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
    $(function() {
        storeB = new SyStore({
            autoLoad: true,
            datasetId: 4,
            success: function (store) {
                initTimelineArea();
                topChart(store);
                structureChart(store);
                grossChart(store);

                var _store = store;
                var initDate = new Date(new Date().getTime() - 1000 * 60 * 60 * 24 * 30 * 1);

                var baseRes = {
                    frame: 200000011,
                    area: 3519,
                    time_year: initDate.getFullYear(),
                    time_month: initDate.getMonth() + 1,
                    tmp_id: 1
                };
                var baseSpeed = {
                    frame: 200000014,
                    area: 3519,
                    time_year: initDate.getFullYear(),
                    time_month: initDate.getMonth() + 1,
                    tmp_id: 1
                };
                var baseSpeedLast = {
                    frame: 200000014,
                    area: 3519,
                    time_year: new Date(new Date().getTime() - 1000 * 60 * 60 * 24 * 30 * 2).getFullYear(),
                    time_month: new Date(new Date().getTime() - 1000 * 60 * 60 * 24 * 30 * 2).getMonth() + 1,
                    tmp_id: 1
                };

                var kitV = new SyValueKit(baseRes, _store);
                var kitS = new SyValueKit(baseSpeed, _store);
                var kitSL = new SyValueKit(baseSpeedLast, _store);

                initTimelineArea(function (dd) {
                    var nowDate = dateArr[dd.currentIndex];
                    baseRes.time_year = nowDate.getFullYear();
                    baseRes.time_month = nowDate.getMonth() + 1;
                    baseSpeed.time_year = nowDate.getFullYear();
                    baseSpeed.time_month = nowDate.getMonth() + 1;
                    baseSpeedLast.time_year = new Date(nowDate.getTime() - 1000 * 60 * 60 * 24 * 30 * 1).getFullYear();
                    baseSpeedLast.time_month = new Date(nowDate.getTime() - 1000 * 60 * 60 * 24 * 30 * 1).getMonth() + 1;
                    kitV = new SyValueKit(baseRes, _store);
                    kitS = new SyValueKit(baseSpeed, _store);
                    kitSL = new SyValueKit(baseSpeedLast, _store);

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