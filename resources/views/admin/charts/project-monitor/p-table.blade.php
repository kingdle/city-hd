<div class="box box-primary">
    <div class="row">
        <div class="col-lg-7">
            <div class="ibox-analysis float-e-margins">
                <div class="ibox-title">
                    <h5>重点项目投资情况</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
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
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        var ImyChart = echarts.init(document.getElementById('p-charts'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '',
                subtext: '',
                top: 10,
                left: 10,
            },
            grid: [
                {x: '10%', y: '20%', width: '83%', height: '70%'},
            ],
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['计划总投资', '累计完成投资', '本月完成投资'],

            },
            toolbox: {},
            calculable: true,
            xAxis: [
                {
                    type: 'category',
                    data: ['2017-2', '2017-3', '2017-4', '2017-5', '2017-6']
                }
            ],
            yAxis: [
                {
                    type: 'value',
                    name: '增加值',
                    splitLine: {show: false},
                    axisLabel: {
                        formatter: '{value}亿元'
                    }
                }
            ],
            series: [
                {
                    name: '计划总投资',
                    type: 'bar',
                    splitLine: {show: false},
                    data: [200.4, 64.5, 86.6, 104.6, 134.6, '', ''],
                    markPoint: {},
                    markLine: {}
                },
                {
                    name: '累计完成投资',
                    type: 'bar',
                    data: [198.4, 62.5, 76.6, 134.6, 114.6, '', ''],
                    markPoint: {
                        data: [
                            {type: 'max', name: '最快'},
                            {type: 'min', name: '最慢'}
                        ]
                    },
                    markLine: {}
                },
                {
                    name: '本月完成投资',
                    type: 'bar',
                    data: [18.4, 22.5, 16.6, 14.6, 24.6, '', ''],
                    markPoint: {
                        data: [
                            {type: 'max', name: '最快'},
                            {type: 'min', name: '最慢'}
                        ]
                    },
                    markLine: {}
                }
            ]
        };


        // 使用刚指定的配置项和数据显示图表。
        ImyChart.setOption(option);
        $(window).resize(function () {
            ImyChart.resize();
        });
    });
</script>