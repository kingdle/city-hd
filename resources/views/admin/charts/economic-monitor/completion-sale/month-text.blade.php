@include('admin::charts.economic-monitor.completion-sale.SaleJs')
<div class="box box-primary">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox-analysis float-e-margins">
                <div class="ibox-title">
                    <h5><a href="/admin/auth/articles/{{ $article->id }}">{{$article->title}}</a></h5>
                </div>
                <div class="ibox-contenter">
                    {{$article->intro}}
                </div>
                <div class="col-xs-12">
                    <div class="stats">
                        <p><i class="fa fa-calendar-minus-o"></i> {{ $article->published_at }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
