<script>
    $(function () {
        storeC = new SyStore({
            autoLoad: true,
            datasetId: 5,
            success: function (store) {
                initTimelineQ();

                var _store = store;
                var sDate = new Date();
                date = new Date(sDate.getTime());
                var baseRes = {
                    frame: 200000011,
                    area: 1508,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()-1,
                };
//                console.log(baseRes)
                var baseSpeed = {
                    frame: 200000014,
                    area: 1508,
                    time_year: date.getFullYear(),
                    time_month: date.getMonth()-1,
                };
//                console.log(baseSpeed)
                var kitV = new SyValueKit(baseRes, _store);
                var kitS = new SyValueKit(baseSpeed, _store);

                initTimelineQ(function (dd) {
                    var nowDate = dateArr[dd.currentIndex];
                    baseRes.time_year = nowDate.getFullYear();
                    baseRes.time_month = nowDate.getMonth() + 1;
                    baseSpeed.time_year = nowDate.getFullYear();
                    baseSpeed.time_month = nowDate.getMonth() + 1;

                    kitV = new SyValueKit(baseRes, _store);
                    kitS = new SyValueKit(baseSpeed, _store);

                    var $tLists = $(".con");
                    $.each($tLists, function (i, tList) {
                        var $tList = $(tList);
                        var $tTitle = $($tList.find('.m-b-md'));
                        var $sixV = $($tList.find(".update-s-v span"));
                        var $sixB = $($tList.find(".update-s-v b"));
                        var $sixS = $($tList.find(".progress-bar>span"));
                        var $barS = $($tList.find(".progress-bar"));
                        var $sixH = $($tList.find(".update-s-v"));
                        var $sixHi = $($tList.find(".update-s-v i"));
                        $sixV.html(kitV.findValueByItemName($tTitle.html(), true));
                        $sixS.html(kitS.findValueByItemName($tTitle.html(), true));
                        $sixB.html(kitS.findValueByItemName($tTitle.html(), true));
                        var speedUp=kitS.findValueByItemName($tTitle.html(), true);
                        $barS.css("width",speedUp != '-' ? speedUp : '0'+ '%');
                        if(speedUp > 0){
                            $barS.addClass("progress-bar-danger");
                            $sixH.removeClass("text-navy");
                            $sixH.addClass("text-danger");
                            $sixHi.removeClass("fa-rotate-90");
                            $sixHi.addClass("fa-rotate-270")
                        }
                        else if(speedUp < 0){
                            $barS.removeClass("progress-bar-danger");
                            $sixH.removeClass("text-navy");
                            $sixH.removeClass("text-danger");
                            $sixH.addClass("text-success");
                            $sixHi.removeClass("fa-rotate-270");
                            $sixHi.addClass("fa-rotate-90")
                        }else{
                            $sixH.addClass("text-navy");
                            $sixH.removeClass("text-danger");
                            $sixH.removeClass("text-success");
                            $sixHi.removeClass("fa-rotate-90");
                            $sixHi.removeClass("fa-rotate-270");
                        }
                    });
                });
                var $tLists = $(".con");
                $.each($tLists, function (i, tList) {
                    var $tList = $(tList);
                    var $tTitle = $($tList.find('.m-b-md'));
                    var $sixV = $($tList.find(".update-s-v span"));
                    var $sixB = $($tList.find(".update-s-v b"));
                    var $sixS = $($tList.find(".progress-bar>span"));
                    var $barS = $($tList.find(".progress-bar"));
                    var $sixH = $($tList.find(".update-s-v"));
                    var $sixHi = $($tList.find(".update-s-v i"));
                    $sixV.html(kitV.findValueByItemName($tTitle.html(), true));
                    $sixS.html(kitS.findValueByItemName($tTitle.html(), true));
                    $sixB.html(kitS.findValueByItemName($tTitle.html(), true));
                    var speedUp=kitS.findValueByItemName($tTitle.html(), true);
                    $barS.css("width",speedUp != '-' ? speedUp : '0'+ '%');
                    if(speedUp > 0){
                        $barS.addClass("progress-bar-danger");
                        $sixH.removeClass("text-navy");
                        $sixH.addClass("text-danger");
                        $sixHi.removeClass("fa-rotate-90");
                        $sixHi.addClass("fa-rotate-270")
                    }
                    else if(speedUp < 0){
                        $barS.removeClass("progress-bar-danger");
                        $sixH.removeClass("text-navy");
                        $sixH.removeClass("text-danger");
                        $sixH.addClass("text-success");
                        $sixHi.removeClass("fa-rotate-270");
                        $sixHi.addClass("fa-rotate-90")
                    }else{
                        $sixH.addClass("text-navy");
                        $sixH.removeClass("text-danger");
                        $sixH.removeClass("text-success");
                        $sixHi.removeClass("fa-rotate-90");
                        $sixHi.removeClass("fa-rotate-270");
                    }
                });
            }
        });
    })
</script>