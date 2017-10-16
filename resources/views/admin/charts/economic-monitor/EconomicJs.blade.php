<script>
    function initTimeline(showData) {
        var myChart = echarts.init(document.getElementById('HeaderDateline'));
        myChart.setOption(option);
        if (showData) {
            myChart.on('timelinechanged', showData);
        }
    }
    storeA = new SyStore({
        autoLoad: true,
        datasetId: 3,
        success: function (store) {

            var _store = store;

            var initDate = new Date(new Date().getTime()-1000*60*60*24*30*1);
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

            var kitV = new SyValueKit(baseRes, _store);
            var kitS = new SyValueKit(baseSpeed, _store);
            var $cards = $(".card");
            $.each($cards, function (i, card) {
                var $card = $(card);
                var $title = $($card.find('.title p')[0]);
                var $valV = $($card.find('.numbers>p>span')[0]);
                var $valS = $($card.find('.stats>p>span')[0]);

                $valV.html(kitV.findValueByItemName($title.html(), true));
                $valS.html(kitS.findValueByItemName($title.html(), true));

            });

            initTimeline(function (dd) {
                var nowDate = dateArr[dd.currentIndex];
                baseRes.time_year = nowDate.getFullYear();
                baseRes.time_month = nowDate.getMonth() + 1;
                baseSpeed.time_year = nowDate.getFullYear();
                baseSpeed.time_month = nowDate.getMonth() + 1;
                kitV = new SyValueKit(baseRes, _store);
                kitS = new SyValueKit(baseSpeed, _store);
                var $cards = $(".card");
                $.each($cards, function (i, card) {
                    var $card = $(card);
                    var $title = $($card.find('.title p')[0]);
                    var $valV = $($card.find('.numbers>p>span')[0]);
                    var $valS = $($card.find('.stats>p>span')[0]);
                    $valV.html(kitV.findValueByItemName($title.html(), true));
                    $valS.html(kitS.findValueByItemName($title.html(), true));
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
            initTimeline(function (dd) {
                var nowDate = dateArr[dd.currentIndex];
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

        }
    });

</script>