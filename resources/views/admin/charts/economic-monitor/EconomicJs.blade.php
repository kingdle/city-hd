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
            console.log(_store)
            var $cards = $(".card");
            $.each($cards, function (i, card) {
                var $card = $(card);
                var $title = $($card.find('.title p')[0]);
                var $val = $($card.find('.numbers>p>span')[0]);
                var $valS = $($card.find('.stats>p>span')[0]);


                console.log(kitS.findValueByItemName($title.html(), true))
                $val.html(kitV.findValueByItemName($title.html(), true));
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
                    var $val = $($card.find('.numbers>p>span')[0]);
                    var $valS = $($card.find('.stats>p>span')[0]);

                    $val.html(kitV.findValueByItemName($title.html(), true));
                    $valS.html(kitS.findValueByItemName($title.html(), true));

                });

            });
        }
    });

</script>