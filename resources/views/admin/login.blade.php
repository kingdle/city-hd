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
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/onepage-scroll.css') }}"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ admin_asset("/vendor/laravel-admin/font-awesome/css/font-awesome.min.css") }}">
    <!-- Script -->
    <script src="{{ asset('js/jquery-2.1.0.js') }}"></script>
    <script src="{{ asset('js/jquery.onepage-scroll.min.js') }}"></script>

    <script>
        $(function () {
            $('.main').onepage_scroll({
                sectionContainer: '.page',
                responsiveFallback: 600
            });
        });
    </script>
</head>
<body>
<div class="main">
    <div class="page page-one">
        <div class="container">
            <div class="row row-top">
                <div class="col-md-3 text-center"></div>
                <div class="col-md-2 text-center">
                    <div class="logo"><img src="{{ asset('uploads/logo.png') }}" class="logo-img"></div>
                </div>
                <div class="col-md-1 visible-lg visible-md">
                    <div class="line-stars"><img src="{{ asset('uploads/line-star.png') }}" class="line-star"></div>
                </div>
                <div class="col-md-6">
                    <div class="login-box">
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ admin_base_path('auth/login') }}">
                                {{ csrf_field() }}
                                <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input id="username" type="input" class="form-control"
                                                   placeholder="{{ trans('admin.username') }}" name="username"
                                                   value="{{ old('username') }}" required autofocus>
                                            @if ($errors->has('username'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('username') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input id="password" type="password" class="form-control"
                                                   placeholder="{{ trans('admin.password') }}" name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                     </span>
                                            @endif
                                        </div>
                                    </div>
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
                    <p>客服热线 86617555 青岛市黄岛区统计局版权所有 鲁ICP备05027830</p>
                </div>
            </div>
        </div>
    </div>
    <div class="page page-two">
        <div class="container">
            <div class="row row-index-top">
                <div class="col-md-12 text-center visible-lg visible-md">
                    <div class="logo"><img src="{{ asset('uploads/logo.png') }}" class="logo-img"></div>
                </div>
                <div class="col-md-12 text-center porctlist">
                    <div class="conlistpage">
                        <ul class="conlist1">
                            <li>
                                <p><a href=""><p><i class="fa fa-star fa-5x"></i></p>重点关注</a></p>
                            </li>
                            <li>
                                <p><a href=""><p><i class="fa fa-eye fa-5x"></i></p>专题监测</a></p>
                            </li>
                            <li>
                                <p><a href=""><p><i class="fa fa-area-chart fa-5x"></i></p>区域经济</a></p>
                            </li>
                            <li>
                                <p><a href=""><p><i class="fa fa-product-hunt fa-5x"></i></p>投资项目监测</a></p>
                            </li>
                            <li>
                                <p><a href=""><p><i class="fa fa-commenting-o fa-5x"></i></p>街道互动</a></p>
                            </li>
                            <li>
                                <p><a href=""><p><i class="fa fa-file-text-o fa-5x"></i></p>资料信息库</a></p>
                            </li>
                            <li>
                                <p><a href=""><p><i class="fa fa-user fa-5x"></i></p>我的数据</a></p>
                            </li>
                            <li>
                                <p><a href=""><p><i class="fa fa-search fa-5x"></i></p>数据查询</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row row-bottom visible-lg visible-md">
                <div class="col-md-12 text-right">
                    <p>客服热线 86617555 青岛市黄岛区统计局版权所有 鲁ICP备05027830</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
