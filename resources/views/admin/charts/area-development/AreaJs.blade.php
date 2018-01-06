<script src="{{ admin_asset ("/js/vue.min.js") }}"></script>
<script src="{{ admin_asset ("/js/vuetable1.js") }}"></script>
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
var a = 1;
var csData = null;
$(function() {

    storeB = new SyStore({
        autoLoad: true,
        datasetId: 9,
        success: function(store) {
            $.ajax({
                type: "get",
                url: "http://hd.maxdata.cc:8185/sy-hd/report/getAnReportByTmpId", //获取表格结构api
                async: true,
                data: {
                    tmpType: 'tmp',
                    tmpId: 26 //表格结构id
                },
                success: function(data) {
                    csData = data;
                    //输入初始日期
                    data.reportMetas = [{
                        "type": "time_year",
                        "extField": "2017"
                    }, {
                        "type": "time_month",
                        "extField": "9"
                    }];
                    //创建表格
                    var aa = new Vue({
                        el: '#app-1',
                        data: {
                            stru: data //表格结构
                        },
                        store: store,
                        mounted: function() {
                            console.log(store)
                        }

                    });
                    console.log(aa)

                    //更新日期
                    var bb = new Vue({
                        el: '#app-2',
                        data: {
                            year: '2017',
                            month: '9'
                        },
                        methods: {
                            changeDate: function() {
                                //修改日期
                                csData.reportMetas = [{
                                    "type": "time_year",
                                    "extField": this.year
                                }, {
                                    "type": "time_month",
                                    "extField": this.month
                                }];

                            }
                        }
                    });
                    console.log(data)
                }
            });

        }
    });

});

</script>
