<div class="row">
    <div class="col-md-3">
        <h3 style="line-height: 10px">
            {{ $header or trans('admin.title') }}
            <small>{{ $description or trans('admin.description') }}</small>
        </h3>
    </div>
    <div class="col-md-8">
        <div id="HeaderDatelineQuarter" style="min-height: 50px"></div>
    </div>
    <div class="col-md-1 hidden-xs">
        <button class="button button-box"><i class="fa fa-reply"></i></button>
    </div>
    <script>
        $(".col-md-1 button").click(function () {
            history.go(-1)
        })
    </script>
</div>
<script>

    function initTimelineQ(showData) {
        var dom = document.getElementById("HeaderDatelineQuarter");
        var myChart = echarts.getInstanceByDom(dom);
        if (myChart) {
            myChart.dispose();
        }
        myChart = echarts.init(dom);
        if (showData) {
            myChart.on('timelinechanged', showData);
        }
        var option = {
            baseOption: {
                timeline: {
                    axisType: 'category',
                    autoPlay: false,
                    currentIndex: jiduTime.dateArr.length - 1,
                    playInterval: 1000,
                    data: jiduTime.dateStrArr,
                    rewind: true
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
