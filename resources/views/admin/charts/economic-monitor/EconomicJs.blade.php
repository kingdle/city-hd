<script type="text/javascript" src="{{ asset('js/hd-data.js') }}"></script>
<script>
    function initTimeline(showData) {
        var myChart = echarts.init(document.getElementById('HeaderDateline'));
        myChart.setOption(option);
        if (showData) {
            myChart.on('timelinechanged', showData);
        }
    }
    initTimeline(function (dd) {
        var nowDate = dateArr[dd.currentIndex];
        var area = storeA.collection.filter({
            item: 3,
            frame: 200000011,
            area: 3519,
            time_year: nowDate.getFullYear(),
            time_month: nowDate.getMonth()+1,
            tmp_id: 1
        });
        $('#area-v').html(area._datas[0] ? area._datas[0].value : '-');
        var industry = storeA.collection.filter({
            item: 1,
            frame: 200000011,
            area: 3519,
            time_year: nowDate.getFullYear(),
            time_month: nowDate.getMonth()+1,
            tmp_id: 1
        });
        $('#industry-v').html(industry._datas[0] ? industry._datas[0].value : '-');
        var assets = storeA.collection.filter({
            item: 2,
            frame: 200000011,
            area: 3519,
            time_year: nowDate.getFullYear(),
            time_month: nowDate.getMonth()+1,
            tmp_id: 1
        });
        $('#assets-v').html(assets._datas[0] ? assets._datas[0].value : '-');
        var sale = storeA.collection.filter({
            item: 4,
            frame: 200000011,
            area: 3519,
            time_year: nowDate.getFullYear(),
            time_month: nowDate.getMonth()+1,
            tmp_id: 1
        });
        $('#sale-v').html(sale._datas[0] ? sale._datas[0].value : '-');

    });
</script>