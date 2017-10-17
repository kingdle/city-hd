<div class="row">
    <div class="col-md-3">
        <h3 style="line-height: 10px">
            {{ $header or trans('admin.title') }}
        </h3>
    </div>
    <div class="col-md-9">
        <div id="HeaderDateline" style="min-height: 50px"></div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/hd-data.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/echarts.js') }}"></script>
<script type="text/javascript">
    var dom = document.getElementById("HeaderDateline");
    var HeaderDateline = echarts.init(dom);
    var nowDate = new Date();
    var date = null;
    var dateStrArr = [];
    var dateArr = [];
    var axisArr =[];
    var ll = 0;
    for(var i=11;i>=ll;i--){
        if(nowDate.getDay()<=20){
            date = new Date(nowDate.getTime()-1000*60*60*24*30*(i+2));
        }else{
            date = new Date(nowDate.getTime()-1000*60*60*24*30*(i+3));
        }

        if(date.getMonth()==0){
            ll--;
            continue;
    }
        dateStrArr.push(date.getFullYear()+'/'+(date.getMonth()+1));
        dateArr.push(date);
        axisArr.push({
            name: date.getFullYear() + '/' + (date.getMonth() + 1),
            arr: [{
                name: date.getFullYear(),
                type: 'time_year',
                extField: date.getFullYear()
            }, {
                name: date.getMonth() + 1,
                type: 'time_month',
                extField: date.getMonth() + 1
            }]
        })
    }
    option = {
        baseOption: {
            timeline: {
                axisType: 'category',
                autoPlay: false,
                currentIndex: dateArr.length-1,
                playInterval: 1000,
                data: dateStrArr,
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
            },
        },

    };

    HeaderDateline.setOption(option);
    $(window).resize(function () {
        HeaderDateline.resize();
    });
</script>