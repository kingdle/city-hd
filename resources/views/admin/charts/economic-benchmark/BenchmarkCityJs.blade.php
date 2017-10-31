<script>
    storeA = new SyStore({
        autoLoad: true,
        datasetId: 7,
        success: function (store) {
            $(function () {
                initTimeline();
            });
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

            var $cards = $(".ranking");
            $.each($cards, function (i, cardh) {
                var $card = $(cardh);
                var $title = $($card.find('h5')[0]);
                var $valV = $($card.find('b')[0]);
                var $valS = $($card.find('.progress span')[0]);
                var slVal = kitSL.findValueByItemName($title.html(), true);
                var CResult = null;
                try {
                    CResult = slVal - kitS.findValueByItemName($title.html(), true);
                    if (CResult == 0) {
                        $card.find('.sta').removeClass('stats-gray stats-up stats-down');
                        $card.find('.sta i').removeClass('fa-arrow-up fa-arrow-down');
                        $card.find('.sta').addClass('sta stats-gray');
                        $card.find('.sta i').addClass('fa');
                    } else {
                        if (CResult > 0) {
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
                    if (CResult = isNaN(CResult)) {
                        $card.find('.sta').removeClass('stats-gray stats-up stats-down');
                        $card.find('.sta i').removeClass('fa-arrow-up fa-arrow-down');
                    }
                }
                catch (e) {

                }
//
//                $card.find('.stats').toggleClass(CResult);
//                $card.find('i').toggleClass(CResult=='stats-down'? 'fa-arrow-down':CResult=='stats-up'?'fa-arrow-up':'');

                $valV.html(kitV.findValueByItemName($title.html(), true));
                $valS.html(kitS.findValueByItemName($title.html(), true));
            });

            initTimeline(function (dd) {
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


                var $cards = $(".ranking");
                $.each($cards, function (i, cardh) {
                    var $card = $(cardh);
                    var $title = $($card.find('h5'));
                    var $valV = $($card.find('b'));
                    var $valS = $($card.find('.progress span'));
                    var $barS = $($card.find(".progress-bar"));
                    var $quotadate = $(".quotadate");
                    var speedUp=kitS.findValueByItemName($title.html(), true);
                    var slVal = kitSL.findValueByItemName($title.html(), true);
                    var CResult = null;
                    try {
                        CResult = slVal - kitS.findValueByItemName($title.html(), true);
                        console.log(CResult)
                        if (CResult == 0) {
                            $card.find('.sta').removeClass('stats-gray stats-up stats-down');
                            $card.find('.sta i').removeClass('fa-arrow-up fa-arrow-down');
                            $card.find('.sta').addClass('sta stats-gray');
                            $card.find('.sta i').addClass('fa');
                        } else {
                            if (CResult > 0) {
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
                        if (CResult = isNaN(CResult)) {
                            $card.find('.sta').removeClass('stats-gray stats-up stats-down');
                            $card.find('.sta i').removeClass('fa-arrow-up fa-arrow-down');
                        }
                    }
                    catch (e) {
                    }
                    $quotadate.html(baseSpeed.time_year+'-'+baseSpeed.time_month);
                    $barS.css("width",speedUp != '-' ? speedUp : '0'+ '%');
                    $valV.html(kitV.findValueByItemName($title.html(), true));
                    $valS.html(kitS.findValueByItemName($title.html(), true));
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

</script>