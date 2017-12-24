<div class="card">
        <div class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="title-country">
                        <p><a href="/admin/auth/articles/{{ $article_country->id }}"> {{ $article_country->title }}</a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="conn">
                        {{ $article_country->intro }}
                    </div>
                </div>
            </div>
            <div class="footer">
                <hr>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="numbers">
                            <div class="stats">
                                @if($article_country->tags)
                                    标签：
                                    @foreach($article_country->tags as $tag)
                                        {{ $tag->name }}
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="stats">
                            <p><i class="fa fa-calendar-minus-o"></i> {{ $article_country->published_at }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
