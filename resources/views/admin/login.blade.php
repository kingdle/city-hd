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
    <div class="page page-one">
        <div class="container">
            <div class="row visible-lg visible-md">
                <div class="col-md-12">
                    <div class="Surface">
                        <ul class="surface-ul">
                            <li>担当海洋强国战略<span>新支点</span></li>
                            <li>担当全省对外开放<span>桥头堡</span></li>
                            <li>担当全市创新发展<span>排头兵</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row row-top">
                <div class="col-md-2 text-center visible-lg visible-md"></div>
                <div class="col-md-4 text-center">
                    <div class="logo "><img src="{{ asset('uploads/logo-600.png') }}"
                                            class="logo-img img-responsive center-block"></div>
                </div>
                <div class="col-md-1 visible-lg visible-md">
                    <div class="line-stars"><img src="{{ asset('uploads/line-star.png') }}"
                                                 class="line-star img-responsive"></div>
                </div>
                <div class="col-md-5 login-box">
                    <div class="login-form">
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST"
                                  action="{{ admin_base_path('auth/login') }}">
                                {{ csrf_field() }}
                                <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input id="username" type="input" class="form-control"
                                                   placeholder="{{ trans('admin.username') }}" name="username"
                                                   value="{{ old('username') }}" required autofocus>

                                        </div>
                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('username') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input id="password" type="password" class="form-control"
                                                   placeholder="{{ trans('admin.password') }}" name="password"
                                                   required>
                                        </div>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                     </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 text-left">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"
                                                       name="remember" {{ old('remember') ? 'checked' : '' }}> 记住我
                                            </label>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row row-button">
                <div class="form-group">
                    <div class="col-md-12 text-center">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-circle btn-info">登录</button>
                    </div>
                    <div class="col-md-12 text-center">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            忘记密码?
                        </a>
                    </div>
                </div>
                </form>
            </div>
            <div class="row row-bottom visible-lg visible-md">
                <div class="col-md-12 text-right">
                    <p>青岛西海岸新区统计局版权所有 鲁ICP备12023013号</p>
                </div>
            </div>
        </div>
    </div>
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
