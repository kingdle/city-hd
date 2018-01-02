<script src="{{ admin_asset ("/js/vue.min.js") }}"></script>
<script>
//    function initTimeline(showData) {
//        var myChart = echarts.init(document.getElementById('HeaderDatelineB'));
//        myChart.setOption(option);
//        if (showData) {
//            myChart.on('timelinechanged', showData);
//        }
//    }

    storeA = new SyStore({
        autoLoad: true,
        datasetId: 3,
        success: function (store) {
            initTimeline();
        }
    });

</script>
