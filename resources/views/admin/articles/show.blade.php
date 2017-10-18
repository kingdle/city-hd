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
    </style>
    <div class="box">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="text-center article-title">
                            <h1>
                                {{ $article->title }}
                            </h1>
                            <span class="text-muted"><i class="fa fa-clock-o"></i> {{ $article->published_at }}</span>
                        </div>
                        <div class="post-deco"></div>
                        <div class="article">
                            <p>{!! $article->content !!}</p>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>标签:</h5>
                                <ul>
                                    @if($article->tags)
                                        @foreach($article->tags as $tag)
                                            <li><i class="fa fa-tag"></i> {{ $tag->name }}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <div class="small text-right">
                                    <a href="/admin/auth/article/edit/{{$article->id}}" class="btn btn-primary btn-sm" role="button">编辑</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection