<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ Admin::title() }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/AdminLTE/bootstrap/css/bootstrap.min.css") }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/font-awesome/css/font-awesome.min.css") }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/AdminLTE/dist/css/skins/" . config('admin.skin') .".min.css") }}">

    {!! Admin::css() !!}
    <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/laravel-admin/laravel-admin.css") }}">
    <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/nprogress/nprogress.css") }}">
    <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/sweetalert/dist/sweetalert.css") }}">
    <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/nestable/nestable.css") }}">
    <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/toastr/build/toastr.min.css") }}">
    <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/bootstrap3-editable/css/bootstrap-editable.css") }}">
    <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/google-fonts/fonts.css") }}">
    <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/AdminLTE/dist/css/AdminLTE.min.css") }}">
    <link rel="stylesheet" href="{{ admin_asset('css/onepage-scroll.css') }}"/>
    <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>


    <!-- REQUIRED JS SCRIPTS -->
    <script src="{{ admin_asset ("/vendor/laravel-admin/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
    <script src="{{ admin_asset ("/vendor/laravel-admin/AdminLTE/bootstrap/js/bootstrap.min.js") }}"></script>
    <script src="{{ admin_asset ("/vendor/laravel-admin/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js") }}"></script>
    <script src="{{ admin_asset ("/vendor/laravel-admin/AdminLTE/dist/js/app.min.js") }}"></script>
    <script src="{{ admin_asset ("/vendor/laravel-admin/jquery-pjax/jquery.pjax.js") }}"></script>
    <script src="{{ admin_asset ("/vendor/laravel-admin/nprogress/nprogress.js") }}"></script>
    <script type="text/javascript" src="{{ admin_asset('js/hd-data.js') }}"></script>
    <script type="text/javascript" src="{{ admin_asset('js/echarts.js') }}"></script>
    <script>
        //===============!时间轴(月度)=================
        var nowDate = new Date();
        var date = null;
        var dateStrArr = [];
        var dateArr = [];
        var axisArr = [];
        var ll = 0;
        for (var i = 11; i >= ll; i--) {
            if (nowDate.getDate() <= 20) {
                date = new Date();
                date.setDate(1);
                date.setMonth(date.getMonth()-i-3);
            } else {
                date = new Date();
                date.setDate(1);
                date.setMonth(date.getMonth()-i-2);
            }

            if (date.getMonth() == 0) {
                date.setDate(1);
                ll--;
                continue;
            }
            dateStrArr.push(date.getFullYear() + '/' + (date.getMonth() + 1));
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
        //===============!时间轴(季度)=================
        var jiduTime = (function () {
            var result = {};
            var sDate = new Date();
            var sQuarter = parseInt((sDate.getMonth() + 1) / 3);
            sDate.setMonth(sQuarter * 3 - 1);

            var date = null;
            var dateArr = []; //时间数组
            var dateStrArr = []; //时间字符数组
            var cAxisArr = []; //普通图表横轴
            for (var i = 7; i >= 0; i--) {
                date = new Date(sDate.getTime());
                date.setDate(1);
                date.setMonth(sDate.getMonth() - (i+1)*3);
                dateArr.push(date);
                dateStrArr.push(date.getFullYear() + '-' + (date.getMonth() + 1));
                cAxisArr.push({
                    name: date.getFullYear() + '-' + (date.getMonth() + 1),
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
            };
            result.dateArr = dateArr;
            result.dateStrArr = dateStrArr;
            result.cAxisArr = cAxisArr;
            return result;

        })();

        function initTimeline(showData) {
            var dom = document.getElementById("HeaderDateline");
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
                        currentIndex: dateArr.length - 1,
                        playInterval: 1000,
                        data: dateStrArr,
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

    <script src="http://cache.amap.com/lbs/static/es5.min.js"></script>
    <script src="http://webapi.amap.com/maps?v=1.4.1&key=80701f48c0cc37c4d279b256aba5c407&plugin=AMap.ControlBar"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="hold-transition {{config('admin.skin')}} {{join(' ', config('admin.layout'))}}">
<div class="wrapper">

    @include('admin::partials.header')

    @include('admin::partials.sidebar')

    <div class="content-wrapper" id="pjax-container">
        @yield('content')
        {!! Admin::script() !!}
    </div>

    @include('admin::partials.footer')

</div>

<!-- ./wrapper -->

<script>
    function LA() {}
    LA.token = "{{ csrf_token() }}";
</script>

<!-- REQUIRED JS SCRIPTS -->
<script src="{{ admin_asset ("/vendor/laravel-admin/nestable/jquery.nestable.js") }}"></script>
<script src="{{ admin_asset ("/vendor/laravel-admin/toastr/build/toastr.min.js") }}"></script>
<script src="{{ admin_asset ("/vendor/laravel-admin/bootstrap3-editable/js/bootstrap-editable.min.js") }}"></script>
<script src="{{ admin_asset ("/vendor/laravel-admin/sweetalert/dist/sweetalert.min.js") }}"></script>
{!! Admin::js() !!}
<script src="{{ admin_asset ("/vendor/laravel-admin/laravel-admin/laravel-admin.js") }}"></script>
</body>
</html>
