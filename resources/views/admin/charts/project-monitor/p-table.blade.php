<style>
    .wrapper-content {
        padding: 20px 10px 40px;
    }

    .ibox-title {
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        border-color: #e7eaec;
        border-image: none;
        color: inherit;
        margin-bottom: 0;
        padding: 15px 15px 7px;
        min-height: 48px;
    }

    .ibox-title h5 {
        display: inline-block;
        margin: 0 0 7px;
        padding: 0;
        text-overflow: ellipsis;
        float: left;
    }

    .ibox-tools {
        display: block;
        float: none;
        margin-top: 0;
        position: relative;
        padding: 0;
        text-align: right;
    }

    .ibox-tools a.btn-primary {
        color: #fff;
    }

    .ibox-content {
        background-color: #ffffff;
        color: inherit;
        padding: 15px 20px 20px 20px;
        border-color: #e7eaec;
        border-image: none;
        border-style: solid solid none;
        border-width: 1px 0;
    }

    .btn-white {
        color: inherit;
        background: white;
        border: 1px solid #e7eaec;
    }

    .input-group {
        position: relative;
        display: table;
        border-collapse: separate;
    }

    .input-group-btn {
        position: relative;
        font-size: 0;
        white-space: nowrap;
    }

    .project-list .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 20px;
    }

    .project-list table tr td {
        border-top: none;
        border-bottom: 1px solid #e7eaec;
        padding: 15px 10px;
        vertical-align: middle;
    }

    .label-primary, .badge-primary {
        background-color: #1ab394;
        color: #FFFFFF;
    }

    .project-list table tr td {
        border-top: none;
        border-bottom: 1px solid #e7eaec;
        padding: 15px 10px;
        vertical-align: middle;
    }

    .project-title a {
        font-size: 14px;
        color: #676a6c;
        font-weight: 600;
    }

    .project-list table tr td {
        border-top: none;
        border-bottom: 1px solid #e7eaec;
        padding: 15px 10px;
        vertical-align: middle;
    }

    .project-people img {
        width: 32px;
        height: 32px;
    }
    .btn-white {
        color: inherit;
        background: white;
        border: 1px solid #e7eaec;
    }

    .progress-mini, .progress-mini .progress-bar {
        height: 5px;
        margin-bottom: 0;
    }
</style>
@include('admin::charts.project-monitor.P-js')
<div class="box box-primary">
    <div class="row">
        <div class="col-lg-7">
            <div class="ibox-analysis float-e-margins">
                <div class="ibox-title">
                    <h5>固定资产投资情况</h5>

                </div>
                <div class="ibox-contenter">
                    <div id="p-charts" style="height:290px"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="ibox float-e-margins">
                <div class="ibox-content townbox-content">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active left">
                                <img class="first-slide" src="{{ asset('uploads/project-monitor/project-one.jpg') }}"
                                     alt="First slide">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <p>中国金茂科技小镇</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item next left">
                                <img class="second-slide" src="{{ asset('uploads/project-monitor/project-two.jpg') }}"
                                     alt="Second slide">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <p>平安基金项目</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img class="third-slide" src="{{ asset('uploads/project-monitor/project-three.jpg') }}"
                                     alt="Third slide">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <p>中国北方（黄岛）国际农批交易中心项目</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img class="third-slide" src="{{ asset('uploads/project-monitor/project-4.jpg') }}"
                                     alt="Third slide">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <p>青岛西站</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function topChart(store) {
        // 指定图表的配置项和数据
        var axisD = [];
        for (var item in axisArr) {
            axisD.push(axisArr[item].name);
        }
        //===============普通图kit==============
        var chartKit = new SyChartSeriesKit({
            store: store,
            axis: axisArr,
        });
//                var dd = chartKit.genSeriesData();
//                console.log(dd);
        // 基于准备好的dom，初始化echarts实例
        var ImyChart = echarts.init(document.getElementById('p-charts'));

        var option = {
            title: {
                y: '5%',
                text: '',
                subtext: ''
            },
            grid: [
                {x: '10%', y: '20%', width: '83%', height: '70%'},
            ],
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['累计', '累计同比增长率'],
            },
            toolbox: {},
            calculable: true,
            xAxis: [
                {
                    type: 'category',
                    data: axisD//['2016-3', '2016-6', '2016-9', '2016-12', '2017-3', '2017-6']
                }
            ],
            yAxis: [
                {
                    type: 'value',
                    name: '',
                    splitLine: {show: false},
                    axisLabel: {
                        formatter: '{value}亿元'
                    }
                },
                {
                    type: 'value',
                    name: '增长',
                    splitLine: {show: false},
                    axisLabel: {
                        formatter: '{value}%'
                    }
                }
            ],
            series: [
                {
                    name: '累计',
                    type: 'bar',
                    splitLine: {show: false},
                    data: chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '固定资产投资总额'
                            }).extField
                        }, {
                            //        name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '累计'
                            }).extField
                        }, {
                            //        name: 2,
                            type: 'area',
                            extField: store.findMetaByItemName({
                                type: 'area',
                                name: '黄岛区'
                            }).extField
                        }]
                    }),
                    markPoint: {
                        data: [
                            {type: 'max', name: '最快'},
                            {type: 'min', name: '最慢'}
                        ]
                    },
                    markLine: {},
                    color: ['#409ea8']
                },
                {
                    name: '累计同比增长率',
                    type: 'line',
                    yAxisIndex: 1,
                    data: chartKit.genSeriesData({
                        series: [{
                            type: "item",
                            extField: store.findMetaByItemName({
                                type: 'item',
                                name: '固定资产投资总额'
                            }).extField
                        }, {
                            //        name: 2,
                            type: 'frame',
                            extField: store.findMetaByItemName({
                                type: 'frame',
                                name: '同比增长率'
                            }).extField
                        }, {
                            //        name: 2,
                            type: 'area',
                            extField: store.findMetaByItemName({
                                type: 'area',
                                name: '黄岛区'
                            }).extField
                        }]
                    }),
                    markLine: {}
                }
            ]
        };


        // 使用刚指定的配置项和数据显示图表。
        ImyChart.setOption(option);
        $(window).resize(function () {
            ImyChart.resize();
        });
    }
</script>
