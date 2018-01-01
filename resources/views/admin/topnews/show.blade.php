@extends('admin::index')
@section('content')
    <style>
        ul li {
            list-style-type: none;
        }
        .ibox-content {
            padding: 20px;
        }
        .article-title {
            text-align: center;
            margin: 30px 0;
        }
        .text-muted {
            color: #888888;
        }
        .article h1 {
            font-size: 48px;
            font-weight: 700;
            color: #2F4050;
        }
        .article p {
            font-size: 16px;
            line-height: 32px;
            text-indent: 2em;
        }
        .post-deco {
            background: #039c9e;
            position: relative;
            height: 2px;
            width: 100%;
            margin-bottom: 10px;
        }
        .a-img {
            padding-bottom: 10px;
            text-align: center;
        }
        .a-img img {
            width:80%;
        }
        p.post-abstract {
            padding: 20px 30px;
            font-size: 14px;
            font-size: 1.4rem;
            line-height: 24px;
            color: #808080;
            margin: 0 0 20px 0;
            background-color: #f6f6f6;
        }
        p.post-abstract .abstract-tit {
            font-weight: bold;
        }
    </style>
    <div class="box">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="text-center article-title">
                            <h1>
                                {{ $posts->title }}
                            </h1>
                            <span class="text-muted"><i class="fa fa-clock-o"></i> {{ $posts->updated_at }}</span>
                        </div>
                        <div class="post-deco"></div>
                        <div class="article">
                            <p class="post-abstract">
                                <span class="abstract-tit">摘要：</span>
                                {{ str_limit(strip_tags($posts->content), $limit = 100, $end = '...') }}
                            </p>
                            @if($posts->images)
                                <div class="a-img"><img src="/uploads/{{ $posts->images[0] }}" alt=""></div>
                                @endif
                            <p>{!! $posts->content !!}</p>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>标签:</h5>
                                <ul>
                                    @if($posts->tags)
                                        @foreach($posts->tags as $tag)
                                            <li><i class="fa fa-tag"></i> {{ $tag->name }}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
