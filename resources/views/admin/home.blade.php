<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'city-hd') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ admin_asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ admin_asset('css/onepage-scroll.css') }}"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/font-awesome/css/font-awesome.min.css") }}">
    <!-- Script -->
    <script src="{{ admin_asset('js/jquery-2.1.0.js') }}"></script>
    <script src="{{ admin_asset('js/jquery.onepage-scroll.min.js') }}"></script>
    <style>

    </style>
</head>
<body>
<div class="main">
    <div class="page page-two">
        <div class="container">
            <div class="row row-index-top">
                <div class="col-md-12 p-two-border text-center visible-lg visible-md">
                    <div class="col-md-4">
                        <div class="logo"><img src="{{ asset('uploads/logo-600.png') }}" class="logo-img"></div>
                    </div>
                    <div class="col-md-8">
                        <div class="col-md-12">
                            <div class="Surface-sta">
                                <ul class="surface-sta-ul">
                                    <li>激情干事，打造<span>“活力统计”</span></li>
                                    <li>服务发展，打造<span>“实力统计”</span></li>
                                    <li>提升形象，打造<span>“魅力统计”</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @include('admin.partials.menu-login')
            </div>
        </div>
    </div>
</div>
<script>
    function Surface(id, width) {
        var ul = $(id);
        var liFirst = ul.find('li:first');
        $(id).animate({left: width}).animate({"left": 0}, 0, function () {
            var clone = liFirst.clone();
            $(id).append(clone);
            liFirst.remove();
        })
    }
    function Surface_sta(id, height) {
        var ul = $(id);
        var liFirst = ul.find('li:first');
        $(id).animate({top: height}).animate({"top": 0}, 0, function () {
            var clone = liFirst.clone();
            $(id).append(clone);
            liFirst.remove();
        })
    }
    setInterval("Surface('.surface-ul','-2500px')", 3000);
    setInterval("Surface_sta('.surface-sta-ul','-200px')", 3000);
    $(function () {
        $('.main').onepage_scroll({
            sectionContainer: '.page',
            responsiveFallback: 600
        });
    });
</script>
</body>
</html>
