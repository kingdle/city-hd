@extends('admin::index')
@section('content')
    <style>
        .Tbox {
            padding: 25px;
            background-color: #ffffff;
        }

        .article-list {
            margin-bottom: 200px;
        }

        .article-list ul {
            list-style: none;
        }

        .article-list li {
            padding: 40px 0;
            display: list-item;
            list-style-type: none;
            text-align: -webkit-match-parent;
            border-bottom: 1px solid #F2F2F2;
        }

        .article-list .pic {
            float: left;
            margin-right: 30px;
            position: relative;
        }

        .article-list .cont {
            overflow: hidden;
        }

        .article-list .cont h3 {
            margin: 0;
            padding: 0;
            font-weight: normal;
        }

        .article-list .cont .title {
            line-height: 34px;
            font-size: 24px;
            font-size: 2.4rem;
            color: #333;
            display: block;
            margin-bottom: 12px;
        }

        .article-list .options {
            font-size: 13px;
            font-size: 1.3rem;
        }

        .article-list .fr {
            float: right;
        }

        .article-list .options .icon {
            margin-right: 6px;
        }

        .article-list .options a {
            color: #808080;
        }

        .article-list .info {
            color: #B3B3B3;
            font-size: 13px;
            font-size: 1.3rem;
            margin-bottom: 14px;
        }

        .article-list .info a {
            color: #00A4A0;
        }

        .article-list .info .gap_point {
            color: #C0C0C0;
            margin: 0 10px;
        }

        .article-list .summary {
            color: #808080;
            font-size: 16px;
            font-size: 1.6rem;
            line-height: 24px;
            margin-bottom: 11px;
            text-indent:2em;
        }

        .article-list .tag {
            font-size: 1.3rem;
            color: #00A4A0;
        }

        .article-list .tag i {
            font-size: 1.8rem;
            display: inline-block;
            vertical-align: middle;
            margin-top: -4px;
            margin-right: 10px;
        }

        .article-list .tag a {
            vertical-align: top;
            color: #00A4A0;
        }

        .BreakingNewsController {
            width: 100%;
            border: none;
            font-size: 16px;
        }

        .BreakingNewsController .bn-title {
            display: inline-block;
            float: left;
            color: #FFF;
        }

        .BreakingNewsController ul li {
            height: auto;
            overflow: hidden;
            list-style: none;
            padding: 10px 20px;
            display: none;
        }

        .BreakingNewsController ul li span {
            display: inline-block;
            float: left;
            height: auto !important;
            font-size: 13px;
            height: auto;
            line-height: 22px;
            width: 50%;
            overflow: hidden;
            text-overflow: clip;
            -o-text-overflow: clip;
            white-space: nowrap;
            padding-bottom: 5px;
        }

        .BreakingNewsController ul li h3 {
            display: inline-block;
            color: #d93641;
            font-size: 14px;
            margin-top: 0px;
        }

        .BreakingNewsController ul li h4 {
            display: inline-block;
            color: #333333;
            width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            -o-text-overflow: ellipsis;
            white-space: nowrap;
            font-size: 14px;
            padding-left: 10px;
            margin-bottom: -2px;
        }
        .BreakingNewsController .title {
            color: #333333;
        }

        .event-inform {
            height: 61px;
            overflow: hidden;
            margin: 0 auto;
            background-color: #fffdf4;
        }

        .inform-td {
            width: 44px;
            height: 44px;
            background-color: #D93641;
            line-height: 15px;
            text-align: center;
            letter-spacing: 1px;
            font-size: 14px;
            color: #fff;
            padding: 5px 0 0 2px;
            margin-left: 10px;
        }

        .bn-title {
            background: rgb(217, 54, 65);
            color: rgb(255, 255, 255);
            font-weight: normal;
        }
    </style>
    <div class="Tbox">
        <div class="row">
            <div class="col-lg-12">
                <div class="event-inform">
                    <div class="BreakingNewsController">
                        <div class="bn-title inform-td">
                            统计头条
                        </div>
                        <ul style="left: 76px;">
                            <li class="surface-top" style="display: block;">

                                @foreach($posts as $article)
                                    @if($article->released ==1)
                                <span class="surface-span">
                                  <a href="" target="_blank" style="color: rgb(51, 51, 51);">
                                      <h3>{{ $article->author_id }}</h3>
                                  </a>
                                  <a href="" class="post_a" title="{{ $article->title }}"
                                     style="color: rgb(51, 51, 51); font-weight: normal; height: 22px;">
                                      <h4><a class="title" href="/admin/posts/{{ $article->id }}"> {{ $article->title }}</a></h4>
                                  </a>
                                </span>
                                    @endif
                                @endforeach

                            </li>
                            <script>
                                function Surface(id, height) {
                                    var ul = $(id);
                                    var liFirst = ul.find('.surface-span:first');
                                    $(id).animate({top: height}).animate({"top": 0}, 0, function () {
                                        var clone = liFirst.clone();
                                        $(id).append(clone);
                                        liFirst.remove();
                                    })
                                }
                                setInterval("Surface('.surface-top','-10px')", 3000);
                            </script>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="article-list">
                    @foreach($posts as $article)
                        <li>
                            <a href="" class="pic" target="_blank">
                                <img src="" alt="" width="200" height="150">
                            </a>
                            <div class="cont">
                                <h3><a class="title" href="/admin/posts/{{ $article->id }}"> {{ $article->title }}</a>
                                </h3>
                                <div class="options fr">
                                    <a href="" data-id="" class="comment">
                                    <span class="icon">
                                            <i class="fa fa-comment-o"></i>
                                    </span>
                                        <span class="num">3</span>
                                    </a>
                                </div>
                                <div class="info">
                                <span class="author">
                                    <a href="" class="name" target="_blank">{{ $article->author_id }}</a>
                                    <span class="gap_point">•</span>
                                    <i class="fa fa-clock-o"></i>{{ $article->updated_at }}</span></div>
                                <p class="summary">{{ str_limit($article->content, $limit = 300, $end = '...') }}</p>
                                <div class="tag">
                                    @if($article->tags)
                                        <i class="fa fa-tag"></i>
                                        @foreach($article->tags as $tag)
                                            <a class="collection-tag" href="">{{ $tag->name }}</a>，
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection