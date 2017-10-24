<style>
    .ibox-tag {
        padding: 8px 0 8px 0;
        color: #668a99;
    }

    ul li {
        list-style-type: none;
    }

    .ibox-tag ul li a {
        padding: 8px 5px;
        display: block;
        width: 60%;
        color: #668a99;
        border-radius: 0;
        border: 0;
        background: none;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-box-shadow: none;
        box-shadow: none;
        text-align: left;
        font-size: 14px;
        font-weight: 400;
        text-decoration: none;
    }
    .ibox-tag ul li a:hover {
        color: #993b13;
        font-weight: 700;
        font-size: 16px;
    }

    .ibox-tag ul li span {
        float: left;
        margin-left: 20px;
        margin-top: 9px;
        font-size: 15px;
    }
    .ibox-tag ul li:hover {
        color: #993b13;
        font-weight: 700;
        font-size: 16px;
    }
    .format-list {
        padding: 10px 30px 0px 30px;
        position: relative;
        color: #595959;
        clear: both;
    }
    .format-list:hover {
        background-color: #f3f3f3;
        border-left: 4px solid #3c8dbc;
    }
    .title p{
        font-size: 18px;
        float: left;
        padding-right: 20px;
    }
    .title p a {
        color: #000;
    }
    .title ul li {
        color: #595959;
        line-height: 28px;
    }
    .taglist ul li{
        right: 80px;
        padding: 0 5px;
        float: left;
    }
    .custome {
        text-indent: 2em;
        padding-bottom: 30px;
        border-bottom: 1px solid #e9edf5;
    }
    .topcontrol {
        margin-left: 30px;
        line-height: 50px;
    }
    .topcontrol p {
        float: left;
        padding-right: 20px;
    }
    .topcontrol p a {
        background-color: #337ab7;
        border-color: #337ab7;
    }
    .topcontrol .pagination {
        float: right;
        margin: 10px 20px;
    }
    .post-inner {
        clear: both;
    }
</style>
<div class="">
    <div class="row">
        <div class="col-lg-2 hidden-xs">
            <div class="box box-info">
                <div class="ibox-tag">
                    <ul>
                        @foreach($tags as $tagg)
                            <li>
                                <span><i class="fa fa-tag"></i></span>
                                <a href="">{{ $tagg }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="box">
                <div class="topcontrol">
                    <p><a href="/admin/auth/article/create" class="btn btn-info" role="button">新建报告</a></p>
                    {{ $articles->links() }}
                </div>
                @foreach($articles as $article)
                    <article class="format-list group">
                        <div class="title">
                            <p><a href="/admin/auth/articles/{{ $article->id }}"> {{ $article->title }}</a></p>
                            <div class="taglist">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>{{ $article->published_at }}</li>
                                    @if($article->tags)
                                        @foreach($article->tags as $tag)
                                            <li><i class="fa fa-tag"></i> {{ $tag->name }}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="post-inner">
                            <div class="post-deco"></div>
                            <div class="post-content">
                                <div class="entry custome">
                                    {{ $article->intro }}...
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
                <div class="text-center">
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
    </div>
</div>




