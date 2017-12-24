<div class="card">
    <div class="content">
        <div class="row">
            <div class="col-xs-8">
                <div class="title-economic">
                    <p><a href="/admin/auth/articles/{{ $article->id }}"> {{ $article->title }}</a></p>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="details">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="conn">
                    {{ $article->intro }}
                </div>
            </div>
        </div>
        <div class="footer">
            <hr>
            <div class="row">
                <div class="col-xs-8">
                    <div class="numbers">
                        <div class="stats">
                            <div class="taglist">
                                @if($article->tags)
                                    标签：
                                    @foreach($article->tags as $tag)
                                        {{ $tag->name }}
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="stats">
                        <p><i class="fa fa-calendar-minus-o"></i> {{ $article->published_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
